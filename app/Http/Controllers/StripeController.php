<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class StripeController extends Controller
{
    public function index(){

        return view('checkout');

    }
    public function stripe(Request $request)
       {

        // dd($request->all());
           $stripe = new \Stripe\StripeClient('sk_test_51MZh8UDEQSSd7MLkCKYHVsjnbbFh6W5TUJMZnGx4v57ltL3FDTQy4wOkgqtzXHLDP8q0LsBPyu1XMkYy8dKxN0Zu00JFyR2pXL');
   
           $response = $stripe->checkout->sessions->create([
               'line_items' => [
                   [
                       'price_data' => [
                           'currency' => 'usd',
                           'product_data' => [
                               'name' => $request->product_name,
                           ],
                           'unit_amount' => $request->price * 100,
                       ],
                       'quantity' => $request->quantity,
                   ],
               ],
               'mode' => 'payment',
               'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
               'cancel_url' => route('cancel'),
           ]);
   
           //dd($response);
   
           if (isset($response->id) && $response->id != '') {
               session()->put('product_name', $request->product_name);
               session()->put('quantity', $request->quantity);
               session()->put('price', $request->price);
               session()->put('course_id', $request->input('course_id')); 
               
   
               return redirect($response->url);
           } else {
               return redirect()->route('cancel');
           }
           
           
       }

       public function success(Request $request)
        {
            if (isset($request->session_id)) {

                $stripe = new \Stripe\StripeClient('sk_test_51MZh8UDEQSSd7MLkCKYHVsjnbbFh6W5TUJMZnGx4v57ltL3FDTQy4wOkgqtzXHLDP8q0LsBPyu1XMkYy8dKxN0Zu00JFyR2pXL');
                $response = $stripe->checkout->sessions->retrieve($request->session_id);
                //dd($response); 

                $payment = new Payment();
                $payment->payment_id = $response->id;

                $payment->product_name = session()->get('product_name');
                $payment->quantity = session()->get('quantity'); 

                $payment->amount = session()->get('price'); 
                $payment->currency = $response->currency;

                $payment->payer_name = $response->customer_details->name;
                $payment->payer_email = $response->customer_details->email;

                $payment->payment_status = $response->status;
                $payment->payment_method = "Stripe"; 

                

                $subscription = new Subscription();
                $subscription->course_id = $request->session()->get('course_id');
                $subscription->user_id = auth()->user()->id; 
                $subscription->save();
                    
                

                session()->forget('product_name');
                session()->forget('quantity');
                session()->forget('price');

                return "Payment is successful"; 

            } else {
                return redirect()->route('cancel'); 
            }
}

}

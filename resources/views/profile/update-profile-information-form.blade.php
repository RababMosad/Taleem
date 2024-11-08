<div class="col-span-6 sm:col-span-4">
    <x-label for="language" value="{{ __('Language') }}" />
    <select id="language" name="language" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
        <option value="ar"   
 @if(app()->getLocale() == 'ar') selected @endif>العربية</option>
        <option value="en" @if(app()->getLocale() == 'en') selected @endif>English</option>
    </select>
    <x-input-error for="language" class="mt-2" />
</div>
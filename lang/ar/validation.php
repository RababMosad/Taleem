<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'يجب قبول حقل :attribute عندما يكون :other هو :value.',
    'active_url' => 'يجب أن يكون حقل :attribute عنوان URL صالحًا.',
    'after' => 'يجب أن يكون حقل :attribute تاريخًا بعد :date.',
    'after_or_equal' => 'يجب أن يكون حقل :attribute تاريخًا بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي حقل :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام  وشرطات وسفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون حقل :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام ورموز أحادية البايت فقط.',
    'before' => 'يجب أن يكون حقل :attribute تاريخًا قبل :date.',
    'before_or_equal' => 'يجب أن يكون حقل :attribute تاريخًا قبل أو يساوي :date.',
    'between' => [
        'array' => 'يجب أن يحتوي حقل :attribute على ما بين :min و :max عنصرًا.',
        'file' => 'يجب أن يكون حجم حقل :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute بين :min و :max.',
        'string' => 'يجب أن يحتوي حقل :attribute على ما بين :min و :max حرفًا.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute صحيحًا أو خطأ.',
    'can' => 'يحتوي حقل :attribute على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد حقل :attribute غير متطابق.',
    'contains' => 'حقل :attribute مفقود قيمة مطلوبة.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون حقل :attribute تاريخًا صالحًا.',
    'date_equals' => 'يجب أن يكون حقل :attribute تاريخًا مساويًا لـ :date.',
    'date_format' => 'يجب أن يتطابق حقل :attribute مع التنسيق :format.',
    'decimal' => 'يجب أن يحتوي حقل :attribute على :decimal منازل عشرية.',
    'declined' => 'يجب رفض حقل :attribute.',
    'declined_if' => 'يجب رفض حقل :attribute عندما يكون :other هو :value.',
    'different' => 'يجب أن يكون حقلا :attribute و :other مختلفين.',
    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا.',
    'digits_between' => 'يجب أن يحتوي حقل :attribute على ما بين :min و :max رقمًا.',
    'dimensions' => 'حقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with' => 'يجب ألا ينتهي حقل :attribute بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'يجب ألا يبدأ حقل :attribute بأحد القيم التالية: :values.',
    'email' => 'يجب أن يكون حقل :attribute عنوان بريد إلكتروني صالحًا.',
    'ends_with' => 'يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values.',
    'enum' => ':attribute المحدد غير صالح.',
    'exists' => ':attribute المحدد غير صالح.',
    'extensions' => 'يجب أن يحتوي حقل :attribute على أحد الامتدادات التالية: :values.',
    'file' => 'يجب أن يكون حقل :attribute ملفًا.',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أكثر من :value عنصرًا.',
        'file' => 'يجب أن يكون حجم حقل :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :value.',
        'string' => 'يجب أن يحتوي حقل :attribute على أكثر من :value حرفًا.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي حقل :attribute على :value عنصرًا أو أكثر.',
        'file' => 'يجب أن يكون حجم حقل :attribute أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من أو تساوي :value.',
        'string' => 'يجب أن يحتوي حقل :attribute على :value حرفًا أو أكثر.',
    ],
    'hex_color' => 'يجب أن يكون حقل :attribute لونًا سداسيًا عشريًا صالحًا.',
    'image' => 'يجب أن يكون حقل :attribute صورة.',
    'in' => ':attribute المحدد غير صالح.',
    'in_array' => 'يجب أن يكون حقل :attribute موجودًا في :other.',
    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون حقل :attribute عنوان IP صالحًا.',
    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن يكون حقل :attribute عنوان IPv6 صالحًا.',
    'json' => 'يجب أن يكون حقل :attribute سلسلة JSON صالحة.',
    'list'  => 'يجب أن يكون حقل :attribute قائمة.',
    'lowercase' => 'يجب أن يكون حقل :attribute بأحرف صغيرة.',
    'lt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أقل من :value عنصرًا.',
        'file' => 'يجب أن يكون حجم حقل :attribute أقل من :value كيلوبايت.',
        'numeric' => 'يجب أن  تكون قيمة حقل :attribute أقل من :value.',
        'string' => 'يجب أن يحتوي حقل :attribute على أقل من :value حرفًا.',
    ],
    'lte' => [
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :value عنصرًا.',
        'file' => 'يجب أن يكون حجم حقل :attribute أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute أقل من أو تساوي :value.',
        'string' => 'يجب أن يحتوي حقل :attribute على :value حرفًا أو أقل.',
    ],
    'mac_address' => 'يجب أن يكون حقل :attribute عنوان MAC صالحًا.',
    'max' => [
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max عنصرًا.',
        'file' => 'يجب ألا يتجاوز حجم حقل :attribute :max كيلوبايت.',
        'numeric' => 'يجب ألا  تتجاوز قيمة حقل :attribute :max.',
        'string' => 'يجب ألا يتجاوز طول حقل :attribute :max حرفًا.',
    ],
    'max_digits' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max رقمًا.',
    'mimes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',
    'mimetypes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي حقل :attribute على الأقل :min عنصرًا.',
        'file' => 'يجب أن يكون حجم حقل :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute على الأقل :min.',
        'string' => 'يجب أن يحتوي حقل :attribute على الأقل :min حرفًا.',
    ],
    'min_digits' => 'يجب أن يحتوي',
    'missing'  => 'يجب أن يكون حقل :attribute مفقودًا.',
       'missing_if' => 'يجب أن يكون حقل :attribute مفقودًا عندما يكون :other هو :value.',
       'missing_unless' => 'يجب أن يكون حقل :attribute مفقودًا ما لم يكن :other هو :value.',
       'missing_with' => 'يجب أن يكون حقل :attribute مفقودًا عندما يكون :values موجودًا.',
       'missing_with_all' => 'يجب أن يكون حقل :attribute مفقودًا عندما تكون :values موجودة.',
       'multiple_of' => 'يجب أن يكون حقل :attribute مضاعفًا لـ :value.',
       'not_in' => ':attribute المحدد غير صالح.',
       'not_regex' => 'تنسيق حقل :attribute غير صالح.',
       'numeric' => 'يجب أن يكون حقل :attribute رقمًا.',
       'password' => [
           'letters' => 'يجب أن يحتوي حقل :attribute على حرف واحد على الأقل.',
           'mixed' => 'يجب أن يحتوي حقل :attribute على حرف كبير واحد على الأقل وحرف صغير واحد.',
           'numbers' => 'يجب أن يحتوي حقل :attribute على رقم واحد على الأقل.',
           'symbols' => 'يجب أن يحتوي حقل :attribute على رمز واحد على الأقل.',
           'uncompromised' => 'ظهر :attribute المعطى في تسريب بيانات. الرجاء اختيار :attribute مختلفًا.',
       ],
       'present' => 'يجب أن يكون حقل :attribute موجودًا.',
       'present_if' => 'يجب أن يكون حقل :attribute موجودًا عندما يكون :other هو :value.',
       'present_unless' => 'يجب أن يكون حقل :attribute موجودًا ما لم يكن :other هو :value.',
       'present_with' => 'يجب أن يكون حقل :attribute موجودًا عندما يكون :values موجودًا.',
       'present_with_all' => 'يجب أن يكون حقل :attribute موجودًا عندما تكون :values موجودة.',
       'prohibited' => 'حقل :attribute ممنوع.',
       'prohibited_if' => 'حقل :attribute ممنوع عندما يكون :other هو :value.',
       'prohibited_unless' => 'حقل :attribute ممنوع ما لم يكن :other موجودًا في :values.',
       'prohibits' => 'حقل :attribute يمنع :other من التواجد.',
       'regex' => 'تنسيق حقل :attribute غير صالح.',
       'required' => 'حقل :attribute مطلوب.',
       'required_array_keys' => 'يجب أن يحتوي حقل :attribute على إدخالات لـ: :values.',
       'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
       'required_if_accepted' => 'حقل :attribute مطلوب عندما يتم قبول :other.',
       'required_if_declined'=> 'حقل :attribute مطلوب عندما يتم رفض :other.',
       'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other موجودًا في :values.',
       'required_with' => 'حقل :attribute مطلوب عندما يكون :values موجودًا.',
       'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',  
   
       'required_without' => 'حقل :attribute مطلوب عندما لا يكون :values موجودًا.',
       'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',
       'same' => 'يجب أن يتطابق حقل :attribute مع :other.',
       'size' => [
           'array' => 'يجب أن يحتوي حقل :attribute على :size عنصرًا.',
           'file' => 'يجب أن يكون حجم حقل :attribute :size كيلوبايت.',
           'numeric' => 'يجب أن تكون قيمة حقل :attribute :size.',
           'string' => 'يجب أن يحتوي حقل :attribute على :size حرفًا.',
       ],
       'starts_with' => 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values.',
       'string' => 'يجب أن يكون حقل :attribute سلسلة نصية.',
       'timezone' => 'يجب أن يكون حقل :attribute منطقة زمنية صالحة.',
       'unique' => ':attribute محجوز بالفعل.',
       'uploaded' => 'فشل تحميل :attribute.',
       'uppercase' => 'يجب أن يكون حقل :attribute بأحرف كبيرة.',
       'url' => 'يجب أن يكون حقل :attribute عنوان URL صالحًا.',
       'ulid' => 'يجب أن يكون حقل :attribute ULID صالحًا.',
       'uuid' => 'يجب أن يكون حقل :attribute UUID صالحًا.',
   
   

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
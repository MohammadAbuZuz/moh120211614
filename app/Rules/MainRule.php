<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MainRule implements Rule
{
    public function passes($attribute, $value)
    {
        // تحقق إذا كانت القيمة تبدأ بحرف كبير (كمثال)
        return ctype_upper(substr($value, 0, 1));
    }

    public function message()
    {
        return 'The :attribute must start with an uppercase letter.';
    }
}

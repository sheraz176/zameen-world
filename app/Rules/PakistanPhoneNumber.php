<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PakistanPhoneNumber implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the phone number starts with '+92' and has 10 digits after that
        return preg_match('/^\+92[0-9]{10}$/', $value);
    }

    public function message()
    {
        return 'The :attribute must be a valid Pakistani phone number starting with +92.';
    }
}

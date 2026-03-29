<?php

namespace App\Helpers;

class Validator
{
    public static function validate($data, $rules)
    {
        $errors = [];

        foreach ($rules as $field => $rule) {
            if ($rule === 'required' && empty($data[$field])) {
                $errors[$field] = "$field wajib diisi";
            }

            if ($rule === 'email' && !filter_var($data[$field], FILTER_VALIDATE_EMAIL)) {
                $errors[$field] = "Format email tidak valid";
            }
        }

        return $errors;
    }
}
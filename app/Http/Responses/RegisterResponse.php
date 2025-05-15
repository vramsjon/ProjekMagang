<?php

namespace App\Http\Responses;

class RegisterResponse
{
    public static function success(string $message, $data=null, int $code = 200)
    {
        return response()->json([
            'success'   => true,
            'message'   => $message,
            'data'      => $data,
        ], $code);
    }

    public static function error(String $message, $errors = null, int $code = 400)
    {
        return response()->json([
            'success'   => false,
            'message'   => $message,
            'errors'    => $errors
        ], $code);
    }
}

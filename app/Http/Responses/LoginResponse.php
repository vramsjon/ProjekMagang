<?php

namespace App\Http\Responses;

class LoginResponse
{
    public static function success(string $message, $data = null, $token = null)
    {
        $response = [
            'succes'    => true,
            'message'   =>$message,
        ];

        if ($data)  {
            $response['data'] = $data;
        }

        if ($token) {
            $response['token'] = $token;
        }

        return response()->json($response);
    }

    public static function error(string $message, int $status = 400)
    {
        return response()->json([
            'success'   => false,
            'message'   => $message,
        ], $status);
    }
}
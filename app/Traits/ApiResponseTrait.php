<?php

namespace App\Traits;

trait ApiResponseTrait
{
    public static function successResponse($data = [], $message = 'Success', $status_code = 200)
    {
        $response =
        [
            'status' => true,
            'message' => $message,
            'data' => $data,

        ];

        return response()->json($response, $status_code);

    }

    public static function errorResponse($data = [], $message = 'Error', $status_code = 500)
    {
        $response =
        [
            'status' => false,
            'message' => $message,
            'data' => $data,

        ];

        return response()->json($response, $status_code);

    }
}

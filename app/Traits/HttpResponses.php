<?php

namespace App\Traits;

trait HttpResponses {
    protected function success($data = [], $message = null, $code = 200)
    {
        return response()->json(array_merge($data, [
            'status' => 'success',
            'message' => $message,
        ]), $code);
    }

    protected function error($data = [], $message = null, $code = 200)
    {
        return response()->json(array_merge($data, [
            'status' => 'failed',
            'message' => $message,
        ]), $code);
    }
}

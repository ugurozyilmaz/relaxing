<?php

function responseJson($status, $data, $message, $code = 200)
{
    return response()->json([
        'status' => $status,
        'data' => $data,
        'message' => $message,
        'code' => $code
    ]);
}
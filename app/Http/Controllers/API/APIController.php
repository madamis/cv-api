<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function sendResponse($data, $message)
    {
        $response = [
            'success'=>true,
            'data'=>$data,
            'message'=>$message
        ];
        return response()->json($response, 200);
    }

    public function sendErrorResponse($error, $code, $errorMessage = [])
    {
        $response = [
            'success'=>false,
            'message'=>$error,
        ];
        if(!empty($errorMessage))
        {
            $response['data'] = $errorMessage;
        }
        return response()->json($response, $code);
    }
}

<?php

namespace App\Http\Controllers\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller {

    //
    public int $statusCode = 200;

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($code)
    {
        $this->statusCode = $code;
    }

    public function response($status = true, $message = 'Successfully processed', $data = [], $code = null)
    {
        $code = $code ?: $this->statusCode;
        return response()
            ->json([
                'status'  => $status,
                'message' => $message,
                'data'    => $data,
            ], $code);
    }

}

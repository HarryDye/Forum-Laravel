<?php

namespace App\Http\Middleware;

use App\Http\Controller;

class MiddlewareController extends Controller
{
    public function index($request)
    {
        return $request->user();
    }
}
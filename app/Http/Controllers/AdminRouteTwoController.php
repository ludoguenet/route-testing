<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRouteTwoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return response('ok');
    }
}

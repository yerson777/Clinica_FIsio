<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\Dispatchable;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, Dispatchable;
}

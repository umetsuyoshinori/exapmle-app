<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\CreateRequest;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param CreateRequest $request
     * @return void
     */
    public function __invoke(CreateRequest $request)
    {
    }
}

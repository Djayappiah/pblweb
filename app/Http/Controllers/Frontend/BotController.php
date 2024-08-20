<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BotController extends Controller
{
    public function bot()
    {
        return view('frontend.bot.botman');
    }
}

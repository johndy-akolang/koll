<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{

    /**
     * View message inbox
     * @return \Illuminate\View\View
     */
    public function inbox()
    {
        return view('message.inbox');
    }

    /**
     * Message sent action
     * @return \Illuminate\View\View
     */
    public function sent()
    {
        return view('message.sent');
    }

    /**
     * View message action
     * @return \Illuminate\View\View
     */
    public function viewmessage()
    {
        return view('message.viewmessage');
    }
}

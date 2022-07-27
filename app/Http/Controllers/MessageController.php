<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::all();
        // return $message;
        return view ('dashboard.message', ['messages' => $message]);
    }


    public function store(Request $request)
    {
        // return $request->all();
        $input = $request->all();
        
        Message::create($input);
        return redirect('/')->with('flash_message', 'message added !');
    }


}

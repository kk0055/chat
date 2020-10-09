<?php

namespace App\Http\Controllers;

use App\User;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function chat() 
    {
        return view('chat');
    }

    public function send(request $request)
    {
        // ↓return allは不要
        //return $request->all();

        $user = User::find(Auth::id());
        $this->saveToSession($request);
        event(new ChatEvent($request->message,$user));
    }

    // public function send(request $request)
    // {
    //     return $request->all();
    //     $user = User::find(Auth::id());
    //     broadcast(new ChatEvent($request->message,$user));
    // }
    
  public function saveToSession(Request $request)
  {
      session()->put('chat',$request->chat);
  }

  public function getOldMessage()
  {
      return session('chat');
  }

  public function deleteSessioin()
  {
      session()->forget('chat');
  }
}

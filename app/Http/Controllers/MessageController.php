<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;


class MessageController extends Controller
{
    //create message
    public function create(Request $request){

        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;
        
        $message->save();

        return redirect('/');

    }

    //view
    public function view($id){

        $message = Message::findorFail($id);

        // echo $message->title;
        return view('message',[

            'message'=>$message

        ]);    

    }
}
 
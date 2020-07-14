<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function comments()
    {
        return view('users/comments');
    }

    public function addComm(Request $request)
    {
        $name = $request->input('name');
        $comment = $request->input('comment');
        $com = "User: ". $name ."\n"."Comments: ". $comment."\n";
        file_put_contents(storage_path('app/public/comments.text'), $com, FILE_APPEND);
        $message = "Dear ". $name."your comment's saved";
//        return redirect->route('users.comments', ['message' => $message]);
        return redirect()->route('users.comments');
    }

    public  function data()
    {
        return view('users.data');
    }

    public function getData(Request $request)
    {
        $uname = $request->input('uname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $order = $request->input('order');
        $text = "User: ".$uname.", phone #".$phone.", e-mail: ".$email."\n"."Order: ".$order."\n";
        file_put_contents(storage_path('app/public/data.text'), $text, FILE_APPEND);
        return redirect()->route('users.data');
    }
}

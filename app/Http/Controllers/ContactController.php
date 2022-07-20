<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contacts::create($input);

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('admin@demo.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect('https://teamup.test/#contact')->with(['success' => 'Your message has been sent. Thank you!']);
    }
}

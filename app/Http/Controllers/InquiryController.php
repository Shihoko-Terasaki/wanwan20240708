<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function index()
    {
        $inquiries = Inquiry::all();
        return view('inquiries.index', compact('inquiries'));
    }

    public function create()
    {
        return view('inquiries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $inquiry = Inquiry::create($request->all());

        // 自動返信メールの送信
        Mail::send('emails.inquiry_received', ['inquiry' => $inquiry], function ($message) use ($inquiry) {
            $message->to($inquiry->email, $inquiry->name)
                ->subject('お問い合わせありがとうございます');
        });

        return redirect()->route('inquiries.create')->with('success', 'お問い合わせ内容が送信されました。');
    }
}

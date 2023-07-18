<?php

namespace App\Http\Controllers\Frontsite;

// use libary here
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

// use model here

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contact = Auth::user()->detail_user->contact;
        return view('pages.frontsite.payment.index');
    }
}

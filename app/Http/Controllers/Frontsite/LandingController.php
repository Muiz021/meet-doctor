<?php

namespace App\Http\Controllers\Frontsite;

// use libary here
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

// use model here


class LandingController extends Controller
{
    public function index()
    {
        // $contact = Auth::user()->detail_user->contact;

        return view('pages.frontsite.landing-page.index');
    }
}

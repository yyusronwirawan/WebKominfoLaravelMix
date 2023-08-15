<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('admin.account.index', compact('user'));
    }
}

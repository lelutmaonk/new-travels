<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class UserHomeIndonesiaController extends Controller
{
    public function index()
    {
        $packages = Packages::orderBy('updated_at', 'desc')->get();

        // TRANSLATE
        $english = route('user.home');
        $indonesia = route('user.home-id');

        return view('user.home-id', [
            'title' => 'Home',
            'packages' => $packages,
            'english' => $english,
            'indonesia' => $indonesia
        ]);
    }
}

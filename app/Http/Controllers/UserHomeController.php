<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index()
    {
        $packages = Packages::orderBy('updated_at', 'desc')->get();

        return view('user.home', [
            'title' => 'Home',
            'packages' => $packages
        ]);
    }

    public function packages()
    {
        $packages = Packages::orderBy('updated_at', 'desc')->get();

        return view('user.packages', [
            'title' => 'Packages',
            'packages' => $packages
        ]);
    }

    public function packagesDetail(Packages $packages)
    {
        return view('user.packages-detail', [
            'title' => 'Packages Detail',
            'packages' => $packages
        ]);
    }

}

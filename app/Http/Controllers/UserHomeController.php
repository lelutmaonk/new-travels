<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Packages;
use App\Models\Pickup;

class UserHomeController extends Controller
{
    public function index()
    {
        $packages = Packages::orderBy('updated_at', 'desc')->get();

        // TRANSLATE
        $english = route('user.home');
        $indonesia = route('user.home-id');

        return view('user.home', [
            'title' => 'Home',
            'packages' => $packages,
            'english' => $english,
            'indonesia' => $indonesia
        ]);
    }

    public function packages()
    {
        $packages = Packages::orderBy('updated_at', 'desc')->get();

        $english = route('user.home');
        $indonesia = route('user.home-id');

        return view('user.packages', [
            'title' => 'Packages',
            'packages' => $packages,
            'english' => $english,
            'indonesia' => $indonesia
        ]);
    }

    public function packagesDetail(Packages $packages)
    {
        $english = route('user.home');
        $indonesia = route('user.home-id');

        return view('user.packages-detail', [
            'title' => 'Packages Detail',
            'packages' => $packages,
            'english' => $english,
            'indonesia' => $indonesia
        ]);
    }

    public function pickup()
    {
        $pickup = Pickup::orderBy('updated_at', 'desc')->get();

        $english = route('user.home');
        $indonesia = route('user.home-id');

        return view('user.pickup', [
            'title' => 'Packages',
            'pickup' => $pickup,
            'english' => $english,
            'indonesia' => $indonesia
        ]);
    }

    public function pickupDetail(Pickup $pickup)
    {
        $english = route('user.home');
        $indonesia = route('user.home-id');

        return view('user.pickup-detail', [
            'title' => 'Pickup Detail',
            'pickup' => $pickup,
            'english' => $english,
            'indonesia' => $indonesia
        ]);
    }

    public function activities()
    {
        $activities = Activities::orderBy('updated_at', 'desc')->get();

        $english = route('user.home');
        $indonesia = route('user.home-id');

        return view('user.activities', [
            'title' => 'Activities',
            'activities' => $activities,
            'english' => $english,
            'indonesia' => $indonesia
        ]);
    }

    public function activitiesDetail(Activities $activities)
    {
        $english = route('user.home');
        $indonesia = route('user.home-id');

        return view('user.activities-detail', [
            'title' => 'Activities Detail',
            'activities' => $activities,
            'english' => $english,
            'indonesia' => $indonesia
        ]);
    }

    public function about()
    {
        $english = route('user.home');
        $indonesia = route('user.home-id');

        return view('user.about', [
            'title' => 'About',
            'english' => $english,
            'indonesia' => $indonesia
        ]);
    }
    
    public function contact()
    {
        $english = route('user.home');
        $indonesia = route('user.home-id');

        return view('user.contact', [
            'title' => 'Contact',
            'email' => 'info.melalitobali@gmail.com',
            'phone' => '+6281558111854',
            'address' => 'Jl. Batas Kangin, No 11, Kedonganan, Kuta - Badung',
            'facebook' => 'https://www.facebook.com/melalitobali/',
            'instagram' => '',
            'twitter' => '',
            'english' => $english,
            'indonesia' => $indonesia
        ]);
    }

}

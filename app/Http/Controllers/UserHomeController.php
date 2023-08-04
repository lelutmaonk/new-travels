<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Packages;
use App\Models\Pickup;
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

    public function pickup()
    {
        $pickup = Pickup::orderBy('updated_at', 'desc')->get();

        return view('user.pickup', [
            'title' => 'Packages',
            'pickup' => $pickup
        ]);
    }

    public function pickupDetail(Pickup $pickup)
    {
        return view('user.pickup-detail', [
            'title' => 'Pickup Detail',
            'pickup' => $pickup
        ]);
    }

    public function activities()
    {
        $activities = Activities::orderBy('updated_at', 'desc')->get();

        return view('user.activities', [
            'title' => 'Activities',
            'activities' => $activities
        ]);
    }

    public function activitiesDetail(Activities $activities)
    {
        return view('user.activities-detail', [
            'title' => 'Activities Detail',
            'activities' => $activities
        ]);
    }

}

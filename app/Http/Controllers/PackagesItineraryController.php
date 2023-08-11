<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\PackagesItinerary;
use Illuminate\Http\Request;

class PackagesItineraryController extends Controller
{
    public function index()
    {
        $packages = Packages::orderBy('updated_at', 'desc')->get();

        return view('admin.packages-itinerary.index', [
            'title' => 'Itinerary Packages',
            'packages' => $packages
        ]);
    }

    public function list(Packages $packages)
    {

        $packagesItinerary = PackagesItinerary::where('packages_id', $packages->packages_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin.packages-itinerary.list', [
            'title' => 'Itinerary Packages ' . $packages->packages_name,
            'packages' => $packages,
            'packagesItinerary' => $packagesItinerary
        ]);
    }

    public function create(Packages $packages)
    {
        return view('admin.packages-itinerary.create', [
            'title' => 'Create Itinerary Packages ' . $packages->packages_name,
            'packages' => $packages
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'packages_id' => ['required', 'integer'],
            'start_time' => ['required', 'string'],
            'end_time' => ['required', 'string'],
            'itinerary_name' => ['required', 'string'],
            'itinerary_name_in' => ['required', 'string'],
        ]);

        PackagesItinerary::create($validateData);
        return redirect()->route('admin.packages-itinerary.list', ['packages' => $validateData['packages_id']])->with('success', 'Data Saved Successfully');
    }

    public function edit(PackagesItinerary $itinerary)
    {

        return view('admin.packages-itinerary.edit', [
            'title' => 'Update Itinerary Packages',
            'itinerary' => $itinerary
        ]);
    }

    public function update(Request $request, PackagesItinerary $itinerary)
    {
        // upload image masi menggunakan link
        $rules = [
            'packages_id' => ['required', 'integer'],
            'start_time' => ['required', 'string'],
            'end_time' => ['required', 'string'],
            'itinerary_name' => ['required', 'string'],
            'itinerary_name_in' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);

        PackagesItinerary::where('itinerary_id', $itinerary->itinerary_id)->update($validateData);
        return redirect()->route('admin.packages-itinerary.list', ['packages' => $validateData['packages_id']])->with('success', 'Data Saved Successfully');

    }

    public function destroy(PackagesItinerary $itinerary)
    {
        PackagesItinerary::destroy($itinerary->itinerary_id);
        return redirect()->route('admin.packages-itinerary.list', ['packages' => $itinerary->packages?->packages_id])->with('success', 'Data Deleted Successfully');
    }

}

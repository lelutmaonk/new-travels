<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\PackagesIncluded;
use Illuminate\Http\Request;

class PackagesIncludedController extends Controller
{
    public function index()
    {
        $packages = Packages::orderBy('updated_at', 'desc')->get();

        return view('admin.packages-included.index', [
            'title' => 'Included Packages',
            'packages' => $packages
        ]);
    }

    public function list(Packages $packages)
    {

        $packagesIncluded = PackagesIncluded::where('packages_id', $packages->packages_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin.packages-included.list', [
            'title' => 'Included Packages ' . $packages->packages_name,
            'packages' => $packages,
            'packagesIncluded' => $packagesIncluded
        ]);
    }

    public function create(Packages $packages)
    {
        return view('admin.packages-included.create', [
            'title' => 'Create Included Packages ' . $packages->packages_name,
            'packages' => $packages
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'packages_id' => ['required', 'integer'],
            'included_name' => ['required', 'string'],
            'included_name_in' => ['required', 'string'],
        ]);

        PackagesIncluded::create($validateData);
        return redirect()->route('admin.packages-included.list', ['packages' => $validateData['packages_id']])->with('success', 'Data Saved Successfully');
    }

    public function edit(PackagesIncluded $included)
    {

        return view('admin.packages-included.edit', [
            'title' => 'Update Included Packages',
            'included' => $included
        ]);
    }

    public function update(Request $request, PackagesIncluded $included)
    {
        // upload image masi menggunakan link
        $rules = [
            'packages_id' => ['required', 'integer'],
            'included_name' => ['required', 'string'],
            'included_name_in' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);

        PackagesIncluded::where('included_id', $included->included_id)->update($validateData);
        return redirect()->route('admin.packages-included.list', ['packages' => $validateData['packages_id']])->with('success', 'Data Saved Successfully');

    }

    public function destroy(PackagesIncluded $included)
    {
        PackagesIncluded::destroy($included->included_id);
        return redirect()->route('admin.packages-included.list', ['packages' => $included->packages?->packages_id])->with('success', 'Data Deleted Successfully');
    }

}

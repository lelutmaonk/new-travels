<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Packages::orderBy('updated_at', 'desc')->get();

        return view('admin.packages.index', [
            'title' => 'Packages',
            'packages' => $packages
        ]);
    }

    public function create()
    {
        return view('admin.packages.create', [
            'title' => 'Create Packages'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'slug' => ['required', 'string', 'unique:packages'],
            'packages_name' => ['required', 'string','unique:packages'],
            'packages_name_in' => ['required', 'string','unique:packages'],
            'packages_duration' => ['required', 'string'],
            'packages_duration_in' => ['required', 'string'],
            'minimun_order' => ['required', 'string'],
            'minimun_order_in' => ['required', 'string'],
            'price' => ['required', 'string'],
            'price_in' => ['required', 'string'],
            'description' => ['required', 'string'],
            'description_in' => ['required', 'string'],
            'image' => ['required', 'string'],
        ]);

        Packages::create($validateData);
        return redirect()->route('admin.packages.index')->with('success', 'Data Saved Successfully');

    }

    public function edit(Packages $packages)
    {
        return view('admin.packages.edit', [
            'title' => 'Update Packages',
            'packages' => $packages
        ]);
    }

    public function update(Request $request, Packages $packages)
    {
        // upload image masi menggunakan link
        $rules = [
            'slug' => ['required', 'string', Rule::unique('packages')->ignore($packages->packages_id, 'packages_id')],
            'packages_name' => ['required', 'string', Rule::unique('packages')->ignore($packages->packages_id, 'packages_id')],
            'packages_name_in' => ['required', 'string', Rule::unique('packages')->ignore($packages->packages_id, 'packages_id')],
            'packages_duration' => ['required', 'string'],
            'packages_duration_in' => ['required', 'string'],
            'minimun_order' => ['required', 'string'],
            'minimun_order_in' => ['required', 'string'],
            'price' => ['required', 'string'],
            'price_in' => ['required', 'string'],
            'description' => ['required', 'string'],
            'description_in' => ['required', 'string'],
            'image' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);

        Packages::where('packages_id', $packages->packages_id)->update($validateData);
        return redirect()->route('admin.packages.index')->with('success', 'Data Saved Successfully');

    }

    public function destroy(Request $request, Packages $packages)
    {
        Packages::destroy($packages->packages_id);
        return redirect()->route('admin.packages.index')->with('success', 'Data Deleted Successfully');
    }


}

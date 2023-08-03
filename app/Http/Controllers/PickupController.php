<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PickupController extends Controller
{
    public function index()
    {
        $pickup = Pickup::orderBy('updated_at', 'desc')->get();

        return view('admin.pickup.index', [
            'title' => 'Pickup',
            'pickup' => $pickup
        ]);
    }

    public function create()
    {
        return view('admin.pickup.create', [
            'title' => 'Create Pickup'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'slug' => ['required', 'string', 'unique:pickup'],
            'pickup_name' => ['required', 'string','unique:pickup'],
            'pickup_name_in' => ['required', 'string','unique:pickup'],
            'price' => ['required', 'string'],
            'price_in' => ['required', 'string'],
            'description' => ['required', 'string'],
            'description_in' => ['required', 'string'],
            'image' => ['required', 'string'],
        ]);

        Pickup::create($validateData);
        return redirect()->route('admin.pickup.index')->with('success', 'Data Saved Successfully');

    }

    public function edit(Pickup $pickup)
    {
        return view('admin.pickup.edit', [
            'title' => 'Update Pickup',
            'pickup' => $pickup
        ]);
    }

    public function update(Request $request, Pickup $pickup)
    {
        // upload image masi menggunakan link
        $rules = [
            'slug' => ['required', 'string', Rule::unique('pickup')->ignore($pickup->pickup_id, 'pickup_id')],
            'pickup_name' => ['required', 'string', Rule::unique('pickup')->ignore($pickup->pickup_id, 'pickup_id')],
            'pickup_name_in' => ['required', 'string', Rule::unique('pickup')->ignore($pickup->pickup_id, 'pickup_id')],
            'price' => ['required', 'string'],
            'price_in' => ['required', 'string'],
            'description' => ['required', 'string'],
            'description_in' => ['required', 'string'],
            'image' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);

        Pickup::where('pickup_id', $pickup->pickup_id)->update($validateData);
        return redirect()->route('admin.pickup.index')->with('success', 'Data Saved Successfully');

    }

    public function destroy(Request $request, Pickup $pickup)
    {
        Pickup::destroy($pickup->pickup_id);
        return redirect()->route('admin.pickup.index')->with('success', 'Data Deleted Successfully');
    }


}

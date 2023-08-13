<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use App\Models\PickupTermsConditions;
use Illuminate\Http\Request;

class PickupTermsConditionsController extends Controller
{
    public function index()
    {
        $pickup = Pickup::orderBy('updated_at', 'desc')->get();

        return view('admin.pickup-terms-conditions.index', [
            'title' => 'Terms Conditions Pickup',
            'pickup' => $pickup
        ]);
    }

    public function list(Pickup $pickup)
    {
        $pickupTermsConditions = PickupTermsConditions::where('pickup_id', $pickup->pickup_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin.pickup-terms-conditions.list', [
            'title' => 'Terms Conditions ' . $pickup->pickup_name,
            'pickup' => $pickup,
            'pickupTermsConditions' => $pickupTermsConditions
        ]);
    }

    public function create(Pickup $pickup)
    {
        return view('admin.pickup-terms-conditions.create', [
            'title' => 'Create Terms Conditions ' . $pickup->pickup_name,
            'pickup' => $pickup
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pickup_id' => ['required', 'integer'],
            'terms_conditions_name' => ['required', 'string'],
            'terms_conditions_name_in' => ['required', 'string'],
        ]);

        PickupTermsConditions::create($validateData);
        return redirect()->route('admin.pickup-terms-conditions.list', ['pickup' => $validateData['pickup_id']])->with('success', 'Data Saved Successfully');
    }

    public function edit(PickupTermsConditions $terms_conditions)
    {

        return view('admin.pickup-terms-conditions.edit', [
            'title' => 'Update Terms Conditions',
            'terms_conditions' => $terms_conditions
        ]);
    }

    public function update(Request $request, PickupTermsConditions $terms_conditions)
    {
        // upload image masi menggunakan link
        $rules = [
            'pickup_id' => ['required', 'integer'],
            'terms_conditions_name' => ['required', 'string'],
            'terms_conditions_name_in' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);

        PickupTermsConditions::where('terms_conditions_id', $terms_conditions->terms_conditions_id)->update($validateData);
        return redirect()->route('admin.pickup-terms-conditions.list', ['pickup' => $validateData['pickup_id']])->with('success', 'Data Saved Successfully');

    }

    public function destroy(PickupTermsConditions $terms_conditions)
    {
        PickupTermsConditions::destroy($terms_conditions->terms_conditions_id);
        return redirect()->route('admin.pickup-terms-conditions.list', ['pickup' => $terms_conditions->pickup?->pickup_id])->with('success', 'Data Deleted Successfully');
    }

}

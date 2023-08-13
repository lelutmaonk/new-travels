<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use App\Models\PickupPrice;
use Illuminate\Http\Request;

class PickupPriceController extends Controller
{
    public function index()
    {
        $pickup = Pickup::orderBy('updated_at', 'desc')->get();

        return view('admin.pickup-price.index', [
            'title' => 'Pickup Price',
            'pickup' => $pickup
        ]);
    }

    public function list(Pickup $pickup)
    {
        $pickupPrice = PickupPrice::where('pickup_id', $pickup->pickup_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin.pickup-price.list', [
            'title' => 'Pickup Price ' . $pickup->pickup_name,
            'pickup' => $pickup,
            'pickupPrice' => $pickupPrice
        ]);
    }

    public function create(Pickup $pickup)
    {
        return view('admin.pickup-price.create', [
            'title' => 'Create Pickup Price ' . $pickup->pickup_name,
            'pickup' => $pickup
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pickup_id' => ['required', 'integer'],
            'pickup_price_name' => ['required', 'string'],
            'pickup_price_name_in' => ['required', 'string'],
        ]);

        PickupPrice::create($validateData);
        return redirect()->route('admin.pickup-price.list', ['pickup' => $validateData['pickup_id']])->with('success', 'Data Saved Successfully');
    }

    public function edit(PickupPrice $pickup_price)
    {

        return view('admin.pickup-price.edit', [
            'title' => 'Update Pickup Price',
            'pickup_price' => $pickup_price
        ]);
    }

    public function update(Request $request, PickupPrice $pickup_price)
    {
        // upload image masi menggunakan link
        $rules = [
            'pickup_id' => ['required', 'integer'],
            'pickup_price_name' => ['required', 'string'],
            'pickup_price_name_in' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);

        PickupPrice::where('pickup_price_id', $pickup_price->pickup_price_id)->update($validateData);
        return redirect()->route('admin.pickup-price.list', ['pickup' => $validateData['pickup_id']])->with('success', 'Data Saved Successfully');

    }

    public function destroy(PickupPrice $pickup_price)
    {
        PickupPrice::destroy($pickup_price->pickup_price_id);
        return redirect()->route('admin.pickup-price.list', ['pickup' => $pickup_price->pickup?->pickup_id])->with('success', 'Data Deleted Successfully');
    }


}

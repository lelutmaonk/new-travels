<?php

namespace App\Http\Controllers;

use App\Models\PickupPrice;
use App\Models\PickupPriceDetail;
use Illuminate\Http\Request;

class PickupPriceDetailController extends Controller
{
    public function list(PickupPrice $pickup_price)
    {
        $PickupPriceDetail = PickupPriceDetail::where('pickup_price_id', $pickup_price->pickup_price_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin.pickup-price-detail.list', [
            'title' => 'Pickup Price Detail',
            'pickup_price' => $pickup_price,
            'PickupPriceDetail' => $PickupPriceDetail
        ]);
    }

    public function create(PickupPrice $pickup_price)
    {
        return view('admin.pickup-price-detail.create', [
            'title' => 'Create Pickup Price Detail',
            'pickup_price' => $pickup_price
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pickup_price_id' => ['required', 'integer'],
            'from' => ['required', 'string'],
            'destination' => ['required', 'string'],
            'price' => ['required', 'string'],
            'notes' => ['required', 'string'],
            'from_in' => ['required', 'string'],
            'destination_in' => ['required', 'string'],
            'price_in' => ['required', 'string'],
            'notes_in' => ['required', 'string'],
        ]);

        PickupPriceDetail::create($validateData);
        return redirect()->route('admin.pickup-price-detail.list', ['pickup_price' => $validateData['pickup_price_id']])->with('success', 'Data Saved Successfully');
    }

    public function edit(PickupPriceDetail $pickup_price_detail)
    {

        return view('admin.pickup-price-detail.edit', [
            'title' => 'Update Pickup Price Detail',
            'pickup_price_detail' => $pickup_price_detail
        ]);
    }

    public function update(Request $request, PickupPriceDetail $pickup_price_detail)
    {
        // upload image masi menggunakan link
        $rules = [
            'pickup_price_id' => ['required', 'integer'],
            'from' => ['required', 'string'],
            'destination' => ['required', 'string'],
            'price' => ['required', 'string'],
            'notes' => ['required', 'string'],
            'from_in' => ['required', 'string'],
            'destination_in' => ['required', 'string'],
            'price_in' => ['required', 'string'],
            'notes_in' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);

        PickupPriceDetail::where('pickup_price_detail_id', $pickup_price_detail->pickup_price_detail_id)->update($validateData);
        return redirect()->route('admin.pickup-price-detail.list', ['pickup_price' => $validateData['pickup_price_id']])->with('success', 'Data Saved Successfully');

    }

    public function destroy(PickupPriceDetail $pickup_price_detail)
    {
        PickupPriceDetail::destroy($pickup_price_detail->pickup_price_detail_id);
        return redirect()->route('admin.pickup-price-detail.list', ['pickup_price' => $pickup_price_detail->pickup_price?->pickup_price_id])->with('success', 'Data Deleted Successfully');
    }

}

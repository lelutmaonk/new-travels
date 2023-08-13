<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use App\Models\PickupOrderProcess;
use Illuminate\Http\Request;

class PickupOrderProcessController extends Controller
{
    public function index()
    {
        $pickup = Pickup::orderBy('updated_at', 'desc')->get();

        return view('admin.pickup-process-order.index', [
            'title' => 'Process Order Pickup',
            'pickup' => $pickup
        ]);
    }

    public function list(Pickup $pickup)
    {
        $pickupOrderProcess = PickupOrderProcess::where('pickup_id', $pickup->pickup_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin.pickup-process-order.list', [
            'title' => 'Process Order ' . $pickup->pickup_name,
            'pickup' => $pickup,
            'pickupOrderProcess' => $pickupOrderProcess
        ]);
    }

    public function create(Pickup $pickup)
    {
        return view('admin.pickup-process-order.create', [
            'title' => 'Create Process Order ' . $pickup->pickup_name,
            'pickup' => $pickup
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pickup_id' => ['required', 'integer'],
            'order_process_name' => ['required', 'string'],
            'order_process_name_in' => ['required', 'string'],
        ]);

        PickupOrderProcess::create($validateData);
        return redirect()->route('admin.pickup-process-order.list', ['pickup' => $validateData['pickup_id']])->with('success', 'Data Saved Successfully');
    }

    public function edit(PickupOrderProcess $order_process)
    {

        return view('admin.pickup-process-order.edit', [
            'title' => 'Update Process Order',
            'order_process' => $order_process
        ]);
    }

    public function update(Request $request, PickupOrderProcess $order_process)
    {
        // upload image masi menggunakan link
        $rules = [
            'pickup_id' => ['required', 'integer'],
            'order_process_name' => ['required', 'string'],
            'order_process_name_in' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);

        PickupOrderProcess::where('order_process_id', $order_process->order_process_id)->update($validateData);
        return redirect()->route('admin.pickup-process-order.list', ['pickup' => $validateData['pickup_id']])->with('success', 'Data Saved Successfully');

    }

    public function destroy(PickupOrderProcess $order_process)
    {
        PickupOrderProcess::destroy($order_process->order_process_id);
        return redirect()->route('admin.pickup-process-order.list', ['pickup' => $order_process->pickup?->pickup_id])->with('success', 'Data Deleted Successfully');
    }



}

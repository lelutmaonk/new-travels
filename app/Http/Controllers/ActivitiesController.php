<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activities::orderBy('updated_at', 'desc')->get();

        return view('admin.activities.index', [
            'title' => 'Activities',
            'activities' => $activities
        ]);
    }

    public function create()
    {
        return view('admin.activities.create', [
            'title' => 'Create Activities'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'slug' => ['required', 'string', 'unique:activities'],
            'activities_name' => ['required', 'string','unique:activities'],
            'activities_name_in' => ['required', 'string','unique:activities'],
            'description' => ['required', 'string'],
            'description_in' => ['required', 'string'],
            'image' => ['required', 'string'],
        ]);

        Activities::create($validateData);
        return redirect()->route('admin.activities.index')->with('success', 'Data Saved Successfully');

    }

    public function edit(Activities $activities)
    {
        return view('admin.activities.edit', [
            'title' => 'Update Activities',
            'activities' => $activities
        ]);
    }

    public function update(Request $request, Activities $activities)
    {
        // upload image masi menggunakan link
        $rules = [
            'slug' => ['required', 'string', Rule::unique('activities')->ignore($activities->activities_id, 'activities_id')],
            'activities_name' => ['required', 'string', Rule::unique('activities')->ignore($activities->activities_id, 'activities_id')],
            'activities_name_in' => ['required', 'string', Rule::unique('activities')->ignore($activities->activities_id, 'activities_id')],
            'description' => ['required', 'string'],
            'description_in' => ['required', 'string'],
            'image' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);

        Activities::where('activities_id', $activities->activities_id)->update($validateData);
        return redirect()->route('admin.activities.index')->with('success', 'Data Saved Successfully');

    }

    public function destroy(Request $request, Activities $activities)
    {
        Activities::destroy($activities->activities_id);
        return redirect()->route('admin.activities.index')->with('success', 'Data Deleted Successfully');
    }


}

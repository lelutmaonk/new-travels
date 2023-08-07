<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\PackagesAdditionalNote;
use Illuminate\Http\Request;

class PackagesAdditionalNoteController extends Controller
{
    public function index()
    {
        $packages = Packages::orderBy('updated_at', 'desc')->get();

        return view('admin.packages-additional-note.index', [
            'title' => 'Additional Note Packages',
            'packages' => $packages
        ]);
    }

    public function list(Packages $packages)
    {

        $additionalNote = PackagesAdditionalNote::where('packages_id', $packages->packages_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin.packages-additional-note.list', [
            'title' => 'Additional Note ' . $packages->packages_name,
            'packages' => $packages,
            'additionalNote' => $additionalNote
        ]);
    }

    public function create(Packages $packages)
    {
        return view('admin.packages-additional-note.create', [
            'title' => 'Create Additional Note ' . $packages->packages_name,
            'packages' => $packages
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'packages_id' => ['required', 'integer'],
            'additional_note_name' => ['required', 'string'],
            'additional_note_name_in' => ['required', 'string'],
        ]);

        PackagesAdditionalNote::create($validateData);
        return redirect()->route('admin.packages-additional-note.list', ['packages' => $validateData['packages_id']])->with('success', 'Data Saved Successfully');
    }

    public function edit(PackagesAdditionalNote $additionalNote)
    {
        return view('admin.packages-additional-note.edit', [
            'title' => 'Update Additional Note',
            'additionalNote' => $additionalNote
        ]);
    }

    public function update(Request $request, PackagesAdditionalNote $additionalNote)
    {
        // upload image masi menggunakan link
        $rules = [
            'packages_id' => ['required', 'integer'],
            'additional_note_name' => ['required', 'string'],
            'additional_note_name_in' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);

        PackagesAdditionalNote::where('additional_note_id', $additionalNote->additional_note_id)->update($validateData);
        return redirect()->route('admin.packages-additional-note.list', ['packages' => $validateData['packages_id']])->with('success', 'Data Saved Successfully');

    }

    public function destroy(Request $request, PackagesAdditionalNote $additionalNote)
    {
        PackagesAdditionalNote::destroy($additionalNote->additional_note_id);
        return redirect()->route('admin.packages-additional-note.list', ['packages' => $additionalNote->packages?->packages_id])->with('success', 'Data Deleted Successfully');
    }

}

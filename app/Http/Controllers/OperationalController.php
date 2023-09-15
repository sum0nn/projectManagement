<?php

namespace App\Http\Controllers;

use App\Models\Operational;
use Illuminate\Http\Request;

class OperationalController extends Controller
{
    public function index()
    {
        return view('operational.index');
    }

    public function createForm()
    {
        return view('operational.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'spk_code' => 'required|string|max:10',
            'spk_number' => 'max:10',
            'type' => 'required',
            'description' => 'string|max:255',
            'transportation_mode' => 'required|string',
            'vehicle_number' => 'required|max:12|string',
            'created_by' => 'required|string',
        ]);


        $operational = Operational::create([
            'project_id' => $request->project_id,
            'date' => $request->date,
            'spk_code' => $request->spk_code,
            'spk_number' => $request->spk_number,
            'type' => $request->type,
            'description' => $request->description,
            'transportation_mode' => $request->transportation_mode,
            'vehicle_number' => $request->vehicle_number,
            'created_by' => $request->created_by,
        ]);
        return redirect()->route('operational.index')->with('success', 'Operational created successfully.');
    }

    public function updateForm(Operational $operational)
    {
        return view('operational.update', compact('operational'));
    }

    public function update(Request $request, Operational $operational)
    {
        $request->validate([
            'date' => 'date',
            'spk_code' => 'string|max:10',
            'spk_number' => 'string|max:10',
            'type' => 'string',
            'description' => 'max:255',
            'transportation_mode' => 'string',
            'vehicle_number' => 'string|max:12',
        ]);

        $operational->update([
            'date' => $request->date ?? $operational->date,
            'spk_code' => $request->spk_code ?? $operational->spk_code,
            'spk_number' => $request->spk_number ?? $operational->spk_number,
            'type' => $request->type ?? $operational->type,
            'description' => $request->description ?? $operational->description,
            'transportation' => $request->transportation ?? $operational->transportation,
            'vehicle_number' => $request->vehicle_number ?? $operational->vehicle_number,
        ]);
        return redirect()->route('operational.index')->with('success', 'Operational updated successfully.');
    }

    public function delete(Operational $operational)
    {
        $operational->delete();
        return redirect()->route('operational.index')->with('success', 'Operational deleted successfully.');
    }

    public function approve(Request $request, Operational $operational)
    {
        $request->validate([
            'approved_by' => 'required|string',
        ]);
        $operational->approved_by = $request->approved_by;
        $operational->save();
        return redirect()->route('operational.index')->with('success', 'Operational approved successfully.');
    }
}
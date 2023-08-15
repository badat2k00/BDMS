<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donor = Donor::orderBy('Donor_ID', 'desc')->get();
        return view('index', compact('donor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $donor = new Donor;
        $donor->Donor_ID = $request->Donor_ID;
        $donor->First_Name = $request->First_Name;
        $donor->Last_Name = $request->Last_Name;
        $donor->Blood_Type = $request->Blood_Type;
        $donor->DOB = $request->DOB;
        $donor->Gender = $request->Gender;
        $donor->Address = $request->Address;
        $donor->Contact_Number = $request->Contact_Number;
        $donor->save();

        return redirect()->route('donors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donor $donor)
    {
        return view('show', compact('donor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donor $donor)
    {
        return view('edit', compact('donor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$donor)
    {
        $donor = Donor::find($donor); 
        if ($donor) {
     
        $donor->First_Name = $request->First_Name;
        $donor->Last_Name = $request->Last_Name;
        $donor->Blood_Type = $request->Blood_Type;
        $donor->DOB = $request->DOB;
        $donor->Gender = $request->Gender;
        $donor->Address = $request->Address;
        $donor->Contact_Number = $request->Contact_Number;
        $donor->save();

        return redirect()->route('donors.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donor $donor)
    {
        $donor->delete();
        return redirect()->route('donors.index');
    }
}

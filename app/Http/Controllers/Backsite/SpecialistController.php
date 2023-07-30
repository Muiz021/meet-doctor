<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;

// libary
use RealRashid\SweetAlert\Facades\Alert;

// model
use App\Models\MasterData\Specialist;

// request
use App\Http\Requests\Specialist\StoreSpecialistRequest;
use App\Http\Requests\Specialist\UpdateSpecialistRequest;

class SpecialistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialist = Specialist::orderBy('created_at','desc')->get();
        return view('pages.backsite.master-data.specialist.index',compact('specialist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpecialistRequest $request)
    {
        // get all request from frontend
        $data = $request->all();

        // store to database
        $specialist = Specialist::create($data);
        Alert::success('Success Message','Successfully added new specialist');
        return redirect()->route('backsite.specialist.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Specialist $specialist)
    {
        return view('pages.backsite.master-data.specialist.show',compact('specialist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specialist $specialist)
    {
        return view('pages.backsite.master-data.specialist.show',compact('specialist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpecialistRequest $request, Specialist $specialist)
    {
        // get all request from frontend
        $data = $request->all();

        // update to database
        $specialist->update($data);

        Alert::success('Success Message','Successfully updated specialist');
        return redirect()->route('backsite.specialist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialist $specialist)
    {
        $specialist->delete();
        Alert::success('Success Message','Successfully deleted specialist');

        return back();
    }
}

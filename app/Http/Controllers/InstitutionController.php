<?php

namespace App\Http\Controllers;

use App\Http\Resources\Institution\InstitutionCollection;
use App\Http\Resources\Institution\InstitutionResource;
use App\Model\Institution\Institution;
use App\Model\Level\Level;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($region_id, $country_id, Level $level)
    {

        return InstitutionCollection::collection($level->Institutions);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Institution\Institution $institution
     * @return \Illuminate\Http\Response
     */
    public function show($region_id, $country_id, $level_id,$id)
    {
        $institution = Institution::find($id);

        return new InstitutionResource($institution);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Institution\Institution $institution
     * @return \Illuminate\Http\Response
     */
    public function edit(Institution $institution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Institution\Institution $institution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institution $institution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Institution\Institution $institution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        //
    }
}

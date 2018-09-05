<?php

namespace App\Http\Controllers;

use App\Http\Resources\Level\LegalFrameworkCollection;
use App\Model\Level\LegalFramework;
use App\Model\Level\Level;
use Illuminate\Http\Request;

class LegalFrameworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($region_id,$country_id,Level $level)
    {
        return LegalFrameworkCollection::collection($level->LegalFramework);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Level\LegalFramework  $legalFramework
     * @return \Illuminate\Http\Response
     */
    public function show(LegalFramework $legalFramework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Level\LegalFramework  $legalFramework
     * @return \Illuminate\Http\Response
     */
    public function edit(LegalFramework $legalFramework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Level\LegalFramework  $legalFramework
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LegalFramework $legalFramework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Level\LegalFramework  $legalFramework
     * @return \Illuminate\Http\Response
     */
    public function destroy(LegalFramework $legalFramework)
    {
        //
    }
}

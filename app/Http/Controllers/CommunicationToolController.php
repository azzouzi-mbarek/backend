<?php

namespace App\Http\Controllers;

use App\Http\Resources\Level\CommunicationToolCollection;
use App\Model\Level\CommunicationTool;
use App\Model\Level\Level;
use Illuminate\Http\Request;

class CommunicationToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($region_id,$country_id,Level $level)
    {
        return CommunicationToolCollection::collection($level->CommunicationTool);

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
     * @param  \App\Model\Level\CommunicationTool  $communicationTool
     * @return \Illuminate\Http\Response
     */
    public function show(CommunicationTool $communicationTool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Level\CommunicationTool  $communicationTool
     * @return \Illuminate\Http\Response
     */
    public function edit(CommunicationTool $communicationTool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Level\CommunicationTool  $communicationTool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommunicationTool $communicationTool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Level\CommunicationTool  $communicationTool
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommunicationTool $communicationTool)
    {
        //
    }
}

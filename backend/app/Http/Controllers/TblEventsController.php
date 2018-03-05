<?php

namespace App\Http\Controllers;

use App\TblEvents;
use Illuminate\Http\Request;

class TblEventsController extends Controller
{
    
    public function add(Request $request)
    {
        //validate user input
        //default json datetime format  
        //2012-03-19T07:22Z
        $valid = $request->validate(
        [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'fr_datetime' => 'required|date|after_or_equal:today',
            'to_datetime' => 'required|date|after:fr_datetime',
            'location' => 'required|string',
            'poster' => 'image|nullable',
            'tags' => 'nullable|string',
            'facebook' => 'url|nullable',
            'twitter' => 'url|nullable',
            'instagram' => 'url|nullable',
            'website' => 'url|nullable',
            'status' => 'required|string|in:online,onsite',
        ]);

        //save new event
        $events = new TblEvents;
        $events->name = $request->name;
        $events->description = $request->description;
        $events->fr_datetime = $request->fr_datetime;
        $events->to_datetime = $request->to_datetime;
        $events->location = $request->location;
        $events->poster = $request->poster;
        $events->tags = $request->tags;
        $events->facebook = $request->facebook;
        $events->twitter = $request->twitter;
        $events->instagram = $request->instagram;
        $events->website = $request->website;
        $events->status = $request->status;
        $events->isDraft = true;
        $events->isPublished = false;
        $events->isDown = false;
        $events->user_id = 1;
        $events->save();

        //return

        //test
            return response()->json(['Success:' => $events->toArray()],200);
        


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TblEvents  $tblEvents
     * @return \Illuminate\Http\Response
     */
    public function show(TblEvents $tblEvents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TblEvents  $tblEvents
     * @return \Illuminate\Http\Response
     */
    public function edit(TblEvents $tblEvents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TblEvents  $tblEvents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TblEvents $tblEvents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TblEvents  $tblEvents
     * @return \Illuminate\Http\Response
     */
    public function destroy(TblEvents $tblEvents)
    {
        //
    }
}

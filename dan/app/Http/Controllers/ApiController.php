<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Event::orderBy('createdAt', 'asc')->get();
        $event = Event::all();
        return $event;
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
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            // 'timestamps'=>'required',
            'name'=>'required',
            // 'slug'=>'required',
        ]);

        $event = new Event;
        $event->name = $request->input('name');
        // $event->slug=$request->input('slug');
        $event->save();
        return $event;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Event::find($id);
        return $data;
    }

    /*public function index1()
    {
        $event = new events;
        $event_list = $event::all();
        return view('')
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event -> update($request-> all());
        return response()->json(["Success"=> True, "Message"=> "Updated Successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id); 

        return response()->json(["Success"=> True, "Message"=> "Deleted Successfully"]);
    }

    /*public function idTrack(Request $id) 
    {
	$tracking = Event::where('id_track', $id)->get();
    $user = User::find($enquiries->first()->fromid);
	//dd($user);
	return $tracking;
    }*/

}

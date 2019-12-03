<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
//            dd($request->input('name'));
//           dd($id);

        User::findOrFail($id)
            ->update(['name' => $request->input('name')]);
        User::findOrFail($id)
            ->update(['email' => $request->input('email')]);
        User::findOrFail($id)
            ->update(['phone' => $request->input('phone')]);



        return view('profile');


    }


    public function update_point(Request $request, $id)
    {
//            dd($request->input('name'));
//           dd(Event::findOrFail($id));

//        User::findOrFail($id)
//            ->update(['name' => $request->input('name')]);
//        User::findOrFail($id)
//            ->update(['email' => $request->input('email')]);
//        User::findOrFail($id)
//            ->update(['phone' => $request->input('phone')]);

        User::where("id",Auth::user()->id)
            ->increment('points', 5);


        $event = Event::findOrFail($id);
        User::findOrFail(Auth::user()->id)
            ->update(['remember_token' => $event->photo]);









        return view('profile',compact('event'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

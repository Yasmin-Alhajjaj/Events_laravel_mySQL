<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
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


        $user_id=Auth::id();
//        $user=User::findOrFail($user_id);
        if($user_id) {

            comment::create([
                    'user_id' => $user_id,
                    'event_id' => $request->input('event_id'),
                    'description' => $request->input('description')
                ]
            );

            return back();
        }
        else {
//            return redirect()->back() ->with('alert', 'Place login');

//         return redirect()->route("login");
            return back()->with('success', 'pleacse register or login');

        }

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

        $event_id=$id;
        $event=Event::findOrFail($event_id);
        $comment=$event->comment()->get();
        return view('Events.info',compact('comment','event'));
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
        //
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

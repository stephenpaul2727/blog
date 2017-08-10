<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Reply;
class MessagesController extends Controller
{

    /**
     * Display a listing of the resource for history.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_email = Auth::user()->email;
        $messages = Message::where('email','=',$user_email)->get();
        $replies = Reply::all();
        return view('history.index')->with('messages',$messages)->with('replies',$replies);
    }

    /**
     * Display a listing of the resource for timeline.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTimeline()
    {
        $messages = Message::all();
        $replies = Reply::all();
        if( Auth::check() ){
            return view('timeline.indexauth')->with('messages',$messages)->with('replies',$replies);
        }
        else{
            return view('timeline.index')->with('messages',$messages)->with('replies',$replies);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->verified){
            return view('message.create');
        }
        else{
            return view('verifywarning');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|max:250',
        ]);

        if ($validator->fails()) {
            return redirect('message/create')
                ->withErrors($validator)
                ->withInput();
        }
        $message = new Message;
        $message->email = Auth::user()->email;
        $message->description = $request->description;
        $message->messageperson = Auth::user()->name;
        $message->save();
        $request->session()->flash('success','Your message is delivered!');
        return redirect('message/create');
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

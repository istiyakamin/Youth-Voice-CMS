<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check.admin.approved');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_member = User::all();
        return view('member.index', compact('all_member'));
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
        $member = User::findOrFail($id);
        $login_user_payment_info = DB::table('payments')->where('user_id', $id)->get();
        return view('member.profile', compact('member','login_user_payment_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth()->user()->id == $id){
            $user_edit = User::findOrFail($id);
            return view('member.edit', compact('user_edit'));
        } 

        session()->flash('message', 'You dont have any permission to edit others profile');
        return redirect('404');
        
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

        

        $validator = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'occupation' => 'required',
            'address' => 'required',
        ]);

        if($request->hasfile('profile_picture'))
        {
            $file = $request->file('profile_picture');
            $profile_picture_name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/profile_picture', $profile_picture_name);
        } else if(isset($request['profile_picture'])){
            $profile_picture_name = $request['profile_picture'];
        }
        else {
            $profile_picture_name = NULL;
        }

        User::where('id', $id)->update([
            'name' => $request['name'],
            'profile_picture' => $profile_picture_name,
            'gender' => $request['gender'],
            'occupation' => $request['occupation'],
            'facebook' => $request['facebook'],
            'twitter' => $request['twitter'],
            'linkedin' => $request['linkedin'],
            'address' => $request['address'],

        ]);
        
        session()->flash('message', 'Profile update successfully');
        return redirect()->back();
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

    public function memberRequest(){
        $all_member = User::where(['join_date' => NULL])->get();
        return view('member.member-request', compact('all_member'));
    }

    public function memberRequestStore(Request $request, $id)
    {
        $validator = $request->validate([
            'join_date' => 'required'
        ]);

        
        if($validator){
            $user =  User::where('id', $id)->update([
                'join_date' => $request['join_date'],
            ]);

            session()->flash('message', 'You successfully Approved');
            return redirect('member_request');
        } 
    }
}

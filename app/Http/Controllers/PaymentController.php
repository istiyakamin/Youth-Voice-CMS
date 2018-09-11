<?php

namespace App\Http\Controllers;

use Auth;   
use App\User;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
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

        $payment_list = Payment::latest()->get();
        return view('payments.payment_list', compact('payment_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_payment = User::where(['status' => 1])->get();
        return view('payments.create', compact('user_payment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'which_month_payment' => 'required',
            'amount' => 'required|integer',
            'payment_date' => 'required',
            'payment_method' => 'required',
        ]);

        if($validator){
            Payment::create([
                'user_id' => $request['name'],
                'which_month_payment' => $request['which_month_payment'],
                'amount' => $request['amount'],
                'payment_date' => $request['payment_date'],
                'payment_method' => $request['payment_method'],
                'comment' => $request['comment']
            ]);
            
            session()->flash('message', 'Successfully created a Payment');
            return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function myPayment()
    {
        $login_user_payment_info = DB::table('payments')->where('user_id', Auth::user()->id)->get();
        return view('payments.my_payment', compact('login_user_payment_info'));
    }
}

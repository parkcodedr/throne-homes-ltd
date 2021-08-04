<?php

namespace App\Http\Controllers;

use App\DaomniDownpayment;
use Illuminate\Http\Request;

class DaomniDownpaymentController extends Controller
{


    public function getInitialPay(Request $request)
    {
        $landtypeid = $request->id;

        $downpay = DaomniDownpayment::where("daomnilandtypes_id", $landtypeid)->first();
        if ($downpay) {
            return response()->json(['initialpay' =>$downpay->initial_payment]);

        } else {
            return response()->json(['initialpay' => "0"]);

        }

    }
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
     * @param  \App\DaomniDownpayment  $daomniDownpayment
     * @return \Illuminate\Http\Response
     */
    public function show(DaomniDownpayment $daomniDownpayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DaomniDownpayment  $daomniDownpayment
     * @return \Illuminate\Http\Response
     */
    public function edit(DaomniDownpayment $daomniDownpayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DaomniDownpayment  $daomniDownpayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaomniDownpayment $daomniDownpayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DaomniDownpayment  $daomniDownpayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaomniDownpayment $daomniDownpayment)
    {
        //
    }
}
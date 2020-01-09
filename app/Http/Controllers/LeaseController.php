<?php

namespace App\Http\Controllers;

use App\Lease;
use App\LeaseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leases = Lease::all();

        return view('leases.index', ['leases' => $leases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leaseTypes = LeaseType::all();
        $companies = \App\CompanyDetail::all();

        return view('leases.create', ['leaseTypes' => $leaseTypes, 'companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = \App\User::where('');

        //dd($customer);

//        Lease::insert([
//            'lease_type_id'     => $request->lease_type_id,
//            'customer_id'       => $customer
//            'finance_id'        => Auth::id(),
//            'created_at'        => now()
//        ]);
//
//        return redirect()->action('LeaseController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function show(Lease $lease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function edit(Lease $lease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lease $lease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lease $lease)
    {
        //
    }
}

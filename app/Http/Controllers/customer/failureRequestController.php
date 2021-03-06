<?php

namespace App\Http\Controllers\customer;

use App\CompanyDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class failureRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malfunctions = \App\Malfunction::all();
        return view('maintenance/malfunction/index', ['malfunctions' => $malfunctions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer/malfunction/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = CompanyDetail::where('user_id',$request->user()->id)->first();
        \App\Malfunction::insert([
            'company_id'     => $company->id,
            'description'    => $request->description
        ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $malfunction = \App\Malfunction::find($id);
        $company = \App\CompanyDetail::find($malfunction->company_id);
        $user = \App\User::find($company->user_id);
        return view('maintenance/malfunction/show', ['malfunction' => $malfunction, 'company' => $company, 'user' => $user]);
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

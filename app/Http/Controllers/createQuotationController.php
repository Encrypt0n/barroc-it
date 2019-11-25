<?php

namespace App\Http\Controllers;

use App\Quotations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class createQuotationController extends Controller
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
        return view('sales/createQuotation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Quotations::insert([
            'sales_id'                  => 1,
            'accepted'                  => 0,
            'contactpersonname'         => $request->contactPerson,
            'contactpersonemail'        => $request->contactPersonEmail,
            'contactpersonphone'        => $request->contactPersonPhone,
            'companyaddress'            => $request->companyAddress,
            'italian_light'             => $request->italianLight,
            'italian'                   => $request->italian,
            'italian_deluxe'            => $request->italianDeluxe,
            'italian_deluxe_special'    => $request->italianDeluxeSpecial,
            'espresso_beneficio'        => $request->espressoBeneficio,
            'yellow_bourbon_brasil'     => $request->yellowBourbonBrasil,
            'espresso_roma'             => $request->espressoRoma,
            'red_honey_honduras'        => $request->redHoneyHonduras
            ]);

        return view('welcome');
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

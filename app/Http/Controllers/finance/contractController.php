<?php

namespace App\Http\Controllers\finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leases = \App\Lease::all();

        return view('finance.contracts.index', ['leases'  => $leases]);
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
        $quotation_id = $request->quotation;

        $quotation = \App\Quotations::find($quotation_id);

        //dd($quotation);

        $italian_light = $quotation->italian_light * 280;
        $italian = $quotation->italian * 290;
        $italian_deluxe = $quotation->italian_deluxe * 350;
        $italian_deluxe_special = $quotation->italian_deluxe_special * 375;
        $espresso_beneficio = $quotation->espresso_beneficio * 21.60;
        $yellow_bourbon_brasil = $quotation->yellow_bourbon_brasil * 23.20;
        $espresso_roma = $quotation->espresso_roma * 20.80;
        $red_honey_honduras = $quotation->red_honey_honduras * 27.80;

        $final_price = $italian_light + $italian + $italian_deluxe + $italian_deluxe_special +
            $espresso_beneficio + $yellow_bourbon_brasil + $espresso_roma + $red_honey_honduras;

        if($request->lease_type == 1) {
            $final_price / 12 * 1;

        }

        if($request->lease_type == 2) {
            $final_price / 12 * 3;

        }

        if($request->lease_type == 3) {
            $final_price / 12 * 6;

        }

        if($request->lease_type == 4) {
            $final_price / 12 * 12;

        }




        $finance_id = \Auth::id();
        $id = $request->customer_id;

        //dd($id);
        $lease_type_id = $request->lease_type;


        \App\Lease::insert([
            'lease_type_id' => $lease_type_id,
            'customer_id' => $id,
            'finance_id' => $finance_id,
            'monthly_costs' => $final_price



        ]);
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
        //dd($id);
        //$lease_type = \App\LeaseType::all();
        $quotations = \App\Quotations::where('accepted', 1)->get();

        $company = \App\CompanyDetail::find($id);
        return view('finance/contracts.show', ['company' => $company, 'quotations' => $quotations]);
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

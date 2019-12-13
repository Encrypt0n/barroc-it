<?php

namespace App\Http\Controllers;

use App\CompanyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class APIController extends Controller
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

    public function customers()
    {
        $customers = \App\User::with(['companydetail', 'companydetail.lease.invoice', 'companydetail.lease', 'companydetail.quotations' => function ($query) {
            $query->where('quotations.accepted', '=', 1);
        }])->get();
        //$customers->companydetail = \App\Quotations::where('accepted', 0)->get();

        //dd($customers);
        return $customers;
    }

    public function customer(\App\User $customer)
    {
        // $customer = array();
        //$customer = array();
        if($customer->role != 7) {
            return 'error';
        }
        else {
            return [$customer->load('companydetail', 'lease', 'invoice', 'quotation')];
            //return $customer->toArray();
        }




        //return $customer;

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

    public function invoice_insert(Request $request)
    {
        //
        $date = date('Y-m-d', strtotime($request->thing1));

        \DB::table('invoices')->insert([
            'lease_id'                => $request->thing0,
            'uiterlijke_betaaldatum'   => $date,
            'betaald_op'                => $request->thing2,

            'prijs'                   => $request->thing3,


            'created_at' => now(),
            'updated_at' => now()



        ]);
    }

    public function store(Request $request)
    {
        //
        \DB::table('users')->insert([
            'name'                => $request->thing1,
            'email'                => $request->thing2,
            'phone'                => $request->thing3,
            'password'            => Hash::make($request->thing4),
            'created_at' => now(),
            'updated_at' => now(),
            'role'       => 1


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
    public function update(Request $request)
    {
        //
        //$id = 2;

        $id = $request->thing0;

        $user = \App\Invoice::find($id);

        $user->betaald_op = $request->thing1;

        $user->save();
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

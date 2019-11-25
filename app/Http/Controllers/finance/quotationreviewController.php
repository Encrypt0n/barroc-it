<?php

namespace App\Http\Controllers\finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class quotationreviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quotations = \DB::select('SELECT * FROM quotations');


        // $products = \DB::select('SELECT * FROM products');
        //\DB::insert('insert into categories (name, description) values (?, ?)', ['ddd', 'Dayle']);
        return view('/Finance/quotations/index', ['quotations' => $quotations]);
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
        $order =    \DB::table('quotations');
        $order->user_id = \Auth::id();
        $order->id = $request->quotation_id;
        //$order->save();

        \DB::table('quotations')

            ->where('id', $order->id)
            ->update(array('accepted' => 1)
            );


        //$product = \App\Product::find($request->product_id);
        $mailData = \DB::table('quotations')
            ->where('id', $request->quotation_id)
            ->first();

        //return (  new \App\Mail\TestMail($product->name))->render();

        \Mail::to(\Auth::user())->send( new \App\Mail\createQuotationMail($mailData->companyname, $mailData->contactpersonname, $mailData->contactpersonemail,
            $mailData->contactpersonphone, $mailData->companyaddress, $mailData->italian_light, $mailData->italian, $mailData->italian_deluxe,
            $mailData->italian_deluxe_special, $mailData->espresso_beneficio, $mailData->yellow_bourbon_brasil, $mailData->espresso_roma,
            $mailData->red_honey_honduras));

        return 'U heeft een aankoop gedaan, no refunds!!!';
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
        $quotation = \DB::table('quotations')
        ->where('id', $id)
        ->first();
        //$product = Product::find($id);

        return view('Finance/quotations/show', ['quotation' => $quotation]);

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

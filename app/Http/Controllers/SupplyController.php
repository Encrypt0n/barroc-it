<?php

namespace App\Http\Controllers;

use App\Supply;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use function Sodium\library_version_major;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $supplies = Supply::all();



        return view('supplies.index', ['supplies' => $supplies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $supplies = Supply::all();

        return view('supplies.create', ['supplies' => $supplies]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //

        // dd($request);
        $amount = $request->amount;

        $name = $request->name;




        $prices = array();
        $finalprice = 0;
        foreach ($amount as $supply_id => $singleamount) {





            $supplies = Supply::find($supply_id);

            $supplies->amount += $singleamount;





            $supplies->save();

            //$prices['Aantal'] = $singleamount;


                if ($singleamount != null) {

                    //echo $supplies->price;

                    $prices[$supplies->name]=  $supplies->price * $singleamount;


                   // $supplyname = $supplies->name;
                    $finalprice += $supplies->price * $singleamount;






                }





            /*\DB::table('supplies')
                ->where('id', $supply_id)// find your user by their email
                //->limit(1)  // optional - to ensure only one record is updated.
                ->update(array('amount' => +$oneamount));  // */
        }

        $prices['Totaal'] = $finalprice;


        //dd($prices);

        /*foreach ($prices as $supplyName => $supplyPrice) {


        }*/




            //dd($finalprice);


        if($finalprice > 5000) {


            // return ( view: mailToCeo, $supplies ->




                return (  new \App\Mail\CeoMail($prices))->render();
        }

        //return (  new \App\Mail\CeoMail($supplies))->render();

        //return view('supplies.show', ['supplies' => $supplies]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(Supply $supply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(Supply $supply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supply $supply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supply $supply)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Supply;
<<<<<<< Updated upstream
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use function Sodium\library_version_major;
=======
use App\SupplyCategory;
use Illuminate\Http\Request;
>>>>>>> Stashed changes

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< Updated upstream
        //
        $supplies = Supply::all();



=======
        $supplies = Supply::all();

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        $supplies = Supply::all();

        return view('supplies.create', ['supplies' => $supplies]);

=======
>>>>>>> Stashed changes
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< Updated upstream
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

        //return view('supplies.index', ['supplies' => $supplies]);

        return view('/home');

=======
        //
>>>>>>> Stashed changes
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(Supply $supply)
    {
<<<<<<< Updated upstream
        //
=======

>>>>>>> Stashed changes
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(Supply $supply)
    {
<<<<<<< Updated upstream
        //
=======
        $supplyCategories = SupplyCategory::all();

        return view('supplies.edit', ['supply' => $supply , 'supplyCategories' => $supplyCategories]);
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        //
=======
        $supply->update([
            'name'                  => $request->name,
            'price'                 => $request->price,
            'supply_categories_id'  => $request->supply_categories_id,
            'updated_at'            => now()
        ]);

        return redirect()->action('SupplyController@index');
>>>>>>> Stashed changes
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

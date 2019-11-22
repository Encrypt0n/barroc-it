<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = User::paginate(20);


        // $products = \DB::select('SELECT * FROM products');
        //\DB::insert('insert into categories (name, description) values (?, ?)', ['ddd', 'Dayle']);
        return view('/customer/index', ['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('customer/create');

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

        $contactname = $request->input('contactname');
        $email = $request->input('email');
        $password = $request->input('password');



        \DB::table('users')->insert([
            'name' => $contactname,
            'email' => $email,
            'password' => Hash::make($password)
        ]);




        $companyname = $request->input('companyname');
        $workemail = $request->input('workemail');
        $address = $request->input('address');

        \DB::table('companydetails')->insert([
            'name' => $companyname,
            'email' => $workemail,
            'address' => $address
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

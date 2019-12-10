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


        // $supplies = \DB::select('SELECT * FROM supplies');
        //\DB::insert('insert into categories (name, description) values (?, ?)', ['ddd', 'Dayle']);
        return view('/customer/index', ['supplies' => $products]);

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
        $contactname = $request->input('contactname');
        $email = $request->input('email');
        $password = $request->input('password');

        \App\User::insert([
            'name' => $contactname,
            'email' => $email,
            'password' => Hash::make($password)
        ]);
        $user = \DB::table('users')
        ->where('email', $email)
        ->first();

       // $user = \App\User::where('email', $email->first());

        $companyname = $request->input('companyname');
        $workemail = $request->input('workemail');
        $address = $request->input('address');

        \DB::table('company_details')->insert([
            'name' => $companyname,
            'email' => $workemail,
            'address' => $address,
            'user_id' => $user->id
        ]);
//        $account = array(['email' => $email, 'password' => $password]);
        return ( new \App\Mail\RegisterMail(['email' => $email, 'password' => $password]) )->render();
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

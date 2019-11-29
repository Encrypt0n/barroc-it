<?php

namespace App\Http\Controllers\maintenance;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class calendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendars = \App\Calendar::all();
        return view('maintenance/calendar/index', ['calendars' => $calendars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = \App\CompanyDetail::all();
        $users = \App\User::all();
        return view('maintenance/calendar/create', ['companies' => $companies, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Calendar::insert([
            'type_id'        => $request->type,
            'company_id'     => $request->company_id,
            'maintenance_id' => $request->user_id,
            'date'           => $request->date,
            'to_repair'      => $request->to_repair,
            'to_use'         => $request->to_use
        ]);
        return redirect()->route('calendar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calendar = \App\Calendar::find($id);
//        $company = \App\CompanyDetail::find($calendar->company_id);
//        $user = \App\User::find($calendar->user_id);
        return view('maintenance/calendar/show', ['calendar' => $calendar]);
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

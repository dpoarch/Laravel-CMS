<?php

namespace App\Http\Controllers;

use App\Customer;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }

    public function positions(){
        $positions = DB::table('positions')->get();
    
        return view('position')->with('positions', $positions);
    }

    public function products(){
        $user = DB::table('users')->get();
        return view('product')->with('user', $user);
    }

    public function sales(){
        return view('sales');
    }

    public function orders(){
        return view('order');
    }

    public function addpositon(Request $request){
        $name = $request->input('name');
        $position = $request->input('position');
        $office = $request->input('office');
        $age = $request->input('age');
        $startdate = $request->input('startdate');
        $salary = $request->input('salary');


        DB::table('positions')->insert(['name' => $name, 'position' => $position, 'office' => $office, 'age' => $age, 'startdate' => $startdate, 'salary' => $salary]);
        $success = 'Position has been saved !';
        return redirect('/positions')->with('success', $success);
    }

    public function deleteposition($id){
       DB::table('positions')->where('id', $id)->delete();

       $delete = 'deleted!';
       return redirect('/positions')->with('delete', $delete);
    }
}

<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Http\Resources\CustomerResource;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all
//        return Customer::all();
        //phan trang
//        return Customer::paginate(4);
        // tra ve du lieu dang json thong qua resources goi toi model Customer
        return CustomerResource::collection(Customer::paginate(5));
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
        $customer = new Customer;
        $customer -> name_customer = $request->name_customer;
        $customer -> phone_customer = $request->phone_customer;
        $customer -> address_customer = $request -> address_customer;
        $customer -> email_customer = $request->email_customer;
        $customer -> city_customer = $request->city_customer;

        $customer -> save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // theo model va id la tham so truyen vao
    public function show(Customer $customer)
    {
        // get data theo id
        return new CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($customer)
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
    public function update(Request $request,Customer $customer)
    {
        // update customer theo id customer minh find
//        $customer =  Customer::find($customer);
        $customer -> name_customer = $request->name_customer;
        $customer -> phone_customer = $request->phone_customer;
        $customer -> address_customer = $request -> address_customer;
        $customer -> email_customer = $request->email_customer;
        $customer -> city_customer = $request->city_customer;

        $customer -> save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer -> delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function addCustomer(Request $request) {
        
        $newCustomer = new Customer;
        $newCustomer->company_name = $request->companyName;
        $newCustomer->first_name = $request->firstName;
        $newCustomer->last_name = $request->lastName;
        $newCustomer-> contact_number = $request->contactNumber;
        $newCustomer-> house_number = $request->houseNumber;
        $newCustomer-> street = $request->street;
        $newCustomer-> town_city = $request->townCity;
        $newCustomer-> post_code = $request->postCode;
        $newCustomer->save();

        return view('form'); 
    }

    public function displayCustomers() {
        return view('customerlist', ['customers' => Customer::all()]);
    }
}



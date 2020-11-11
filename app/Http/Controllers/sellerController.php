<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Seller;
use Illuminate\Http\Request;

class sellerController extends Controller
{
    public function seller(){
//        dd("HELLO");
        return view('seller');
    }
    public function register(Request $request){
        $seller = new Seller;
        $seller->name = $request->name;
        $seller->email = $request->email;
        $password = Hash::make($request->password);
        $seller->password = $password;
        $seller->cnic = $request->cnic;
        $seller->phone = $request->phone;
        $seller->business_name = $request->business_name;
        $seller->registration_number = $request->registration_number;
        $seller->business_type = $request->business_type;
        $seller->business_doc = $request->business_doc;
        $seller->address = $request->address;
        $seller->country = $request->country;
        $seller->province = $request->province;
        $seller->city = $request->city;
        $seller->area = $request->area;
        $seller->postal_code = $request->postal_code;
        $seller->bank_name = $request->bank_name;
        $seller->branch_code = $request->branch_code;
        $seller->iban = $request->iban;
        $seller->status = 1;
        $seller->role_id = 2;
        
        $seller->save();

        return redirect('/admin');
    }
}

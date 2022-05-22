<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use PhpParser\Node\Stmt\If_;

class customercontroller extends Controller
{  //create query 
    public function create()
    {

        $url = url('/customer');
        $title = "Customer Registration";
        $Update = "Register Now";

        $data = compact('url', 'title', 'Update');
        return view('/customer')->with($data);

        // $data = compact('url', 'title');
        // return view('customer')->with($data);
    }

    public function Store(Request $request)
    {

        // p($request->all());
        // die;


        //insert query 

        $customer = new Customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer/view');
    }

    public function view(Request $request){

    $search = $request['search'] ?? "";

    if ($search!=null) {
        $customers = Customer::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->orwhere('customer_id','LIKE',"%$search%")->get();
    }else {

        $customers = Customer::paginate(5); 
        // $customers = Customer::all(); 
    }
    
        $data = compact('customers','search');
        return view('customer-view')->with($data);
}

    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }

    public function forceDelete($id)
    {
        $customers =  Customer::withTrashed()->find($id);  //for route method
        if (!is_null($customers)) {
            $customers->forceDelete();
        }
        return redirect('/customer/trash');
    }


   
    //Delete query 
    public function Delete($id)
    {
        $customer =  Customer::find($id); //for route method
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('/customer/view');
    }


    public function restore($id)
    {

        $customer =  Customer::withTrashed()->find($id); //for route method
        if (!is_null($customer)) {
            $customer->restore();
        }
        return redirect('/customer/trash');
    }



    // $customer = Customer::find($id)->delete();  //for url method  

    // return redirect()->back();
    // return redirect('customer/');
    //edit query 
    public function edit($id)
    {
        $customer = Customer::find($id);

        if (is_null($customer)) {
            return redirect('/customer/view');
        } else {
            $url = url('/customer/update') . "/" . $id;
            $title = "Update Customer Profile";
            $Update = "Update form";
            $data = compact('customer', 'url', 'title', 'Update');
            return view('customer')->with($data);
        }
    }
    public function update($id, Request $request)
    {
        // p($request->all());
        // die;
        //update query 

        $customer = Customer::find($id);

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        // $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->save();

        return redirect('/customer/view');
    }
}

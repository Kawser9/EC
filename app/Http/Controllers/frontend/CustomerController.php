<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Customer;
use Illuminate\Http\Request;
// use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\DataTables;

class CustomerController extends Controller
{

    public function list()
    {
        $customer=Customer::all();
        return view('backend.pages.customer.list');
    }
    public function ajaxList(Request $request)
    {
        $data = Customer::select('id','name','email','phone','address')->get();
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                       $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                        return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }
    public function customerProfile()
    {
        return view('frontend.pages.profile.profile');
    }
    public function customerEditProfile()
    {
        return view('frontend.pages.profile.editProfile');
    }
    public function customerProfileUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);
        $customer = Customer::find(auth()->guard('customer')->user()->id);
        // dd($customer);
        $customer->update([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
        ]);
        notify()->success('Your Profile Updated Successfully.');
        return redirect()->route('customer.profile');
    }




    public function registration()
    {
        return view('frontend.pages.registration');
    }
    public function customerStore(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|string|min:6',
        ]);

        // Handle image upload
        // $imagePath = $request->file('image')->store('user_images', 'public');

        // Create a new user
        Customer::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            // 'image' => $imagePath,
            'password' => bcrypt($validatedData['password']),
        ]);

        notify()->success('Customer registration done successfully.', 'Customer');
        return redirect()->route('customer.login');
    }
    public function login()
    {
        return view('frontend.pages.login');
    }
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth('customer')->attempt($request->only('email', 'password'))) {
            // Successful login
            notify()->success('You are successfully logged in.', 'Welcome to the website');
            return redirect()->route('cart');
        }

        // Failed login
        notify()->warning('You entered an invalid email or password.', 'Welcome back to the login page');
        return redirect()->route('customer.login');
    }
    public function logOut()
    {
        auth()->guard('customer')->logout();
        notify()->success('Logout Success.', 'Customer');
        return redirect()->route('home');
    }
}

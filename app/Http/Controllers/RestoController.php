<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Session;
class RestoController extends Controller
{
    //method for showing home page
    public function index()
    {
        return view('home');
    }

    //function for fetching restaurant list from database and sending it to 'list' view
    public function list()
    {
        $data = Restaurant::all();
        return view('list',['data'=>$data]);
    }

    // function for adding a restaurant to database
    public function add(Request $req)
    {
        // to validate the incoming values from the form, and defining custom error messages
        $validate = $req->validate([
            'RestoName'=>'required',
            'RestoEmail'=>'required|email|regex:([a-zA-Z0-9.+-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63})',
            'RestoAddress'=>'required'
        ],[
            'RestoName.required'=>'Please Fill this field',
            'RestoEmail.required'=>'Please Fill this field',
            'RestoEmail.email'=>'This Email is not valid',
            'RestoEmail.regex'=>'This Email is not valid',
            'RestoAddress.required'=>'Please Fill this field'
        ]);

        // getting the values, saving into database and initializing the flash session
        $resto = new Restaurant;
        $resto->name = $req->input('RestoName');
        $resto->email = $req->input('RestoEmail');
        $resto->address = $req->input('RestoAddress');
        $resto->save();
        $req->session()->flash('status','Restaurant added successfully!!');

        //redirecting to 'list' page
        return redirect('list');
    }

    // function to delete the restaurant
    // $id is coming from route, to decide which restaurant to be deleted
    public function delete($id)
    {
        Restaurant::find($id)->delete();
        Session::flash('status','Restaurant Deleted Successfully!!');
        return redirect('list');
    }

    // function for updating the existing product
    // this function only fetches the product and sends it to edit form
    // $id is coming from route, to know which product is selected to be edited
    public function edit($id)
    {
        $data = Restaurant::find($id);
        return view('edit',['data'=>$data]);
    }

    // function for actually updating the database
    public function update(Request $req)
    {
        // to validate the incoming values from the form, and defining custom error messages
        $validate = $req->validate([
            'RestoName'=>'required',
            'RestoEmail'=>'required|email|regex:([a-zA-Z0-9.+-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63})',
            'RestoAddress'=>'required'
        ],[
            'RestoName.required'=>'Please Fill this field',
            'RestoEmail.required'=>'Please Fill this field',
            'RestoEmail.email'=>'This Email is not valid',
            'RestoEmail.regex'=>'This Email is not valid',
            'RestoAddress.required'=>'Please Fill this field'
        ]);

        // getting the values, saving into database and initializing the flash session
        $resto = Restaurant::find($req->input('RestoId'));
        $resto->name = $req->input('RestoName');
        $resto->email = $req->input('RestoEmail');
        $resto->address = $req->input('RestoAddress');
        $resto->save();
        $req->session()->flash('status','Restaurant updated successfully!!');

        //redirecting to 'list' page
        return redirect('list');
    }

    // function to get user details and validate them
    public function register(Request $req)
    {
        $validate = $req->validate([
            'RestoUserName'=>'required',
            'RestoUserEmail'=>'required|email|regex:([a-zA-Z0-9.+-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63})',
            'RestoUserMobile'=>'required|min:10|regex:(^(?!0+$)(\+\d{1,3}([- ]?))?(?!0+$)\d{5}(\s?)(?!0+$)\d{5}$)',
            'RestoUserPassword'=>'required|regex:(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$)'
        ],[
            'RestoUserName.required'=>'Please fill this field',
            'RestoUserEmail.required'=>'Please fill this field',
            'RestoUserEmail.email'=>'This Email is not valid',
            'RestoUserEmail.regex'=>'This Email is not valid',
            'RestoUserMobile.required'=>'Please fill this field',
            'RestoUserMobile.regex'=>'Invalid mobile number',
            'RestoUserMobile.min'=>'The mobile number must be at least 10 characters.',
            'RestoUserPassword.required'=>'Please fill this field',
            'RestoUserPassword.regex'=>'Password must contain: Minimum 8 characters, at least one uppercase letter, one lowercase letter,
                                        one number and one special character',
        ]);

        return $req->input();
    }
}

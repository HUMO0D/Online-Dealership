<?php

namespace App\Http\Controllers;
use App\Models\ContactUs;

// use app\Modeles\ContactUs;


use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        // dd('hi');
        return view('ContactUs.contact_us');
    }

    public function store(Request $request)
    {
        $ContactUs = new ContactUs;
        $ContactUs -> name = $request->name;
        $ContactUs -> email = $request->email;
        $ContactUs -> msg = $request->msg;
        $ContactUs->save();

        return redirect()->back()->with('delay', 2);

    }

    public function indexlist(){
        $contactUsRecords = ContactUs::all();

        return view('ContactUs.view_contact_us', compact('contactUsRecords'));
    }

    // public function viewContactUs() {
    //     $contactUsRecords = ContactUs::all();
    //     dd($contactUsRecords);
    //     return view('ContactUs.view_contact_us', compact('contactUsRecords'));
    // }

    public function home(){


        return view('welcome');
    }


}

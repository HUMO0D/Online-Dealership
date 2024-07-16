<?php

namespace App\Http\Controllers;
use App\Models\AddCar;

use Illuminate\Http\Request;

class AddCarController extends Controller
{
    public function store(Request $request)
    {
        // // $validatedData = $request->validate([
        // //     'carname' => 'required|string|max:255',
        // //     'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // //     'model' => 'required|integer|min:1948|max:2099',
        // //     'dsc' => 'nullable|string',
        // // ]);

        // $imagePath = $request->file('carimg')->store('images', 'public');

        // $addcar = new AddCar();
        // // $addcar->carname = $validatedData['carname'];
        // // $addcar->img = $imagePath;
        // // $addcar->model = $validatedData['model'];
        // // $addcar->dsc = $validatedData['dsc'];
        // $addcar->carname = $request->carname;
        // // $addcar->img = $request->$imagePath;
        // $addcar->img = $imagePath;
        // $addcar->model = $request->model;
        // $addcar->dsc = $request->dsc;
        // $addcar->save();

        // return redirect()->back()->with('success', 'Car added successfully!');


//////////////////////////////////////////

//dd('here');
        if ($request->hasFile('carimg')) {



            $uploadedFile = $request->file('carimg');

            // Generate a unique filename to prevent conflicts
            $filename = time() . '_' . $uploadedFile->getClientOriginalName();

            // Move the uploaded file to public/images directory
            $uploadedFile->move(public_path('images'), $filename);

            //
            // $imagePath = $request->file('carimg')->storeAs('images', $request->file('carimg')->getClientOriginalName(), 'public');
            //
            // $imagePath = $request->file('carimg')->store('images', 'public');
//////////////////////////




            // $request->img->move(public_path('images'), $carimg);

            // $imageName = time().'.'.$request->img->extension();
            // $request->img->move(public_path('images'), $imageName);

            $addcar = new AddCar();
            $addcar->carname = $request->carname;
            $addcar->img = $filename;
            $addcar->model = $request->model;
            $addcar->dsc = $request->dsc;
            $addcar->save();

            return redirect()->back()->with('success', 'Car added successfully!');
        } else {
            return redirect()->back()->with('error', 'No file uploaded.');
        }

    }





    public function show(Request $request)
    {




    }


    public function indexlistcars(){
        $listCars = AddCar::all();

        return view('AddCars.view_cars' , compact('listCars')
    );
    }

    public function indexaddcars(){
        return view('AddCars.add_cars');
        }


}

<?php

namespace App\Http\Controllers;
use App\Models\BuyCar;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\AddCar;
use App\Models\User;




class BuyCarController extends Controller
{
    public function spec911(){

        return view('BuyCar.Cars.911');
    }

    public function buy911(Request $request)
    {
        $carname = "911";
        $car = AddCar::where('carname', $carname)->first();

        if ($car) {
            $carId = $car->id;
        } else {
            return redirect()->back()->with('faild', 'No Cars Available!');
        }
        $user_id = Auth::id();
        // dd($user_id, $carId);
        $customers = new BuyCar();
        $customers -> car_id = $carId;
        $customers -> user_id = $user_id;
        $customers->save();
        return redirect()->route('home')->with('success', 'Car added successfully!');
    }


    public function spec718(){

        return view('BuyCar.Cars.718');
    }

    public function buy718(Request $request)
    {
        $carname = "718";
        $car = AddCar::where('carname', $carname)->first();

        if ($car) {
            $carId = $car->id;
        } else {
            return redirect()->back()->with('faild', 'No Cars Available!');
        }
        $user_id = Auth::id();
        $customers = new BuyCar();
        $customers -> car_id = $carId;
        $customers -> user_id = $user_id;
        $customers->save();
        return redirect()->route('home')->with('success', 'Car added successfully!');
    }



    public function viewcustomers(){
        $listBuyers = BuyCar::all();
        $listCars = AddCar::all();
        $listUsers = User::all();

        return view('BuyCar.BuyersList' , compact('listBuyers', 'listCars', 'listUsers')
    );
    }
}

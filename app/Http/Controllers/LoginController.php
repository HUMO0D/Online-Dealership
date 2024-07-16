<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{



///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
//     public function signup(){
//         return view('signup');
//     }

//     public function store(Request $request)
//     {
//         $Users = new User;
//         $Users -> name = $request->name;
//         $Users -> email = $request->email;
//         $Users -> password = $request->password;
//         $Users->save();

//         return redirect()->back()->with('delay', 2);

//     }

//     public function login(){
//         return view('login');
//     }



//     function checklogin(Request $request)
//     {
//      $this->validate($request, [
//       'email'   => 'required|email',
//       'password'  => 'required|alphaNum|min:3'
//      ]);

//     //  $user_data = array(
//     //   'email'  => $request->get('email'),
//     //   'password' => $request->get('password')
//     //  );



//     //  if(Auth::attempt($user_data))
//     //  {
//     //     dd('logged in');

//     //   return redirect('main/successlogin');
//     // return view('home');
//     //  }
//     //  else
//     //  {
//     //   return back()->with('error', 'Wrong Login Details');
//     //  }




// //////////////////////////////////////////
//         $email = $request->input('email');
//         $password = $request->input('password');

//         $users = User::all();

//         foreach ($users as $user) {
//             if ($user->email === $email && $user->password === $password) {
//                 // $islogged = 'yes';
//                 session_start();
//                 $_SESSION['islogged'] = 'yes';
//                 return redirect()->route('home');


//                 // $cachedValue = $_SESSION['islogged'];
//                 // dd($cachedValue);
//             }
//         }
//         // dd($cachedValue);
//         // dd('failed');
//         session_start();
//         unset($_SESSION['islogged']);


//     }


//     public function signout()
//     {
//         session_start();
//         unset($_SESSION['islogged']);
//     }
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
}

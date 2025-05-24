<?php

namespace App\Http\Controllers\Front;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function registerUser(Request $request)
    {
        if ($request->isMethod('post')) {
            Session::forget('error_message');
            Session::forget('success_message');
            $data = $request->all();

            $userCount = User::where('email', $data['email'])->count();
            if ($userCount > 0) {
                $message = "Cet Email existe déja";
                session::flash('error_message', $message);
                return redirect()->back();
            } else {
                $user = new User;
                $user->name = $data['name'];
                $user->mobile = $data['mobile'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->status = 1;
                $user->save();

                // Email de confirmation
                $email = $data['email'];
                $messageData = [
                    'email' => $data['email'],
                    'name' => $data['name'],
                    'code' => base64_encode($data['email'])
                ];
                Mail::send('emails.confirmation', $messageData, function ($message) use ($email) {
                    $message->to($email)->subject('Confirmation de creation de compte');
                });

                $message = "SVP confirme votre email pour activer votre compte";
                Session::put('success_message', $message);

                return redirect()->back();
            }
        }
    }

    public function loginUser(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            Session::forget('error_message');
            Session::forget('success_message');
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                $userStatus = User::where('email', $data['email'])->first();
                if ($userStatus->status == 0) {
                    Auth::logout();
                    $message = " Votre compte n'est pas encore active.SVP veuillez l'activite ";
                    Session::put('error_message', $message);
                    return redirect()->back();
                }
              
            } else {
                $message = "Nom d'utilisateur ou mot de passe invalide";
                Session::flash('error_message', $message);
                return redirect()->back();
            }
        }
    }

    public function logoutUser()
    {
        Auth::logout();
        return redirect('/');
    }

    public function account()
    {
        return view('front.users.account');
    }
}

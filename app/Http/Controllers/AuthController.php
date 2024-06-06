<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Mail;
use Str;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;


class AuthController extends Controller
{
    public function login_admin()
    {
          // dd(Hash::make(123456));
        if(!empty(Auth::check()) && Auth::user()->is_admin == 1 )
        {
            return redirect('admin/dashboard');
        }
        return view('admin.auth.login');
    }

    public function auth_login_admin(Request $request)
    {
       // dd($request->all());
      $remember = !empty($request->remember) ? true : false;
      if(Auth::attempt(['email' => $request->email, 'password' => $request->password , 'is_admin' => 1, 'status' => 0, 'is_delete' => 0],$remember))
      {
        return redirect('admin/dashboard');
      }


      else
      {
        return redirect()->back()->with('error', "Bitte geben Sie die korrekte E-Mail-Adresse und das richtige Passwort ein");
      }


    }

    public function logout_admin()
    {
        Auth::logout();
        return redirect(url(''));
    }


    public function auth_login(Request $request)
    {
      $remember = !empty($request->is_remember) ? true : false;


      if(Auth::attempt(['email' => $request->email, 'password' => $request->password ,  'status' => 0, 'is_delete' => 0],$remember))
      {
        if(!empty(Auth::user()->email_verified_at))
        {

       
      $json['status'] = true;
      $json['message'] = 'success';

    }

    else
    {

      $save = User::getSingle(Auth::user()->id);

      Mail::to($save->email)->send(new RegisterMail($save));
      Auth::logout();

      $json['status'] = false;
      $json['message'] = 'Die E-Mail-Adresse Ihres Kontos wurde nicht bestätigt. Bitte überprüfen Sie Ihren Posteingang und verifizieren Sie ihn';
    }
      }


      else
      {
        $json['status'] = false;
        $json['message'] = 'Bitte geben Sie die korrekte E-Mail-Adresse und das richtige Passwort ein';
  
      }
    
      echo json_encode($json);


    }
    





    public function auth_register(Request $request)
    {
      //dd($request->all());
      $checkEmail = User::checkEmail($request->email);
      if(empty($checkEmail))
      {
        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->save();

        Mail::to($save->email)->send(new RegisterMail($save));

        $json['status'] = true;
        $json['message'] = "Ihr Konto wurde erfolgreich erstellt. Bitte bestätige deine Email Adresse";
      }
      else
      {
        $json['status'] = false;
        $json['message'] = "Diese E-Mail ist bereits registriert. Bitte wählen Sie eine andere";

      }
      echo json_encode($json);
    }


    public function activate_email($id)
    {
      $id = base64_decode($id);
      $user = User::getSingle($id);
      $user->email_verified_at = date("Y-m-d H:i:s");
      $user->save();

      return redirect(url(''))->with('success', "E-Mail erfolgreich bestätigt");
    }



    public function forget_password(Request $request)
    {
      $data['meta_title'] = "PASSWORT VERGESSEN";
      return view('auth.forget', $data);
    }

    public function auth_forget_password(Request $request)
    {
      $user = User::where('email', '=', $request->email)->first();
      if(!empty($user))
      {
        $user->remember_token = Str::random(30);
        $user->save();

        Mail::to($user->email)->send(new ForgotPasswordMail($user));

        return redirect()->back()->with('success', "Bitte überprüfen Sie Ihre E-Mails und setzen Sie Ihr Passwort zurück");
      }

      else
      {
        return redirect()->back()->with('error', "E-Mail im System nicht gefunden.");
      }
    }


    public function reset($token)
    {
     // dd($token);
      $user = User::where('remember_token', '=', $token)->first();
     //dd($user);
      if(!empty($user))
      {
        
        $data['user'] = $user;
        $data['meta_title'] = "PASSWORT ZURÜCKSETZEN";
        return view('auth.reset', $data);

        
      }
      else
      {
        abort(404);
      }
    }


    public function auth_reset($token ,Request $request)
    {
      //dd($request->all());
      if($request->password == $request->cpassword)
      {
        $user = User::where('remember_token', '=' , $token)->first();

        
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(30);
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->save();

        return redirect(url(''))->with('success', "Passwort erfolgreich zurückgesetzt");

      }

      else
      {
        return redirect()->back()->with('error', "Passwort und Bestätigungspasswort stimmen nicht überein" );
      }
    }
}

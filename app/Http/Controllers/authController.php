<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Str;

use Session;

class authController extends Controller
{
    public function login(Request $request)
    {
        // dd(User::all());
        $data = User::where('name',$request->idLogin)->first();
        if($data){

            // id = ammaridho
            // pass = admin123

            if(\Hash::check($request->passwordLogin, $data->password)){
                session(['session_login' => true]);
                $request->session()->put('data',$request->input());   //memasikkan inputan dari form login ke dalam data session
                Session::put('user_id', $data['id']); 

                return redirect('/')->with(['success' => 'Berhasil Masuk!']);
            }
        }
        return redirect('/')->with(['error' => 'ID atau Password salah!']);
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/')->with(['success' => 'berhasil Logout!']);
    }
}

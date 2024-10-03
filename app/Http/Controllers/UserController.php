<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MarineLife;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;

class UserController extends Controller
{
    // public function login(){
    //     return View(view:'home');
    // }

    public function index(){
        return view('login');
    }
    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validasi)){
            return redirect('/dshboard');
        }
        return redirect()->back()->with('pesan','Login anda gagal');
    }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function create(){
        return view('artikel-create');
    }

    public function home(){
        $data['review'] = Reviews::all();
        return view('home',$data);
    }
    public function log(){
        return view('login');
    }
    public function dsb(){
        return view('dshbd');
    }
    public function hal(){
        return view('halaman');
    }
    public function hal2(){
        return view('halaman2');
    }
    public function hal3(){
        return view('halaman3');
    }
    public function hal4(){
        return view('halaman4');
    }
    public function hal5(){
        return view('halaman5');
    }
    public function hal6(){
        return view('halaman6');
    }
    public function hal7(){
        return view('halaman7');
    }
    public function hal8(){
        return view('halaman8');
    }
    public function hiuu(){
        return view('hiu');
    }
    public function categori(){
        return view('kategori');
    }
    public function detail(){
        return view('detailmoluska');
    }
    public function detail1(){
        return view('invertebrata');
    }
    public function detail2(){
        return view('vertebrata');
    }
    public function tentang(){
        return view('about');
    }
    public function pengaturan(){
        return view('setting');
    }
    public function review(){
        return view('review');
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
        return "Hola caracola";
    }

    public function getId($id1, $id2)
    {
        return '<p>id1 es igual a </p>'. $id1 . '<p> id2 es igual a </p>' .$id2;
    }

    public function showView()
    {
        $msg = "Aprendiendo Laravel 5";
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        return View('home.showview', ['msg' => $msg, 'array' => $array]);
    }

    public function form(Request $request)
    {
        if($request->isMethod("post") && $request->has("name"))
        {
            $name = $request->input("name");
        }else
        {
            $name = "";
        }


        return View('home.form', ["name" => $name]);
    }
}

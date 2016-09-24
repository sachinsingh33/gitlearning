<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
  public function Home()
  {
   $pagetype="index";
   return view('pages.index') ->with(['pagetype'=> $pagetype]);
  }

  public function services()
  {
   $pagetype="services";
   return view('pages.services') ->with(['pagetype'=> $pagetype]);
  }
  public function portfolio()
  {
   $pagetype="portfolio";
   return view('pages.portfolio') ->with(['pagetype'=> $pagetype]);
  }
  public function shortcodes()
  {
   $pagetype="short-codes";
   return view('pages.short-codes') ->with(['pagetype'=> $pagetype]);
  }
  public function mail()
  {
   $pagetype="mail";
   return view('pages.mail') ->with(['pagetype'=> $pagetype]);
  }
   public function single()
  {
   $pagetype="single";
   return view('pages.single') ->with(['pagetype'=> $pagetype]);
  }
  public function Home1()
  {
   $pagetype="Home1";
   return view('pages.Home1') ->with(['pagetype'=> $pagetype]);
  }
  public function Mobilephones()
  {
   $pagetype="Mobilephones";
   return view('pages.Mobilephones') ->with(['pagetype'=> $pagetype]);
  }
  public function Tablets()
  {
   $pagetype="Tablets";
   return view('pages.Tablets') ->with(['pagetype'=> $pagetype]);
  }
public function Laptops()
  {
   $pagetype="Laptops";
   return view('pages.Laptops') ->with(['pagetype'=> $pagetype]);
  }
public function Motherboards()
  {
   $pagetype="Motherboards";
   return view('pages.Motherboards') ->with(['pagetype'=> $pagetype]);
  }
public function Processors()
  {
   $pagetype="Processors";
   return view('pages.Processors') ->with(['pagetype'=> $pagetype]);
  }
public function Offers()
  {
   $pagetype="Offers";
   return view('pages.Offers') ->with(['pagetype'=> $pagetype]);
  }
public function SignUp()
  {
   $pagetype="SignUp";
   return view('pages.SignUp') ->with(['pagetype'=> $pagetype]);
  }
public function Login()
  {
   $pagetype="Login";
   return view('pages.Login') ->with(['pagetype'=> $pagetype]);
  }





}

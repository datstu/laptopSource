<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use App\CategoryProduct;
use Mail;
use URL;

use App\Http\Controllers\AdminController;

class BannerController extends Controller
{
    //
    public function bannerManagement(Request $req){
      
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');

        return view("layout")->with(compact('meta_desc','meta_keywords','meta_title','url_cannonical','listProduct'));
    }
     
    
    
}

<?php
/**
 * Created by PhpStorm.
 * User: Admins
 * Date: 7/24/2018
 * Time: 9:09 PM
 */

namespace App\Http\Controllers;


use App\Product;

class PageUserController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('user.page.page-user')->with('products',$products);
    }
}
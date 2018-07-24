<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.list')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $product = new Product();
        $category = Category::all();

        $action = "/admin/product";
        return view('admin.product.form')->with('action', $action)->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $product = new Product();
        $product -> name = Input::get('name');
        $product -> categoryId = Input::get('categoryId');
        $product-> price = Input::get('price');
        $product-> description =Input::get('description');
        $product-> images = Input::get('image');
        $product->detail= Input::get('detail');
        $product->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::find($id);
        $categories = Category::all();
        if ($product == null){
            return 'lat nua thay.';
        }
        return view('admin.product.formUpdate')->with('product', $product)->with('category', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $id = Input::get('id');
        $product = Product::find($id);
        if ($product == null) {
            return ('404');
        }
        $product->name = Input::get('name');
        $product->categoryId = Input::get('categoryId');
        $product->price = Input::get('price');
        $product->description = Input::get('description');
        $product->images = Input::get('image');
        $product->detail = Input::get('detail');
        $product->save();
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getListEdit(){
        $products = Product::all();
        return view('admin.product.listEdit')->with('products', $products);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return view('404');
        }
        $product->delete();
        return redirect('/admin/bakery/list');
    }
}

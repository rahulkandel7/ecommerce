<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(20);
        $total = Product::count();
        return view('admin.products.index', compact('products', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // @dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'p_desc' => 'nullable',
            'sku' => ['required', 'integer'],
            'category_id' => ['required', 'exists:categories,id'],
            'price'=> ['required', 'integer'],
            'isStock' => ['required', 'boolean'],
            'gender' => 'required',
            'sizes' => ['required'],
            'colors' => 'required',

            'first_image' => ['required', 'image', 'mimes:jpeg,png'],
            'second_image' => ['required', 'image', 'mimes:jpeg,png'],
            'third_image' => ['required', 'image', 'mimes:jpeg,png'],
        ]);

        $data['isStock'] == "1" ? true : false;

        if($request->hasFile('first_image')){
            $fname = Str::random(20);
            $fexe = $request->file('first_image')->extension();
            $fpath = "$fname.$fexe";

            $request->file('first_image')->storeAs('public/products', $fpath);

            $data['first_image'] = 'products/'.$fpath;
        }

        if($request->hasFile('second_imgae')){
            $sname = Str::random(20);
            $sexe = $request->file('second_imgae')->extension();
            $spath = "$sname.$sexe";

            $request->file('second_imgae')->storeAs('public/products', $spath);

            $data['second_imgae'] = 'products/'.$spath;
        }

        if($request->hasFile('third_image')){
            $tname = Str::random(20);
            $texe = $request->file('third_image')->extension();
            $tpath = "$tname.$texe";

            $request->file('third_image')->storeAs('public/products', $tpath);

            $data['third_image'] = 'products/'.$tpath;
        }
            Product::create($data);
        
        

        // Product::create($data);

        return redirect(route('admin.products.index'))->with('sucess', 'Product added Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'p_desc' => 'nullable',
            'sku' => ['required', 'integer'],
            'category_id' => ['required', 'exists:categories,id'],
            'price'=> ['required', 'integer'],
            'isStock' => ['required', 'boolean'],
            'gender' => ['required'],
            'sizes' => ['required'],
            'colors' => 'required',
            'first_image' => ['nullable', 'image', 'mimes:jpeg,png'],
            'second_image' => ['nullable', 'image', 'mimes:jpeg,png'],
            'third_image' => ['nullable', 'image', 'mimes:jpeg,png'],
        ]);

        $data['isStock'] == "1" ? true : false;

        if($request->hasFile('first_image')){
            $fname = Str::random(20);
            $fexe = $request->file('first_image')->extension();
            $fpath = "$fname.$fexe";

            $request->file('first_image')->storeAs('public/products', $fpath);

            $data['first_image'] = 'products/'.$fpath;

            if($product->first_image){
                Storage::delete('public/', $product->first_image);
            }
        }

        if($request->hasFile('second_imgae')){
            $sname = Str::random(20);
            $sexe = $request->file('second_imgae')->extension();
            $spath = "$sname.$sexe";

            $request->file('second_imgae')->storeAs('public/products', $spath);

            $data['second_imgae'] = 'products/'.$spath;

            if($product->second_image){
                Storage::delete('public/', $product->second_image);
            }
        }

        if($request->hasFile('third_image')){
            $tname = Str::random(20);
            $texe = $request->file('third_image')->extension();
            $tpath = "$tname.$texe";

            $request->file('third_image')->storeAs('public/products', $tpath);

            $data['third_image'] = 'products/'.$tpath;

            if($product->third_image){
                Storage::delete('public/', $product->third_image);
            }
        }
        

        $product->update($data);

        return redirect(route('admin.products.index'))->with('sucess', 'Product Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Storage::delete('public/', $product->first_image);
        Storage::delete('public/', $product->second_image);
        Storage::delete('public/', $product->third_image);

        return redirect(route('admin.products.index'))->with('sucess', 'Product Deleted Sucessfully');
    }

    public function search(Request $request)
    {
        // @dd($request->all());
        $search = $request->q;
        $total = Product::count();

        $products = Product::where('name', 'like', "%$search%")->paginate(20);

        return view('admin.products.index', compact('products', 'total'));

    }
}

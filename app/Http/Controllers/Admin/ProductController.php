<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function Random()

    {
        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for($i = 0; $i < $length; $i++):
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        endfor;

        return $randomString."_".time();

    }


    public function index()
    {
        $product = Product::Paginate(4);
        return view('admin.product.index',compact('product'));
    }

    public function createfome()
    {
        $category = Category::all();
        return view('admin.product.create',compact('category'));
    }

    public function insert(Request $request, Product $product)
    {

        if( !empty($request->file('image')) )
        {
            $imageName = $this->Random().'.'.$request->image->extension();
            $request->image->storeAs('contents', $imageName);
        }else{
            $imageName = null;
        }

        $product->create([

            "name" => $request->name,
            "image" => $imageName,
            "detail" => $request->detail,
            "price" => $request->price,
            "description" => $request->description,
            "id_category" => $request->id_category

        ]);

        toast('บันทึกข้อมูลสำเร็จ','success');
        
        return redirect()->route('product.index');

    }

    // public function insert(Request $request)
    // {
    //     $product = new Product();
    //     $product->name = $request->name;
    //     $product->price = $request->price;
    //     $product->description = $request->description;
    //     $product->id_category = $request->id_category ;
    //     $product->image = $request->image;
    //     $product->save();
    //     toast('บันทีกข้อมูลสำเร็จ','success');
    //     return redirect()->route('product.index');
    // }

    public function edit($product_id)
    {
        $product = Product::find($product_id);
        $category = Category::all();
        return view('admin.product.editform',compact('product','category'));
    }

    public function update(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->id_category = $request->id_category ;
        $product->image = $request->image;
        $product->update();
        toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('product.index');
    }

    public function delete($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();
        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('product.index');
    }

}

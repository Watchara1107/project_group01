<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(50);
        return view('admin.product.index',compact('product'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function insert(Request $request)
    {
        $product = new Product();
        $product->nameth = $request->nameth;
        $product->nameen = $request->nameen;
        $product->price = $request->price;
    
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/backend/upload/product/', $filename);
            Image::make(public_path() . '/backend/upload/product/' . $filename);
            $product->image = $filename;
        } else {
            $product->image = 'nopic.jpg';
        }
        $product->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('product.index');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request,$id){
        if ($request->hasFile('image')) {
            $product = Product::find($id);
             // ลบรูปภาพ
            if ($product->image != 'nopic.jpg') {
                File::delete(public_path() . '/backend/upload/product/' . $product->image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/backend/upload/product/', $filename);
            Image::make(public_path() . '/backend/upload/product/' . $filename);
            $product->image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $product->nameth = $request->nameth;
            $product->nameen = $request->nameen;
            $product->price = $request->price;
           
          
          
        } else{
            //เพิ่มฟิล์ดในกรณีที่ไม่มีรูปภาพ
            $product = Product::find($id);
            $product->nameth = $request->nameth;
            $product->nameen = $request->nameen;
            $product->price = $request->price;
        }
        
        $product->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('product.index');
    }


    public function delete($id){
        $product = Product::find($id);
        if ($product->image != 'nopic.jpg') {
            File::delete(public_path() . '/backend/upload/product/' . $product->image);
        }
        $product->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('product.index');
    }
}

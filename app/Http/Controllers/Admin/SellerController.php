<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;
use App\Models\Seller;

class SellerController extends Controller
{
    public function index(){
        $seller = Seller::paginate(50);
        return view('admin.seller.index',compact('seller'));
    }

    public function create(){
        
        return view('admin.seller.create');
    }

    public function insert(Request $request){
        $seller = new Seller();
        $seller->nameth = $request->nameth;
        $seller->nameen = $request->nameen;
        $seller->price = $request->price;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/backend/upload/seller/', $filename);
            Image::make(public_path() . '/backend/upload/seller/' . $filename);
            $seller->image = $filename;
        } else {
            $seller->image = 'nopic.jpg';
        }
        $seller->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('seller.index');
    }


    public function edit($id){
        $seller = Seller::find($id);
        return view('admin.seller.edit',compact('seller'));
    }

    public function update(Request $request,$id){
        if ($request->hasFile('image')) {
            $seller = Seller::find($id);
             // ลบรูปภาพ
            if ($seller->image != 'nopic.jpg') {
                File::delete(public_path() . '/backend/upload/seller/' . $seller->image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/backend/upload/seller/', $filename);
            Image::make(public_path() . '/backend/upload/seller/' . $filename);
            $seller->image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $seller->nameth = $request->nameth;
            $seller->nameen = $request->nameen;
            $seller->price = $request->price;
           
          
          
        } else{
            //เพิ่มฟิล์ดในกรณีที่ไม่มีรูปภาพ
            $seller = Seller::find($id);
            $seller->nameth = $request->nameth;
            $seller->nameen = $request->nameen;
            $seller->price = $request->price;
        }
        
        $seller->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('seller.index');
    }





    public function delete($id){
        $seller = Seller::find($id);
        if ($seller->image != 'nopic.jpg') {
            File::delete(public_path() . '/backend/upload/seller/' . $seller->image);
        }
        $seller->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('seller.index');
    }
}

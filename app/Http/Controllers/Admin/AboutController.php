<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abouts;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = Abouts::Paginate(4);
        return view('admin.about.index',compact('about'));
    }

    public function createfome(){
        return view('admin.about.create');
    }

    public function insert(Request $request){
        $about= new Abouts();
        $about->name = $request->name;
        $about->detail = $request->detail;
        $about->image = $request->image;
        $about->save();
        toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('about.index');
    }

    public function edit($id){
        $about = Abouts::find($id);
        return view('admin.about.editform',compact('about'));
    }

    public function update(Request $request, $id){
        $about = Abouts::find($id);
        $about->name = $request->name;
        $about->detail = $request->detail;
        $about->update();
        toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('about.index');
    }

    public function delete($id){
        $about = Abouts::find($id);
        $about->delete();
        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('about.index');
    }
}

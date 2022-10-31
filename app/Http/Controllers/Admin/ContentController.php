<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contents;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        $content = Contents::Paginate(4);
        return view('admin.content.index',compact('content'));
    }

    public function createfome(){
        return view('admin.content.create');
    }

    public function insert(Request $request){
        $content = new Contents();
        $content->name = $request->name;
        $content->detail = $request->detail;
        $content->image = $request->image;
        $content->save();
        toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('content.index');
    }

    public function edit($id){
        $content = Contents::find($id);
        return view('admin.content.editform',compact('content'));
    }

    public function update(Request $request, $id){
        $content = Contents::find($id);
        $content->name = $request->name;
        $content->detail = $request->detail;
        $content->update();
        toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('content.index');
    }

    public function delete($id){
        $content = Contents::find($id);
        $content->delete();
        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('content.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller 
{
    //課題3・4　　
    //以下にあるadd Action と edit Action を描画するには、
    //それぞれどこのディレクトリに何というbladeファイルを設置すれば良いでしょうか。
    //※ファイルの名前（検索）・・・addのblade：create.blade.php   editのblade:edit.blade.php
    
    
    public function add(){
        return view('admin.profile.create');
    }
    
    public function create(){
        return redirect('admin/profile/create');
    }
    
    public function edit(){
        return view('admin.profile.edit');
    }
    
    //update action
    public function update(){
        return redirect('admin/profile/edit');
    }
}

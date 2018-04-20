<?php

namespace App\Http\Controllers\Home;

use App\Model\Tools\Api\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SheetController extends Controller
{

    public function index()
    {
//        $res = Api::get();
//        return view('home.sheet.index', ['res' => $res]);
        return '分享页面';
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

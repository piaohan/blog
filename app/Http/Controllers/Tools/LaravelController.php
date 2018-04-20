<?php

namespace App\Http\Controllers\Tools;

use App\Model\Tools;
use App\Model\Tools\Api\Api;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //数据库迁移 可用的数据列类型
//        $db_type = array(
//
//            );
////
//        for ($i=0;$i <= count($db_type)-1;$i++){
//            $db_type[$i]['created_at']=Carbon::now();
//            $db_type[$i]['updated_at']=Carbon::now();
////            $db_type[$i]['flag']=0;
//            $db_type[$i]['tid']=1;
//            Api::insert($db_type[$i]);
//        }
//        $tools=[
//            "tname"=>'迁移:可用的数据列类型',
//            'created_at'=>Carbon::now(),
//            'updated_at'=>Carbon::now(),
//        ];
//        Tools::insert($tools);

        return 11;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

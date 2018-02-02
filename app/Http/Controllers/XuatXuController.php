<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\XuatXu;

class XuatXuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsXuatXu = XuatXu::all();
        return view('backend.xuatxu.index')->with('dsXuatXu',$dsXuatXu);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.xuatxu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        $xuatxu = new XuatXu();
        $xuatxu->xx_ten = $request->xx_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $xuatxu->xx_taomoi = $request->xx_taomoi;
        $xuatxu->xx_capnhat = $request->xx_capnhat;
        $xuatxu->xx_trangthai = $request->xx_trangthai;
        $xuatxu->save();

        return redirect(route('xuatxu.index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
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
        $xuatxu = XuatXu::find($id);
        return view('backend.xuatxu.edit')->with('xuatxu', $xuatxu); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
        $xuatxu = XuatXu::find($id);
        $xuatxu->xx_ten = $request->xx_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $xuatxu->xx_taomoi = $request->xx_taomoi;
        $xuatxu->xx_capnhat = $request->xx_capnhat;
        $xuatxu->xx_trangthai = $request->xx_trangthai;
        $xuatxu->save();

        return redirect(route('xuatxu.index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
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
}

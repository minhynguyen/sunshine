<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loai;

class LoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLoai = Loai::all();
        return view('backend.loai.index')->with('dsLoai',$dsLoai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.loai.create');
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
        $loai = new Loai();
        $loai->l_ten = $request->l_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $loai->l_taomoi = $request->l_taomoi;
        $loai->l_capnhat = $request->l_capnhat;
        $loai->l_trangthai = $request->l_trangthai;
        $loai->save();

        return redirect(route('loai.index')); //trả về trang cần hiển thị
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
        $loai = Loai::find($id);
        return view('backend.loai.edit')->with('loai', $loai); 
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
        $loai = Loai::find($id);
        $loai->l_ten = $request->l_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $loai->l_taomoi = $request->l_taomoi;
        $loai->l_capnhat = $request->l_capnhat;
        $loai->l_trangthai = $request->l_trangthai;
        $loai->save();

        return redirect(route('loai.index')); //trả về trang cần hiển thị
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
        $loai = Loai::find($id);
        $loai->delete();
        return redirect(route('loai.index'));
    }
}

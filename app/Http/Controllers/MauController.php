<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mau;

class MauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $dsMau = Mau::all();
         return view('backend.mau.index')->with('dsMau',$dsMau);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.mau.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //luu vao csdl
        $mau = new Mau();
        // $chude->cd_ten = $request->cd_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $mau->m_ten = $request->m_ten;
        $mau->m_taomoi = $request->m_taomoi;
        $mau->m_capnhat = $request->m_capnhat;
        $mau->m_trangthai = $request->m_trangthai;
        $mau->save();
        return redirect(route('mau.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //hien thi lai du lieu cho ngui dung sua
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //luu lai thong tin nguoi dung da sua vao csdl
        $mau = mau::find($id);
        return view('backend.mau.edit')->with('mau', $mau);
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
        //
        try{
        $mau = mau::find($id);
        $mau->m_ten = $request->m_ten;
        $mau->m_taomoi = $request->m_taomoi;
        $mau->m_capnhat = $request->m_capnhat;
        $mau->m_trangthai = $request->m_trangthai;
        $mau->save();
        

        return redirect(route('mau.index')); //trả về trang cần hiển thị
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
        $mau = mau::find($id);
        $mau->delete();
        return redirect(route('mau.index'));
    }
}

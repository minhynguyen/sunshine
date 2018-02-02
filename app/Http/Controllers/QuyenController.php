<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quyen;

class QuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsQuyen = Quyen::all();
        return view('backend.quyen.index')->with('dsQuyen',$dsQuyen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.quyen.create');
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
        $quyen = new Quyen();
        $quyen->q_ten = $request->q_ten; //trước giống tên cột sau giống tên input ở form nhập liệu\
        $quyen->q_diengiai = $request->q_diengiai;
        $quyen->q_taomoi = $request->q_taomoi;
        $quyen->q_capnhat = $request->q_capnhat;
        $quyen->q_trangthai = $request->q_trangthai;
        $quyen->save();

        return redirect(route('quyen.index')); //trả về trang cần hiển thị
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
        $quyen = Quyen::find($id);
        return view('backend.quyen.edit')->with('quyen', $quyen);
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
        $quyen = Quyen::find($id);
        $quyen->q_ten = $request->q_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $quyen->q_diengiai = $request->q_diengiai;
        $quyen->q_taomoi = $request->q_taomoi;
        $quyen->q_capnhat = $request->q_capnhat;
        $quyen->q_trangthai = $request->q_trangthai;
        $quyen->save();

        return redirect(route('quyen.index')); //trả về trang cần hiển thị
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
        $quyen = Quyen::find($id);
        $quyen->delete();
        return redirect(route('quyen.index'));
    }
}

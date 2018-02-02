<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\Loai;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsSanPham = SanPham::all();
        return view('backend.sanpham.index')->with('dsSanPham',$dsSanPham);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsLoai = Loai::all();
        return view('backend.sanpham.create')->with('dsLoai',$dsLoai);
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
        $sanpham = new SanPham();
        $sanpham->sp_ten = $request->sp_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sanpham->sp_giagoc = $request->sp_giagoc;
        $sanpham->sp_giaban = $request->sp_giaban;
        // $sanpham->sp_hinh = $request->sp_hinh;
        // kiểm tra file


        if($request->hasFile('sp_hinh')){
            $file = $request->sp_hinh;
            $sanpham->sp_hinh = $file->getClientOriginalName();
            $file->move('upload', $sanpham->sp_hinh); //hàm này di chuyển ảnh tới thư mục public/upload
        }

        $sanpham->sp_thongtin = $request->sp_thongtin;
        $sanpham->sp_danhgia = $request->sp_danhgia;
        $sanpham->sp_taomoi = $request->sp_taomoi;
        $sanpham->sp_capnhat = $request->sp_capnhat;
        $sanpham->sp_trangthai = $request->sp_trangthai;
        $sanpham->l_ma = $request->l_ma;
        $sanpham->save();

        return redirect(route('sanpham.index')); //trả về trang cần hiển thị
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
        $dsLoai = Loai::all();
        $sanpham = SanPham::find($id);
        return view('backend.sanpham.edit')->with('sanpham', $sanpham)->with('dsLoai',$dsLoai);
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
        $sanpham = SanPham::find($id);
        $sanpham->sp_ten = $request->sp_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sanpham->sp_giagoc = $request->sp_giagoc;
        $sanpham->sp_giaban = $request->sp_giaban;
        // $sanpham->sp_hinh = $request->sp_hinh;
        if($request->hasFile('sp_hinh')){
            $file = $request->sp_hinh;
            $sanpham->sp_hinh = $file->getClientOriginalName();
            $file->move('upload', $sanpham->sp_hinh); //hàm này di chuyển ảnh tới thư mục public/upload
        }
        $sanpham->sp_thongtin = $request->sp_thongtin;
        $sanpham->sp_danhgia = $request->sp_danhgia;
        $sanpham->sp_taomoi = $request->sp_taomoi;
        $sanpham->sp_capnhat = $request->sp_capnhat;
        $sanpham->sp_trangthai = $request->sp_trangthai;
        $sanpham->l_ma = $request->l_ma;
        $sanpham->save();

        return redirect(route('sanpham.index')); //trả về trang cần hiển thị
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
        $sanpham = SanPham::find($id);
        $sanpham->delete();
        // if($sanpham->hasFile('sp_hinh')){
        //     $file = $sanpham->sp_hinh;
        //     $sanpham->sp_hinh = $file->getClientOriginalName();
        //     $file->remove('upload', $sanpham->sp_hinh);
        // }
        return redirect(route('sanpham.index'));
    }
}

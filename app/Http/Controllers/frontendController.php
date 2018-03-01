<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\Loai;
use App\ChuDe;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dsSanPham = SanPham::all();
         $dsLoai = Loai::all();
         $dsChude = ChuDe::all();

        return view('frontend.index')->with('dsSanPham', $dsSanPham)
                                     ->with('dsLoai', $dsLoai)
                                     ->with('dsChude', $dsChude);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @r, n \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
    public function showviewcheckout()
    {
        return view('frontend.checkout');
    }
    public function testMail()
    {
        return Mail::to('minhyrick@gmail.com')->send(new OrderdShip());
    }
    public function checkoutJson(Request $request)
    {
        $input = $request->getContent();
        $data = json_decode($input, true);
        Mail::to('tester.agmk@gmaill.com')->send(new OrderdShip($data));
        return $data;
    }
    public function dsSanpham_timkiem($tuKhoa, $maLoai, $maChude, $giaTu, $giaDen){
        try{
            $sql = "SELECT * FROM sanpham";
            $sqlWhere = "";
            if($tuKhoa != "-" ||
                $maLoai !=0 ||
                $maChude !=0 ||
                $giaTu !=0 ||
                $giaDen !=0 ){
                $sql .= " WHERE ";
                if($tuKhoa != "-"){
                    $sqlWhere = "sp_ten like '%".$tuKhoa. "%' or sp_thongtin like '%". $tuKhoa."%')";
                }
                if($maLoai !== 0){
                    if($sqlWhere != ""){
                        $sqlWhere .= " AND ";
                    }
                    $sqlWhere .= "l_ma = $maLoai";
                }
                if($maChude !== 0){
                    if($sqlWhere != ""){
                        $sqlWhere .= " AND ";
                    }
                    $sqlWhere .= "sp_ma in(select distinct sp_ma from chude_sanpham where cd_ma = $maChude";
                }
                if($giaTu !== 0){
                    if($sqlWhere != ""){
                        $sqlWhere .= " AND ";
                    }
                    $sqlWhere .= "sp_giaban >= $giaTu";
                }
                if($giaDen !== 0){
                    if($sqlWhere != ""){
                        $sqlWhere .= " AND ";
                    }
                    $sqlWhere .= "sp_giaban <= $giaDen";
                }
                $sql = $sqlWhere;

            }
            $dsSanPham = DB::select($sql);
            $dsLoai = Loai::all();
            $dsChude = ChuDe::all();
            return view('frontend.index', [
                'dsLoai' =>$dsLoai,
                'dsChude' =>$dsChude,
                'dsSanPham' =>$dsSanPham,
                'tuKhoa' => ($tuKhoa=="-" ? "" : $tuKhoa),
                'maLoai' =>$maLoai,
                'maChude' =>$maChude,
                'giaTu' =>$giaTu,
                'giaDen' =>$giaDen,

            ]);

        }
        
        catch(QueryException $ex){
            return reponse([
                'error' => true,
                'message' => $ex->getMessage()
            ], 200);

        } catch(PDOExpection $ex){
            return reponse([
                'error' => true,
                'message' => $ex->getMessage()
            ], 200);
        }
    }
}   

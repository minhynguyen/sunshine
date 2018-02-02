<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChuDe;
use App\Http\Requests\ChuDeRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel as Excel;

class ChuDeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //hàm hiển thị ra màn hình
        $dsChude = ChuDe::all();
        return view('backend.chude.index')->with('dsChude',$dsChude);
                //thư mục chứa view //hàm with có 2 tham số  ('nhãnđểquaviewgọi', $[biến truyền vào]
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.chude.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChuDeRequest $request)
    {
        //dd($request);
        // required: bắt buộc nhập
        // max:10: tối đa 10 chữ
        // unique:tênbảng: bắt lõi duy nhất
        $validatedData = $request->validate([
        'cd_ten' => 'required|max:10',
        'cd_taomoi' => 'required',
        'cd_capnhat' => 'required',
        'cd_trangthai' => 'required',

        ]);
        try{
        $chude = new ChuDe();
        $chude->cd_ten = $request->cd_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $chude->cd_taomoi = $request->cd_taomoi;
        $chude->cd_capnhat = $request->cd_capnhat;
        $chude->cd_trangthai = $request->cd_trangthai;
        $chude->save();

        return redirect(route('chude.index')); //trả về trang cần hiển thị
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
        //
        $chude = ChuDe::find($id);
        return view('backend.chude.edit')->with('chude', $chude); 
                                                // tên này truyền vào view giống action
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChuDeRequest $request, $id)
    {
        // $validatedData = $request->validate([
        // 'cd_ten' => 'required|max:10',
        // 'cd_taomoi' => 'required',
        // 'cd_capnhat' => 'required',
        // 'cd_trangthai' => 'required',

        // ]);
        try{
        $chude = ChuDe::find($id);
        $chude->cd_ten = $request->cd_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $chude->cd_taomoi = $request->cd_taomoi;
        $chude->cd_capnhat = $request->cd_capnhat;
        $chude->cd_trangthai = $request->cd_trangthai;
        $chude->save();

        return redirect(route('chude.index')); //trả về trang cần hiển thị
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
        $chude = ChuDe::find($id);
        $chude->delete();
        return redirect(route('chude.index')); //trả về trang cần hiển thị
       
    }

    public function pdf()
    {
        try{
            $dsChude = ChuDe::all();
            // $dsChude = ChuDe::take(20)->get(); // hàm này lấy 20 dòng không lấy hết
            //dd($dsChude);
            $data = [
                'dsChude' => $dsChude,
            ];
            // xem trước pdf
            return view('backend.chude.chudepdf')->with('dsChude', $dsChude);

            // xuất pdf và cho download
            $pdf = PDF::loadView('backend.chude.chudepdf', $data);
            return $pdf->download('DanhMucChuDe.pdf');
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
    public function excel()
    {
        try{
        Excel::create('DanhMucChuDe', function($excel){
            $excel->sheet('danh mục chủ đề', function($sheet){
                $dsChude = ChuDe::all();
                    $data = [
                    'dsChude' => $dsChude,
                ];
            $sheet->loadView("backend.chude.chudeexcel", $data);
            });


        })->download('xlsx');
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

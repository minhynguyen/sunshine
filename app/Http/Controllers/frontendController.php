<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;

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

        return view('frontend.index')->with('dsSanPham', $dsSanPham);
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
}   

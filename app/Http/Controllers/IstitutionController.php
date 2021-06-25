<?php

namespace App\Http\Controllers;

use App\istitution;
use Illuminate\Http\Request;

class IstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  echo 'Coba coba';
      $istitutions = istitution::all();
      return response()->json($istitutions);
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
     * @param  \App\istitution  $istitution
     * @return \Illuminate\Http\Response
     */
    public function show(istitution $istitution)
    {
        //return $istitution;
      
      $data = istitution::where('id', $istitution)->first();
         if(!empty($data)){
          return $data;
          }
          return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\istitution  $istitution
     * @return \Illuminate\Http\Response
     */
    public function edit(istitution $istitution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\istitution  $istitution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, istitution $istitution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\istitution  $istitution
     * @return \Illuminate\Http\Response
     */
    public function destroy( $istitution)
    {
       $data = istitution::where('id', $istitution)->first();
       if(empty($data)){
           return response()->json('message' => 'Data Tidak Ditemukan'), 404);

           }      
            $data->delete();
          return response()->json('message' => 'Data Berhasil Dihapus'), 200);
        // $istitution->delete();
        // return response()->json([
        //     'message' => 'Data Berhasil Dihapus'
        //]);
    }
}

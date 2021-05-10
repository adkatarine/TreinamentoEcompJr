<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyJr;
use App\Models\Federation;
use Redirect;

class CompanyJrController extends Controller
{



    public function buscarFederacao(Request $request){
        
        $empresas = CompanyJr::get();
        $selecionado = $request->selecionado;
        if($selecionado != -1){
            $empresas = CompanyJr::where('federation_id', $selecionado)->get();
        }

        return view('listCompanyJr', ['empresas' => $empresas, 'selecionado' => $selecionado]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $federacoes = Federation::all();
        return view('companyJr', ['federacoes' => $federacoes]);
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
        $company = new CompanyJr;
        $company->nome = $request->nome;
        $company->federation_id = $request->federation_id;
        $company->save();
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $empresas = CompanyJr::all();
        return view('listCompanyJr',['empresas' => $empresas]);
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
}

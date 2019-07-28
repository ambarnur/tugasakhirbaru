<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lembaga_survey;
use App\Provinsi;
use App\Kabupaten;
use App\Kecamatan;

class RegisterAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $lembaga = Lembaga_survey::findOrFail($id);
        $lembaga_id = $id;
        return view('auth.register_akun', compact('lembaga','lembaga_id'));
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $this->validate($request, Lembaga_survey::rules());
        dd($request->all());
        Lembaga_survey::create($request->all());
        return redirect('/registrasi_akun/'.$lembaga->id)->withSuccess(trans('app.success_store'));
    } 
}


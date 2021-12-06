<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dia;
use App\Models\Federacion;
use App\Models\Ficha;
use App\Models\Mes;
use App\Models\Pais;
use App\Models\User;
use App\Models\Year;
use Illuminate\Http\Request;
use Carbon\Carbon;


class FichaController extends Controller
{

    public function __construct()
    {
        //protegue las rutas
        $this->middleware('can:admin.fichas.index')->only('index');    
        //$this->middleware('can:admin.fichas.edit')->only('edit', 'update');      
    
      }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas = Ficha::all(); 
    
        return view('admin.fichas.index', compact('fichas'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        
 
}
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficha $ficha)
    {

        //recupero el día, mes y año
        $fecha = Carbon::parse($ficha->fecha_naci);
        $mfecha = $fecha->month;
        $dfecha = $fecha->day;
        $yfecha = $fecha->year;

        //recupero el id del año de la fecha de nacimiento
        $idyearfecha = Year::where('nombre', $yfecha)->first()->id;
        //$this->authorize('Admin', $ficha);
        $usuario = User::pluck('firstname', 'id');
        $federaciones = Federacion::pluck('nombre', 'id');
        $dias = Dia::pluck('nombre', 'id');
        $meses = Mes::pluck('nombre', 'id');
        $years = Year::pluck('nombre', 'id');

        $paises = Pais::pluck('nombre', 'id');

        return view('admin.fichas.edit', compact('usuario', 'federaciones', 'ficha', 'dias', 'meses', 'years', 'dfecha', 'mfecha', 'idyearfecha', 'paises'));
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

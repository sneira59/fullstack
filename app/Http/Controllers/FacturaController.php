<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Factura;
use App\Models\Items;


use PDF;

class FacturaController extends Controller
{
    public function index()
    {
        $c = DB::table('clientes')
        ->select('id','nombre')
        ->get();

        $f = DB::table('facturas')
        ->select('idfactura')
        ->get();

        return view('factura.index')->with('c',$c)->with(compact('f')) ;
    }

    public function factura(Request $request, $id)
    {
        $suma=0;

        $a= DB::table('items')->where('clientes.id_cli','=',$id)
        ->select(
            'clientes.id_cli',
            'clientes.nombre_cli',
            'items.nombre',
            'items.ValorUnitario',
        )
        ->join('clientes','items.fk_cli', '=', 'clientes.id_cli')
        ->get();

        $b= DB::table('clientes')->where('clientes.id_cli','=',$id)
        ->select(
            'clientes.id_cli',
            'clientes.nombre_cli',
            'clientes.apellido',

        )
        ->get();

        $c= DB::table('facturas')->where('clientes.id_cli','=',$id)
        ->select(
            'facturas.idfactura',
            'clientes.id_cli',
        )
        ->join('clientes','facturas.fk_cliente', '=', 'clientes.id_cli')
        ->get();

        $e= DB::table('items')->where('clientes.id_cli','=',$id)
        ->select(
            'clientes.id_cli',
            'clientes.nombre_cli',
            'items.nombre',
            'items.ValorUnitario',
        )
        ->join('clientes','items.fk_cli', '=', 'clientes.id_cli')
        ->sum('items.ValorUnitario');


        $d = new Factura();
        $d->valortotal = $request->input('name');
        $d->nombreEmpresa = $request->input('e');
        $d->fk_cliente = $request->input('a');
        $d->save();

        return $pdf = \PDF::loadView('pdf.factura',compact('a','b','c','e'))->stream('factura.pdf');

    }
}

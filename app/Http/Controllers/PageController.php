<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;
use App\Orden;

class PageController extends Controller
{
  //  { public function index()
  //   {
  //     $items = [
  //         'Consultas'          => ['submenu' => [
  //             'Proveedor' => [ 'url' => 'proveedor' ],
  //             'Orden de compra' => ['url' => 'ordencompra'],
  //             'Pendiente por G.S.I' => ['url' => 'pendientegsi']
  //           ]
  //          ],
  //         'Lotes'         => ['submenu' => [
  //             'Por enviar' => [ 'url' => 'porenviar'],
  //             'Por Cargar' => ['url' => 'porcargar'],
  //             'Cargado' => ['url' => 'cargado']
  //         ]
  //       ]
  //     ];

  //       return view('home',compact('items'));
  //   }

  //   public function porcargar()
  //   {
  //     $items = [
  //         'Consultas'          => ['submenu' => [
  //             'Proveedor' => [ 'url' => 'proveedor' ],
  //             'Orden de compra' => ['url' => 'ordencompra'],
  //             'Pendiente por GSI' => ['url' => 'pendientegsi']
  //           ]
  //          ],
  //         'Lotes'         => ['submenu' => [
  //             'Por enviar' => [ 'url' => 'porenviar'],
  //             'Por Cargar' => ['url' => 'porcargar'],
  //             'Cargado' => ['url' => 'cargado']
  //         ]
  //       ]
  //     ];
  //       return view('porcargar',compact('items'));
  //   }

  //   public function porenviar()
  //   {
  //     $items = [
  //         'Consultas'          => ['submenu' => [
  //             'Proveedor' => [ 'url' => 'proveedor' ],
  //             'Orden de compra' => ['url' => 'ordencompra'],
  //             'Pendiente por GSI' => ['url' => 'pendientegsi']
  //           ]
  //          ],
  //         'Lotes'         => ['submenu' => [
  //             'Por enviar' => [ 'url' => 'porenviar'],
  //             'Por Cargar' => ['url' => 'porcargar'],
  //             'Cargado' => ['url' => 'cargado']
  //         ]
  //       ]
  //     ];
  //       return view('porenviar',compact('items'));
  //   }

  //   public function cargado()
  //   {
  //     $items = [
  //         'Consultas'          => ['submenu' => [
  //             'Proveedor' => [ 'url' => 'proveedor' ],
  //             'Orden de compra' => ['url' => 'ordencompra'],
  //             'Pendiente por GSI' => ['url' => 'pendientegsi']
  //           ]
  //          ],
  //         'Lotes'         => ['submenu' => [
  //             'Por enviar' => [ 'url' => 'porenviar'],
  //             'Por Cargar' => ['url' => 'porcargar'],
  //             'Cargado' => ['url' => 'cargado']
  //         ]
  //       ]
  //     ];
  //       return view('cargado',compact('items'));
  //   }

  //   function index1()
  //   {
  //     $proveedores = Proveedores::all();
  //     return view('proveedor', compact('proveedores'));
  //   }



}

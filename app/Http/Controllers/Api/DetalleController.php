<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Detalles\DetalleStoreRequest;
use App\Http\Requests\Api\Detalles\DetalleUpdateRequest;
use App\Models\Detalle;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as Controller;

class DetalleController extends Controller
{
    //Listar todos LOS REGISTROS
    public function index()
    {
        $lista = Detalle::all();
        return $this->sendResponse($lista, "LISTADO DE DETALLES RECUPERADO");
    }
    //Recuperar  por id
    public function show(Detalle $detalle)
    {
        return $this->sendResponse($detalle, "DETALLE RECUPERADO");
    }
    //Editar POR EL ID
    public function update(DetalleUpdateRequest $request, Detalle $detalle)
    {
        $detalle->update($request->all());
        return $this->sendResponse($detalle, "DETALLE EDITADO");
    }
    //Eliminar
    public function destroy(Detalle $detalle)
    {
        $detalle->delete();
        return $this->sendResponse($detalle, "DETALLE ELIMINADO");
    }

    //Crear
    public function store(DetalleStoreRequest $request)
    {
        $detalle = Detalle::create($request->all());
        return $this->sendResponse($detalle, "DETALLE CREADO");
    }
}

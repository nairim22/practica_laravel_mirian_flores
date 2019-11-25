<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Facturas\FacturaStoreRequest;
use App\Http\Requests\Api\Facturas\FacturaUpdateRequest;
use App\Models\Factura;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class FacturaController extends BaseController
{
    //Listar todos LOS REGISTROS
    public function index()
    {
        $lista = Factura::all();
        return $this->sendResponse($lista, "LISTADO   DE FACTURAS RECUPERADO");
    }
    //Recuperar  por id
    public function show(Factura $factura)
    {
        return $this->sendResponse($factura, "FACTURA RECUPERADO");
    }
    //Editar POR EL ID
    public function update(FacturaUpdateRequest $request, Factura $factura)
    {
        $factura->update($request->all());
        return $this->sendResponse($factura, "FACTURA EDITADO");
    }
    //Eliminar
    public function destroy(Factura $factura)
    {
        $factura->delete();
        return $this->sendResponse($factura, "FACTURA ELIMINADO");
    }

    //Crear
    public function store(FacturaStoreRequest $request)
    {
        $factura = Factura::create($request->all());
        return $this->sendResponse($factura, "FACTURA CREADO");
    }
}

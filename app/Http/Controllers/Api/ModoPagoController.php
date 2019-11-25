<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\ModoPagos\ModoPagoStoreRequest;
use App\Http\Requests\Api\ModoPagos\ModoPagoUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

use App\Models\ModoPago;

class ModoPagoController extends BaseController
{

    //Listar todos LOS REGISTROS
    public function index()
    {
        $lista = ModoPago::all();
        return $this->sendResponse($lista, "LISTA DE FORMAS DE PAGO RECUPERADO");
    }

    //Recuperar  por id
    public function show(ModoPago $tipoPago)
    {
        return $this->sendResponse($tipoPago, "FORMA DE PAGO RECUPERADO");
    }

    //Editar POR EL ID
    public function update(ModoPagoUpdateRequest $request, ModoPago $modoPago)
    {
        $modoPago->update($request->all());
        return $this->sendResponse($modoPago, "FORMA DE PAGO EDITADO");
    }

    //Eliminar
    public function destroy(ModoPago $modoPago)
    {
        $modoPago->delete();
        return $this->sendResponse($modoPago, "FORMA DE PAGO ELIMINADO");
    }

    //Crear
    public function store(ModoPagoStoreRequest $request)
    {
        $modoPago = ModoPago::create($request->all());
        return $this->sendResponse($modoPago, "FORMA DE PAGO CREADO");
    }
}

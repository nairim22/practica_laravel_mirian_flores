<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Productos\ProductoStoreRequest;
use App\Http\Requests\Api\Productos\ProductoUpdateRequest;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class ProductoController extends BaseController
{
    //Listar todos LOS REGISTROS
    public function index()
    {
        $lista = Producto::all();
        return $this->sendResponse($lista, "LISTA DE PRODUCTOS RECUPERADO");
    }
    //Recuperar  por id
    public function show(Producto $producto)
    {
        return $this->sendResponse($producto, "PRODUCTO RECUPERADO");
    }
    //Editar POR EL ID
    public function update(ProductoUpdateRequest $request, Producto $producto)
    {
        $producto->update($request->all());
        return $this->sendResponse($producto, "PRODUCTO EDITADO");
    }
    //Eliminar
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return $this->sendResponse($producto, "PRODUCTO ELIMINADO");
    }

    //Crear
    public function store(ProductoStoreRequest $request)
    {
        $producto = Producto::create($request->all());
        return $this->sendResponse($producto, "PRODUCTO CREADO");
    }
}

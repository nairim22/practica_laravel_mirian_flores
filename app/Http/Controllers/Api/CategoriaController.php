<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Categorias\CategoriaStoreRequest;
use App\Http\Requests\Api\Categorias\CategoriaUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Models\Categoria;

class CategoriaController extends BaseController
{
    //Listar todos LOS REGISTROS
    public function index()
    {
        $lista = Categoria::all();
        return $this->sendResponse($lista, "LISTA DE CATEGORIA RECUPERADO");
    }
    //Recuperar  por id
    public function show(Categoria $categoria)
    {
        return $this->sendResponse($categoria, "CATEGORIA RECUPERADO");
    }
    //Editar POR EL ID
    public function update(CategoriaUpdateRequest $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return $this->sendResponse($categoria, "CATEGORIA EDITADO");
    }
    //Eliminar
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return $this->sendResponse($categoria, "CATEGORIA ELIMINADO");
    }

    //Crear
    public function store(CategoriaStoreRequest $request)
    {
        $categoria = Categoria::create($request->all());
        return $this->sendResponse($categoria, "CATEGORIA CREADO");
    }
}

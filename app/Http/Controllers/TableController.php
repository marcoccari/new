<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Inertia\Inertia;

use Illuminate\Http\Request;

class TableController extends Controller{
    public function index(){
        $data = Producto::all();
        $columns = Producto::getTableColumns();

        return Inertia::render('Table/Index', compact('data', 'columns'));
    }
}

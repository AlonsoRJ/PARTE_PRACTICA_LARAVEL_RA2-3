<?php
namespace App\Http\Controllers;
use App\Models\LibroAR;
class LibroARController extends Controller
{
    public function index()
    {
        $libros = LibroAR::all();
        return view('libros.index', compact('libros'));
    }
}
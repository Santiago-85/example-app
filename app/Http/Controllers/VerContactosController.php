<?php
namespace App\Http\Controllers;
use App\Models\Contact; // Asegúrate de importar el modelo
use Illuminate\Http\Request;
class VerContactosController extends Controller
{
    public function index() {
        $contactos = Contact::orderBy('created_at', 'desc')->get(); // Obtén todos los contactos ordenados
        return view('mis-views.vercontacto'); // Retorna la vista con los contactos
    }
    //
}

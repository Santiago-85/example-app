<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoRecibido;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactoController extends Controller
{
    public function index()
    {
        return view('mis-views.contacto');
    }

    public function send(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'mensaje' => 'required',
        ]);
        $input = $request->input();
        $input['publicidad'] = isset($input['publicidad']);
        Contact::create($input);


        Mail::send(new ContactoRecibido($request->input()));
        return redirect(route('contactado'), 302);
    }

    public function contacted()
    {
        return view('mis-views.contactado');
    }

}


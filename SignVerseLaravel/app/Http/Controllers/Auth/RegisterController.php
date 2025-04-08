<?php

namespace App\Http\Controllers\Auth;

use App\Models\Genero;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\TipoDocumento;  // Asegúrate de importar el modelo TipoDocumento
use App\Models\Ciudad;  // Importa el modelo Ciudad
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        // Cargar todos los tipos de documento
        $tipos_documento = TipoDocumento::all();

         // Cargar todas las ciudades
        $ciudades = Ciudad::all();  // Cambia esto si tu modelo Ciudad tiene un nombre diferente
        $generos = Genero::all(); 

        // Pasar los tipos de documento a la vista
        return view('auth.register', compact('tipos_documento', 'ciudades', 'generos'));
    }

    protected function validator(array $data)
    {
         return Validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'name_2' => ['nullable', 'string', 'max:50'],
        'lastname' => ['required', 'string', 'max:50'],
        'lastname_2' => ['nullable', 'string', 'max:50'],
        'num_id' => ['required', 'string', 'max:20'],
        'discapacidad_aud' => ['required', 'boolean'],
        'fecha_naci' => ['required', 'date'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'cod_tipo_doc_fk' => 'required|exists:tipos_documento,id',
        'ciudad_id' => 'required|exists:ciudades,id',
        'cod_genero_fk' => 'required|exists:generos,cod_genero',
    ]);
    }

    protected function create(array $data)
    {
       return User::create([
        'name' => $data['name'],
        'name_2' => $data['name_2'] ?? null,
        'lastname' => $data['lastname'],
        'lastname_2' => $data['lastname_2'] ?? null,
        'num_id' => $data['num_id'],
        'discapacidad_aud' => $data['discapacidad_aud'],
        'fecha_naci' => $data['fecha_naci'],
        'cod_tipo_fk' => 'C', // Cliente por defecto
        'cod_tipo_doc_fk' => $data['cod_tipo_doc_fk'],
        'ciudad_id' => $data['ciudad_id'],
        'cod_genero_fk' => $data['cod_genero_fk'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);
}
}

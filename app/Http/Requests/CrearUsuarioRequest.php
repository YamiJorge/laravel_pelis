<?php
/*Form Request son clases Request personalizadas que contienen lógica de validaciones.
Para crearlas se usa el siguiente comando:

php artisan make:request NombreRequest*/

namespace Cine\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//Para autorizar el uso del request, hay que cambiar de "false" a "true"
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()/*En este caso, definimos que el nombre de usuario, el email y el password sean requeridos.
    */
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users',//Acá se indica que el email debe ser único
            'password' => 'required',
        ];
    }
}

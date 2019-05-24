<?php

namespace Cine;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Pelicula extends Model
{
    protected $fillable = ['nombre','path','reparto','direccion','duracion','id_genero'];

    public function setPathAttribute($path)
    {/*Este es un mutador, donde si subimos un archivo del mismo nombre
    que uno ya subido no se sobreescriba.*/
    if(! empty($path)){/*Ahora agregamos el condicionante de que si el archibo "path" (la foto) no está vacío,
    se podrá modificar*/
            $name = Carbon::now()->second . $path->getClientOriginalName();
            $this->attributes['path'] = $name;
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }

    public static function Peliculas(){/*Acá haremos una query donde enlazaremos las tablas Peliculas y Generos
    mediante el id que tienen en común (el "id" de genero*/
        return DB::table('peliculas')
            ->join('generos','generos.id','=','peliculas.id_genero')
            ->select('peliculas.*', 'generos.genero')
            ->get();
    }
}

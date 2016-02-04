<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asociado extends Model {

    protected $table = 'asociado';
    protected $primaryKey = 'id';
    protected $fillable =['nif','nombre'];

    protected $hidden = ['created_at', 'updated_at','activo'];


    public function consumos()
    {
        return $this->belongsToMany('App\Proveedor','consumo', 'id_asociado','id_proveedor')
        	->withPivot('consumo', 'year');
    }

    
}
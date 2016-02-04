<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

    protected $table = 'proveedor';
    protected $primaryKey = 'id';
    protected $fillable =['nif','nombre','familia'];
    	
    protected $hidden = ['created_at', 'updated_at','user_id'];

	public function gestor()
	{
		return $this->belongsTo('App\User','user_id');
	}

	public function consumos()
    {
        return $this->belongsToMany('App\Asociado','consumo', 'id_proveedor','id_asociado')
        	->withPivot('consumo', 'year');
    }

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlandeObras extends Model
{
    //
	protected $table = 'info_pre_planobras';

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
       protected $fillable = [
       'sector_id', 'financiamiento_id', 'password', 'status', 'nombre', 'year', 'estado', 'beneficiados', 'asignado', 'avance_financiero', 'avance_fisico'
       ];
       public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   /* protected $hidden = [
        'password', 'remember_token',
        ];*/
    }

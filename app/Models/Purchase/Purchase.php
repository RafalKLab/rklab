<?php

namespace App\Models\Purchase;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'purchases';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['price','name','desc','date',];

    // This is auto generated tag do not delete it
    // model relationship

}

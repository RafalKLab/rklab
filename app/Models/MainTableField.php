<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainTableField extends Model
{
    use HasFactory;

    protected $table = 'main_table_fields';

    protected $fillable = [
        'name',
        'type',
        'order',
        'main_table_id',
    ];

//    public function table()
//    {
//        return $this->belongsTo(MainTable::class, 'id');
//    }
}

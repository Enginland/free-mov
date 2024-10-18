<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'type';
    protected $primaryKey = 'type_id';
    public $incrementing = false;
    protected $fillable = [
    'type_id',
    'type_name',
    'type_dec',
    ];

}

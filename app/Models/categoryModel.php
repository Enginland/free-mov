<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'category';
    protected $primaryKey = 'cat_id';
    public $incrementing = false;
    protected $fillable = [
    'cat_id',
    'cat_name',
    'cat_dec',
    ];

}

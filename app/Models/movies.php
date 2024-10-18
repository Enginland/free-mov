<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'movies';
    protected $primaryKey = 'mov_id';
    public $incrementing = false;
    protected $fillable = [
    'mov_id',
    'mov_video',
    'mov_title',
    'mov_dec',
    'mov_cat',
    'mov_type',
    'image',
    ];
}

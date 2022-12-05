<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = ['Name', 'Gender', 'Age', 'Species', 'Race', 'Comments', 'owner_id', 'file'];

    //relacion uno a muchos (inversa)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
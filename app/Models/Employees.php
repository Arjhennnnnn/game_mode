<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{

    protected $guarded = [];
    use HasFactory;


    // public function subordinates()
    // {
    //     return $this->hasMany(Employees::class, 'supervisor_id');
    // }
}
    
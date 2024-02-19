<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasmany;

class College extends Model
{
    protected $fillable = ['name', 'address'];

    public function student(): hasMany
    {
        return $this->hasMany(Student::class);
    }

}

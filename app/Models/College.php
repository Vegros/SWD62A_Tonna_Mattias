<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class College extends Model
{
    //insert college's name and address
    protected $fillable = ['name', 'address'];

    public function students(): HasMany
    {
        //one college has many students
        return $this->hasMany(Student::class);
    }

}

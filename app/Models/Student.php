<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    //insert student name, email, phone, dob, college_id
 protected  $fillable = ['name', 'email', 'phone', 'dob', 'college_id'];

    public function college(): BelongsTo
    {
        //one student belongs to one college
        return $this->belongsTo(College::class);
    }

}

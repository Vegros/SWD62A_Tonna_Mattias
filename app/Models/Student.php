<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
 protected  $fillable = ['name', 'email', 'phone', 'dob', 'college_id'];

    public function college(): BelongsTo
    {
        return $this->belongsTo(College::class);
    }

}

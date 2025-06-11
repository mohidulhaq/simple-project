<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    //
    protected $fillable = ['title','description', 'status', 'deadline','user_id'];

    // protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

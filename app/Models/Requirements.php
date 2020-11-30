<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    protected $fillable = [
        'email',
        'message',
        'type_id',
        'status_id'
    ];

    public function type()
    {
        return $this->hasOne('App\Models\Type', 'type_id');
    }

    public function status()
    {
        return $this->hasOne('App\Models\Status', 'status_id');
    }
}

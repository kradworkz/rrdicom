<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function designation()
    {
        return $this->belongsTo('App\Models\Dropdown', 'designation_id', 'id');
    }

    public function specialty()
    {
        return $this->belongsTo('App\Models\Dropdown', 'specialty_id', 'id');
    }

    public function institution()
    {
        return $this->belongsTo('App\Models\Organization', 'institution_id', 'id');
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }
}
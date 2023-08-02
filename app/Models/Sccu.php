<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sccu extends Model
{
    use HasFactory;

    protected $fillable =[
        'name'
    ];

    public function status(){
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function states(){
        return $this->belongsTo(State::class, 'state_id');
    }
    public function months(){
        return $this->belongsTo(Monthyear::class, 'monthyear');
    }


}

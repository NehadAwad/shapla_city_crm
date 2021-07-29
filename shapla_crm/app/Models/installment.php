<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class installment extends Model
{
    use HasFactory;
    protected $table = "installments";
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'konten';
    protected $fillable = ['konten'];
}

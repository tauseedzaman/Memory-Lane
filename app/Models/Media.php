<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        "type",
        "file_name",
        "memory_id",
        "file_type",
        "file_size",
        "url",
        "description",
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notes_categories extends Model
{
    protected $table ="notes_categories";
    protected $primaryKey ="id";
    protected $fillable =['name'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_Categories extends Model
{
    protected $table ="task_categories";
    protected $primaryKey ="id";
    protected $fillable =['name'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    protected $table ="notes";
    protected $primaryKey ="id";
    protected $fillable =['name',"text_area",'image','notes_categories_id'];
}

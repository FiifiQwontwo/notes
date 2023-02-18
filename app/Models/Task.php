<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Task extends Model
{
    protected $table='task';
    protected $primaryKey ='id';
    protected $fillable =['name','Description','start_date', 'end_date','task_categories_id'];
}

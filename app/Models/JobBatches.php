<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobBatches extends Model
{
    use HasFactory;
    protected $table = 'job_batches';
    protected $primaryKey = 'id';
    protected $guarded =[
        
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeOptions extends Model
{
    use HasFactory;
    protected $table = 'attribute_options';
    protected $primaryKey = ' id';
    protected $guarded = [

    ];

    public function Ao_attribute()
    {
        return $this->belongsTo(Attributes::class, 'attribute_id', 'id');
    }
}
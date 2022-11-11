<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryMan extends Model
{
    use HasFactory;

    protected $table = 'delivery_mens';

    protected $guarded = ['id'];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class, 'delivery_mens_id');
    }
}

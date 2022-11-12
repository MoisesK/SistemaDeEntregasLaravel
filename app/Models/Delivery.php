<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $table = 'deliveries';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $with = ['deliveryMan'];

    public function deliveryMan()
    {
        return $this->belongsTo(DeliveryMan::class, 'delivery_mens');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('deadline', 'asc');
        });
    }
}

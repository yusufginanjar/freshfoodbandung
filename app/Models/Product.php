<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('badge', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
        });

        $query->when($filters['filter'] ?? false, function ($query, $badge) {
            return $query->where('badge', $badge);
        });

        $query->when($filters['sort'] ?? false, function ($query, $sort) {
            if ($sort == "name") {
                return $query->orderBy($sort);
            }

            if ($sort == "lowest-price") {
                return $query->orderBy('price', 'asc');
            }

            if ($sort == "highest-price") {
                return $query->orderBy('price', 'desc');
            }
        });
    }
}

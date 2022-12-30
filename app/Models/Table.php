<?php

namespace App\Models;

use App\Enums\TableLocation;
use App\Enums\TableStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'tables';
    protected $fillable = ['name', 'guest_number', 'location', 'status'];
    protected $casts = [
        'status' => TableStatus::class,
        'location' => TableLocation::class
    ];
}

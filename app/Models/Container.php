<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    /** @use HasFactory<\Database\Factories\ContainerFactory> */
    use HasFactory;

    protected $fillable = ['number', 'status', 'command_id'];

    protected $casts = [
        'number' => 'integer',
    ];

    public const STATUS_AVAILABLE = 'available';
    public const STATUS_IN_USE = 'in_use';
    public const STATUS_OUT = 'out_of_service';

    
    public function command()
    {
        return $this->belongsTo(Command::class);
    }
}

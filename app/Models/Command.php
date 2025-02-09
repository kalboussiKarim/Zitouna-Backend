<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    /** @use HasFactory<\Database\Factories\CommandFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_weight',
        'price',
        'liters_produced',
        'barrels_provided'
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function containers()
    {
        return $this->hasMany(Container::class);
    }

    public function steps()
    {
        return $this->hasMany(CommandStep::class);
    }
    

    protected static function booted()
    {
        static::created(function ($command) {
            $steps = [
                'Weight',
                'Cleaning & Washing',
                'Crushing/Grinding',
                'Malaxation',
                'Separation',
                'Filtration & Storage'
            ];

            foreach ($steps as $step) {
                $command->steps()->create([
                    'step_name' => $step,
                    'status' => 'pending'
                ]);
            }
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandStep extends Model
{
    /** @use HasFactory<\Database\Factories\CommandStepFactory> */
    use HasFactory;

    protected $fillable = ['step_name', 'status', 'started_at', 'completed_at'];

    
    public const STATUS_PENDING = 'pending';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_COMPLETED = 'completed';

    
    public function command()
    {
        return $this->belongsTo(Command::class);
    }
}

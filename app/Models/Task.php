<?php

namespace App\Models;

use App\Events\TaskUpdatedEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'project_id',
        'title',
        'description',
        'status',
        'complete_by',
        'time',
    ];

    protected $dispatchesEvents = [
        'saving' => TaskUpdatedEvent::class,
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    protected function casts(): array
    {
        return [
            'complete_by' => 'timestamp',
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'project_id',
        'interaction_type_id',
        'description',
        'follow_up',
        'followed_up',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function interactionType(): BelongsTo
    {
        return $this->belongsTo(InteractionType::class);
    }

    protected function casts(): array
    {
        return [
            'follow_up' => 'timestamp',
        ];
    }
}

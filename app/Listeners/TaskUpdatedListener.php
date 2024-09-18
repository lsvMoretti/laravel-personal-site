<?php

namespace App\Listeners;

use App\Events\TaskUpdatedEvent;
use Illuminate\Support\Facades\Log;

class TaskUpdatedListener
{
    public function __construct() {}

    public function handle(TaskUpdatedEvent $event): void
    {
        $task = $event->task;
        $taskId = $task->id;
        Log::debug('TaskUpdatedListener', ['taskId' => $taskId]);
        $changes = $task->getDirty();
        if (! empty($changes['time'])) {
            $project = $task->project;
            $rate = $project->labour_rate;
            if ($rate > 0) {
                $newTime = $changes['time'];
                $originalTime = $task->getOriginal('time');
                $timeDifference = $newTime - $originalTime;
                $charge = $timeDifference * $rate;
                $project->cost += $charge;
                $project->save();
            }
        }
    }
}

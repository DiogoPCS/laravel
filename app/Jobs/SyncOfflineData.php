<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SyncOfflineData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    public function __construct()
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->data['changes'] as $change) {
            $this->processChange($change);
        }
    }
}

 function checkAndSync()
{
    $pendingChanges = DB::connection('sqlite_local')
        ->table('pending_changes')
        ->get();
        
    if ($pendingChanges->count() > 0 && $this->isOnline()) {
        SyncOfflineData::dispatch($pendingChanges);
    }
}
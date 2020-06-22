<?php declare(strict_types=1);

namespace DockerPhpTutorial\Jobs;

use DockerPhpTutorial\Commands\TestInfrastructureCommand;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;

class TestInfrastructureJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    private int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function handle(): void
    {
        TestInfrastructureCommand::insertInTestTable($this->id);
    }
}

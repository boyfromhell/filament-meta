<?php

namespace IchBin\Meta\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    public $signature = 'meta:install {--force}';

    public $description = 'Install meta for filament.';

    public function handle(): int
    {
        $this->info('All installed! Make something great! 👍');

        return Command::SUCCESS;
    }
}

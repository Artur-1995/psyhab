<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
class CompileFrontend extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'compile-frontend';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Сборка фронтенда и синхронизация папок';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): void
    {
        // Собираем фронтенд
        $process = Process::fromShellCommandline('npm run prod');
        $process->run();
        $process = Process::fromShellCommandline("rsync -avz --delete public/ public_html/");
        $process->mustRun();

        if ($process->isSuccessful()) {
            $this->info('Фронтенд собран и папки синхронизированы!');
        } else {
            echo "Ошибка: " . $process->getErrorOutput() . "\n";
        }
    }
}

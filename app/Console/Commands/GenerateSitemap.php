<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Symfony\Component\Process\Process;
// use App\Models\Psychologist;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml';

    public function handle()
    {
        $this->info('Генерация файла sitemap началась...');
        $sitemap = Sitemap::create();

        // Добавляем статические страницы
        $sitemap->add(Url::create('/')
            ->setPriority(1.0)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));

        // $sitemap->add(Url::create('/about')
        //     ->setPriority(0.8)
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));

        // // Добавляем динамические страницы психологов
        // $psychologists = Psychologist::all();
        // foreach ($psychologists as $psychologist) {
        //     $sitemap->add(Url::create("/psychologist/{$psychologist->slug}")
        //         ->setLastModificationDate($psychologist->updated_at)
        //         ->setPriority(0.9)
        //         ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        // }

        // Сохраняем в public/sitemap.xml
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Файла успешно сгенерирован!');

        $process = Process::fromShellCommandline("rsync -avz --delete public/sitemap.xml public_html/sitemap.xml");
        $process->mustRun();

        if ($process->isSuccessful()) {
            $this->info('Папки public и public_html синхронизированы!');
        } else {
            echo "Ошибка: " . $process->getErrorOutput() . "\n";
        }
    }
}

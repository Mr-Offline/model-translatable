<?php

namespace ArsalanAhadian\ModelTranslatable\Commands;

use Illuminate\Console\Command;

class ModelTranslatableCommand extends Command
{
    public $signature = 'modeltranslatable';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

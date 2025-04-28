<?php

namespace Saade\ZApi\Commands;

use Illuminate\Console\Command;

class ZApiCommand extends Command
{
    public $signature = 'z-api-php-sdk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

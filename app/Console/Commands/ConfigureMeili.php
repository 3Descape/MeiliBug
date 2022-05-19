<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ConfigureMeili extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meili:configure';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $client = app()->make(\MeiliSearch\Client::class);

        $response = $client->index('customers')->updateSortableAttributes([
            'accessed_at',
        ]);

        return 0;
    }
}

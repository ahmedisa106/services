<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Modules\StoresModule\Entities\Store;

class changeStoreStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check the status of store';

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
     * @return mixed
     */
    public function handle()
    {
        $now = Carbon::now()->format('H:s');
        $stores = Store::get();
        foreach ($stores as $store) {
            ($now > $store->work_to) ? $store->update(['status' => 'close']) : $store->update(['status' => 'open']);

        }
    }
}

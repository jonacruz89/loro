<?php

namespace App\Console\Commands;

use App\Participant;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SetWinner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'winner:set';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Establecer ganador';

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
        if (Participant::where('winner', '1')->count() == 0) {
            if (Participant::count() >= 5) {
                $userRandom = Participant::all()->random(1)->first();
                $userRandom->winner = true;
                $userRandom->save();
            }
        }
    }
}

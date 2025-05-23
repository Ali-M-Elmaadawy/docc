<?php

   

namespace App\Console\Commands;

   

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Mail;
class SendMail extends Command

{

    /**

     * The name and signature of the console command.

     *

     * @var string

     */

    protected $signature = 'check:cron';

    

    /**

     * The console command description.

     *

     * @var string

     */

    protected $description = 'Command description';

    

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
        


             Mail::to()->send(new WelcomeMail([
                  'name' => 'Demo',
             ]));

    }

}
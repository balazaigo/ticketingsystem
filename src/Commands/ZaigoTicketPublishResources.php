<?php

namespace Zaigo\TicketingSystem\Commands;

use Illuminate\Console\Command;
use Zaigo\TicketingSystem\ZaigoTicketingSystemServiceProvider;

class ZaigoTicketPublishResources extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zaigo-tickets:publish
    {--config : Publish Zaigo Ticket Config}
    {--migrations : Publish Zaigo Ticket Migrations}
    {--models : Publish Zaigo Ticket Models}
    {--observers : Publish Zaigo Ticket Observers}
    {--traits : Publish Zaigo Ticket Traits}
    ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Zaigo Tickets Files in order to customize as per the developer convenience';

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
    public function handle()
    {
        $this->info('Installing Zaigo Ticketing...');
        $config = $this->option('config');
        $migrations = $this->option('migrations');
        $models = $this->option('migrations');
        $observers = $this->option('migrations');
        $traits = $this->option('migrations');
        $this->info('Publishing required Classes...');
        if($config){
            $this->publishConfig();
        }elseif($migrations){
            $this->publishMigrations();
        }elseif($models){
            $this->publishModels();
        }elseif($observers){
            $this->publishObservers();
        }elseif($traits){
            $this->publishTraits();
        }else{
            $this->defaultPublish();
        }
    }

    public function defaultPublish(){
        $this->publishConfig();
        $this->publishMigrations();
        $this->publishModels();
        $this->publishObservers();
        $this->publishTraits();
    }

    public function publishConfig(){
        $this->callSilent('vendor:publish', ['--provider' => ZaigoTicketingSystemServiceProvider::class, '--tag' => 'zaigo-ticketing-config', '--force' => true]);
    }

    public function publishMigrations(){
        $this->callSilent('vendor:publish', ['--provider' => ZaigoTicketingSystemServiceProvider::class, '--tag' => 'zaigo-ticketing-migrations', '--force' => true]);
    }

    public function publishModels(){
        $this->callSilent('vendor:publish', ['--provider' => ZaigoTicketingSystemServiceProvider::class, '--tag' => 'zaigo-ticketing-models', '--force' => true]);
    }

    public function publishObservers(){
        $this->callSilent('vendor:publish', ['--provider' => ZaigoTicketingSystemServiceProvider::class, '--tag' => 'zaigo-ticketing-observers', '--force' => true]);
    }

    public function publishTraits(){
        $this->callSilent('vendor:publish', ['--provider' => ZaigoTicketingSystemServiceProvider::class, '--tag' => 'zaigo-ticketing-traits', '--force' => true]);
    }
}

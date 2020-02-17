<?php

namespace App\Console\Commands;

use App\BunkerMaestro\UserManagement\Actions\CreateUser;
use Illuminate\Console\Command;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name} {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo of reusable create user action';

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
    public function handle(CreateUser $action)
    {
        $name = $this->input->getArgument('name');
        $email = $this->input->getArgument('email');
        $user = $action->handle($name, $email);
        $this->output->text($user);
    }
}

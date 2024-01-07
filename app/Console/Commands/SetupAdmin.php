<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SetupAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup initial admin user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $superadmin = User::create([
            'name' => 'superadmin',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678')
        ]);

        $superadmin->assignRole('superadmin');

        $manager = User::create([
            'name' => 'ruruw',
            'email' => 'rueuw@tes.id',
            'password' => Hash::make('12345678')
        ]);

        $manager->assignRole('manager');
        
        $this->info('
        Admin with name of '.$superadmin->name.' created succesfully.
        Manager with name of '.$manager->name.' created succesfully.
        ');
    }
}

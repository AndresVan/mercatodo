<?php

use App\AdminUser;
use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(AdminUser ::class, 5)->create();
    }
}

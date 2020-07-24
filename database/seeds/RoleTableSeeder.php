<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'user'
        ];
        foreach ($roles as $key => $value) {
            DB::table('roles')->insert([
                'name' => $value,
                'created_at' =>  Carbon::now()->format('Y-m-d H:1:s')
            ]);
        }
    }
}

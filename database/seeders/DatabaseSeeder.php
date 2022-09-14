<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('users')->count();
        $currentDateTime = Carbon::now();
        if ($count >= 100 ) {
            DB::table('users')->update(['updated_at' => $currentDateTime]);
        } else {
            \App\Models\User::factory(100)->create();
        }


    }
}

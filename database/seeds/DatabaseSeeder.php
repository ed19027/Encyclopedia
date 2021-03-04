<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Eloquent::unguard();
        $path = 'database/encyclopedia.sql';
        DB::unprepared(file_get_contents($path));
        Schema::enableForeignKeyConstraints();
    }
}


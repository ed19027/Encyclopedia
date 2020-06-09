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
        $this->call(UserSeeder::class);
        $this->call(KingdomSeeder::class);
        $this->call(DivisionSeeder::class);
        $this->call(SubdivisionSeeder::class);
        $this->call(ClaszSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(FamilySeeder::class);
        $this->call(SubfamilySeeder::class);
        $this->call(GenusSeeder::class);
        $this->call(LSGSeeder::class);
        $this->call(SeciesSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}


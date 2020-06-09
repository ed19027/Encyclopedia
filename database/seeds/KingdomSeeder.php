<?php
use App\Kingdom;
use Illuminate\Database\Seeder;

class KingdomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kingdom::truncate();
        Kingdom::create(array('name_latin' => 'Animalia','name_latvian' => 'Dzīvnieku'));
    }
}

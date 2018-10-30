<?php
use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Province::insert([
            'name' => 'Yogyakarta',
            'created_at' => '2018-10-29 12:30:15'
        ]);

      Province::insert([
            'name' => 'Jakarta',
            'created_at' => '2018-10-29 12:30:15'
        ]);
        
    }
}

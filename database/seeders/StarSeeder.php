<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            5 => 'five'
        ];

        foreach($data as $index => $item) {
            \App\Models\Star::create([
                'id' => $index,
                'name' =>  $item
            ]);
        }
    }
}

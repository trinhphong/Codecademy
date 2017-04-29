<?php

use Illuminate\Database\Seeder;

class InstructionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructions')->insert([
            'content' => 'In the code editor to the right, type your name in between <h1> and </h1>, then press Run.',
            'task_id' => '1',
        ]);
    }
}

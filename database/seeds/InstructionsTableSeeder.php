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
            'content' => 'In the code editor to the right, type your name in between <code>&lt;h1&gt;</code> and  <code>&lt;/h1&gt;</code>, then press Run.',
            'solution' => '<!DOCTYPE html>
<html>
  <head>
    <title>An Unexpected Journey</title>
    <link href=\'https://fonts.googleapis.com/css?family=Playfair+Display:900|Raleway:300\' rel=\'stylesheet\' type=\'text/css\'>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  	<div class="container">
  		<h1>An Unexpected Journey</h1>
  	  <a class="btn" href="#">Get Started</a>
  	</div>
  </body>
</html>',
            'task_id' => '1',
        ]);

        DB::table('instructions')->insert([
            'content' => 'On line 1, add the <!DOCTYPE html> declaration.',
            'solution' => '<!DOCTYPE html>',
            'task_id' => '2',
        ]);

        DB::table('instructions')->insert([
            'content' => 'On line 1, add the <!DOCTYPE html> declaration.',
            'solution' => '<!DOCTYPE html>abc',
            'task_id' => '2',
        ]);
    }
}

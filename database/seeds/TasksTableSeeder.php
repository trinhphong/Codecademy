<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'content' => 'HTML is the language used to create the web pages you visit everyday. It provides a logical way to structure content for web pages.

Let\'s analyze the acronym "HTML", as it contains a lot of useful information. HTML stands for HyperText Markup Language.

A markup language is a computer language that defines the structure and presentation of raw text. Markup languages work by surrounding raw text with information the computer can interpret, "marking it up" for processing.

HyperText is text displayed on a computer or device that provides access to other text through links, also known as “hyperlinks”. In fact, you probably clicked on many, many hyperlinks on your path to this Codecademy course!

In this course, you\'ll learn how to use the fundamentals of HTML to structure, present, and link content. You\'ll also learn how to use CSS, or Cascading Style Sheets, to style the HTML content you add to web pages.

Let\'s get started!',
            'source_code_html' => '<!DOCTYPE html>
<html>
  <head>
    <title>An Unexpected Journey</title>
    <link href=\'https://fonts.googleapis.com/css?family=Playfair+Display:900|Raleway:300\' rel=\'stylesheet\' type=\'text/css\'>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  	<div class="container">
  		<h1>TEST</h1>
  	  <a class="btn" href="#">Get Started</a>
  	</div>
  </body>
</html>',
            'source_code_css' => '* {
	margin: 0;
	padding: 0;
}

html, body {
	height: 100%;
	width: 100%;
}

body {
	align-items: center;
  background-color: #FFF;
	display: flex;
	font-family: \'Raleway\', sans-serif;
	flex-direction: column;
	justify-content: center;
	overflow: hidden;
}

div.container {
	align-items: center;
	align-self: center;
	background: url(\'https://s3.amazonaws.com/codecademy-content/courses/web-101/unit-1/01/background.jpg\') center center;
	border-radius: 100%;
	display: flex;
	flex-direction: column;
	min-height: 800px;
	justify-content: center;
	width: 800px;
}

h1 {
  color: #fff;
  font-family: \'Playfair Display\', serif;
  font-size: 52px;
  font-weight: 900;
  line-height: 46px;
  margin: 0 0 60px 0;
  text-align: center;
  text-shadow: 0px 2px 4px rgba(34,62,66,.75);
  width: 50%;
}

a.btn {
	background: linear-gradient(45deg, rgba(255,184,115,0.65) 0%,rgba(255,124,189,0.65) 50%,rgba(108,0,153,0.65) 100%);
	border-radius: 2px;
	box-shadow: 0px 2px 4px rgba(34,62,66,.25);
  color: #fff;
  font-size: 18px;
  letter-spacing: 1px;
  padding: 16px 32px;
  text-decoration: none;
  text-transform: uppercase;
  -webkit-transition: box-shadow 1s ease;
	transition: box-shadow 1s ease;
}

a.btn:hover {
	box-shadow: 0px 4px 4px rgba(34,62,66,.5);
	-webkit-transition: box-shadow 1s ease;
	transition: box-shadow 1s ease;
}',
            'lesson_id' => '1',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$post = new Post([
    		'title' => 'This is the first post',
    		'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur iste praesentium, iure quidem. Tempora repellendus, itaque blanditiis quae dolore asperiores inventore, sed ab, necessitatibus fugit fuga. Officia, sapiente ut minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam molestias sit! Ipsa at illo, magni! Recusandae culpa repudiandae beatae debitis modi provident ratione in molestias temporibus optio? Possimus, earum.'
    	]);
    	$post->save();

    	$post = new Post([
    		'title' => 'This is the second post',
    		'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur iste praesentium, iure quidem. Tempora repellendus, itaque blanditiis quae dolore asperiores inventore, sed ab, necessitatibus fugit fuga. Officia, sapiente ut minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam molestias sit! Ipsa at illo, magni! Recusandae culpa repudiandae beatae debitis modi provident ratione in molestias temporibus optio? Possimus, earum.'
    	]);
    	$post->save();
    	

    	$post = new Post([
    		'title' => 'This is the third post',
    		'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur iste praesentium, iure quidem. Tempora repellendus, itaque blanditiis quae dolore asperiores inventore, sed ab, necessitatibus fugit fuga. Officia, sapiente ut minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam molestias sit! Ipsa at illo, magni! Recusandae culpa repudiandae beatae debitis modi provident ratione in molestias temporibus optio? Possimus, earum.'
    	]);
    	$post->save();
    	

    }
}

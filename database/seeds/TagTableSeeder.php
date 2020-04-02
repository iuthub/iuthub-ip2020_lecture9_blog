<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag([
        	'name' => 'Web Programming'
        ]);
        $tag->save();

        $tag = new Tag([
        	'name' => 'Mobile Programming'
        ]);
        $tag->save();

        $tag = new Tag([
        	'name' => 'Desktop Programming'
        ]);
        $tag->save();

        $tag = new Tag([
        	'name' => 'Laravel'
        ]);
        $tag->save();
    }
}

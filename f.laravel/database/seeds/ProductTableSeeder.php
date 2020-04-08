<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/e/e7/Harry_Potter_and_the_Order_of_the_Phoenix_poster.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool -  at last child',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://comicvine1.cbsistatic.com/uploads/scale_small/3/32599/1685444-177670_77663_naruto_49_122_342lo_super.jpg',
            'title' => 'naruto',
            'description' => 'Super cool -  at last child',
            'price' => 14
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://comicvine1.cbsistatic.com/uploads/scale_small/3/32599/1685444-177670_77663_naruto_49_122_342lo_super.jpg',
            'title' => 'Naruto',
            'description' => 'Super cool -  at last child',
            'price' => 17
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://comicvine1.cbsistatic.com/uploads/scale_small/3/32599/1685444-177670_77663_naruto_49_122_342lo_super.jpg',
            'title' => 'Naruto',
            'description' => 'Super cool -  at last child',
            'price' => 15
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://comicvine1.cbsistatic.com/uploads/scale_small/3/32599/1685444-177670_77663_naruto_49_122_342lo_super.jpg',
            'title' => 'Naruto',
            'description' => 'Super cool -  at last child',
            'price' => 15
        ]);
        $product->save();
    }
}

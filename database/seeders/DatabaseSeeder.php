<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

       

        User::factory(3)->create();

        
        Category::create([
            'name' => 'Food Indonesia',
            'slug' => 'indo'
        ]);
        Category::create([
            'name' => 'Food Western',
            'slug' => 'western'
        ]);
        Category::create([
            'name' => 'Food Asia',
            'slug' => 'asia'
        ]);

        Post::create([
            'title' => 'Rendang',
            'slug' => 'indo',
            'excerpt' => 'Rendang atau randang dalah masakan daging asli Indonesia yang berasal dari Minangkabau',
            'body' => 'Rendang atau randang adalah masakan daging asli Indonesia yang berasal dari Minangkabau. Masakan ini dihasilkan dari proses memasak suhu rendah dalam waktu lama menggunakan aneka rempah-rempah dan santan. Proses memasaknya memakan waktu berjam-jam (biasanya sekitar empat jam) hingga yang tinggal hanyalah potongan daging berwarna hitam pekat dan dedak. Dalam suhu ruangan, rendang dapat bertahan hingga berminggu-minggu. Rendang yang dimasak dalam waktu yang lebih singkat dan santannya belum mengering disebut kalio, berwarna cokelat terang keemasan.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Spagheti',
            'slug' => 'western',
            'excerpt' => 'Spageti adalah salah satu jenis pasta yang berbentuk panjang, tipis, silindris, dan padat, yang jika diperhatikan menyerupai mie pada umumnya',
            'body' => 'Spageti adalah salah satu jenis pasta yang berbentuk panjang, tipis, silindris, dan padat, yang jika diperhatikan menyerupai mie pada umumnya. Ini adalah makanan pokok dalam masakan Italia tradisional. Karena berbentuk seperti mie, kebanyakan orang menyebutnya mie dari Italia meskipun banyak varian pasta lainnya yang berbentuk seperti mie. Seperti pasta pada umumnya, spageti terbuat dari gandum giling dan air. Spageti Italia terbuat dari semolina gandum durum, tetapi di tempat lain bisa dibuat dengan tepung jenis lain.',
            'category_id' => 2,
            'user_id' => 1
        ]);

       
        
    }
}


  
   
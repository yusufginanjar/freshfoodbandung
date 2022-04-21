<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'title' => "Judul Pertama",
            'slug' => "judul-pertama",
            'excerpt' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum similique enim quod mollitia et eum. Debitis quas natus nulla cupiditate?",
            'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti quibusdam quas nemo! Corrupti dignissimos esse ratione! Eveniet recusandae tempora consequuntur error eius reprehenderit modi nihil rerum quia sed nesciunt quod voluptate ipsa fugit, harum, natus molestiae. Cumque blanditiis architecto nemo eum nihil dicta iste praesentium, voluptates repellat placeat? Totam ab laudantium excepturi accusantium. Impedit laboriosam qui voluptatem ad nostrum, id deserunt vero nobis modi ipsam placeat aliquam quos omnis accusantium vitae. Animi quidem sed natus molestias magnam quo saepe quasi corporis dolor modi sit eveniet expedita corrupti, aut, doloribus repellendus impedit facilis numquam vel itaque dignissimos iusto rerum ad sequi?",
        ]);
    }
}

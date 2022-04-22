<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\User;

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
        Blog::create([
            'title' => "Judul Kedua",
            'slug' => "judul-kedua",
            'excerpt' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum similique enim quod mollitia et eum. Debitis quas natus nulla cupiditate?",
            'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti quibusdam quas nemo! Corrupti dignissimos esse ratione! Eveniet recusandae tempora consequuntur error eius reprehenderit modi nihil rerum quia sed nesciunt quod voluptate ipsa fugit, harum, natus molestiae. Cumque blanditiis architecto nemo eum nihil dicta iste praesentium, voluptates repellat placeat? Totam ab laudantium excepturi accusantium. Impedit laboriosam qui voluptatem ad nostrum, id deserunt vero nobis modi ipsam placeat aliquam quos omnis accusantium vitae. Animi quidem sed natus molestias magnam quo saepe quasi corporis dolor modi sit eveniet expedita corrupti, aut, doloribus repellendus impedit facilis numquam vel itaque dignissimos iusto rerum ad sequi?",
        ]);
        Blog::create([
            'title' => "Judul Ketiga",
            'slug' => "judul-ketiga",
            'excerpt' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum similique enim quod mollitia et eum. Debitis quas natus nulla cupiditate?",
            'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti quibusdam quas nemo! Corrupti dignissimos esse ratione! Eveniet recusandae tempora consequuntur error eius reprehenderit modi nihil rerum quia sed nesciunt quod voluptate ipsa fugit, harum, natus molestiae. Cumque blanditiis architecto nemo eum nihil dicta iste praesentium, voluptates repellat placeat? Totam ab laudantium excepturi accusantium. Impedit laboriosam qui voluptatem ad nostrum, id deserunt vero nobis modi ipsam placeat aliquam quos omnis accusantium vitae. Animi quidem sed natus molestias magnam quo saepe quasi corporis dolor modi sit eveniet expedita corrupti, aut, doloribus repellendus impedit facilis numquam vel itaque dignissimos iusto rerum ad sequi?",
        ]);



        Product::create([
            'name' => "Bacon /250gr",
            'slug' => "pork-bacon-250gr",
            'price' => "@ Rp52.000",
            'image' => "",
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Bacon (2-3 pack)",
            'slug' => "pork-bacon-2-3-pack",
            'price' => "@ Rp 48.000",
            'image' => "",
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Bacon (4 pack & more)",
            'slug' => "pork-bacon-4-pack-and-more",
            'price' => "@ Rp 44.000",
            'image' => "",
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Ribs -/+540gr",
            'slug' => "ribs-+540gr",
            'price' => "Rp 145.000",
            'image' => "",
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Ham /500gr",
            'slug' => "ham-500gr",
            'price' => "Rp 75.000",
            'image' => "",
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Meatballs /500gr",
            'slug' => "meatballs-500gr",
            'price' => "Rp 63.000",
            'image' => "",
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Bratwurst /600gr",
            'slug' => "bratwurst-600gr",
            'price' => "Rp 105.000",
            'image' => "",
            'badge' => "Premium Pork",
        ]);

        Product::create([
            'name' => "Beef Bacon /500gr",
            'slug' => "beef-bacon-500gr",
            'price' => "Rp 75.000",
            'image' => "",
            'badge' => "Premium Beef",
        ]);
        Product::create([
            'name' => "Oxtall /1kg",
            'slug' => "oxtall-1kg",
            'price' => "Rp 98.000",
            'image' => "",
            'badge' => "Premium Beef",
        ]);
        Product::create([
            'name' => "Meatballs /500gr",
            'slug' => "meatballs-500gr",
            'price' => "Rp 68.000",
            'image' => "",
            'badge' => "Premium Beef",
        ]);

        Gallery::create([
            'image' => "product_1.png",
        ]);
        Gallery::create([
            'image' => "product_2.png",
        ]);
        Gallery::create([
            'image' => "product_3.png",
        ]);
        Gallery::create([
            'image' => "product_4.png",
        ]);
        Gallery::create([
            'image' => "product_5.png",
        ]);


        User::create([
            'first_name' => 'Yusuf',
            'last_name' => 'Ginanjar',
            'username' => 'yusufginanjar',
            'email' => 'yusufgp@gmail.com',
            'password' => 'password',
            'whatsapp' => '12345678910'
        ]);
    }
}

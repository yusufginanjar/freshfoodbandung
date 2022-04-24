<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Cart;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\CartDetail;
use App\Models\ShippingAddress;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'currency' => "@ Rp",
            'price' => 52000,
            'image' => "",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Bacon (2-3 pack)",
            'slug' => "pork-bacon-2-3-pack",
            'currency' => "@ Rp",
            'price' => 48000,
            'image' => "",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Bacon (4 pack & more)",
            'slug' => "pork-bacon-4-pack-and-more",
            'currency' => "@ Rp",
            'price' => 44000,
            'image' => "",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Ribs -/+540gr",
            'slug' => "ribs-+540gr",
            'currency' => "Rp",
            'price' => 145000,
            'image' => "",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Ham /500gr",
            'slug' => "ham-500gr",
            'currency' => "Rp",
            'price' => 75000,
            'image' => "",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Meatballs /500gr",
            'slug' => "meatballs-500gr",
            'currency' => "Rp",
            'price' => 63000,
            'image' => "",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Bratwurst /600gr",
            'slug' => "bratwurst-600gr",
            'currency' => "Rp",
            'price' => 105000,
            'image' => "",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);

        Product::create([
            'name' => "Beef Bacon /500gr",
            'slug' => "beef-bacon-500gr",
            'currency' => "Rp",
            'price' => 75000,
            'image' => "",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Beef",
        ]);
        Product::create([
            'name' => "Oxtall /1kg",
            'slug' => "oxtall-1kg",
            'currency' => "Rp",
            'price' => 98000,
            'image' => "",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Beef",
        ]);
        Product::create([
            'name' => "Meatballs /500gr",
            'slug' => "meatballs-500gr",
            'currency' => "Rp",
            'price' => 68000,
            'image' => "",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
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
            'password' => Hash::make('password'),
            'whatsapp' => '12345678910'
        ]);

        User::create([
            'first_name' => 'Yusuf',
            'last_name' => 'Putra',
            'username' => 'yusufputra',
            'email' => 'yusufp@gmail.com',
            'password' => Hash::make('password'),
            'whatsapp' => '12345678911'
        ]);
    }
}

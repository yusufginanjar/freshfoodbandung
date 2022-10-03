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
            'title' => "15 Cool Facts About Frozen Food",
            'slug' => "15-cool-facts-about-frozen-food",
            'excerpt' => "<div>Frozen foods are easy to take for granted—all that clever packaging, all those choices, all tha...",
            'body' => "<div>Frozen foods are easy to take for granted—all that clever packaging, all those choices, all that ice cream—simply because their very existence hinges on simplicity, convenience, and ease. But frozen foods have a complicated backstory, a long scientific evolution, and a debate over pizza origins that could make your head spin. In honor of National Frozen Food Day, which takes place on March 6, let's dig into the history.<br><br><strong>1. They don't require any added preservatives.</strong><br>Frozen foods do not require any added preservatives to keep them safe and consumable, because microbes—the kind that make you sick—cannot grow on any food that is at a temperature less than 0°F. The microbes don't die at that temperature, but they stop multiplying. Be careful when you unfreeze food; microbes will instantly start growing as they do on unfrozen food, so it’s best to handle thawing food as you would fresh food.<br><br><strong>2. It's a myth that freezing food depletes it of nutrients.</strong><br>Despite some old wives’ tales, freezing food does not remove any nutrients. Freeze away!<br><br><strong>3. Freezer burn is normal.</strong><br>You don’t need to be afraid of freezer burn or color changes in your properly frozen food. Freezer burn is just the result of air hitting frozen food and allowing the ice to sublimate; other color changes can be blamed on long freezing times or poor packaging. It might look gross, but if your frozen food has maintained a proper temperature, it’s fine to eat. (Still, give it a sniff before chowing down.)<br><strong><br>4. Over time, freezing food can diminish its quality.</strong><br>Freezing food typically keeps items edible indefinitely, although taste and quality may diminish over time. Some items that stay tasty even after long freezes include uncooked game, poultry, and meat, which are still good even after up to a year in the freezer.<br><br><strong>5. Frozen foods hit the industrial market in the 1800s.</strong><br>Even though freezing food was used as a storage technique in cold weather climates for many years, it’s believed it was first applied to industrial food sales sometime in the 1800s, when a wily Russian company froze a small quantity of duck and geese and shipped them to London. By 1899, the Baerselman Bros. company adapted frozen storage for their own Russia-to-England food shipping business, though they initially only operated during cold weather months.<br><br><strong>6. Carl Paul Gottfried Linde is the unofficial godfather of frozen food.</strong><br>Carl Paul Gottfried Linde, an engineer, scientist, and professor at the Technical University of Munich, is basically the father of frozen food. Sort of. He helped pioneer industrial cooling, through what’s commonly known as the Hampson-Linde cycle, and used his findings to plan an ice and refrigeration machine back in the 19th century.<br><br><strong>7. Guinness played a part in the history of frozen food.</strong><br>Linde’s desire to build such machines was only furthered in 1892, when the Guinness Brewery requested that Linde create a carbon dioxide liquefaction plant for them, pushing him still further into the arena of low temperature refrigeration and the liquefaction of air. Thanks, beer!<br><br><strong>8. Clarence Birdseye revolutionized the industry.</strong><br>Ever wonder about the namesake of Birds Eye Frozen Foods? It came straight from the company’s founder, Clarence Birdseye, who introduced the concept of flash freezing to the world.<br><br><strong>9. Birdseye's 'a-ha' moment came to him in the Arctic.</strong><br>Birdseye developed his technique after seeing food freezing in action in the Arctic, and noting how much better frozen fish tasted if it had been frozen immediately after been caught—like a flash!—versus food that was frozen on a delay.<br><br><strong>10. Birdseye is also partly to thank for the freezers that line grocery store aisles.</strong><br>Not only did Birdseye help pioneer flash freezing as a frozen food standard, he also helped develop in-store freezer cases and refrigerated boxcars that allowed his frozen foods (and, yes, others) to travel near and far.<br><br><strong>11. America's first commercial frozen food line went on sale in 1930.</strong><br>Birdseye’s food was so prevalent that it was actually the first frozen food sold commercially in the United States. On March 6, 1930, Birds Eye frozen foods were put on sale at Davidson’s Market in Springfield, Massachusetts, the first product of its kind.<br><br><strong>12. The TV dinner was not the first frozen meal.</strong><br>The first “complete” frozen meal was not actually the beloved TV dinner—it was airplane food! In 1945, Maxson Food Systems, Inc. starting making their so-called “Strato-Plates,” meals that were created specifically for consumption on airplanes (both by military and civilian passengers). Each frozen meal included a meat, a vegetable, and a potato, and was meant to be reheated for in-air chowing.<br><br><strong>13. It was Swanson's who coined the term TV dinner.</strong><br>Maxson closed up shop before their Strato-Plates could be sold on the ground, but other companies picked up the slack, including One-Eyed Eskimo, Quaker State Food, and Swanson’s, which is widely hailed as the true creator of TV dinners: they coined the name and we<br><br><strong>14. A corporate executive's heart attack inspired the 'healthy' frozen meal trend.</strong><br>Conagra Foods introduced its Healthy Choice line of frozen food back in 1989, after the corporation was inspired to pursue healthy frozen picks after its chairman, Charles Harper, suffered a heart attack due to his bad eating habits. <br><br><strong>15. Who invented the frozen pizza? It's complicated.</strong><br>There’s long been a debate over which company first introduced the frozen pizza to the grocery store market, with both Totino’s and Tombstone vying for the title. A more likely candidate? The Celentano brothers, who owned their own Italian specialty store in New Jersey in the 1950s, are believed to have marketed the first frozen pizza in 1957.</div>",
            "image" => "blog-img-1.JPG"
        ]);
        Blog::create([
            'title' => "Frozen Food History",
            'slug' => "frozen-food-history",
            'excerpt' => "<div>History of frozen food<br>Frozen food has a long history – it’s been popular since 3,000BC, whe...",
            'body' => "<div>History of frozen food<br>Frozen food has a long history – it’s been popular since 3,000BC, when the ancient Chinese used ice cellars to preserve food through cold winter months and beyond.<br>The Romans also used to store food in compressed snow in insulated cellars. So, it has been with us for a long time!<br><br><strong>1917</strong><br>Clarence-Birdseye History of Frozen FoodThe modern frozen food industry, dates back to 1917 when Clarence Birdseye, whilst fur trading Labrador Canada, observed local inhabitants preserve fresh fish and meat by letting it freeze rapidly in Arctic temperatures.<br>He discovered fish from a previous expedition perfectly preserved by the cold. Inuits had discovered that freezing preserved food at the peak of quality, whilst locking in freshness and taste. Birdseye brought the idea back to the US where he spent years perfecting the process we now know as quick freezing – where each individual food item is rapidly frozen at extremely cold temperatures to obtain small ice crystals so that food cells are not damaged. The rest, as they say, is history.<br><br><strong>1940s &amp; 1950s</strong><br>Earley-Freezer-image History of Frozen FoodFirst Ready Meal The volume of frozen food products on the market took off rapidly and the first frozen ready meal hit the freezer aisles in 1953. The earliest domestic freezers were designed for the economics of bulk buying. This 1954 model from the USA held one third of an American ton! Clarence Birdseye had discovered that frozen ready meals had been around for 3,000 years since the ancient Chinese used the method – he also proved that they were now here to stay!<br><br><strong>1960s</strong><br>Convenience-in-50s-America History of Frozen Food The Quest for Convenience Convenience was king as productivity levels rose. Frozen foods and frozen ready meals met the need offering a new generation of shoppers easy-to-prepare ready meal solutions that were delicious and nutritious at the same time.<br><br><strong>1970s</strong><br>Gateaux History of Frozen Food Frozen food: A Family Staple Sophisticated ‘value added’ products (frozen ready meals, frozen oven chips, frozen pizza and frozen desserts) all arrived in the early 70s. Gateaux set a precedent for frozen confectionery as an indulgence. With the ever-growing popularity of domestic freezers frozen food became a staple of everyday family life by the middle of the decade.<br><br><strong>1980s</strong><br>Fast-food-image History of Frozen FoodAnswering Growing Nutritional Awareness The frozen food industry quickly adapted to public demand with more frozen foods and frozen ready meals made available to suit every fancy. The grocer’s freezer now offered year-round availability of seasonal foods. Brands continued to innovate with ready meals backed by consumer advertising – and healthy<br>eating emerged. Findus launched calorie counted Lean Cuisine (note the microwaveable packaging). McCain boosted the healthy profile of its pioneering Oven Chips in 1988 with the introduction of Sunflower Oil. Frozen ready meals were here to stay!<br>Consumers became more aware of nutritional issues, E-numbers and additives became common topics of debate. Frozen food – which requires no additives and is as fresh as the day it was harvested – recognised as the safe choice for a health-conscious family.<br><br><strong>1990s</strong><br>Quality in a recession<br>Whether at home or eating out, even with a looming recession, people still wanted to indulge in quality food. The catering industry blossomed providing a variety of quality meals across the price spectrum. Frozen food became the catering industry’s mainstay with its guaranteed availability, convenience, low wastage and, of course, safety. ‘Quality and authenticity’ were key objectives of product development in the 90s.<br><br><strong>2000s</strong><br>The Debate: Frozen or Fresh<br>Perhaps following in the wake of celebrity chefs and cookery writers, we are increasingly demanding ‘fresh’ ingredients. We seem to be reversing the trend of the last few decades, and becoming hesitant about incorporating frozen food into our daily meal plans. As you would expect, we believe this attitude is largely based on misconceptions – as we hope to show!<br>‘You can be sure it’s fresh – it’s frozen’<br>Far from being inferior to ‘fresh’ food, frozen food is often fresher than ‘fresh’ – and offers other advantages too.<br>Consumers are more and more demanding and so ready meals are becoming better all the time<br>* 		Frozen food contains no preservatives. It is a natural form of preservation.<br>* 		Frozen fruit and vegetables are nutritionally more reliable than fresh. Freezing prevents sensitive vitamins and nutrients from being lost during transportation from farm to shop.<br>* 		Frozen food ensures that even the most exotic dishes are available on demand.<br>* 		Freezing allows you to choose from a vast selection of otherwise seasonal ingredients all year round.<br>* 		Frozen food also helps reduce food waste as you use only what you need – which means it’s good for your pocket and good for the environment.<br>So, from the point of view of health, the environment, variety, taste and your budget, frozen food is just as good a choice as it ever has been.<br><br><strong>2010s</strong><br>Frozen acceptance Since 2010 many misconceptions around frozen food have been challenged, with independent research helping to highlight the advantages of frozen; promoting its nutritional, cost, quality and sustainability benefits.<br>As more and more people are now realising the numerous advantages of frozen, companies such as Iceland and Iglo – Europe’s largest frozen food company – have launched their own major frozen food campaigns. The iFreeze and#PowerofFrozen movement are promoting the benefits of frozen food and spreading the message that frozen food is not only nutritious, flavoursome and safe, but is also high quality whilst remaining great value for money.<br><br>In addition, from Chef’s attitude surveys in 2012 and 2014, to Consumer Preference taste tests in 2012, nutritional research into fresh versus frozen, to a detailed Food Security report, the British Frozen Food Federation (BFFF) has been very busy proving the benefits of frozen as well.<br><br><br></div>",
            "image" => "blog-img-3.JPG"
        ]);
        Blog::create([
            'title' => "The Game-Changing Trick That Makes Defrosted Meat Taste Better",
            'slug' => "the-game-changing-trick-that-makes-deforested-meat-taste-better",
            'excerpt' => "<div>If you are in the habit of keeping a stash of meat in your freezer at all times, you are probab...",
            'body' => "<div>If you are in the habit of keeping a stash of meat in your freezer at all times, you are probably familiar with the slight change in flavor that occurs once the meat is defrosted. Meat the Butchers explains when meat is frozen, sharp little ice crystals form within the flesh, causing some of the fibers to weaken and break down. Once the meat is thawed, these weak spots allow some of the meat's inherent flavor to seep out.<br><br>This is frustrating, of course, because you paid for that flavor and it feels a tiny bit like you're being punished for planning ahead and buying in bulk, right? Fortunately, there's a solution and it's probably sitting in your pantry right now. According to The Kitchn, adding a splash of balsamic vinegar to your meat as it defrosts will add subtle flavor to steak, pork, or chicken and the acid actually helps tenderize the protein, making you forget it ever spent a minute in the icebox. Here's how to put this game-changing trick to work in your kitchen.<br><br><em>Add balsamic vinegar to your meat as it defrosts</em><br><br>Before we get into how simple it is to bump up the flavor of defrosted meat with balsamic vinegar, let's cover some ground rules. Unless you want harmful bacterial cooties, do not thaw your meat on the counter or in hot water. According to The Kitchn, the proper way to defrost meat is either in the refrigerator for as long as needed or, if you're in a hurry, under cool running water. The microwave works, too, but that doesn't leave time for the balsamic vinegar to work its magic, which is the real reason we're all here.<br><br>To put this trick into action, The Kitchen recommends adding one tablespoon of balsamic vinegar per pound of meat to a zip-top bag along with your frozen meat. Thaw in the refrigerator or under cool water; as the meat defrosts its natural juices will combine with the vinegar to create plenty of liquid for the meat to marinate in. The meat will be infused with the balsamic's sweet, complex flavor, and the acid will tenderize and preserve the protein (via the Institute of Culinary Education). Once the meat has thawed and you're ready to cook, remove the steak, pork, or chicken from the bag and discard the marinade. Cook the meat as you normally would – just be sure to add oil as needed to prevent sticking. With this game-changing trick in your back pocket, you'll never be stuck with bland, boring meat again.</div>",
            "image" => "blog-img-2.JPG"
        ]);



        Product::create([
            'name' => "Bacon /250gr",
            'slug' => "pork-bacon-250gr",
            'currency' => "@ Rp",
            'price' => 52000,
            'image' => "bacon-pork.JPG",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Bacon (2-3 pack)",
            'slug' => "pork-bacon-2-3-pack",
            'currency' => "@ Rp",
            'price' => 48000,
            'image' => "bacon-pork.JPG",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Bacon (4 pack & more)",
            'slug' => "pork-bacon-4-pack-and-more",
            'currency' => "@ Rp",
            'price' => 44000,
            'image' => "bacon-pork.JPG",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Ribs -/+540gr",
            'slug' => "ribs-+540gr",
            'currency' => "Rp",
            'price' => 145000,
            'image' => "ribs-pork.JPG",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Ham /500gr",
            'slug' => "ham-500gr",
            'currency' => "Rp",
            'price' => 75000,
            'image' => "ham-pork.JPG",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Meatballs /500gr",
            'slug' => "meatballs-500gr",
            'currency' => "Rp",
            'price' => 63000,
            'image' => "meatballs-pork.JPG",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);
        Product::create([
            'name' => "Bratwurst /600gr",
            'slug' => "bratwurst-600gr",
            'currency' => "Rp",
            'price' => 105000,
            'image' => "bratwurst-pork.JPG",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Pork",
        ]);

        Product::create([
            'name' => "Beef Bacon /500gr",
            'slug' => "beef-bacon-500gr",
            'currency' => "Rp",
            'price' => 75000,
            'image' => "bacon-beef.JPG",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Beef",
        ]);
        Product::create([
            'name' => "Oxtail /1kg",
            'slug' => "oxtail-1kg",
            'currency' => "Rp",
            'price' => 98000,
            'image' => "oxtail-beef.JPG",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'badge' => "Premium Beef",
        ]);
        Product::create([
            'name' => "Meatballs /500gr",
            'slug' => "meatballs-500gr",
            'currency' => "Rp",
            'price' => 68000,
            'image' => "meatballs-beef.JPG",
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

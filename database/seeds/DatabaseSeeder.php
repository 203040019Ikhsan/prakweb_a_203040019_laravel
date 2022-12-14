<?php
namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ikhsan Ardiansyah',
            'username' => 'Ikhsan Ardiansyah',
            'email' => 'Ikhsan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-design',
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lo3em ipsum dolor sit amet consectetur, adipisicing elit. Nisi, possimus?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, at dolor dignissimos minus sed, eum dolores, excepturi a itaque porro obcaecati aliquam totam? Ipsum provident autem rem mollitia aspernatur rerum dolores laudantium dicta, accusantium facilis eligendi odio minima delectus iusto laboriosam quas, quae commodi maiores cumque molestiae accusamus praesentium possimus! Dolorem, adipisci? Sunt velit qui ullam, fugit minus in nemo numquam, vel, autem fugiat magnam? Harum nulla et, ipsam at dignissimos quidem ab culpa quis perferendis deleniti rerum reiciendis eum in repudiandae quo velit explicabo minus nihil autem aperiam non. Nulla pariatur repellat aut voluptatem nam. Tempore porro voluptates accusantium!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lo3em ipsum dolor sit amet consectetur, adipisicing elit. Nisi, possimus?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, at dolor dignissimos minus sed, eum dolores, excepturi a itaque porro obcaecati aliquam totam? Ipsum provident autem rem mollitia aspernatur rerum dolores laudantium dicta, accusantium facilis eligendi odio minima delectus iusto laboriosam quas, quae commodi maiores cumque molestiae accusamus praesentium possimus! Dolorem, adipisci? Sunt velit qui ullam, fugit minus in nemo numquam, vel, autem fugiat magnam? Harum nulla et, ipsam at dignissimos quidem ab culpa quis perferendis deleniti rerum reiciendis eum in repudiandae quo velit explicabo minus nihil autem aperiam non. Nulla pariatur repellat aut voluptatem nam. Tempore porro voluptates accusantium!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lo3em ipsum dolor sit amet consectetur, adipisicing elit. Nisi, possimus?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, at dolor dignissimos minus sed, eum dolores, excepturi a itaque porro obcaecati aliquam totam? Ipsum provident autem rem mollitia aspernatur rerum dolores laudantium dicta, accusantium facilis eligendi odio minima delectus iusto laboriosam quas, quae commodi maiores cumque molestiae accusamus praesentium possimus! Dolorem, adipisci? Sunt velit qui ullam, fugit minus in nemo numquam, vel, autem fugiat magnam? Harum nulla et, ipsam at dignissimos quidem ab culpa quis perferendis deleniti rerum reiciendis eum in repudiandae quo velit explicabo minus nihil autem aperiam non. Nulla pariatur repellat aut voluptatem nam. Tempore porro voluptates accusantium!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lo3em ipsum dolor sit amet consectetur, adipisicing elit. Nisi, possimus?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, at dolor dignissimos minus sed, eum dolores, excepturi a itaque porro obcaecati aliquam totam? Ipsum provident autem rem mollitia aspernatur rerum dolores laudantium dicta, accusantium facilis eligendi odio minima delectus iusto laboriosam quas, quae commodi maiores cumque molestiae accusamus praesentium possimus! Dolorem, adipisci? Sunt velit qui ullam, fugit minus in nemo numquam, vel, autem fugiat magnam? Harum nulla et, ipsam at dignissimos quidem ab culpa quis perferendis deleniti rerum reiciendis eum in repudiandae quo velit explicabo minus nihil autem aperiam non. Nulla pariatur repellat aut voluptatem nam. Tempore porro voluptates accusantium!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
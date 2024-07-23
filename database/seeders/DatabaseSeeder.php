<?php
// Ni aku x asing dia punye class, aku buat semua nama table dalam file ni je
namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Ni kalau nk masukan data secara manual:
        // User::create([
        //     'name' => 'Zulhusni',
        //     'username' => 'Zul',
        //     'email' => 'zulhusni@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Post::create([
        //     'title' => 'Article 1',
        //     'author_id' => '1',
        //     'category_id' => '1',
        //     'slug' => 'title-article-1',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        // ]);

        // Ni nk add my details into table User, set variable dlu
        $zul = User::create([
            'name' => 'Zulhusni',
            'username' => 'Zul',
            'email' => 'zulhusni@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        $category1 = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'blue'
        ]);

        $category2 = Category::create([
            'name' => 'UIUX',
            'slug' => 'ui-ux',
            'color' => 'yellow'
        ]);

        $category3 = Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing',
            'color' => 'red'
        ]);

        $category4 = Category::create([
            'name' => 'Data Structure',
            'slug' => 'datastructure',
            'color' => 'green'
        ]);

        // Collect all created categories
        $categories = collect([$category1, $category2, $category3, $category4]);

        // Ni aku gabungkan semua table kat sini untuk seed data
        // Ni kalau nk secara auto, nnti just run command ni je, dia akan migrate and seed data
        // php artisan migrate:fresh --seed
        Post::factory(100)->recycle([
            $categories, // Use the collected categories here
            $zul,
            User::factory(5)->create()
        ])->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(ArticleCategoryTableSeeder::class);
        $this->call(PhotoTableSeeder::class);
        $this->call(RssSiteTableSeeder::class);
        $this->call(ArticleTableSeeder::class);

        Model::reguard();
    }
}

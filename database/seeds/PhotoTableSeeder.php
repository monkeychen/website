<?php

use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [
                'title' => 'img2.jpg',
                'url' => '/upload/admin/images/img2.jpg',
                'position' => 1,
                'user_id' => 1,
                'area_code' => 'slide',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'img3.jpg',
                'url' => '/upload/admin/images/img3.jpg',
                'position' => 2,
                'user_id' => 1,
                'area_code' => 'slide',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'img9.jpg',
                'url' => '/upload/admin/images/img9.jpg',
                'position' => 3,
                'user_id' => 1,
                'area_code' => 'top',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'img5.jpg',
                'url' => '/upload/admin/images/img5.jpg',
                'position' => 4,
                'user_id' => 1,
                'area_code' => 'top',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'img6.jpg',
                'url' => '/upload/admin/images/img6.jpg',
                'position' => 5,
                'user_id' => 1,
                'area_code' => 'bottom',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'img7.jpg',
                'url' => '/upload/admin/images/img7.jpg',
                'position' => 6,
                'user_id' => 1,
                'area_code' => 'bottom',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'img8.jpg',
                'url' => '/upload/admin/images/img8.jpg',
                'position' => 7,
                'user_id' => 1,
                'area_code' => 'bottom',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'img1.jpg',
                'url' => '/upload/admin/images/img1.jpg',
                'position' => 8,
                'user_id' => 1,
                'area_code' => 'slide',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}

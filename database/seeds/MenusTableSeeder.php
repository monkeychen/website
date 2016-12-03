<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->saveMainMenus();
        $this->saveSubMenus();
    }

    private function saveMainMenus()
    {
        DB::table('menus')->insert([
            [
                'name' => '首页',
                'code' => 'index',
                'link_url' => 'http://simiam.com',
                'position' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '应用',
                'code' => 'apps',
                'link_url' => null,
                'position' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '书签',
                'code' => 'favourites',
                'link_url' => null,
                'position' => 30,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }

    private function saveSubMenus()
    {
        DB::table('menus')->insert([
            [
                'name' => '教研平台',
                'code' => 'edu100',
                'link_url' => 'http://100.simiam.com',
                'position' => 40,
                'parent_code' => 'apps',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '商城演示',
                'code' => 'timecart',
                'link_url' => 'http://timecart.simiam.com',
                'position' => 50,
                'parent_code' => 'apps',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Github博客',
                'code' => 'github',
                'link_url' => 'http://tech.simiam.com/',
                'position' => 60,
                'parent_code' => 'favourites',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Inoreader',
                'code' => 'inoreader',
                'link_url' => 'https://www.inoreader.com/dashboard',
                'position' => 70,
                'parent_code' => 'favourites',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }


}

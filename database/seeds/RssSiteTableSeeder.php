<?php

use Illuminate\Database\Seeder;

class RssSiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rss_site')->insert([
            [
                'site_name' => '花钱的年华',
                'site_url' => 'http://calvin1978.blogcn.com',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'site_name' => '并发编程网',
                'site_url' => 'http://ifeve.com',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}

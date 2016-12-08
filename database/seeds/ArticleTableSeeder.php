<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => '关键业务系统的JVM启动参数推荐',
                'category_code' => 'information',
                'author' => '江南白衣',
                'summary' => '在关键的业务系统里，除了继续追求技术人员最爱的高吞吐与低延时之外，系统的稳定性与出现问题时排查的便捷性也很重要。这是本文的一个原则，后面也会一次又一次的强调，所以与网上其他的文章略有不同，请各位JVM调优高手和运维老大多提意见。',
                'src_url' => 'http://calvin1978.blogcn.com/articles/jvmoption-2.html',
                'pic_url' => '/upload/admin/images/img6.jpg',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => '并发框架Disruptor译文',
                'category_code' => 'technology',
                'author' => '并发编程网',
                'summary' => 'Martin Fowler在自己网站上写了一篇LMAX架构的文章，在文章中他介绍了LMAX是一种新型零售金融交易平台，它能够以很低的延迟产生大量交易。这个系统是建立在JVM平台上，其核心是一个业务逻辑处理器，它能够在一个线程里每秒处理6百万订单。',
                'src_url' => 'http://ifeve.com/disruptor/',
                'pic_url' => '/upload/admin/images/img11.png',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}

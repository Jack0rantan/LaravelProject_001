<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now = \Carbon\Carbon::now();
        for($i = 1; $i <= 10; $i++){
          $blogs = [
                    'title' => 'ダミー記事'.$i,
                    'outline' => 'この記事はダミーです'.$i,
                    'web_url' => '/blog/'.$i,
                    'pic_url' => '/img/dawn_desert_001',
                    'created_at' => $now,
                    'updated_at' => $now
                  ];
          DB::table('blogs')->insert($blogs);
        }
    }
}

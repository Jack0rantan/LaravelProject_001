<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
  protected $guarded = [
    'id',
    'created_at',
    'updated_at'
  ];

  public function createBlogModel(array $attributes = [])
  {
    return new static(array_merge([
        'title'      => 'sample_title',
        'outline'    => 'This is Sample',
        'web_url'    => '/test',
        'pic_url'    => '/public/img/test.jpg',
        'created_at' => date('Y-m-d H:i;s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],$attributes));
  }

}

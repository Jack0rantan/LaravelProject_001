<?php

namespace App\Services;

use App\Model\Blog;

class BlogService
{

  /**
   *  @var DatabaseManager
   */
  private $db;
  /**
   *  @string Table
   */
  private $table = 'blogs';

  public function getBlogOutline(int $id)
  {

        return Blog::where('id','<=',$id)
                  ->get();

  }

}

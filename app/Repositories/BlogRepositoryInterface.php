<?php

namespace App\Repositories;


interface BlogRepositoryInterface
{
  public function getAllBlog();
  public function getBlogBySlug(string $slug);
}
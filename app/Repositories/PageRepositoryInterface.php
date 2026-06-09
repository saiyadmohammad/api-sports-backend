<?php

namespace App\Repositories;


interface PageRepositoryInterface
{
  public function all();
  public function find(string $slug);
  public function update(int $id, array $data);
  public function delete(int $id);
}
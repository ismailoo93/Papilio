<?php


namespace App\Contracts;


interface RepositoryInterface
{
    public function create(array $attributes);
    public function all($columns = array('*'));
    public function find($id, $columns = array('*'));
    public function destroy($ids);
}
<?php


namespace App\Abstracts;


use App\Contracts\RepositoryInterface;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $modelClassName;

    public function create(array $attributes)
    {
        return call_user_func_array("{$this->modelClassName}::create", array($attributes));
    }
    public function all($columns = array('*'))
    {
       // return call_user_func_array("{$this->modelClassName}::all", array($columns));
        return $this->modelClassName::all();
    }
    public function find($id, $columns = array('*'))
    {
        //return call_user_func_array("{$this->modelClassName}::find", array($id, $columns));
        return $this->modelClassName::find($id);
    }

    public function destroy($ids)
    {
        return call_user_func_array("{$this->modelClassName}::destroy", array($ids));
    }
}
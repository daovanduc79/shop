<?php


namespace App\Http\Repository;


class Repository
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model ;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function paginate($number)
    {
        return $this->model->paginate($number);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function save($model)
    {
        return $model->save();
    }

    public function delete($id)
    {
        return $this->model->delete($id);
    }
}

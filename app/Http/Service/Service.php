<?php


namespace App\Http\Service;


class Service
{
    protected $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function paginate($number)
    {
        return $this->repository->paginate($number);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function findOrFail($id)
    {
        return $this->repository->findOrFail($id);
    }

    public function save($model)
    {
        return $this->repository->save($model);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}

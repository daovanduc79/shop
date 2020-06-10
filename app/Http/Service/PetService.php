<?php


namespace App\Http\Service;


use App\Http\Repository\PetRepository;
use App\Pet;

class PetService extends Service
{
    public function __construct(PetRepository $petRepository)
    {
        parent::__construct($petRepository);
    }

    function store($petRequest)
    {
        $name = $petRequest->name;
        $image = $petRequest->image->store('images', 'public');

        $pet = new Pet();
        $pet->name = $name;
        $pet->image = $image;

        $this->save($pet);
    }

    function update($id, $petRequest)
    {
        $name = $petRequest->name;
        $image = $petRequest->image->store('images', 'public');

        $pet = $this->findOrFail($id);
        $pet->name = $name;
        $pet->image = $image;
        $this->save($pet);
    }
}

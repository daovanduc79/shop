<?php


namespace App\Http\Service;


use App\Http\Repository\SearchRepository;

class SearchService
{
    protected $searchRepository;
    public function __construct(SearchRepository $searchRepository)
    {
        $this->searchRepository = $searchRepository;
    }

    function searchPet($keyword) {
            return $this->searchRepository->searchPet($keyword);
    }
}

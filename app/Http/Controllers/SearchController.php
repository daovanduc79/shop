<?php


namespace App\Http\Controllers;


use App\Http\Service\SearchService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $searchService;

    public function __construct(SearchService $searchService)
    {
        $this->searchService = $searchService;
    }

    function search(Request $request)
    {
        $object = $request->object;
        $keyword = $request->keyword;
        if ($object == 'pets') {
            $pets = $this->searchService->searchPet($keyword);
            return view('pets.list', compact('pets'));
        }
    }
}

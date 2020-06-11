<?php


namespace App\Http\Controllers;


use App\Http\Requests\PetRequest;
use App\Http\Service\PetService;
use Illuminate\Http\Request;

class PetController extends Controller
{
    protected $petService;

    public function __construct(PetService $petService)
    {
        $this->petService = $petService;
    }

    function index()
    {
        $pets = $this->petService->paginate(5);
        return view('pets.list', compact('pets'));
    }

    function create() {
        return view('pets.create');
    }

    function store(PetRequest $petRequest) {
        $this->petService->store($petRequest);
        return redirect()->route('pets.index');
    }

    function edit($id) {
        $pet = $this->petService->findOrFail($id);
        return view('pets.edit',compact('pet'));
    }

    function update($id, PetRequest $petRequest) {
        $this->petService->update($id, $petRequest);
        return redirect()->route('pets.index');
    }

    function delete($id) {
        $this->petService->delete($id);
        return redirect()->route('pets.index');
    }
}

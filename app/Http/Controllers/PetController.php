<?php


namespace App\Http\Controllers;


use App\Http\Requests\PetRequest;
use App\Http\Service\PetService;
use Brian2694\Toastr\Facades\Toastr;
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
        Toastr::success('Thêm mới thành công !', 'Succcess', ["positionClass" => "toast-top-center" , "progressBar" => true]);
        return redirect()->route('pets.index');
    }

    function edit($id) {
        $pet = $this->petService->findOrFail($id);
        return view('pets.edit',compact('pet'));
    }

    function update($id, PetRequest $petRequest) {
        $this->petService->update($id, $petRequest);
        Toastr::success('Chỉnh sửa thành công !', 'Succcess', ["positionClass" => "toast-top-center" , "progressBar" => true]);
        return redirect()->route('pets.index');
    }

    function delete($id) {
        $this->petService->delete($id);
        Toastr::success('Xóa thành công !', 'Succcess', ["positionClass" => "toast-top-center" , "progressBar" => true]);
        return redirect()->route('pets.index');
    }
}

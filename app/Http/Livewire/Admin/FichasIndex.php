<?php

namespace App\Http\Livewire\Admin;

use App\Models\Ficha;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator; 

class FichasIndex extends Component
{

    use WithPagination;

    public $search;

    
    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){

        $this->resetPage();
    }

    public function resetFilters(){
     
        $this->reset('search');
 
 }

    public function render()
    {
        Paginator::useBootstrap();

        $fichas = Ficha::where('p_nombre', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('s_nombre', 'LIKE', '%' . $this->search . '%')
                        ->paginate();


        return view('livewire.admin.fichas-index', compact('fichas'));
    }
}

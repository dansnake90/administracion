<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator; 
use Livewire\WireDirective;

class UsersIndex extends Component
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

        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                        ->paginate();

        return view('livewire.admin.users-index', compact('users'));
    }
}

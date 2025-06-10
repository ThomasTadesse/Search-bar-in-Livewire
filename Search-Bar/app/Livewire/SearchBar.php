<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class SearchBar extends Component
{

    public $search = "";

    // Add this updatedSearch method for real-time searching
    public function updatedSearch()
    {
        $this->dispatch('search-updated');
    }

    public function render()
    {

        $results = [];
        if (strlen($this->search) >= 1) {
            // querying from database with improved search
            $results = User::where(function($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->limit(7)
            ->get();
        }

        // return to the view with the results
        return view('livewire.search-bar', [
            'users' => $results
        ]);
    }
}

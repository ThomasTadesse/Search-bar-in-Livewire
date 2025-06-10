<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class SearchBar extends Component
{

    // This component is used to search for users by name
    public $search = "";

    // This component listens for changes in the search input provided above
    public function render()
    {

        $results = [];

        if (strlen($this->search) >= 1) {
            // querying from database
            $results = User::where('name', 
                                   'like', 
                                   '%' .$this->search. '%')
                                    ->limit(7)
                                    ->get();
        }

        // return to the view with the results
        return view('livewire.search-bar',[
            'users' => $results
        ]);
    }
}

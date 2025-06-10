<div id="search-bar" class="search-wrapper">
    <form class="search-container" role="search">
        <input wire:model.live="search" class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
    </form>
    
    @if(strlen($search) >= 1)
        <div class="search-results dropdown-menu d-block position-absolute w-100 py-0">
            <div class="p-2 bg-light border-bottom">
                Searching for: "{{ $search }}" ({{ count($users) }} results)
            </div>
            @if(count($users) > 0)
                @foreach($users as $user)
                    <div class="px-3 py-2 border-bottom search-result-item" style="cursor: pointer;">
                        <div class="d-flex flex-column ml-3">
                            <span>{{ $user->name }}</span>
                            <small>{{ $user->email }}</small>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="px-3 py-2 text-muted">No results found</div>
            @endif
        </div>
    @endif
</div>

<?php

namespace App\Livewire;

use App\Models\Conference;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConferenceComponent extends Component
{

    public Collection $conferences;

    public function render(): View
    {
        $this->conferences = Conference::query()
            ->whereFuture('conferences.end_date')
            ->get();

        return view('livewire.conference-component');
    }
}

<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public $selectedUser = null;

    public function selectUser($userId)
    {
        $this->selectedUser = User::find($userId);
    }

    public function render()
    {
        $users = User::where('id', '!=', Auth::id())->get();

        return view('livewire.chat', [
            'users' => $users
        ])->layout('components.layout');
    }
}

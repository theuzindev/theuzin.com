<?php

namespace App\Http\Livewire;

use App\Services\TxtAiFacade;
use Livewire\Component;

class RaiamAiSearch extends Component
{
    public ?string $prompt = null;

    public ?string $result = null;

    protected array $rules = [
        'prompt' => 'required|string|min:6|max:255',
    ];

    public function search(): void
    {
        $this->validate();

        $ai = TxtAiFacade::ask($this->prompt);

        $this->result = nl2br(data_get($ai, 'message'));
    }

    public function render()
    {
        return view('livewire.raiam-ai-search');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

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

        $result = OpenAI::completions()->create([
            'model' => 'ft-iS09yj2L2iz0Argv1Jwfbk1p',
            'prompt' => $this->prompt,
        ]);

        $this->result = $result['choices'][0]['text'];
    }

    public function render()
    {
        return view('livewire.raiam-ai-search');
    }
}

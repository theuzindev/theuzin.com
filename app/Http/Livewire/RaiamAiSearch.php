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
            'model' => 'ada:ft-personal-2023-04-21-20-42-20',
            'prompt' => $this->prompt,
            'max_tokens' => 50,
            'temperature' => 0.7
        ]);

        $this->result = $result['choices'][0]['text'];
    }

    public function render()
    {
        return view('livewire.raiam-ai-search');
    }
}

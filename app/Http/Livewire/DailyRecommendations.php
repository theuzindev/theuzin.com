<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class DailyRecommendations extends Component
{
    public ?string $result = null;

    public function food(): void
    {
        $this->result = $this->askGPT('Recommend me a single food to order right now');
    }

    public function style(): void
    {
        $this->result = $this->askGPT('Recommend me a single clothing style to wear for today');
    }

    public function book(): void
    {
        $this->result = $this->askGPT('Recommend me a single book to read today');
    }

    public function game(): void
    {
        $this->result = $this->askGPT('Recommend me a single video game to play right now');
    }

    public function render(): View
    {
        return view('livewire.daily-recommendations');
    }

    private function askGPT(string $content): string
    {
        $result = OpenAI::completions()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'assistant',
                    'content' => $content,
                ],
                // [
                //     'role' => 'user',
                //     'content' => 'Hello!'
                // ]
            ],
        ]);

        return $result['choices'][0]['text'];
    }
}

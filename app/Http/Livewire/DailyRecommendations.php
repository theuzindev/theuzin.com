<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;
use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class DailyRecommendations extends Component
{
    public string $selected = '';

    public ?string $result = null;

    public function mount()
    {
        $ip = getenv('REMOTE_ADDR');

        if (cache()->has('selected::' . $ip)) {
            $this->selected = cache('selected::' . $ip);
        }

        if (cache()->has($this->selected . '::' . $ip)) {
            $this->result = cache($this->selected . '::' . $ip);
        }
    }

    public function food(): void
    {
        $this->selected = __FUNCTION__;

        $this->result = $this->askGPT('Recommend me a single food to order right now');
    }

    public function style(): void
    {
        $this->selected = __FUNCTION__;

        $this->result = $this->askGPT('Recommend me a single clothing style to wear for today');
    }

    public function book(): void
    {
        $this->selected = __FUNCTION__;

        $this->result = $this->askGPT('Recommend me a single book to read today');
    }

    public function game(): void
    {
        $this->selected = __FUNCTION__;

        $this->result = $this->askGPT('Recommend me a single video game to play right now');
    }

    public function render(): View
    {
        return view('livewire.daily-recommendations');
    }

    private function askGPT(string $message): string
    {
        $ip = getenv('REMOTE_ADDR');

        Cache::put('selected::' . $ip, $this->selected, now()->addDay());

        return Cache::remember(
            $this->selected . '::' . $ip,
            now()->addDay(),
            function () use ($message) {
                $result = OpenAI::chat()->create([
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        [
                            'role' => 'assistant',
                            'content' => 'Sorry, my role is only to give daily recommendation of food, clothing style, video game or book',
                        ],
                        [
                            'role' => 'user',
                            'content' => $message,
                        ]
                    ],
                ]);

                return $result['choices'][0]['message']['content'];
            }
        );
    }
}

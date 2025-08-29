@php
    $colorMap = [
        'primary' => 'var(--color-primary)',
        'primary-20' => 'var(--color-primary-20)',
        'primary-dark' => 'var(--color-primary-dark)',
        'secondary' => 'var(--color-secondary)',
        'secondary-20' => 'var(--color-secondary-20)',
        'background' => 'var(--color-background)',
        'background-secondary' => 'var(--color-background-secondary)',
        'text-primary' => 'var(--color-base)',
        'text-secondary' => 'var(--color-muted)',
        'base' => 'var(--color-base)',
        'muted' => 'var(--color-muted)',
        'neutral' => 'var(--color-neutral)',
        'inverted' => 'var(--color-inverted)',
    ];
@endphp

<x-filament::page>
    @vite(['themes/' . config('settings.theme') . '/js/app.js', 'themes/' . config('settings.theme') . '/css/app.css'], config('settings.theme'))
    <div class="w-full">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <form wire:submit="save">
                {{ $this->form }}
                <div class="mt-6">
                    <button style="background: #60A5FA" type="submit" class="w-full hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200">
                        Save Configuration
                    </button>
                </div>
            </form>
        </div>
    </div>

    <style>
        [x-cloak] { display: none !important; }
        .overflow-y-auto::-webkit-scrollbar {
            width: 6px;
        }
        
        .overflow-y-auto::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }
        
        .overflow-y-auto::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }
        
        .overflow-y-auto::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
        
        .dark .overflow-y-auto::-webkit-scrollbar-track {
            background: #374151;
        }
        
        .dark .overflow-y-auto::-webkit-scrollbar-thumb {
            background: #6b7280;
        }
        
        .dark .overflow-y-auto::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }
    </style>
</x-filament::page>



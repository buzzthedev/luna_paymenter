@php
    $colorMap = [
        'primary' => 'var(--hpb-color-primary)',
        'primary-20' => 'var(--hpb-color-primary-20)',
        'primary-dark' => 'var(--hpb-color-primary-dark)',
        'secondary' => 'var(--hpb-color-secondary)',
        'secondary-20' => 'var(--hpb-color-secondary-20)',
        'background' => 'var(--hpb-color-background)',
        'background-secondary' => 'var(--hpb-color-background-secondary)',
        'text-primary' => 'var(--hpb-color-base)',
        'text-secondary' => 'var(--hpb-color-muted)',
        'base' => 'var(--hpb-color-base)',
        'muted' => 'var(--hpb-color-muted)',
        'neutral' => 'var(--hpb-color-neutral)',
        'inverted' => 'var(--hpb-color-inverted)',
        'dark-primary' => 'var(--hpb-color-dark-primary)',
        'dark-secondary' => 'var(--hpb-color-dark-secondary)',
        'dark-neutral' => 'var(--hpb-color-dark-neutral)',
        'dark-base' => 'var(--hpb-color-dark-base)',
        'dark-muted' => 'var(--hpb-color-dark-muted)',
        'dark-inverted' => 'var(--hpb-color-dark-inverted)',
        'dark-background' => 'var(--hpb-color-dark-background)',
        'dark-background-secondary' => 'var(--hpb-color-dark-background-secondary)',
    ];
@endphp

<x-filament::page>
    @vite(['themes/' . config('settings.theme') . '/js/app.js', 'themes/' . config('settings.theme') . '/css/app.css'], config('settings.theme'))
    <div x-data="{ tab: 'settings' }" class="w-full">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <div class="mb-6">
                <div class="inline-flex rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700">
                    <button type="button" @click="tab = 'settings'" class="px-4 py-2 text-sm font-medium focus:outline-none transition-colors duration-200" :class="tab === 'settings' ? 'bg-blue-500 text-white' : 'bg-transparent text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700'">
                        Settings
                    </button>
                    <button type="button" @click="tab = 'preview'" class="px-4 py-2 text-sm font-medium focus:outline-none transition-colors duration-200" :class="tab === 'preview' ? 'bg-blue-500 text-white' : 'bg-transparent text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700'">
                        Preview
                    </button>
                </div>
            </div>

            <div x-show="tab === 'settings'" x-cloak>
                <form wire:submit="save">
                    {{ $this->form }}
                    <div class="mt-6">
                        <button style="background: #60A5FA" type="submit" class="w-full hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200">
                            Save Configuration
                        </button>
                    </div>
                </form>
            </div>

            <div x-show="tab === 'preview'" x-cloak>
                <div class="mt-2 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden h-[70vh]">
                    <iframe src="{{ url('/') }}" class="w-full h-full" style="border: 0"></iframe>
                </div>
            </div>
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



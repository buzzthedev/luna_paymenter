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
    <div class="w-full" x-data="{ tab: 'settings' }">
        <div class="mb-4 w-full flex items-center rounded-lg p-1 border border-gray-200 dark:border-gray-700 bg-gray-100 dark:bg-gray-800">
            <button type="button" @click="tab = 'settings'" :class="tab === 'settings' ? 'bg-white dark:bg-gray-900 text-gray-900 dark:text-white' : 'text-gray-700 dark:text-gray-300'" class="w-1/2 py-2 rounded-md font-medium text-center transition-colors duration-200">Builder</button>
            <button type="button" @click="tab = 'preview'" :class="tab === 'preview' ? 'bg-white dark:bg-gray-900 text-gray-900 dark:text-white' : 'text-gray-700 dark:text-gray-300'" class="w-1/2 py-2 rounded-md font-medium text-center transition-colors duration-200">Preview</button>
        </div>
        <div x-show="tab === 'settings'" x-cloak x-transition.opacity.scale.duration.200ms class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <x-filament-panels::form wire:submit="save">
                {{ $this->form }}
                <div class="mt-6">
                    <button style="background: #60A5FA" type="submit" class="w-full hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200">
                        Save Configuration
                    </button>
                </div>
            </x-filament-panels::form>
        </div>

        <div x-show="tab === 'preview'" x-cloak x-transition.opacity.scale.duration.200ms class="mt-6 bg-gray-50 dark:bg-gray-900 rounded-lg p-6 border border-gray-200 dark:border-gray-700 min-h-screen flex flex-col">
            <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 flex-1">
                <div id="previewContainer" x-data="{ scale: 1, setScale() { const w = this.$refs.container.clientWidth || this.$refs.container.offsetWidth; if(!w){ this.scale = 1; return; } this.scale = Math.max(0.3, Math.min(1, w / 1400)); }, initIframe() { const iframe = this.$refs.frame; if(!iframe) return; iframe.src = '{{ url('/') }}'; } }" x-init="$nextTick(() => { initIframe(); setScale(); })" x-effect="if(tab==='preview'){ $nextTick(() => { initIframe(); setScale(); }) }" @resize.window="setScale()" @orientationchange.window="setScale()" x-ref="container" class="w-full h-full overflow-hidden bg-transparent flex justify-center items-start">
                    @if(isset($homebuilderView) && $homebuilderView)
                        <div class="preview-outer mx-auto">
                            <div class="preview-stage" :style="`--preview-scale:${scale}`">
                                <iframe x-ref="frame" style="width:1400px; height:100vh; border:0; background:transparent; display:block;"></iframe>
                            </div>
                        </div>
                    @else
                        <div class="p-8 text-center text-gray-500 dark:text-gray-400">
                            <div class="text-4xl mb-4">🏠</div>
                            <h3 class="text-lg font-medium mb-2">Preview Not Available</h3>
                            <p class="text-sm">Configure your homepage settings to see a live preview here</p>
                        </div>
                    @endif
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
        
        #previewContainer {
            scrollbar-gutter: stable both-edges;
        }
        
        .preview-outer {
            width: 100%;
            height: 100%;
            overflow: auto;
        }

        .preview-stage {
            width: 1400px;
            transform: scale(var(--preview-scale, 1));
            transform-origin: top left;
            will-change: transform;
        }

        .preview-content {
            @apply text-gray-900 dark:text-white;
        }
        
        .preview-content * {
            @apply text-inherit;
        }
        
        .preview-content section {
            @apply w-full;
        }
        
        .preview-content h1, .preview-content h2, .preview-content h3, .preview-content h4, .preview-content h5, .preview-content h6 {
            @apply font-bold text-gray-900 dark:text-white;
        }
        
        .preview-content p {
            @apply text-gray-700 dark:text-gray-200;
        }
        
        .preview-content a {
            @apply text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300;
        }
        
        .preview-content button, .preview-content .btn {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200;
        }
        
    </style>
</x-filament::page>



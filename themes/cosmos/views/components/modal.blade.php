@props([
    'title' => '',
    'closable' => true,
    'closeTrigger' => '',
    'open' => false,
    'width' => 'max-w-4xl'
])
<div x-data="{ open: {{ $open ? 'true' : 'false' }} }" @open-modal.window="open = $event.detail.open">
    <template x-teleport="body">
        <div class="fixed inset-0 z-30 flex items-center justify-center rounded-2xl bg-black/50"
            x-show="open"
            @click.self="open = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <div class="mx-4 modal-scrollbar px-6 py-4 w-full text-left bg-background rounded-2xl shadow-2xl {{ $width }} max-h-[80vh] overflow-y-auto flex flex-col"
                x-cloak
                x-transition:enter="transition transform cubic-bezier(0.34,1.56,0.64,1) duration-400"
                x-transition:enter-start="translate-y-24"
                x-transition:enter-end="translate-y-0"
                x-transition:leave="transition transform ease-in duration-200"
                x-transition:leave-start="translate-y-0"
                x-transition:leave-end="translate-y-24">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-semibold text-primary-100 ">{{ $title }}</h2>
                    @if ($closable && !$closeTrigger)
                        <button @click="open = false" class="text-primary-100 cursor-pointer">
                            <x-ri-close-fill class="size-6" />
                        </button>
                    @elseif ($closable && $closeTrigger)
                        {{ $closeTrigger }}
                    @endif
                </div>
                <div class="mt-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </template>

</div>

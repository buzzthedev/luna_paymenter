@php
    $data = $data ?? [];
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
        'bg-background' => 'var(--hpb-color-bg-background)',
        'color-background' => 'var(--hpb-color-color-background)',
    ];
@endphp

@switch($variation)
    @case('1')
        {{-- 3-column-grid --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Everything You Need') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Powerful features designed to help your business succeed online') }}</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @php
                        $items = data_get($data, 'content.items', []);
                        $icons = ['fa-bolt','fa-server','fa-shield-halved','fa-globe','fa-headset','fa-cloud'];
                    @endphp
                    @foreach ($items as $index => $item)
                        @php $icon = $icons[$index % count($icons)] ?? 'fa-bolt'; @endphp
                        <div class="border-1 rounded-3xl p-8  home-page-builder__card card-gradient" style="border-radius: var(--hpb-card-radius); box-shadow: var(--hpb-card-shadow);">
                            <div class="flex items-start space-x-6">
                                <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">
                                    <i class="fa-solid {{ $icon }} text-white text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($item, 'title', 'Feature') }}</h3>
                                    <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($item, 'description', 'Description') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @break

    @case('2')
        {{-- 2-column-grid --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Why Choose Us?') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', "We're not just another hosting provider. Here's what makes us different.") }}</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
                    @php
                        $items = data_get($data, 'content.items', []);
                        $icons = ['fa-rocket','fa-shield-halved','fa-clock','fa-globe','fa-headset','fa-chart-line'];
                    @endphp
                    <div class="space-y-8">
                        @foreach ($items as $index => $item)
                            @if ($index % 2 === 0)
                                @php $icon = $icons[$index % count($icons)] ?? 'fa-rocket'; @endphp
                                <div class="border-1 rounded-3xl p-8  home-page-builder__card card-gradient" style="border-radius: var(--hpb-card-radius); box-shadow: var(--hpb-card-shadow);">
                                    <div class="flex items-start space-x-6">
                                        <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">
                                            <i class="fa-solid {{ $icon }} text-white text-2xl"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($item, 'title', 'Feature') }}</h3>
                                            <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($item, 'description', 'Description') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    
                    <div class="space-y-8">
                        @foreach ($items as $index => $item)
                            @if ($index % 2 === 1)
                                @php $icon = $icons[$index % count($icons)] ?? 'fa-rocket'; @endphp
                                <div class="border-1 rounded-3xl p-8  home-page-builder__card card-gradient" style="border-radius: var(--hpb-card-radius); box-shadow: var(--hpb-card-shadow);">
                                    <div class="flex items-start space-x-6">
                                        <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">
                                            <i class="fa-solid {{ $icon }} text-white text-2xl"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($item, 'title', 'Feature') }}</h3>
                                            <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($item, 'description', 'Description') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('3')
        {{-- core-features --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Core Features') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Essential tools and capabilities that power your online success') }}</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                        $itemsMain = data_get($data, 'content.items_main', []);
                        $mainIcons = ['fa-server','fa-shield-halved','fa-globe','fa-headset'];
                    @endphp
                    @foreach ($itemsMain as $index => $item)
                        @php $icon = $mainIcons[$index % count($mainIcons)] ?? 'fa-server'; @endphp
                        <div class="text-center">
                            <div class="flex items-center justify-center rounded-full p-6 w-24 h-24 mx-auto mb-6" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">
                                <i class="fa-solid {{ $icon }} text-white text-3xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($item, 'title', 'Feature') }}</h3>
                            <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($item, 'description', 'Description') }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="mt-16 grid md:grid-cols-3 gap-8">
                    @php
                        $itemsSub = data_get($data, 'content.items_sub', []);
                        $subIcons = ['fa-cloud','fa-rocket','fa-chart-line'];
                    @endphp
                    @foreach ($itemsSub as $index => $item)
                        @php $icon = $subIcons[$index % count($subIcons)] ?? 'fa-cloud'; @endphp
                        <div class="text-center">
                            <div class="flex items-center justify-center rounded-2xl p-4 w-16 h-16 mx-auto mb-4" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">
                                <i class="fa-solid {{ $icon }} text-white text-xl"></i>
                            </div>
                            <h4 class="text-base font-semibold mb-2 text-gray-900 dark:text-white">{{ data_get($item, 'title', 'Feature') }}</h4>
                            <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($item, 'description', 'Description') }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @break

    @case('4')
        {{-- enterprise-solutions --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Enterprise Solutions') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Professional-grade hosting infrastructure for businesses that demand excellence') }}</p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        @php
                            $itemsLeft = data_get($data, 'content.items_left', []);
                            $leftIcons = ['fa-database','fa-lock','fa-clock'];
                        @endphp
                        @foreach ($itemsLeft as $index => $item)
                            @php $icon = $leftIcons[$index % count($leftIcons)] ?? 'fa-database'; @endphp
                            <div class="flex items-start space-x-6">
                                <div class="flex items-center justify-center rounded-2xl p-4 w-14 h-14 flex-shrink-0" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">
                                    <i class="fa-solid {{ $icon }} text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">{{ data_get($item, 'title', 'Feature') }}</h3>
                                    <p class="text-gray-700 dark:text-gray-200">{{ data_get($item, 'description', 'Description') }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="space-y-6">
                        @php $metrics = data_get($data, 'content.metrics', []); @endphp
                        @foreach ($metrics as $m)
                            <div class="border-1rounded-2xl p-6  home-page-builder__card card-gradient" style="border-radius: var(--hpb-card-radius); box-shadow: var(--hpb-card-shadow);">
                                <div class="flex items-center justify-between mb-4">
                                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ data_get($m, 'title', 'Metric') }}</h4>
                                    <div class="text-2xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">{{ data_get($m, 'value', '-') }}</div>
                                </div>
                                <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($m, 'description', '') }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('5')
        {{-- borderless-grid --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Everything You Need') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Powerful features designed to help your business succeed online') }}</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @php
                        $items = data_get($data, 'content.items', []);
                        $icons = ['fa-bolt','fa-server','fa-shield-halved','fa-globe','fa-headset','fa-cloud'];
                    @endphp
                    @foreach ($items as $index => $item)
                        @php $icon = $icons[$index % count($icons)] ?? 'fa-bolt'; @endphp
                        <div class="border-1 rounded-3xl p-8  home-page-builder__card card-gradient" style="border-radius: var(--hpb-card-radius); box-shadow: var(--hpb-card-shadow);">
                            <div class="flex items-start space-x-6">
                                <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid {{ $icon }} text-white text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($item, 'title', 'Feature') }}</h3>
                                    <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($item, 'description', 'Description') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @break

    @default
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4 text-center py-16">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white mb-8">Features Section</h2>
                <p class="text-xl text-gray-700 dark:text-gray-200 mb-12">
                    Choose a features variation in the admin panel to customize this section.
                </p>
            </div>
        </section>
@endswitch




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
    'bg-background' => 'var(--hpb-color-bg-background)',
    'color-background' => 'var(--hpb-color-color-background)',
];
@endphp

@switch($variation)
    @case('1')
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Pricing') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Simple, transparent pricing that scales with you') }}</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php $plans = data_get($data, 'content.items', []); @endphp
                    @foreach ($plans as $idx => $plan)
                        <div class="border-1rounded-2xl p-6 flex flex-col hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg  home-page-builder__card card-gradient">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid {{ ['fa-rocket','fa-bolt','fa-building'][$idx % 3] ?? 'fa-rocket' }} text-white"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ data_get($plan, 'title', 'Plan') }}</h3>
                            <div class="mt-2 text-3xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">{{ data_get($plan, 'price', '$9') }}<span class="text-base text-gray-600 dark:text-gray-300">{{ data_get($plan, 'period', '/mo') }}</span></div>
                            <ul class="mt-6 space-y-3 text-sm text-gray-700 dark:text-gray-200">
                                @foreach (data_get($plan, 'features', []) as $f)
                                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>{{ data_get($f, 'text', '') }}</li>
                                @endforeach
                            </ul>
                            <div class="mt-6">
                                <a href="{{ data_get($plan, 'cta_link', '#') }}" class="w-full inline-flex items-center justify-center px-4 py-2 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }});">{{ data_get($plan, 'cta_label', 'Choose plan') }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @break

    @case('2')
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Pricing') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Choose the plan that fits your needs') }}</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php $plans = data_get($data, 'content.items', []); @endphp
                    @foreach ($plans as $idx => $plan)
                        <div class="border-1rounded-2xl p-6 flex flex-col {{ $idx === 1 ? 'relative lg:scale-105 lg:shadow-xl' : '' }} hover:-translate-y-1 transition-transform duration-200  home-page-builder__card card-gradient">
                            @if(data_get($plan, 'badge'))
                                <span class="absolute -top-3 right-4 text-xs font-semibold px-2 py-1 rounded-full text-white" style="background-color: hsl({{ $colorMap['primary'] }});">{{ data_get($plan, 'badge') }}</span>
                            @endif
                            <div class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">{{ data_get($plan, 'title', 'Plan') }}</div>
                            <div class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">{{ data_get($plan, 'price', '$5') }}</div>
                            <div class="text-xs text-gray-600 dark:text-gray-300">{{ data_get($plan, 'period', 'per month') }}</div>
                            <div class="mt-4 h-px" style="background-color: hsl({{ $colorMap['neutral'] }});"></div>
                            <ul class="mt-4 space-y-2 text-sm text-gray-700 dark:text-gray-200">
                                @foreach (data_get($plan, 'features', []) as $f)
                                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>{{ data_get($f, 'text', '') }}</li>
                                @endforeach
                            </ul>
                            <a href="{{ data_get($plan, 'cta_link', '#') }}" class="mt-6 inline-flex items-center justify-center px-4 py-2 rounded-lg {{ $idx === 1 ? 'text-white' : '' }}" style="{{ $idx === 1 ? 'background-color: hsl(' . $colorMap['primary'] . ');' : 'border-color: hsl(' . $colorMap['primary'] . '); color: hsl(' . $colorMap['primary'] . ');' }}">{{ data_get($plan, 'cta_label', $idx === 1 ? 'Get started' : 'Get started') }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @break

    @case('3')
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Pricing') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Flexible options for every stage of growth') }}</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php $plans = data_get($data, 'content.items', []); @endphp
                    @foreach ($plans as $idx => $plan)
                        <div class="border-1rounded-2xl p-6 flex flex-col  home-page-builder__card card-gradient">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ data_get($plan, 'title', 'Plan') }}</h3>
                                @if(data_get($plan, 'badge'))
                                    <span class="text-xs px-2 py-1 rounded-full" style="background-color: hsl({{ $colorMap['primary'] }}); color: white;">{{ data_get($plan, 'badge') }}</span>
                                @endif
                            </div>
                            <div class="mt-3 text-3xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">{{ data_get($plan, 'price', '$12') }}<span class="text-base text-gray-600 dark:text-gray-300">{{ data_get($plan, 'period', '/mo') }}</span></div>
                            <ul class="mt-6 space-y-3 text-sm text-gray-700 dark:text-gray-200">
                                @foreach (data_get($plan, 'features', []) as $f)
                                    <li>{{ data_get($f, 'text', '') }}</li>
                                @endforeach
                            </ul>
                            <a href="{{ data_get($plan, 'cta_link', '#') }}" class="mt-6 inline-flex items-center justify-center px-4 py-2 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }});">{{ data_get($plan, 'cta_label', 'Select') }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @break

    @default
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4 text-center py-16">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white mb-8">Pricing Section</h2>
                <p class="text-xl text-gray-700 dark:text-gray-200 mb-12">
                    Choose a pricing variation in the admin panel to customise this section.
                </p>
            </div>
        </section>
@endswitch



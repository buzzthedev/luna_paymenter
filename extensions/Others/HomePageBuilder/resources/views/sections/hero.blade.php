@props(['variation' => '1', 'data' => []])

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
        {{-- centered-hero --}}
        <section class="py-20 relative">
            <div class="relative z-10 container mx-auto px-4 py-20 text-center">
                <h1 
                    class="text-5xl md:text-6xl font-bold mb-6 text-gray-900 dark:text-white"
                >
                    {{ data_get($data, 'content.title', 'Enterprise-Grade Hosting Solutions') }}
                </h1>

                <p 
                    class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-gray-700 dark:text-gray-200"
                >
                    {{ data_get($data, 'content.subtitle', 'Premium VPS, dedicated servers, and colocation services for businesses that demand reliability and performance') }}
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ data_get($data, 'content.primary_link', '#get-started') }}" 
                       class="inline-flex items-center px-8 py-4 text-white font-semibold rounded-lg"
                       style="background-color: hsl({{ $colorMap['primary'] }});"
                    >
                        {{ data_get($data, 'content.primary_label', 'View Plans') }}
                    </a>

                    <a href="{{ data_get($data, 'content.secondary_link', '#learn-more') }}" 
                       class="inline-flex items-center px-8 py-4 font-semibold rounded-lg border-1"
                       style="border-color: hsl({{ $colorMap['primary'] }}); color: hsl({{ $colorMap['primary'] }});"
                    >
                        {{ data_get($data, 'content.secondary_label', 'Read me') }}
                    </a>
                </div>
            </div>
        </section>
        @break
    @case('2')
        {{-- deploy-scale-hero --}}
        <section class="py-20 flex items-center justify-center px-4">
            <div class="max-w-4xl mx-auto text-center space-y-8">
                <h1 class="text-5xl md:text-6xl font-bold tracking-tight text-gray-900 dark:text-white">{{ data_get($data, 'content.title', 'Deploy with confidence.') }}<span class="block text-blue-600 dark:text-blue-400">{{ data_get($data, 'content.subtitle_strong', 'Scale without limits.') }}</span></h1>
                <p class="text-xl max-w-2xl mx-auto leading-relaxed text-gray-700 dark:text-gray-200">{{ data_get($data, 'content.subtitle', 'Enterprise infrastructure that grows with your business. From VPS to dedicated servers, we provide the performance and reliability you need.') }}</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ data_get($data, 'content.primary_link', '#') }}" class="inline-flex items-center justify-center text-lg px-8 py-3 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">{{ data_get($data, 'content.primary_label', 'View Plans') }} <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12l-7.5 7.5M21 12H3"/></svg></a>
                    <a href="{{ data_get($data, 'content.secondary_link', '#') }}" class="inline-flex items-center justify-center text-lg px-8 py-3 rounded-lg border-1 bg-transparent text-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600" style="border-radius: var(--hpb-card-radius);"><svg class="mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>{{ data_get($data, 'content.secondary_label', 'Read me') }}</a>
                </div>
                <div class="flex items-center justify-center gap-8 pt-8 opacity-60 text-gray-600 dark:text-gray-400">
                    <div class="text-sm font-medium">99.9% Uptime</div>
                    <div class="text-sm font-medium">24/7 Support</div>
                    <div class="text-sm font-medium">Global Network</div>
                    <div class="text-sm font-medium">DDoS Protection</div>
                </div>
            </div>
        </section>
        @break
    @case('3')
        {{-- infrastructure-powers-web --}}
        <section class="py-20 flex items-center px-4">
            <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div class="space-y-6">
                        <h1 class="text-3xl md:text-4xl font-bold leading-tight text-gray-900 dark:text-white">{{ data_get($data, 'content.title', 'Infrastructure that powers') }}<span class="block text-blue-600 dark:text-blue-400">{{ data_get($data, 'content.subtitle_strong', 'the modern web') }}</span></h1>
                        <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-200">{{ data_get($data, 'content.subtitle', 'High-performance servers with enterprise-grade hardware, global data centers, and 24/7 expert support to keep your applications running smoothly.') }}</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <svg class="h-5 w-5 text-green-600 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-base text-gray-700 dark:text-gray-200">NVMe SSD storage for lightning-fast I/O</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="h-5 w-5 text-green-600 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-base text-gray-700 dark:text-gray-200">Global data centers with low-latency connections</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="h-5 w-5 text-green-600 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-base text-gray-700 dark:text-gray-200">Enterprise-grade security and DDoS protection</span>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ data_get($data, 'content.primary_link', '#') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">{{ data_get($data, 'content.primary_label', 'View Plans') }}</a>
                        <a href="{{ data_get($data, 'content.secondary_link', '#') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg" style="color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">{{ data_get($data, 'content.secondary_label', 'Read me') }}</a>
                    </div>
                </div>
                <div class="relative">
                    @php $img = data_get($data, 'content.image'); @endphp
                    @if($img)
                        <img src="{{ Storage::url($img) }}" alt="{{ data_get($data, 'content.image_alt', 'Hero image') }}" class="w-full h-96 object-cover rounded-2xl" style="border-radius: var(--hpb-card-radius);" />
                    @else
                        <div class="w-full h-96 bg-gray-200 dark:bg-gray-700 rounded-2xl"></div>
                    @endif
                </div>
            </div>
        </section>
        @break
    @case('4')
        {{-- enterprise-infrastructure --}}
        <section class="py-20 flex items-center px-4">
            <div class="max-w-5xl mx-auto text-center space-y-8">
                <h1 class="text-5xl md:text-6xl font-bold leading-tight text-gray-900 dark:text-white">{{ data_get($data, 'content.title', 'Enterprise-grade infrastructure') }}<span class="block text-blue-600 dark:text-blue-400">{{ data_get($data, 'content.subtitle_strong', 'for mission-critical applications') }}</span></h1>
                <p class="text-xl leading-relaxed max-w-3xl mx-auto text-gray-700 dark:text-gray-200">{{ data_get($data, 'content.subtitle', 'Deploy with confidence using our enterprise-grade security features, compliance-ready infrastructure, and global network of data centers.') }}</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ data_get($data, 'content.primary_link', '#') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">{{ data_get($data, 'content.primary_label', 'View Plans') }}</a>
                    <a href="{{ data_get($data, 'content.secondary_link', '#') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg border-1 bg-transparent text-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600" style="color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">{{ data_get($data, 'content.secondary_label', 'Read me') }}</a>
                </div>
                <div class="flex items-center justify-center gap-8 pt-8 text-sm text-gray-600 dark:text-gray-400">
                    <div>SOC 2 Compliant</div>
                    <div>•</div>
                    <div>ISO 27001 Certified</div>
                    <div>•</div>
                    <div>99.99% Uptime SLA</div>
                </div>
            </div>
        </section>
        @break
    @case('5')
        {{-- deploy-scale-features --}}
        <section class="py-20 flex items-center px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 space-y-6">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white">Everything you need to deploy and scale</h1>
                    <p class="text-xl max-w-2xl mx-auto leading-relaxed text-gray-700 dark:text-gray-200">From VPS to dedicated servers, colocation to managed hosting - we provide the infrastructure and tools your team needs to succeed.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="rounded-xl p-6 shadow-sm border bg-white dark:bg-gray-800dark:border-gray-700  home-page-builder__card card-gradient" style="border-radius: var(--hpb-card-radius); box-shadow: var(--hpb-card-shadow);">
                        <div class="rounded-lg w-12 h-12 flex items-center justify-center mb-4 bg-blue-50 dark:bg-blue-900/20">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">Instant Deployment</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Deploy VPS instances in under 60 seconds with our automated provisioning system.</p>
                    </div>
                    <div class="rounded-xl p-6 shadow-sm border bg-white dark:bg-gray-800dark:border-gray-700  home-page-builder__card card-gradient" style="border-radius: var(--hpb-card-radius); box-shadow: var(--hpb-card-shadow);">
                        <div class="rounded-lg w-12 h-12 flex items-center justify-center mb-4 bg-blue-50 dark:bg-blue-900/20">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">Enterprise Security</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Bank-level security with advanced DDoS protection, firewalls, and 24/7 monitoring.</p>
                    </div>
                    <div class="rounded-xl p-6 shadow-sm border bg-white dark:bg-gray-800dark:border-gray-700  home-page-builder__card card-gradient" style="border-radius: var(--hpb-card-radius); box-shadow: var(--hpb-card-shadow);">
                        <div class="rounded-lg w-12 h-12 flex items-center justify-center mb-4 bg-blue-50 dark:bg-blue-900/20">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2M7 8H5a2 2 0 00-2 2v6a2 2 0 002 2h2m10-10V6a2 2 0 00-2-2H9a2 2 0 00-2 2v2m10 0H7"/></svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">Global Infrastructure</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Data centers worldwide with low-latency connections and automatic failover.</p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="inline-flex items-center justify-center px-8 py-3 rounded-lg text-white text-lg" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">View Plans</a>
                    <p class="text-sm mt-3 text-gray-600 dark:text-gray-300">No credit card required</p>
                </div>
            </div>
        </section>
        @break
    @case('6')
        {{-- monitor-optimize-hero --}}
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-16 items-center min-h-screen">
                <div class="space-y-8">
                    <div class="space-y-6">
                        <h1 class="text-4xl md:text-5xl font-bold leading-tight text-gray-900 dark:text-white">{{ data_get($data, 'content.title', 'Monitor everything.') }}<span class="block text-blue-600 dark:text-blue-400">{{ data_get($data, 'content.subtitle_strong', 'Optimize performance.') }}</span></h1>
                        <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-200">{{ data_get($data, 'content.subtitle', 'Real-time server monitoring, performance analytics, and automated optimization tools that help you deliver exceptional user experiences.') }}</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ data_get($data, 'content.primary_link', '#') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg text-white font-semibold" style="background-color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">{{ data_get($data, 'content.primary_label', 'View Plans') }}</a>
                        <a href="{{ data_get($data, 'content.secondary_link', '#') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg border-1 bg-transparent text-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600" style="color: hsl({{ $colorMap['primary'] }}); border-radius: var(--hpb-card-radius);">{{ data_get($data, 'content.secondary_label', 'Read me') }}</a>
                    </div>
                </div>
                <div class="relative">
                    <div class="rounded-2xl p-6 bg-white dark:bg-gray-800 borderdark:border-gray-700  home-page-builder__card card-gradient" style="border-radius: var(--hpb-card-radius); box-shadow: var(--hpb-card-shadow);">
                        <div class="space-y-6">
                            <div class="flex items-center justify-between">
                                <h3 class="font-semibold text-gray-900 dark:text-white">Live Performance</h3>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full animate-pulse bg-green-500"></div>
                                    <span class="text-xs text-gray-600 dark:text-gray-300">Real-time</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="rounded-lg p-4 bg-gray-50 dark:bg-gray-700">
                                    <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">99.99%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-300">Uptime</div>
                                </div>
                                <div class="rounded-lg p-4 bg-gray-50 dark:bg-gray-700">
                                    <div class="text-2xl font-bold text-gray-900 dark:text-white">142ms</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-300">Response Time</div>
                                </div>
                                <div class="rounded-lg p-4 bg-gray-50 dark:bg-gray-700">
                                    <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">15.2k</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-300">Active Servers</div>
                                </div>
                                <div class="rounded-lg p-4 bg-gray-50 dark:bg-gray-700">
                                    <div class="text-2xl font-bold text-gray-900 dark:text-white">99.1%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-300">Success Rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @default
        <section class="py-20 relative">
            <div class="relative z-10 container mx-auto px-4 py-20 text-center">
                <h1 
                    class="text-5xl md:text-6xl font-bold mb-6 text-gray-900 dark:text-white"
                >
                    Enterprise-Grade Hosting Solutions
                </h1>

                <p 
                    class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-gray-700 dark:text-gray-200"
                >
                    Premium VPS, dedicated servers, and colocation services for businesses that demand reliability and performance
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#get-started" 
                       class="inline-flex items-center px-8 py-4 text-white font-semibold rounded-lg"
                       style="background-color: hsl({{ $colorMap['primary'] }});"
                    >
                        View Plans
                    </a>

                    <a href="#learn-more" 
                       class="inline-flex items-center px-8 py-4 font-semibold rounded-lg border-1"
                       style="border-color: hsl({{ $colorMap['primary'] }}); color: hsl({{ $colorMap['primary'] }});"
                    >
                        Read me
                    </a>
                </div>
            </div>
        </section>
@endswitch

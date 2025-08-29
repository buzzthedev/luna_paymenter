@php
    $data = $data ?? [];
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
        'bg-background' => 'var(--color-bg-background)',
        'color-background' => 'var(--color-color-background)',
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
                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-bolt text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.0.title', 'Blazing Fast') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.0.description', 'Experience top-tier speed and performance for all your sites with our optimized infrastructure.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-server text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.1.title', 'Reliable Servers') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.1.description', 'Our infrastructure is built for reliability and uptime, ensuring your services stay online.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-shield-halved text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.2.title', 'Advanced Security') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.2.description', 'Protect your data with industry-leading security features and DDoS protection.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-globe text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.3.title', 'Global Reach') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.3.description', 'Serve your content quickly to users around the world with our global CDN.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-headset text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.4.title', '24/7 Support') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.4.description', 'Our expert team is always available to help you succeed with round-the-clock support.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-cloud text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.5.title', 'Cloud Backups') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.5.description', 'Daily automated backups ensure your data is always safe and recoverable.') }}</p>
                            </div>
                        </div>
                    </div>
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
                    <div class="space-y-8">
                        <div class="border-1 rounded-3xl p-8  card-gradient">
                            <div class="flex items-start space-x-6">
                                <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-rocket text-white text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.0.title', 'Lightning Fast Performance') }}</h3>
                                    <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.0.description', 'Our servers are optimized for maximum speed and efficiency, ensuring your websites load in milliseconds.') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-1 rounded-3xl p-8  card-gradient">
                            <div class="flex items-start space-x-6">
                                <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-shield-halved text-white text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.1.title', 'Enterprise Security') }}</h3>
                                    <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.1.description', 'Advanced DDoS protection, SSL certificates, and regular security updates keep your data safe.') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-1 rounded-3xl p-8  card-gradient">
                            <div class="flex items-start space-x-6">
                                <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-clock text-white text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.2.title', '99.9% Uptime Guarantee') }}</h3>
                                    <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.2.description', 'We guarantee your websites will stay online with our robust infrastructure and monitoring.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="space-y-8">
                        <div class="border-1 rounded-3xl p-8  card-gradient">
                            <div class="flex items-start space-x-6">
                                <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-globe text-white text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.3.title', 'Global CDN Network') }}</h3>
                                    <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.3.description', 'Content delivery network spanning multiple continents for lightning-fast loading worldwide.') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-1 rounded-3xl p-8  card-gradient">
                            <div class="flex items-start space-x-6">
                                <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-headset text-white text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.4.title', 'Expert Support Team') }}</h3>
                                    <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.4.description', 'Our certified technicians are available 24/7 to help with any questions or issues.') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-1 rounded-3xl p-8  card-gradient">
                            <div class="flex items-start space-x-6">
                                <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-chart-line text-white text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.5.title', 'Real-time Analytics') }}</h3>
                                    <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.5.description', 'Monitor your website performance with detailed analytics and insights.') }}</p>
                                </div>
                            </div>
                        </div>
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
                    <div class="text-center">
                        <div class="flex items-center justify-center rounded-full p-6 w-24 h-24 mx-auto mb-6" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-server text-white text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items_main.0.title', 'High Performance') }}</h3>
                        <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($data, 'content.items_main.0.description', 'SSD storage and optimized servers for lightning-fast loading times.') }}</p>
                    </div>

                    <div class="text-center">
                        <div class="flex items-center justify-center rounded-full p-6 w-24 h-24 mx-auto mb-6" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-shield-halved text-white text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items_main.1.title', 'Security First') }}</h3>
                        <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($data, 'content.items_main.1.description', 'DDoS protection, SSL certificates, and regular security updates.') }}</p>
                    </div>

                    <div class="text-center">
                        <div class="flex items-center justify-center rounded-full p-6 w-24 h-24 mx-auto mb-6" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-globe text-white text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items_main.2.title', 'Global Network') }}</h3>
                        <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($data, 'content.items_main.2.description', 'Data centers worldwide with CDN for optimal global performance.') }}</p>
                    </div>

                    <div class="text-center">
                        <div class="flex items-center justify-center rounded-full p-6 w-24 h-24 mx-auto mb-6" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-headset text-white text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items_main.3.title', '24/7 Support') }}</h3>
                        <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($data, 'content.items_main.3.description', 'Expert technical support available around the clock.') }}</p>
                    </div>
                </div>

                <div class="mt-16 grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="flex items-center justify-center rounded-2xl p-4 w-16 h-16 mx-auto mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-cloud text-white text-xl"></i>
                        </div>
                        <h4 class="text-base font-semibold mb-2 text-gray-900 dark:text-white">{{ data_get($data, 'content.items_sub.0.title', 'Automated Backups') }}</h4>
                        <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($data, 'content.items_sub.0.description', 'Daily backups with instant restore capabilities.') }}</p>
                    </div>

                    <div class="text-center">
                        <div class="flex items-center justify-center rounded-2xl p-4 w-16 h-16 mx-auto mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-rocket text-white text-xl"></i>
                        </div>
                        <h4 class="text-base font-semibold mb-2 text-gray-900 dark:text-white">{{ data_get($data, 'content.items_sub.1.title', 'Quick Setup') }}</h4>
                        <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($data, 'content.items_sub.1.description', 'Get your server running in under 60 seconds.') }}</p>
                    </div>

                    <div class="text-center">
                        <div class="flex items-center justify-center rounded-2xl p-4 w-16 h-16 mx-auto mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-chart-line text-white text-xl"></i>
                        </div>
                        <h4 class="text-base font-semibold mb-2 text-gray-900 dark:text-white">{{ data_get($data, 'content.items_sub.2.title', 'Real-time Monitoring') }}</h4>
                        <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($data, 'content.items_sub.2.description', 'Track performance and uptime in real-time.') }}</p>
                    </div>
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
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-4 w-14 h-14 flex-shrink-0" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-database text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">{{ data_get($data, 'content.items_left.0.title', 'Scalable Infrastructure') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200">{{ data_get($data, 'content.items_left.0.description', 'Grow your resources on-demand with our flexible cloud infrastructure that scales with your business needs.') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-4 w-14 h-14 flex-shrink-0" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-lock text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">{{ data_get($data, 'content.items_left.1.title', 'Advanced Security') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200">{{ data_get($data, 'content.items_left.1.description', 'Multi-layer security including firewall rules, intrusion detection, and compliance-ready infrastructure.') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-4 w-14 h-14 flex-shrink-0" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-clock text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">{{ data_get($data, 'content.items_left.2.title', '99.99% Uptime SLA') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200">{{ data_get($data, 'content.items_left.2.description', 'Enterprise-grade reliability with guaranteed uptime and compensation for any downtime.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="border-1rounded-2xl p-6  card-gradient">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ data_get($data, 'content.metrics.0.title', 'Performance Metrics') }}</h4>
                                <div class="text-2xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">{{ data_get($data, 'content.metrics.0.value', '99.9%') }}</div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($data, 'content.metrics.0.description', 'Average response time across all servers') }}</p>
                        </div>

                        <div class="border-1rounded-2xl p-6  card-gradient">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ data_get($data, 'content.metrics.1.title', 'Global Coverage') }}</h4>
                                <div class="text-2xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">{{ data_get($data, 'content.metrics.1.value', '15+') }}</div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($data, 'content.metrics.1.description', 'Data centers across multiple continents') }}</p>
                        </div>

                        <div class="border-1rounded-2xl p-6  card-gradient">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ data_get($data, 'content.metrics.2.title', 'Support Response') }}</h4>
                                <div class="text-2xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">{{ data_get($data, 'content.metrics.2.value', '5min') }}</div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-200 text-sm">{{ data_get($data, 'content.metrics.2.description', 'Average response time for urgent issues') }}</p>
                        </div>
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
                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-bolt text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.0.title', 'Blazing Fast') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.0.description', 'Experience top-tier speed and performance for all your sites with our optimized infrastructure.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-server text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.1.title', 'Reliable Servers') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.1.description', 'Our infrastructure is built for reliability and uptime, ensuring your services stay online.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-shield-halved text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ data_get($data, 'content.items.2.title', 'Advanced Security') }}</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">{{ data_get($data, 'content.items.2.description', 'Protect your data with industry-leading security features and DDoS protection.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-globe text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Global Reach</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">Serve your content quickly to users around the world with our global CDN.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-headset text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">24/7 Support</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">Our expert team is always available to help you succeed with round-the-clock support.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8  card-gradient">
                        <div class="flex items-start space-x-6">
                            <div class="flex items-center justify-center rounded-2xl p-5 w-16 h-16" style="background-color: hsl({{ $colorMap['primary'] }});">
                                <i class="fa-solid fa-cloud text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Cloud Backups</h3>
                                <p class="text-gray-700 dark:text-gray-200 leading-relaxed">Daily automated backups ensure your data is always safe and recoverable.</p>
                            </div>
                        </div>
                    </div>
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



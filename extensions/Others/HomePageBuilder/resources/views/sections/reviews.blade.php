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
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'What Our Customers Say') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Real feedback from real customers about their experience with our hosting services') }}</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="border-1 rounded-3xl p-8 card-gradient">
                        <div class="flex items-center mb-6">
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 dark:text-gray-200 mb-6 leading-relaxed">"{{ data_get($data, 'content.reviews.0.quote', 'Switching to this hosting provider was the best decision for our business. The performance improvement was immediate and our website now loads in under 2 seconds. Customer support is exceptional!') }}"</p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                {{ data_get($data, 'content.reviews.0.initials', 'SM') }}
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">{{ data_get($data, 'content.reviews.0.name', 'Sarah Mitchell') }}</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ data_get($data, 'content.reviews.0.title', 'CEO, TechStart') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8 card-gradient">
                        <div class="flex items-center mb-6">
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 dark:text-gray-200 mb-6 leading-relaxed">"{{ data_get($data, 'content.reviews.1.quote', "The reliability is outstanding. We've experienced 99.99% uptime since switching, and the automated backup system gives us peace of mind. Highly recommended for any business.") }}"</p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                {{ data_get($data, 'content.reviews.1.initials', 'DJ') }}
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">{{ data_get($data, 'content.reviews.1.name', 'David Johnson') }}</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ data_get($data, 'content.reviews.1.title', 'CTO, DigitalFlow') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8 card-gradient">
                        <div class="flex items-center mb-6">
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 dark:text-gray-200 mb-6 leading-relaxed">"{{ data_get($data, 'content.reviews.2.quote', "Customer support is incredible. They helped us migrate our entire infrastructure and were available 24/7 during the process. The team truly cares about their customers' success.") }}"</p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                {{ data_get($data, 'content.reviews.2.initials', 'LW') }}
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">{{ data_get($data, 'content.reviews.2.name', 'Lisa Wang') }}</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ data_get($data, 'content.reviews.2.title', 'DevOps Lead, CloudCorp') }}</p>
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
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Trusted by Thousands') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Join thousands of satisfied customers who have chosen our hosting platform') }}</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="border-1 rounded-3xl p-8 card-gradient">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400 mr-4">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-200 font-semibold">5.0</span>
                        </div>
                        <p class="text-gray-800 dark:text-gray-200 mb-6 leading-relaxed text-lg">"The performance improvement was incredible. Our e-commerce site now handles 10x more traffic without any issues. The CDN integration alone was worth the switch."</p>
                        <div class="flex items-center">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-white font-bold text-xl mr-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                RK
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white text-lg">Robert Kim</h4>
                                <p class="text-gray-700 dark:text-gray-200">Founder, EcomPro</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8 card-gradient">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400 mr-4">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-200 font-semibold">5.0</span>
                        </div>
                        <p class="text-gray-800 dark:text-gray-200 mb-6 leading-relaxed text-lg">"Security was our top priority, and this platform exceeded our expectations. The automated threat detection and DDoS protection give us confidence in our infrastructure."</p>
                        <div class="flex items-center">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-white font-bold text-xl mr-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                AM
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white text-lg">Alex Martinez</h4>
                                <p class="text-gray-700 dark:text-gray-200">Security Director, FinTech</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('3')
        {{-- 3-column-simple --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Customer Success Stories') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Discover how our customers have transformed their businesses with our hosting solutions') }}</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="border-1 rounded-3xl p-8 card-gradient">
                        <div class="flex items-center mb-6">
                            <div class="flex text-yellow-400 mr-4">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-200 font-semibold">5.0</span>
                        </div>
                        <blockquote class="text-gray-800 dark:text-gray-200 mb-6 leading-relaxed text-lg italic">
                            "The developer experience is unmatched. Git integration, automatic deployments, and the ability to scale resources on-demand have transformed how we build and deploy applications."
                        </blockquote>
                        <div class="flex items-center">
                            <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-white font-bold text-xl mr-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                MC
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white text-lg">Maria Chen</h4>
                                <p class="text-gray-700 dark:text-gray-200">Lead Developer, CodeCraft</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8 card-gradient">
                        <div class="flex items-center mb-6">
                            <div class="flex text-yellow-400 mr-4">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-200 font-semibold">5.0</span>
                        </div>
                        <blockquote class="text-gray-800 dark:text-gray-200 mb-6 leading-relaxed text-lg italic">
                            "We've reduced our infrastructure costs by 40% while improving performance. The AI-powered optimization features automatically tune our environment for peak efficiency."
                        </blockquote>
                        <div class="flex items-center">
                            <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-white font-bold text-xl mr-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                JT
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white text-lg">James Thompson</h4>
                                <p class="text-gray-700 dark:text-gray-200">CTO, DataFlow</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl p-8 card-gradient">
                        <div class="flex items-center mb-6">
                            <div class="flex text-yellow-400 mr-4">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-200 font-semibold">5.0</span>
                        </div>
                        <blockquote class="text-gray-800 dark:text-gray-200 mb-6 leading-relaxed text-lg italic">
                            "Customer support is incredible. They helped us migrate our entire infrastructure and were available 24/7 during the process. The team truly cares about their customers' success."
                        </blockquote>
                        <div class="flex items-center">
                            <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-white font-bold text-xl mr-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                LW
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white text-lg">Lisa Wang</h4>
                                <p class="text-gray-700 dark:text-gray-200">DevOps Lead, CloudCorp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('4')
        {{-- alternating-layout --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Client Testimonials') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'Hear directly from our clients about their experience and success with our platform') }}</p>
                </div>

                <div class="space-y-12">
                    <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
                        <div class="lg:w-1/2">
                            <div class="border-1 rounded-3xl p-8  card-gradient">
                                <div class="flex items-center mb-6">
                                    <div class="flex text-yellow-400 mr-4">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-gray-700 dark:text-gray-200 font-semibold">5.0</span>
                                </div>
                                <p class="text-gray-700 dark:text-gray-200 mb-6 leading-relaxed text-lg">"This hosting platform has been a game-changer for our business. The performance, reliability, and support are unmatched. We've seen a 300% improvement in website speed and our customers love the faster experience."</p>
                                <div class="flex items-center">
                                    <div class="w-16 h-16 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                        ES
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 dark:text-white text-lg">Emma Stevens</h4>
                                        <p class="text-gray-700 dark:text-gray-200">Marketing Director, GrowthCo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/2 text-center lg:text-left">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Trusted by Industry Leaders</h3>
                            <p class="text-gray-700 dark:text-gray-200 text-lg">Our platform powers thousands of successful businesses worldwide, from startups to Fortune 500 companies.</p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse items-center gap-8 lg:gap-12">
                        <div class="lg:w-1/2">
                            <div class="border-1 rounded-3xl p-8  card-gradient">
                                <div class="flex items-center mb-6">
                                    <div class="flex text-yellow-400 mr-4">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-gray-700 dark:text-gray-200 font-semibold">5.0</span>
                                </div>
                                <p class="text-gray-700 dark:text-gray-200 mb-6 leading-relaxed text-lg">"Outstanding uptime and performance. Our e-commerce site handles peak traffic without issues. The automated scaling is incredible and the security features give us complete peace of mind."</p>
                                <div class="flex items-center">
                                    <div class="w-16 h-16 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                        RK
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 dark:text-white text-lg">Ryan Kim</h4>
                                        <p class="text-gray-700 dark:text-gray-200">E-commerce Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/2 text-center lg:text-right">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Enterprise-Grade Reliability</h3>
                            <p class="text-gray-700 dark:text-gray-200 text-lg">Built for businesses that demand the highest levels of performance, security, and support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('5')
        {{-- 4-column-compact --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">{{ data_get($data, 'content.section_title', 'Customer Reviews') }}</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">{{ data_get($data, 'content.section_description', 'See what our customers are saying about their hosting experience') }}</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center border-1rounded-2xl p-6  card-gradient">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-white text-xl mx-auto mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="flex justify-center mb-3">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 dark:text-gray-200 mb-4 leading-relaxed text-sm">"Fast and reliable hosting. Perfect for our startup needs."</p>
                        <h4 class="font-semibold text-gray-900 dark:text-white text-sm">Mike Chen</h4>
                        <p class="text-gray-600 dark:text-gray-300 text-xs">Startup Founder</p>
                    </div>

                    <div class="text-center border-1rounded-2xl p-6  card-gradient">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-white text-xl mx-auto mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="flex justify-center mb-3">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 dark:text-gray-200 mb-4 leading-relaxed text-sm">"Excellent customer support. They're always there when we need help."</p>
                        <h4 class="font-semibold text-gray-900 dark:text-white text-sm">Sarah Wilson</h4>
                        <p class="text-gray-600 dark:text-gray-300 text-xs">Web Developer</p>
                    </div>

                    <div class="text-center border-1rounded-2xl p-6  card-gradient">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-white text-xl mx-auto mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="flex justify-center mb-3">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 dark:text-gray-200 mb-4 leading-relaxed text-sm">"Great uptime and performance. Highly recommended for businesses."</p>
                        <h4 class="font-semibold text-gray-900 dark:text-white text-sm">David Brown</h4>
                        <p class="text-gray-600 dark:text-gray-300 text-xs">Business Owner</p>
                    </div>

                    <div class="text-center border-1rounded-2xl p-6  card-gradient">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-white text-xl mx-auto mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="flex justify-center mb-3">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 dark:text-gray-200 mb-4 leading-relaxed text-sm">"Easy to use and manage. Perfect for our team's workflow."</p>
                        <h4 class="font-semibold text-gray-900 dark:text-white text-sm">Lisa Garcia</h4>
                        <p class="text-gray-600 dark:text-gray-300 text-xs">Team Lead</p>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <div class="inline-flex items-center space-x-8 text-gray-600 dark:text-gray-400">
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <span class="font-semibold">4.9/5</span>
                            <span>Average Rating</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-users text-gray-400"></i>
                            <span class="font-semibold">10,000+</span>
                            <span>Reviews</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-thumbs-up text-gray-400"></i>
                            <span class="font-semibold">98%</span>
                            <span>Recommend</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break

    @default
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4 text-center py-16">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white mb-8">Reviews Section</h2>
                <p class="text-xl text-gray-700 dark:text-gray-200 mb-12">
                    Choose a reviews variation in the admin panel to customize this section.
                </p>
            </div>
        </section>
@endswitch




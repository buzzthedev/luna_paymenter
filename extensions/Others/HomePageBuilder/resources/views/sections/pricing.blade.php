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
    'bg-background' => 'var(--color-bg-background)',
    'color-background' => 'var(--color-color-background)',
];
@endphp

@switch($variation)
    @case('1')
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">Pricing</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">Simple, transparent pricing that scales with you</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="border-1rounded-2xl p-6 flex flex-col hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg  card-gradient">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-rocket text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Basic</h3>
                        <div class="mt-2 text-3xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">$9<span class="text-base text-gray-600 dark:text-gray-300">/mo</span></div>
                        <ul class="mt-6 space-y-3 text-sm text-gray-700 dark:text-gray-200">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>1 vCPU</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>1 GB RAM</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>25 GB SSD</li>
                        </ul>
                        <div class="mt-6">
                            <a href="#" class="w-full inline-flex items-center justify-center px-4 py-2 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }});">Choose plan</a>
                        </div>
                    </div>
                    <div class="border-1rounded-2xl p-6 flex flex-col relative hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg  card-gradient">
                        <span class="absolute -top-3 right-4 text-xs font-semibold px-2 py-1 rounded-full text-white" style="background-color: hsl({{ $colorMap['primary'] }});">Popular</span>
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-bolt text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Pro</h3>
                        <div class="mt-2 text-3xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">$19<span class="text-base text-gray-600 dark:text-gray-300">/mo</span></div>
                        <ul class="mt-6 space-y-3 text-sm text-gray-700 dark:text-gray-200">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>2 vCPU</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>4 GB RAM</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>80 GB SSD</li>
                        </ul>
                        <div class="mt-6">
                            <a href="#" class="w-full inline-flex items-center justify-center px-4 py-2 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }});">Choose plan</a>
                        </div>
                    </div>
                    <div class="border-1rounded-2xl p-6 flex flex-col hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg  card-gradient">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                            <i class="fa-solid fa-building text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Enterprise</h3>
                        <div class="mt-2 text-3xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">$49<span class="text-base text-gray-600 dark:text-gray-300">/mo</span></div>
                        <ul class="mt-6 space-y-3 text-sm text-gray-700 dark:text-gray-200">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>4 vCPU</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>8 GB RAM</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>200 GB SSD</li>
                        </ul>
                        <div class="mt-6">
                            <a href="#" class="w-full inline-flex items-center justify-center px-4 py-2 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }});">Choose plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('2')
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">Pricing</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">Choose the plan that fits your needs</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="border-1rounded-2xl p-6 flex flex-col hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg  card-gradient">
                        <div class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Starter</div>
                        <div class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">$5</div>
                        <div class="text-xs text-gray-600 dark:text-gray-300">per month</div>
                        <div class="mt-4 h-px" style="background-color: hsl({{ $colorMap['neutral'] }});"></div>
                        <ul class="mt-4 space-y-2 text-sm text-gray-700 dark:text-gray-200">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>Single Project</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>5 GB Storage</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>Email Support</li>
                        </ul>
                        <a href="#" class="mt-6 inline-flex items-center justify-center px-4 py-2 rounded-lg border-1" style="border-color: hsl({{ $colorMap['primary'] }}); color: hsl({{ $colorMap['primary'] }});">Get started</a>
                    </div>
                    <div class="border-1rounded-2xl p-6 flex flex-col relative lg:scale-105 lg:shadow-xl hover:-translate-y-1 transition-transform duration-200  card-gradient">
                        <span class="absolute -top-3 right-4 text-xs font-semibold px-2 py-1 rounded-full text-white" style="background-color: hsl({{ $colorMap['primary'] }});">Best value</span>
                        <div class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Team</div>
                        <div class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">$15</div>
                        <div class="text-xs text-gray-600 dark:text-gray-300">per month</div>
                        <div class="mt-4 h-px" style="background-color: hsl({{ $colorMap['neutral'] }});"></div>
                        <ul class="mt-4 space-y-2 text-sm text-gray-700 dark:text-gray-200">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>Up to 10 Projects</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>50 GB Storage</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>Priority Support</li>
                        </ul>
                        <a href="#" class="mt-6 inline-flex items-center justify-center px-4 py-2 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }});">Get started</a>
                    </div>
                    <div class="border-1rounded-2xl p-6 flex flex-col hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg  card-gradient">
                        <div class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Business</div>
                        <div class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">$35</div>
                        <div class="text-xs text-gray-600 dark:text-gray-300">per month</div>
                        <div class="mt-4 h-px" style="background-color: hsl({{ $colorMap['neutral'] }});"></div>
                        <ul class="mt-4 space-y-2 text-sm text-gray-700 dark:text-gray-200">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>Unlimited Projects</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>200 GB Storage</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i>24/7 Support</li>
                        </ul>
                        <a href="#" class="mt-6 inline-flex items-center justify-center px-4 py-2 rounded-lg border-1" style="border-color: hsl({{ $colorMap['primary'] }}); color: hsl({{ $colorMap['primary'] }});">Get started</a>
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('3')
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">Pricing</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">Flexible options for every stage of growth</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="border-1rounded-2xl p-6 flex flex-col  card-gradient">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Launch</h3>
                            <span class="text-xs px-2 py-1 rounded-full" style="background-color: hsl({{ $colorMap['primary'] }}); color: white;">-20%</span>
                        </div>
                        <div class="mt-3 text-3xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">$12<span class="text-base text-gray-600 dark:text-gray-300">/mo</span></div>
                        <ul class="mt-6 space-y-3 text-sm text-gray-700 dark:text-gray-200">
                            <li>1 Project</li>
                            <li>10 GB SSD</li>
                            <li>Basic Support</li>
                        </ul>
                        <a href="#" class="mt-6 inline-flex items-center justify-center px-4 py-2 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }});">Select</a>
                    </div>
                    <div class="border-1rounded-2xl p-6 flex flex-col  card-gradient">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Scale</h3>
                            <span class="text-xs px-2 py-1 rounded-full" style="background-color: hsl({{ $colorMap['primary'] }}); color: white;">New</span>
                        </div>
                        <div class="mt-3 text-3xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">$29<span class="text-base text-gray-600 dark:text-gray-300">/mo</span></div>
                        <ul class="mt-6 space-y-3 text-sm text-gray-700 dark:text-gray-200">
                            <li>10 Projects</li>
                            <li>100 GB SSD</li>
                            <li>Priority Support</li>
                        </ul>
                        <a href="#" class="mt-6 inline-flex items-center justify-center px-4 py-2 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }});">Select</a>
                    </div>
                    <div class="border-1rounded-2xl p-6 flex flex-col  card-gradient">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ultimate</h3>
                            <span class="text-xs px-2 py-1 rounded-full" style="background-color: hsl({{ $colorMap['primary'] }}); color: white;">-30%</span>
                        </div>
                        <div class="mt-3 text-3xl font-bold" style="color: hsl({{ $colorMap['primary'] }});">$59<span class="text-base text-gray-600 dark:text-gray-300">/mo</span></div>
                        <ul class="mt-6 space-y-3 text-sm text-gray-700 dark:text-gray-200">
                            <li>Unlimited Projects</li>
                            <li>1 TB SSD</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="#" class="mt-6 inline-flex items-center justify-center px-4 py-2 rounded-lg text-white" style="background-color: hsl({{ $colorMap['primary'] }});">Select</a>
                    </div>
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



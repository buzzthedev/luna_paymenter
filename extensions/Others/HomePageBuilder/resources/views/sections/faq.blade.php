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
        {{-- accordion-list --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">Frequently Asked Questions</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">Find answers to common questions about our hosting services</p>
                </div>

                <div class="max-w-4xl mx-auto space-y-6">
                    <div class="border-1 rounded-3xl  card-gradient">
                        <button class="w-full px-8 py-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">What hosting plans do you offer?</h3>
                                <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-6 hidden">
                            <p class="text-gray-700 dark:text-gray-200 leading-relaxed">We offer a range of hosting plans including shared hosting, VPS hosting, dedicated servers, and cloud hosting. Each plan is designed to meet different needs and budgets, from small personal websites to large enterprise applications.</p>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl  card-gradient">
                        <button class="w-full px-8 py-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Do you provide 24/7 customer support?</h3>
                                <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-6 hidden">
                            <p class="text-gray-700 dark:text-gray-200 leading-relaxed">Yes, we provide 24/7 customer support through live chat, email, and phone. Our expert support team is always available to help you with any questions or technical issues you may encounter.</p>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl  card-gradient">
                        <button class="w-full px-8 py-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">What is your uptime guarantee?</h3>
                                <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-6 hidden">
                            <p class="text-gray-700 dark:text-gray-200 leading-relaxed">We guarantee 99.9% uptime for all our hosting plans. If we fall below this threshold, we provide service credits as compensation. Our infrastructure is designed with redundancy and failover systems to ensure maximum reliability.</p>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl  card-gradient">
                        <button class="w-full px-8 py-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Do you offer free SSL certificates?</h3>
                                <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-6 hidden">
                            <p class="text-gray-700 dark:text-gray-200 leading-relaxed">Yes, we provide free SSL certificates with all our hosting plans. SSL certificates encrypt the data between your website and visitors, ensuring secure communication and improving your site's SEO ranking.</p>
                        </div>
                    </div>

                    <div class="border-1 rounded-3xl  card-gradient">
                        <button class="w-full px-8 py-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Can I upgrade my hosting plan later?</h3>
                                <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-6 hidden">
                            <p class="text-gray-700 dark:text-gray-200 leading-relaxed">Absolutely! You can upgrade your hosting plan at any time. Our upgrade process is seamless and typically takes just a few minutes. You can upgrade through your control panel or contact our support team for assistance.</p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function toggleFAQ(button) {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('i');
                    
                    if (content.classList.contains('hidden')) {
                        content.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        content.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                    }
                }
            </script>
        </section>
        @break

    @case('2')
        {{-- 2-column-grid --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">Got Questions?</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">Everything you need to know about our services and support</p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12">
                    <div class="space-y-6">
                        <div class="border-1 rounded-3xl p-6  card-gradient">
                            <div class="flex items-start space-x-4">
                                <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-question text-white text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">How fast can I get started?</h3>
                                    <p class="text-gray-700 dark:text-gray-200 text-sm leading-relaxed">Most hosting plans can be activated within 5-10 minutes. We offer instant provisioning for shared hosting and VPS plans, while dedicated servers typically take 1-2 hours for setup and configuration.</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-1 rounded-3xl p-6  card-gradient">
                            <div class="flex items-start space-x-4">
                                <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-question text-white text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">What backup options do you provide?</h3>
                                    <p class="text-gray-700 dark:text-gray-200 text-sm leading-relaxed">We provide daily automated backups for all hosting plans. Shared hosting includes 7 days of backups, while VPS and dedicated plans include 30 days. You can also create manual backups anytime through your control panel.</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-1 rounded-3xl p-6  card-gradient">
                            <div class="flex items-start space-x-4">
                                <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-question text-white text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Do you offer migration services?</h3>
                                    <p class="text-gray-700 dark:text-gray-200 text-sm leading-relaxed">Yes, we offer free migration services for new customers. Our team can help migrate your website from your current hosting provider to our platform, ensuring a smooth transition with minimal downtime.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="border-1 rounded-3xl p-6  card-gradient">
                            <div class="flex items-start space-x-4">
                                <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-question text-white text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">What security measures do you have?</h3>
                                    <p class="text-gray-700 dark:text-gray-200 text-sm leading-relaxed">We implement multiple layers of security including DDoS protection, firewall rules, malware scanning, and regular security updates. All servers are monitored 24/7 for suspicious activity and potential threats.</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-1 rounded-3xl p-6  card-gradient">
                            <div class="flex items-start space-x-4">
                                <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-question text-white text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Can I use my own domain?</h3>
                                    <p class="text-gray-700 dark:text-gray-200 text-sm leading-relaxed">Absolutely! You can use your own domain name with any of our hosting plans. We also offer domain registration services if you need to purchase a new domain. DNS management is included free of charge.</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-1 rounded-3xl p-6  card-gradient">
                            <div class="flex items-start space-x-4">
                                <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-question text-white text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">What payment methods do you accept?</h3>
                                    <p class="text-gray-700 dark:text-gray-200 text-sm leading-relaxed">We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and bank transfers for annual plans. We also offer flexible billing cycles including monthly, quarterly, and annual options.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('3')
        {{-- categorized-questions --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">Common Questions</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">Quick answers to help you get started with our platform</p>
                </div>

                <div class="max-w-5xl mx-auto">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="border-1 rounded-3xl p-8  card-gradient">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                        <i class="fa-solid fa-rocket text-white text-lg"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Getting Started</h3>
                                </div>
                                <div class="space-y-4">
                                    <div class="border-l-4 pl-4" style="border-color: hsl({{ $colorMap['primary'] }});">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">How do I create my first website?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-sm">Choose a hosting plan, install a CMS like WordPress, and use our drag-and-drop builder to create your site in minutes.</p>
                                    </div>
                                    <div class="border-l-4 pl-4" style="border-color: hsl({{ $colorMap['primary'] }});">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">What if I need help?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-sm">Our 24/7 support team is always ready to help via live chat, email, or phone. We also offer comprehensive documentation and video tutorials.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-1 rounded-3xl p-8  card-gradient">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                        <i class="fa-solid fa-shield-halved text-white text-lg"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Security & Performance</h3>
                                </div>
                                <div class="space-y-4">
                                    <div class="border-l-4 pl-4" style="border-color: hsl({{ $colorMap['primary'] }});">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">How secure is my website?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-sm">We provide enterprise-grade security including DDoS protection, SSL certificates, malware scanning, and automatic security updates.</p>
                                    </div>
                                    <div class="border-l-4 pl-4" style="border-color: hsl({{ $colorMap['primary'] }});">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">What about performance?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-sm">Our infrastructure uses SSD storage, CDN networks, and optimized servers to ensure your website loads in under 2 seconds.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="border-1 rounded-3xl p-8  card-gradient">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                        <i class="fa-solid fa-cog text-white text-lg"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Technical Details</h3>
                                </div>
                                <div class="space-y-4">
                                    <div class="border-l-4 pl-4" style="border-color: hsl({{ $colorMap['primary'] }});">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">What technologies do you support?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-sm">We support PHP, Node.js, Python, Ruby, and all major databases. Full SSH access and Git integration are available on VPS and dedicated plans.</p>
                                    </div>
                                    <div class="border-l-4 pl-4" style="border-color: hsl({{ $colorMap['primary'] }});">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">Can I scale my resources?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-sm">Yes! Our cloud hosting plans allow you to scale CPU, RAM, and storage resources up or down instantly based on your needs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-1 rounded-3xl p-8  card-gradient">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                        <i class="fa-solid fa-credit-card text-white text-lg"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Billing & Support</h3>
                                </div>
                                <div class="space-y-4">
                                    <div class="border-l-4 pl-4" style="border-color: hsl({{ $colorMap['primary'] }});">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">What's your refund policy?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-sm">We offer a 30-day money-back guarantee on all hosting plans. If you're not satisfied, we'll refund your payment in full.</p>
                                    </div>
                                    <div class="border-l-4 pl-4" style="border-color: hsl({{ $colorMap['primary'] }});">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">How do I contact support?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-sm">Reach us 24/7 via live chat, email at support@company.com, or call our toll-free number. Average response time is under 5 minutes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('4')
        {{-- 3-column-cards --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">Need Help?</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">Quick answers to the most common questions about our platform</p>
                </div>

                <div class="max-w-6xl mx-auto">
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="border-1rounded-2xl p-6  card-gradient">
                            <div class="text-center mb-6">
                                <div class="inline-flex items-center justify-center rounded-full p-4 w-16 h-16 mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-server text-white text-2xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Hosting Plans</h3>
                            </div>
                            <div class="space-y-4 text-sm">
                                <div class="text-gray-700 dark:text-gray-200">
                                    <strong>What plans do you offer?</strong>
                                    <p class="mt-1">Shared, VPS, dedicated, and cloud hosting with flexible pricing options.</p>
                                </div>
                                <div class="text-gray-700 dark:text-gray-200">
                                    <strong>Can I upgrade anytime?</strong>
                                    <p class="mt-1">Yes, seamless upgrades available through your control panel.</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-1rounded-2xl p-6  card-gradient">
                            <div class="text-center mb-6">
                                <div class="inline-flex items-center justify-center rounded-full p-4 w-16 h-16 mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-shield-halved text-white text-2xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Security</h3>
                            </div>
                            <div class="space-y-4 text-sm">
                                <div class="text-gray-700 dark:text-gray-200">
                                    <strong>SSL certificates included?</strong>
                                    <p class="mt-1">Free SSL with all plans for secure HTTPS connections.</p>
                                </div>
                                <div class="text-gray-700 dark:text-gray-200">
                                    <strong>DDoS protection?</strong>
                                    <p class="mt-1">Enterprise-grade DDoS protection on all hosting plans.</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-1rounded-2xl p-6  card-gradient">
                            <div class="text-center mb-6">
                                <div class="inline-flex items-center justify-center rounded-full p-4 w-16 h-16 mb-4" style="background-color: hsl({{ $colorMap['primary'] }});">
                                    <i class="fa-solid fa-headset text-white text-2xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Support</h3>
                            </div>
                            <div class="space-y-4 text-sm">
                                <div class="text-gray-700 dark:text-gray-200">
                                    <strong>24/7 support available?</strong>
                                    <p class="mt-1">Yes, expert support via live chat, email, and phone.</p>
                                </div>
                                <div class="text-gray-700 dark:text-gray-200">
                                    <strong>Response time?</strong>
                                    <p class="mt-1">Average response time under 5 minutes for urgent issues.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('5')
        {{-- 2-column-accordion --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">Frequently Asked Questions</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">Everything you need to know about our hosting services and platform</p>
                </div>

                <div class="max-w-6xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <div class="borderdark:border-gray-700 rounded-xl  card-gradient">
                                <details class="group">
                                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">How quickly can I deploy a new server?</h3>
                                        <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300 group-open:rotate-180"></i>
                                    </summary>
                                    <div class="px-6 pb-6">
                                        <p class="text-gray-700 dark:text-gray-200 leading-relaxed">Most VPS instances can be deployed in under 60 seconds. Shared hosting is instant, while dedicated servers typically take 1-2 hours for full provisioning and configuration.</p>
                                    </div>
                                </details>
                            </div>

                            <div class="borderdark:border-gray-700 rounded-xl  card-gradient">
                                <details class="group">
                                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">What backup solutions do you provide?</h3>
                                        <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300 group-open:rotate-180"></i>
                                    </summary>
                                    <div class="px-6 pb-6">
                                        <p class="text-gray-700 dark:text-gray-200 leading-relaxed">We offer automated daily backups with 7-30 day retention depending on your plan. All backups are stored in multiple locations for redundancy, and you can create manual backups anytime.</p>
                                    </div>
                                </details>
                            </div>

                            <div class="borderdark:border-gray-700 rounded-xl  card-gradient">
                                <details class="group">
                                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Do you offer migration assistance?</h3>
                                        <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300 group-open:rotate-180"></i>
                                    </summary>
                                    <div class="px-6 pb-6">
                                        <p class="text-gray-700 dark:text-gray-200 leading-relaxed">Yes, we provide free migration services for new customers. Our team handles the entire process from your current provider to our platform with minimal downtime.</p>
                                    </div>
                                </details>
                            </div>

                            <div class="borderdark:border-gray-700 rounded-xl  card-gradient">
                                <details class="group">
                                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">What is your uptime guarantee?</h3>
                                        <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300 group-open:rotate-180"></i>
                                    </summary>
                                    <div class="px-6 pb-6">
                                        <p class="text-gray-700 dark:text-gray-200 leading-relaxed">We guarantee 99.9% uptime across all hosting plans. If we fall below this threshold, you receive service credits as compensation for the downtime.</p>
                                    </div>
                                </details>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="borderdark:border-gray-700 rounded-xl  card-gradient">
                                <details class="group">
                                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Can I use my own domain name?</h3>
                                        <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300 group-open:rotate-180"></i>
                                    </summary>
                                    <div class="px-6 pb-6">
                                        <p class="text-gray-700 dark:text-gray-200 leading-relaxed">Absolutely! You can use your existing domain or register a new one through us. DNS management, domain forwarding, and email hosting are all included free of charge.</p>
                                    </div>
                                </details>
                            </div>

                            <div class="borderdark:border-gray-700 rounded-xl  card-gradient">
                                <details class="group">
                                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">What security measures are included?</h3>
                                        <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300 group-open:rotate-180"></i>
                                    </summary>
                                    <div class="px-6 pb-6">
                                        <p class="text-gray-700 dark:text-gray-200 leading-relaxed">We provide enterprise-grade security including DDoS protection, SSL certificates, malware scanning, and automatic security updates.</p>
                                    </div>
                                </details>
                            </div>

                            <div class="borderdark:border-gray-700 rounded-xl  card-gradient">
                                <details class="group">
                                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">How do I contact support?</h3>
                                        <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300 group-open:rotate-180"></i>
                                    </summary>
                                    <div class="px-6 pb-6">
                                        <p class="text-gray-700 dark:text-gray-200 leading-relaxed">Reach us 24/7 via live chat, email, or phone. Our support team typically responds within 5 minutes for urgent issues and within 4 hours for general inquiries.</p>
                                    </div>
                                </details>
                            </div>

                            <div class="borderdark:border-gray-700 rounded-xl  card-gradient">
                                <details class="group">
                                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">What payment methods do you accept?</h3>
                                        <i class="fa-solid fa-chevron-down text-gray-500 dark:text-gray-400 transition-transform duration-300 group-open:rotate-180"></i>
                                    </summary>
                                    <div class="px-6 pb-6">
                                        <p class="text-gray-700 dark:text-gray-200 leading-relaxed">We accept all major credit cards, PayPal, and bank transfers. We offer flexible billing cycles including monthly, quarterly, and annual options with discounts for longer commitments.</p>
                                    </div>
                                </details>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break

    @case('6')
        {{-- categorized-grid --}}
        <section class="pb-20 relative">
            <div class="container mx-auto max-w-[1320px] px-4">
                <div class="text-center space-y-4 mb-8 py-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white">Questions & Answers</h2>
                    <p class="text-xl text-gray-700 dark:text-gray-200 max-w-3xl mx-auto">Find quick answers to help you get the most out of our platform</p>
                </div>

                <div class="max-w-5xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="border-1 rounded-3xl p-6">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                        <i class="fa-solid fa-rocket text-white text-lg"></i>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Getting Started</h3>
                                </div>
                                <div class="space-y-3">
                                    <div class="bg-gray-50 rounded-lg p-3  card-gradient">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 text-sm mb-1">How do I choose the right plan?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-xs">Start with shared hosting for small sites, VPS for growing applications, and dedicated servers for enterprise needs.</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3  card-gradient">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 text-sm mb-1">What if I need more resources?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-xs">All plans can be upgraded instantly. Cloud hosting allows real-time scaling of CPU, RAM, and storage.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-1 rounded-3xl p-6">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                        <i class="fa-solid fa-shield-halved text-white text-lg"></i>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Security Features</h3>
                                </div>
                                <div class="space-y-3">
                                    <div class="bg-gray-50 rounded-lg p-3  card-gradient">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 text-sm mb-1">What security measures are included?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-xs">DDoS protection, firewall rules, malware scanning, automatic updates, and 24/7 security monitoring.</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3  card-gradient">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 text-sm mb-1">Are SSL certificates free?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-xs">Yes, free SSL certificates are included with all hosting plans for secure HTTPS connections.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="border-1 rounded-3xl p-6">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                        <i class="fa-solid fa-headset text-white text-lg"></i>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Support & Help</h3>
                                </div>
                                <div class="space-y-3">
                                    <div class="bg-gray-50 rounded-lg p-3  card-gradient">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 text-sm mb-1">What support channels are available?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-xs">24/7 live chat, email support, phone support, and comprehensive knowledge base with tutorials.</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3  card-gradient">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 text-sm mb-1">How fast do you respond?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-xs">Live chat responses in under 2 minutes, email responses within 4 hours, phone support available immediately.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-1 rounded-3xl p-6">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="flex items-center justify-center rounded-2xl p-3 w-12 h-12" style="background-color: hsl({{ $colorMap['primary'] }});">
                                        <i class="fa-solid fa-credit-card text-white text-lg"></i>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Billing & Pricing</h3>
                                </div>
                                <div class="space-y-3">
                                    <div class="bg-gray-50 rounded-lg p-3  card-gradient">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 text-sm mb-1">What payment methods do you accept?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-xs">Credit cards, PayPal, bank transfers, and cryptocurrency. Monthly, quarterly, and annual billing cycles available.</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3  card-gradient">
                                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 text-sm mb-1">Is there a money-back guarantee?</h4>
                                        <p class="text-gray-700 dark:text-gray-300 text-xs">30-day money-back guarantee on all hosting plans. No questions asked if you're not satisfied.</p>
                                    </div>
                                </div>
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
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white mb-8">FAQ Section</h2>
                <p class="text-xl text-gray-700 dark:text-gray-200 mb-12">
                    Choose an FAQ variation in the admin panel to customize this section.
                </p>
            </div>
        </section>
@endswitch



<x-guest-layout>
    <x-navigation />

    {{-- HERO --}}
    <section class="relative bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16 text-center">
            <h1 class="font-display text-4xl sm:text-5xl text-blue-gray-900">Your Local Web Developer <span class="text-green-600">from £95/month</span></h1>
            <p class="mt-4 text-lg text-blue-gray-700">Fast, reliable website support for businesses across Kemnay, Inverurie, and Aberdeenshire.</p>
            <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
                <a href="#pricing" class="px-6 py-3 rounded-xl bg-green-600 text-white font-semibold shadow-md hover:bg-green-700">View Retainer Plans</a>
                <a href="#audit" class="px-6 py-3 rounded-xl bg-white ring-1 ring-blue-gray-200 text-blue-gray-900 font-semibold hover:bg-blue-gray-50">Book a One‑Off Website Audit (£45)</a>
            </div>
        </div>
    </section>

    {{-- TRUST SIGNALS --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-8 grid grid-cols-2 sm:grid-cols-4 gap-6 text-sm text-blue-gray-500 text-center">
            <div>Fast fixes</div>
            <div>Transparent pricing</div>
            <div>Local & friendly</div>
            <div>GDPR aware</div>
        </div>
    </section>

    {{-- PROBLEM → SOLUTION --}}
    <section class="bg-blue-gray-50/40">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16 grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="font-display text-2xl sm:text-3xl text-blue-gray-900">Stop wasting time worrying about your website</h2>
                <p class="mt-4 text-blue-gray-700">Updates pile up, plugins break, pages slow down. My retainer keeps everything ticking — so you can get back to work.</p>
                <ul class="mt-6 space-y-3">
                    <li class="flex gap-2"><x-ri-shield-check-line class="h-5 w-5 text-green-600"/> Monthly security & updates</li>
                    <li class="flex gap-2"><x-ri-speed-up-line class="h-5 w-5 text-green-600"/> Performance tuning & uptime checks</li>
                    <li class="flex gap-2"><x-ri-tools-line class="h-5 w-5 text-green-600"/> Small tasks & fixes included</li>
                    <li class="flex gap-2"><x-ri-phone-find-line class="h-5 w-5 text-green-600"/> Priority help when something breaks</li>
                </ul>
                <a href="#pricing" class="mt-8 inline-flex items-center gap-2 rounded-xl bg-green-600 px-5 py-3 text-white font-semibold hover:bg-green-700"><x-ri-rocket-line class="h-5 w-5"/> See plans</a>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm ring-1 ring-blue-gray-100 grid grid-cols-2 gap-4 text-sm">
                <div class="bg-blue-gray-50 p-4 rounded-xl"><span class="text-blue-gray-600">CMS</span><div class="mt-2 font-semibold">WordPress / Craft</div></div>
                <div class="bg-blue-gray-50 p-4 rounded-xl"><span class="text-blue-gray-600">Stack</span><div class="mt-2 font-semibold">PHP • Laravel • JS</div></div>
                <div class="bg-blue-gray-50 p-4 rounded-xl"><span class="text-blue-gray-600">Response</span><div class="mt-2 font-semibold">Same‑day* for Pro</div></div>
                <div class="bg-blue-gray-50 p-4 rounded-xl"><span class="text-blue-gray-600">Coverage</span><div class="mt-2 font-semibold">Kemnay • Inverurie • Aberdeenshire</div></div>
                <p class="col-span-2 mt-3 text-xs text-blue-gray-400">*During business hours</p>
            </div>
        </div>
    </section>

    <section id="audit" class="bg-gradient-to-b from-white to-blue-gray-50/60">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16">
            <div class="max-w-3xl mx-auto bg-white border border-blue-gray-100 rounded-2xl shadow-sm p-8 text-center">
                <h2 class="font-display text-3xl text-blue-gray-900">Website Audit – One-Off Service</h2>
                <p class="mt-3 text-blue-gray-700">Get a comprehensive review of your site’s SEO, speed, and security with a clear list of actionable recommendations you can implement yourself or hire me to complete.</p>
                <div class="mt-4 text-4xl font-bold text-blue-gray-900">£45<span class="text-base font-normal text-blue-gray-500"> one-off</span></div>
                <ul class="mt-6 space-y-3 text-sm text-left inline-block">
                    <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> SEO audit & keyword review</li>
                    <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> Page speed & performance analysis</li>
                    <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> Security & best practices check</li>
                    <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> Actionable recommendations list</li>
                </ul>
                <div class="mt-8">
                    <a href="https://square.link/u/3DXWEOAL" class="inline-flex items-center justify-center rounded-xl bg-green-600 px-6 py-3 font-semibold text-white hover:bg-green-700">Book Your Audit</a>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="font-display text-3xl text-blue-gray-900">Simple pricing options</h2>
                <p class="mt-3 text-blue-gray-700">No lock‑in. Upgrade or cancel anytime.</p>
            </div>
            <div class="mt-10 grid sm:grid-cols-2 gap-8 lg:max-w-6xl lg:mx-auto">
                <div class="p-6 bg-white border border-blue-gray-100 rounded-2xl shadow-sm">
                    <h3 class="text-lg font-semibold text-blue-gray-900">Starter</h3>
                    <p class="mt-1 text-sm text-blue-gray-600">Best for small sites</p>
                    <div class="mt-4 text-4xl font-bold text-blue-gray-900">£95<span class="text-base font-normal text-blue-gray-500">/mo</span></div>
                    <ul class="mt-6 space-y-3 text-sm">
                        <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> 1 hour of developer time</li>
                        <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> Monthly core/plugin updates</li>
                        <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> Minor content/bug fixes</li>
                        <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> 1 business‑day response</li>
                    </ul>
                    <a href="https://square.link/u/JSBSy3Ju" class="mt-6 inline-flex w-full justify-center rounded-xl bg-green-600 px-4 py-3 font-semibold text-white hover:bg-green-700">Start Starter</a>
                </div>
                <div class="relative p-6 bg-white border-2 border-green-600 rounded-2xl shadow-md">
                    <p class="absolute -top-3 right-4 bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full shadow">Most popular</p>
                    <h3 class="text-lg font-semibold text-blue-gray-900">Pro</h3>
                    <p class="mt-1 text-sm text-blue-gray-600">For busy or e‑commerce sites</p>
                    <div class="mt-4 text-4xl font-bold text-blue-gray-900">£145<span class="text-base font-normal text-blue-gray-500">/mo</span></div>
                    <ul class="mt-6 space-y-3 text-sm">
                        <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> 2 hours of developer time</li>
                        <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> Same‑day response</li>
                        <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> Performance & security tuning</li>
                        <li class="flex gap-2"><x-ri-check-line class="h-5 w-5 text-green-600"/> Monthly recommendations report</li>
                    </ul>
                    <a href="https://square.link/u/zVKdhzJA" class="mt-6 inline-flex w-full justify-center rounded-xl bg-green-600 px-4 py-3 font-semibold text-white hover:bg-green-700">Start Pro</a>
                </div>
            </div>
            <p class="mt-6 text-center text-xs text-blue-gray-500">Hours roll over one month. Larger projects quoted separately.</p>
        </div>
    </section>


    {{-- TESTIMONIALS --}}
    <section class="bg-blue-gray-50/40">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="font-display text-3xl text-blue-gray-900">What clients say</h2>
            </div>
            <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 bg-white border border-blue-gray-100 rounded-2xl shadow-sm">
                    <p class="text-blue-gray-700">“Rob is always reliable, knowledgeable and happy to help. He’s a great asset to any company, big or small.”</p>
                    <div class="mt-4 text-sm font-semibold text-blue-gray-900">Arnaud's Language Kitchen</div>
                </div>
                <div class="p-6 bg-white border border-blue-gray-100 rounded-2xl shadow-sm">
                    <p class="text-blue-gray-700">“I had the pleasure of working closely with Rob Mackay for 8 years at Casinomeister, and I can’t recommend him highly enough. Rob is an outstanding developer—sharp, reliable, and always focused on building clean, efficient solutions. His calm, easygoing attitude made collaboration smooth and productive. He consistently went above and beyond to ensure the platform remained stable, secure, and user‑friendly.”</p>
                    <div class="mt-4 text-sm font-semibold text-blue-gray-900">Pedro Martinez – Project Manager at Casinomeister</div>
                </div>
                <div class="p-6 bg-white border border-blue-gray-100 rounded-2xl shadow-sm">
                    <p class="text-blue-gray-700">“Ron embodies excellence as a software developer, demonstrating exceptional skills in WordPress and a deep understanding of backend requirements. His ability to tackle challenges and collaborate effectively underscores his commitment to meeting client needs.”</p>
                    <div class="mt-4 text-sm font-semibold text-blue-gray-900">Yvette Riccione – Client</div>
                </div>
                <div class="p-6 bg-white border border-blue-gray-100 rounded-2xl shadow-sm">
                    <p class="text-blue-gray-700">“I had the pleasure to work with Rob on the same project. He is skilled, very knowledgeable, and does not hesitate to go the extra mile. Trustworthy and fun to work with!”</p>
                    <div class="mt-4 text-sm font-semibold text-blue-gray-900">Nicolas Point – Technical Support Specialist at Zendesk</div>
                </div>
                <div class="p-6 bg-white border border-blue-gray-100 rounded-2xl shadow-sm">
                    <p class="text-blue-gray-700">“Rob is great to work with. He's talented, creative, and very responsible and responsive. Not only did he create a lovely design but it was fully optimized—a rare feature from most designers. We'll be using his services again for sure.”</p>
                    <div class="mt-4 text-sm font-semibold text-blue-gray-900">Esra'a Al Shafei – Founder of Majal</div>
                </div>
                <div class="p-6 bg-white border border-blue-gray-100 rounded-2xl shadow-sm">
                    <p class="text-blue-gray-700">“Rob has been a pleasure to work with. He is helpful, friendly, and an expert in his field. I would recommend his expertise to any colleague or professional seeking to hire a web developer.”</p>
                    <div class="mt-4 text-sm font-semibold text-blue-gray-900">Andrea La Valleur‑Purvis – Founder, Studio La Valleur</div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16 max-w-3xl">
            <h2 class="font-display text-3xl text-blue-gray-900 text-center">FAQs</h2>
            <div class="mt-8 divide-y divide-blue-gray-100">
                <details class="group py-4">
                    <summary class="flex justify-between font-medium text-blue-gray-900 cursor-pointer">What counts as a “small fix”? <span class="ml-4 text-blue-gray-400 group-open:rotate-180">▾</span></summary>
                    <div class="mt-2 text-sm text-blue-gray-700">Tasks under ~30 minutes: content edits, plugin/theme tweaks, minor CSS/JS fixes, menu updates, simple bug fixes, etc.</div>
                </details>
                <details class="group py-4">
                    <summary class="flex justify-between font-medium text-blue-gray-900 cursor-pointer">Do unused hours roll over? <span class="ml-4 text-blue-gray-400 group-open:rotate-180">▾</span></summary>
                    <div class="mt-2 text-sm text-blue-gray-700">Yes, for one month. After that they expire so we keep momentum.</div>
                </details>
                <details class="group py-4">
                    <summary class="flex justify-between font-medium text-blue-gray-900 cursor-pointer">How fast is response? <span class="ml-4 text-blue-gray-400 group-open:rotate-180">▾</span></summary>
                    <div class="mt-2 text-sm text-blue-gray-700">Starter: within 1 business day. Pro: same‑day during business hours.</div>
                </details>
                <details class="group py-4">
                    <summary class="flex justify-between font-medium text-blue-gray-900 cursor-pointer">Can you handle bigger features? <span class="ml-4 text-blue-gray-400 group-open:rotate-180">▾</span></summary>
                    <div class="mt-2 text-sm text-blue-gray-700">Yes. Retainers cover maintenance & small improvements; larger work is estimated and scheduled.</div>
                </details>
            </div>
        </div>
    </section>

    {{-- FINAL CTA --}}
    <section id="contact" class="bg-gradient-to-b from-white to-blue-gray-50/60">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16">
            <div class="max-w-2xl mx-auto bg-white border border-blue-gray-100 p-8 rounded-2xl shadow-sm text-center">
                <h2 class="font-display text-3xl text-blue-gray-900">Ready to get started?</h2>
                <p class="mt-3 text-blue-gray-700">Whether you need ongoing support or just a one-off audit, I’m here to help. Let’s make your website faster, safer, and more effective for your business.</p>
                <div class="mt-6 flex flex-col sm:flex-row justify-center gap-3">
                    <a href="#pricing" class="px-6 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700">Start My Plan</a>
                    <a href="#audit" class="px-6 py-3 rounded-xl bg-white ring-1 ring-blue-gray-200 text-blue-gray-900 font-semibold hover:bg-blue-gray-50">Book an Audit</a>
                    <a href="https://app.squareup.com/appointments/book/sq5vhyoj4c8a3r/LWSJTFAG74PE3/start" class="px-6 py-3 rounded-xl bg-white ring-1 ring-blue-gray-200 text-blue-gray-900 font-semibold hover:bg-blue-gray-50" target="_blank">Book a Free 15‑Min Call</a>
                </div>
                <p class="mt-3 text-xs text-blue-gray-500">Based in Kemnay • Serving Inverurie & Aberdeenshire</p>
            </div>
        </div>
    </section>
    @livewireScripts
</x-guest-layout>

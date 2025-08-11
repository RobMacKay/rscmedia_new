{{-- Thank You / Confirmation Page --}}
<x-guest-layout>

    {{-- NAVIGATION --}}
    <x-navigation />

    {{-- HERO / CONFIRMATION --}}
    <section class="bg-gradient-to-b from-white to-blue-gray-50/60">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16">
            <div class="mx-auto max-w-3xl rounded-3xl bg-white p-8 sm:p-12 shadow-sm ring-1 ring-blue-gray-100 text-center">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-green-50 ring-1 ring-green-100">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-7 w-7 text-green-600" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-9 10-5-5"/></svg>
                </div>
                <h1 class="mt-6 font-display text-4xl leading-tight text-blue-gray-900">Thank you! 🎉</h1>
                <p class="mt-3 text-blue-gray-700">I've received your request. I’ll be in touch shortly with next steps. If it’s urgent, feel free to book a call below.</p>

                <div class="mt-8 flex flex-col sm:flex-row justify-center gap-3">
                    <a href="https://app.squareup.com/appointments/book/sq5vhyoj4c8a3r/LWSJTFAG74PE3/start" class="px-6 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700">Book a Free 15‑Min Call</a>
                    <a href="/developer-backup/#pricing" class="px-6 py-3 rounded-xl bg-white ring-1 ring-blue-gray-200 text-blue-gray-900 font-semibold hover:bg-blue-gray-50">Start a Monthly Retainer</a>
                    <a href="/" class="px-6 py-3 rounded-xl bg-white ring-1 ring-blue-gray-200 text-blue-gray-900 font-semibold hover:bg-blue-gray-50">Return to Homepage</a>
                </div>

                <p class="mt-3 text-xs text-blue-gray-500">Based in Kemnay • Serving Inverurie & Aberdeenshire</p>
            </div>
        </div>
    </section>

    {{-- WHAT HAPPENS NEXT --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16">
            <div class="grid gap-10 lg:grid-cols-2 items-start">
                <div>
                    <h2 class="font-display text-2xl sm:text-3xl text-blue-gray-900">What happens next</h2>
                    <ol class="mt-6 space-y-4 text-blue-gray-700">
                        <li class="flex gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-gray-50 ring-1 ring-blue-gray-100 text-sm font-semibold text-blue-gray-700">1</span>
                            <div>
                                <div class="font-semibold text-blue-gray-900">Confirmation email</div>
                                <p class="text-sm">You’ll receive a confirmation with a reference and summary of your request.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-gray-50 ring-1 ring-blue-gray-100 text-sm font-semibold text-blue-gray-700">2</span>
                            <div>
                                <div class="font-semibold text-blue-gray-900">Initial review</div>
                                <p class="text-sm">I’ll review your site and notes. If I need anything else, I’ll reach out.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-gray-50 ring-1 ring-blue-gray-100 text-sm font-semibold text-blue-gray-700">3</span>
                            <div>
                                <div class="font-semibold text-blue-gray-900">Kick-off or audit delivery</div>
                                <p class="text-sm">For retainers: onboarding + first tasks. For audits: a clear report with next steps you can DIY or I can handle.</p>
                            </div>
                        </li>
                    </ol>

                    <div class="mt-8 rounded-2xl bg-blue-gray-50 p-5 ring-1 ring-blue-gray-100">
                        <div class="font-semibold text-blue-gray-900">Prefer email?</div>
                        <p class="mt-1 text-sm text-blue-gray-700">Reach me at <a href="mailto:info@rscmedia.co.uk" class="underline decoration-green-600 underline-offset-4 hover:text-blue-gray-900">info@rscmedia.co.uk</a> and include your website URL.</p>
                    </div>
                </div>

                {{-- Upsell / Useful Links --}}
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-blue-gray-100">
                    <h3 class="text-lg font-semibold text-blue-gray-900">Helpful links</h3>
                    <ul class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm">
                        <li class="rounded-xl bg-blue-gray-50 p-4"><a href="/developer-backup/#pricing" class="font-semibold text-blue-gray-900 hover:underline">Start a Retainer</a><p class="mt-1 text-blue-gray-700">Keep your site maintained each month.</p></li>
                        <li class="rounded-xl bg-blue-gray-50 p-4"><a href="/developer-backup/#audit" class="font-semibold text-blue-gray-900 hover:underline">Book a £45 Audit</a><p class="mt-1 text-blue-gray-700">SEO, speed & security report.</p></li>
                        <li class="rounded-xl bg-blue-gray-50 p-4"><a href="https://app.squareup.com/appointments/book/sq5vhyoj4c8a3r/LWSJTFAG74PE3/start" class="font-semibold text-blue-gray-900 hover:underline">Book a 15‑Min Call</a><p class="mt-1 text-blue-gray-700">Quick chat to scope work.</p></li>
                        <li class="rounded-xl bg-blue-gray-50 p-4"><a href="/" class="font-semibold text-blue-gray-900 hover:underline">Back to RSC Media</a><p class="mt-1 text-blue-gray-700">Return to the homepage.</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- SOCIAL PROOF STRIP --}}
    <section class="bg-blue-gray-50/40">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center text-sm text-blue-gray-500">
                <div>Reliable & responsive</div>
                <div>Transparent pricing</div>
                <div>Local & friendly</div>
                <div>GDPR aware</div>
            </div>
        </div>
    </section>

    {{-- FINAL CTA --}}
    <section class="bg-gradient-to-b from-white to-blue-gray-50/60">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="font-display text-3xl text-blue-gray-900">Need something fixed today?</h2>
                <p class="mt-3 text-blue-gray-700">I take on quick wins and urgent fixes alongside retainers and audits.</p>
                <div class="mt-6 flex flex-col sm:flex-row justify-center gap-3">
                    <a href="https://app.squareup.com/appointments/book/sq5vhyoj4c8a3r/LWSJTFAG74PE3/start" class="px-6 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700">Book a Call</a>
                    <a href="/developer-backup#pricing" class="px-6 py-3 rounded-xl bg-white ring-1 ring-blue-gray-200 text-blue-gray-900 font-semibold hover:bg-blue-gray-50">View Plans</a>
                </div>
                <p class="mt-3 text-xs text-blue-gray-500">Based in Kemnay • Serving Inverurie & Aberdeenshire</p>
            </div>
        </div>
    </section>

</x-guest-layout>


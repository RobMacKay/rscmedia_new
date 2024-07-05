<x-guest-layout>

    <x-navigation />

        <div class="mx-auto max-w-screen-md py-10">

            <section class="px-4 sticky -top-0.5 z-30">
                <div class="rounded-md border flex justify-around py-2 shadow-md bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200">
                    <span class="rounded-md border-x border-t absolute -top-6 left-0 px-4 font-semibold">Contact Us Now</span>
                    <a href="tel:07846139387" class="block p-4 bg-gradient-to-bl from-red-100 to-gray-50 rounded-full border-2 border-red-700" data-ripple-dark="true">
                        <x-heroicon-s-phone class="h-10 text-red-700"/>
                    </a>
                    <a href="https://wa.me/447874413058" class="block p-4 bg-gradient-to-bl from-green-100 to-gray-50 rounded-full border-2 border-green-700" data-ripple-dark="true">
                        <x-ri-whatsapp-fill class="h-10 text-green-700" />
                    </a>
                    <a href="mailto:info@rscmedia.co.uk" class="block p-4 bg-gradient-to-bl from-blue-100 to-gray-50 rounded-full border-2 border-blue-700" data-ripple-dark="true">
                        <x-heroicon-s-envelope  class="h-10 text-blue-700"/>
                    </a>
                </div>
            </section>

            <section class="px-4 bg-primary-500 text-white py-6 mt-4">
                <h1 class="text-4xl font-bold text-center">RSC Media</h1>
                <p class="text-center mt-4 text-balance">We are a web development and support agency based in Aberdeenshire, Scotland. We offer a range of services to help you get the most out of your online presence.</p>
            </section>

            <section class="mt-8 grid grid-cols-2 gap-4 px-4">
                <div>
                    <h2 class="text-2xl font-bold">Our Services</h2>
                    <ul class="mt-4 text-pretty">
                        <li class="flex items>center">
                            <x-heroicon-s-check class="h-6 text-green-700" />
                            <span class="ml-2">Web Development</span>
                        </li>
                        <li class="flex items>center">
                            <x-heroicon-s-check class="h-6 text-green-700" />
                            <span class="ml-2">Web Applications</span>
                        </li>
                        <li class="flex items>center">
                            <x-heroicon-s-check class="h-6 text-green-700" />
                            <span class="ml-2">Web Hosting</span>
                        </li>
                        <li class="flex items>center">
                            <x-heroicon-s-check class="h-6 text-green-700" />
                            <span class="ml-2">Consultancy</span>
                        </li>
                        <li class="flex items>center">
                            <x-heroicon-s-check class="h-6 text-green-700" />
                            <span class="ml-2">Copywriting</span>  
                        </li>
                        <li class="flex items>center">
                            <x-heroicon-s-check class="h-6 text-green-700" />
                            <span class="ml-2">SEO</span>  
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-2xl font-bold">Our Work</h2>
                    <ul class="mt-4">
                        <li class="flex items>center">
                            <x-heroicon-s-check class="h-6 text-green-700" />
                            <a href="#" class="ml-2">Riccione</a>
                        </li>
                        <li class="flex items>center">
                            <x-heroicon-s-check class="h-6 text-green-700" />
                            <a href="#" class="ml-2">Casinomeister</a>
                        </li>
                        <li class="flex items>center">
                            <x-heroicon-s-check class="h-6 text-green-700" />
                            <a href="#" class="ml-2">Website</a>
                        </li>
                        <li class="flex items>center">
                            <x-heroicon-s-check class="h-6 text-green-700" />
                            <a href="#" class="ml-2">Website</a>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="px-4 py-6 my-4">
                <div ckass="px-4">
                    <h2 class="text-2xl font-bold px-4 my-8">Our Specialities</h2>
                    <div class="flex justify-center items-center flex-wrap gap-4">
                        <x-si-laravel class="text-white bg-gradient-to-br from-primary-500 to-primary-300 h-20 p-2 border border-primary-100 rounded-md"/>
                        <x-si-wordpress class="text-white bg-primary-500 h-20 p-2 border rounded-md"/>
                        <x-si-php class="text-white bg-primary-500 h-20 p-2 border rounded-md"/>
                        <x-si-javascript class="text-white bg-primary-500 h-20 p-2 border rounded-md" />
                        <x-si-mysql class="text-white bg-primary-500 h-20 p-2 border rounded-md"/>
                        <x-si-livewire class="text-white bg-primary-500 h-20 p-2 border rounded-md"/>
                        <x-si-tailwindcss class="text-white bg-primary-500 h-20 p-2 border rounded-md"/>
                        <x-si-css3 class="text-white bg-primary-500 h-20 p-2 border rounded-md"/>
                        <x-si-html5 class="text-white bg-primary-500 h-20 p-2 border rounded-md"/>
                    </div>
                </div>
            </section>

            <section class="py-10 px-4">
                <div class="container mx-auto">
                    <p class="block antialiased font-sans leading-relaxed text-gray-900 mb-4 !text-base font-bold">
                        Testimonials
                    </p>
                    <h2
                        class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-blue-gray-900 mb-4 !text-2xl lg:!text-4xl">
                        Think about us
                    </h2>
                    <p
                        class="block antialiased font-sans text-xl font-normal leading-loose text-inherit max-w-3xl !text-gray-800 mb-10 lg:mb-20">
                        Find out what people have been saying about us... 
                    </p>
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 flex gap-3 items-center">
                                <img src="https://www.material-tailwind.com/img/avatar1.jpg" alt="Jessica Devis"
                                    class="inline-block relative object-cover object-center !rounded-full w-[58px] h-[58px]" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Jessica Devis
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="block antialiased font-sans text-sm leading-normal text-inherit !text-gray-500">
                                        @jessicadevis
                                    </p>
                                </div>
                            </div>
                            <div class="py-6 px-4 flex-grow">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-normal !text-gray-500">
                                    The utility-first approach and extensive component library make it a
                                    breeze to create beautiful and responsive interfaces. 🎉
                                </p>
                            </div>
                            <div class="p-6 flex justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-inherit !text-gray-500">
                                        See on
                                    </h6>
                                    <img src="/img/logos/twitter-new-logo.svg" class="h-5 w-5" alt="twitter" />
                                </div>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                    Jan 17, 2024
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 flex gap-3 items-center">
                                <img src="https://www.material-tailwind.com/image/avatar4.jpg" alt="Mary Joshiash"
                                    class="inline-block relative object-cover object-center !rounded-full w-[58px] h-[58px]" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Mary Joshiash
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                        @maryjoshiash
                                    </p>
                                </div>
                            </div>
                            <div class="py-6 px-4 flex-grow">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-normal !text-gray-500">
                                    It's like having a superpower in your toolkit. The ability to craft
                                    custom designs quickly and efficiently with simple classes is
                                    unparalleled.
                                </p>
                            </div>
                            <div class="p-6 flex justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-inherit !text-gray-500">
                                        See on
                                    </h6>
                                    <img src="/img/logos/twitter-new-logo.svg" class="h-5 w-5" alt="twitter" />
                                </div>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                    Jan 18, 2024
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 flex gap-3 items-center">
                                <img src="https://www.material-tailwind.com/image/avatar8.svg" alt="Marcell Glock"
                                    class="inline-block relative object-cover object-center !rounded-full w-[58px] h-[58px]" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Marcell Glock
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                        @Marcel Glock
                                    </p>
                                </div>
                            </div>
                            <div class="py-6 px-4 flex-grow">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-normal !text-gray-500">
                                    The utility-first approach and extensive component library make it a
                                    breeze to create beautiful and responsive interfaces. 😍
                                </p>
                            </div>
                            <div class="p-6 flex justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-inherit !text-gray-500">
                                        See on
                                    </h6>
                                    <img src="/img/logos/twitter-new-logo.svg" class="h-5 w-5" alt="twitter" />
                                </div>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                    Jan 19, 2024
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 flex gap-3 items-center">
                                <img src="https://www.material-tailwind.com/img/avatar3.jpg" alt="Linde Michele"
                                    class="inline-block relative object-cover object-center !rounded-full w-[58px] h-[58px]" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Linde Michele
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                        @lindemichele
                                    </p>
                                </div>
                            </div>
                            <div class="py-6 px-4 flex-grow">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-normal !text-gray-500">
                                    With its clear and concise classes, I can easily communicate design
                                    intentions to my colleagues. It's a must-have tool for any web
                                    developer. 👨🏻‍💻
                                </p>
                            </div>
                            <div class="p-6 flex justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-inherit !text-gray-500">
                                        See on
                                    </h6>
                                    <img src="/img/logos/twitter-new-logo.svg" class="h-5 w-5" alt="twitter" />
                                </div>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                    Jan 20, 2024
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 flex gap-3 items-center">
                                <img src="https://www.material-tailwind.com/image/avatar2.jpg" alt="Lucian Eurel"
                                    class="inline-block relative object-cover object-center !rounded-full w-[58px] h-[58px]" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Lucian Eurel
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                        @lucianeurel
                                    </p>
                                </div>
                            </div>
                            <div class="py-6 px-4 flex-grow">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-normal !text-gray-500">
                                    I've tried several CSS frameworks, but @MaterialTailwind is on a
                                    whole different level. It strikes the perfect balance between
                                    flexibility and design.
                                </p>
                            </div>
                            <div class="p-6 flex justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-inherit !text-gray-500">
                                        See on
                                    </h6>
                                    <img src="/img/logos/twitter-new-logo.svg" class="h-5 w-5" alt="twitter" />
                                </div>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                    Jan 21, 2024
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 flex gap-3 items-center">
                                <img src="https://www.material-tailwind.com/image/avatar5.jpg" alt="Misha Stam"
                                    class="inline-block relative object-cover object-center !rounded-full w-[58px] h-[58px]" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Misha Stam
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                        @mishastam
                                    </p>
                                </div>
                            </div>
                            <div class="py-6 px-4 flex-grow">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-normal !text-gray-500">
                                    Active community support make it easy to get started. It's the ideal
                                    framework for achieving @Material Design excellence in web
                                    applications.
                                </p>
                            </div>
                            <div class="p-6 flex justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-inherit !text-gray-500">
                                        See on
                                    </h6>
                                    <img src="/img/logos/twitter-new-logo.svg" class="h-5 w-5" alt="twitter" />
                                </div>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                    Jan 22, 2024
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    @livewireScripts

</x-guest-layout>

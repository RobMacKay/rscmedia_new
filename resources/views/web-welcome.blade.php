<x-guest-layout>

    <x-navigation />

        <div class="mx-auto max-w-screen-md py-10">

            <section class="px-4 sticky -top-0.5 z-30 mb-8">
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

            <section class="text-center py-8">

                <span id="type" class="text-3xl font-semibold text-balance"></span>
                @php
                    $txt = "Welcome to RSC Media - Here is a quick rundown of what we do...";

                    if(isset($_GET['m'])) {
                        if($_GET['m'] === 'a') {
                            $txt = 'Hello There, We probably just met, here is a quick rundown of what we do...';
                        }

                        if($_GET['m'] === 'b') {
                            $txt = 'Thanks for checking us out! Here is a little about what we can do for you...';
                        }

                        if($_GET['m'] === 'c') {
                            $txt = 'You found me! Curiosity is good... This is what we can do for you...';
                        }
                    }

                @endphp

                <script>
                    var i = 0;
                    var txt = '{{$txt}}';
                    var speed = 50;
                    
                    function typeWriter() {
                      if (i < txt.length) {
                        document.getElementById("type").innerHTML += txt.charAt(i);
                        i++;
                        setTimeout(typeWriter, speed);
                      }
                    }
                    onload = typeWriter();
                </script>

                

            </section>

            <section class="px-4 bg-primary-500 text-white py-6 pt-8 mt-8 relative">
                <h1 class="text-4xl font-bold text-center">RSC Media</h1>
                <p class="text-center mt-4 text-balance">We are a web development and support agency based in Aberdeenshire, Scotland. We offer a range of services to help you get the most out of your online presence.</p>
            </section>

            <section class="mt-8 grid grid-cols-2 gap-4 px-4 border rounded-md">
                <div class="py-4">
                    <h2 class="text-xl lg:text-2xl font-bold text-center">Our Services</h2>
                    <ul class="mt-4 text-pretty mx-auto w-52">
                        <li class="flex items>center ">
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
                <div class="py-4">
                    <h2 class="text-xl lg:text-2xl font-bold text-center">Our Work</h2>
                    <ul class="mt-4 text-pretty mx-auto w-56 space-y-1">
                        <li class="flex flex-col justify>center border rounded-md p-4 gap-2">
                            <div class="flex items>center gap-2">
                                <x-heroicon-s-star class="h-6 text-yellow-700" />
                                <a href="https://www.riccione.com/" class="ml-2">Riccione</a>
                            </div>
                            <div class="text-xs text-gray-700 text-balance">
                                Recruitement website rebuild in React using WordPress as a headless CMS.
                            </div>
                        </li>
                        <li class="flex flex-col justify>center border rounded-md p-4 gap-2">
                            <div class="flex items>center gap-2">
                                <x-heroicon-s-star class="h-6 text-yellow-700" />
                                <a href="https://www.riccione.com/" class="ml-2">Casinomeister</a>
                            </div>
                            <div class="text-xs text-gray-700 text-balance">
                                Backend development for a large online casino review website.
                            </div>
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
                        class="block antialiased font-sans text-lg lg:text-xl font-normal leading-loose text-inherit max-w-3xl !text-gray-800 mb-10 lg:mb-20 text-balance">
                        Find out what people have been saying about us... 
                    </p>

                    

                    <div class="grid gap-8 grid-cols-1 lg:grid-cols-2">
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 flex gap-3 items-center">
                                <img src="https://media.licdn.com/dms/image/C5103AQHQqlcwhWU5BA/profile-displayphoto-shrink_200_200/0/1516943967156?e=1726099200&v=beta&t=vmuiEkCbiZdr591Zt0n6unwOy6Yf5EtnrOowaXYMzyg" alt="Yvette Riccione - Riccione Recruitment"
                                    class="inline-block relative object-cover object-center !rounded-full w-[58px] h-[58px]" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Yvette Riccione
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="py-6 px-4 flex-grow">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-normal !text-gray-800">
                                    Rob embodies excellence as a software developer, demonstrating exceptional skills in WordPress and a deep understanding of the backend requirements necessary to ensure the success of a website. His ability to skillfully tackle challenges and collaborate effectively underscores his commitment to comprehending and meeting client needs.
                                </p>
                            </div>
                            <div class="p-6 flex justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-inherit !text-gray-500">
                                        See on
                                    </h6>
                                    <x-ri-linkedin-fill class="h-5 w-5 text-blue-500" />
                                </div>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                    July 8th, 2024
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 flex gap-3 items-center">
                                <img src="https://media.licdn.com/dms/image/D4E35AQE5r1IcQA1oiw/profile-framedphoto-shrink_200_200/0/1710186820123?e=1721041200&v=beta&t=1iuDN8oXZJbipzLFBBu7MI3utaxPpBx58BGYtnRG9zc" alt="Arnaud's Language Kitchen"
                                    class="inline-block relative object-cover object-center !rounded-full w-[58px] h-[58px]" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Arnaud's Language Kitchen
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="py-6 px-4 flex-grow">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-normal !text-gray-800">
                                    Rob is always reliable, knowledgeable and happy to help. He's a great asset to any company, big or small.
                                </p>
                            </div>
                            <div class="p-6 flex justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-inherit !text-gray-500">
                                        See on
                                    </h6>
                                    <x-ri-google-fill class="h-5 w-5 text-red-500" />
                                </div>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                    October 19th, 2023
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 flex gap-3 items-center">
                                <img src="https://media.licdn.com/dms/image/D4D03AQHbMnezYhVq7g/profile-displayphoto-shrink_200_200/0/1677707478919?e=1725494400&v=beta&t=UPo7D6GDBtGmyGvKYlnYj_FhCJXYtgD91MjQpv3Wyos" alt="Esra'a Al Shafei"
                                    class="inline-block relative object-cover object-center !rounded-full w-[58px] h-[58px]" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Esra'a Al Shafei
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="py-6 px-4 flex-grow">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-normal !text-gray-800">
                                    Rob is great to work with. He's talented, creative, and most importantly, very responsible and responsive. Not only did he create a lovely design but it was fully optimized as well, a rare feature from most designers. We'll be using his services again for sure, and if you care about quality and user experience, then so should you!
                                </p>
                            </div>
                            <div class="p-6 flex justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-inherit !text-gray-500">
                                        See on
                                    </h6>
                                    <x-ri-linkedin-fill class="h-5 w-5 text-blue-500" />
                                </div>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                    October 19th, 2009
                                </p>
                            </div>
                        </div>
                            
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 flex gap-3 items-center">
                                <img src="https://media.licdn.com/dms/image/C4D03AQF8_obkCjaNUA/profile-displayphoto-shrink_200_200/0/1616440902884?e=1725494400&v=beta&t=Hmoav_VPzE2gptLrtL-3TgRDONqwsXgzForz2PRHmBQ" alt="Andrea La Valleur-Purvis"
                                    class="inline-block relative object-cover object-center !rounded-full w-[58px] h-[58px]" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Andrea La Valleur-Purvis
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="py-6 px-4 flex-grow">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-normal !text-gray-800">
                                    Rob has been a pleasure to work with. He is both helpful, friendly and an expert in his field. I would recommend his expertise to any colleague or professional, seeking to hire a web developer.
                                </p>
                            </div>
                            <div class="p-6 flex justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-inherit !text-gray-500">
                                        See on
                                    </h6>
                                    <x-ri-linkedin-fill class="h-5 w-5 text-blue-500" />
                                </div>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-inherit font-medium !text-gray-500">
                                    July 21st, 2009
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    @livewireScripts

</x-guest-layout>

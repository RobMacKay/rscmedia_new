<x-guest-layout>

    <x-navigation />

    <header class="bg-gray-100 p-8 pt-0 relative overflow-hidden">
        <video class="absolute top-0 left-0 object-cover opacity-50 object-center min-h-full" autoplay loop muted playsinline preload="auto" poster="">
            <source src="assets/images/video-team.mp4" />
        </video>
        <a href="https://www.pexels.com/video/people-in-a-meeting-3255275/" class="absolute bottom-2 right-2 text-gray-700 text-xs">Video by fauxels</a></span>
        <div class="container py-8 mx-auto flex flex-col justify-center lg:h-full lg:min-h-screen w-full grid-cols-1 items-center lg:grid-cols-2 relative z-10">
            <div class="p-8 row-start-2 lg:row-auto  bg-linear-to-r from-white to-transparent rounded-l-lg">
                <h1
                    class="mb-4 block text-xl md:text-3xl font-semibold leading-tight! tracking-normal text-blue-gray-900 antialiased lg:text-5xl font-display">
                    <span>Let's Build Your Website</span> <br /> <span class="text-5xl md:text-6xl lg:text-8xl font-bold">Together</span>
                </h1>
                <p class="block font-sans text-md md:text-xl font-normal leading-relaxed text-inherit text-blue-gray-900 antialiased md:pr-16 xl:pr-28 max-w-xl">
                    We create custom apps and tools tailored to your work needs, making technology easy so you can focus on what matters. Let's simplify your online tasks together.
                </p>
                <div class="md:flex gap-4 items-center">
                    <a href="mailto:info@rscmedia.co.uk" class="inline-block mt-4 select-none rounded-lg bg-green-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Email Us</a>
                    <a href="https://wa.me/447874413058">
                        <img src="/assets/images/WhatsAppButtonGreenLarge.svg" alt="Text Us On WhatsApp" class="h-10 mt-4"/>
                    </a>
                    <a href="https://app.squareup.com/appointments/book/sq5vhyoj4c8a3r/LWSJTFAG74PE3/start" class="inline-block mt-4 select-none rounded-lg bg-green-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Book Appointment</a>
                </div>
            </div>
        </div>
    </header>


<section class="py-8 px-8 lg:py-20">
    <div class="container mx-auto">
        <div class="mb-12 text-center">
            <h2
                class="mb-4 block font-sans text-4xl font-semibold leading-snug! tracking-normal text-blue-gray-900 antialiased lg:text-5xl">
                Lets get you running!
            </h2>
            <p class="mx-auto block font-sans text-xl font-normal leading-relaxed text-inherit text-gray-500! antialiased lg:w-3/5">
                We offer expert consultation to enhance your business's online presence across web and social media platforms.
                Our services include addressing website and web technology challenges, as well as crafting customized management software tailored to efficiently track and meet your business needs.
            </p>
        </div>
        <div class="flex justify-center mt-6">
            <a href="/developer-backup" class="px-4 py-2 rounded bg-green-600 text-white font-bold">Call In the Backup Now!</a>
        </div>
        <div class="mx-auto lg:max-w-(--breakpoint-lg) lg:px-20" x-data="{show: 1}">
            <h2
                class="mt-8 block font-sans text-3xl font-semibold leading-snug! tracking-normal text-blue-gray-900 antialiased lg:text-4xl">
                Frequently asked questions
            </h2>
            <div class="relative block w-full">
                <button type="button" @click="show = 1"
                    class="flex w-full select-none items-center justify-between border-b border-b-blue-gray-100 py-4 text-left font-sans text-xl font-semibold leading-snug text-gray-900 antialiased transition-colors hover:text-blue-gray-900">
                    Who Are These Solutions Designed For?<span class="ml-4"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
                <div class="overflow-hidden transition-all" x-show="show === 1" x-transition.scale.origin.top>
                    <div
                        class="block w-full py-4 font-sans text-sm font-light leading-normal text-gray-700 antialiased">
                        <p class="block font-sans text-base font-normal leading-relaxed text-gray-500 antialiased">
                            Our solutions are designed to cater to small and medium-sized businesses across various
                            industries. Whether you're a local startup aiming to establish a digital presence, a
                            well-established SMB seeking to streamline operations, or somewhere in between, our
                            versatile services are tailored to meet your unique needs. We understand that each
                            business is different, and our solutions reflect that diversity, ensuring that no matter
                            where you are on your business journey, we can help you achieve your digital goals.
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative block w-full">
                <button type="button" @click="show = 2"
                    class="flex w-full select-none items-center justify-between border-b border-b-blue-gray-100 py-4 text-left font-sans text-xl font-semibold leading-snug text-gray-900 antialiased transition-colors hover:text-blue-gray-900">
                    What Makes Your Applications Different?<span class="ml-4"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
                <div class="overflow-hidden transition-all" x-cloak x-show="show === 2" x-transition.scale.origin.top>
                    <div
                        class="block w-full py-4 font-sans text-sm font-light leading-normal text-gray-700 antialiased">
                        <p class="block font-sans text-base font-normal leading-relaxed text-gray-500 antialiased">
                            What sets our applications apart is their level of customization. We understand that no
                            two businesses are the same. Our solutions are designed to be highly adaptable and can
                            be tailored to your specific business requirements. This customization ensures that the
                            applications seamlessly integrate with your existing processes, making them not just a
                            one-size-fits-all solution, but a perfect fit for your unique operations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative block w-full">
                <button type="button" @click="show = 3"
                    class="flex w-full select-none items-center justify-between border-b border-b-blue-gray-100 py-4 text-left font-sans text-xl font-semibold leading-snug text-gray-900 antialiased transition-colors hover:text-blue-gray-900">
                    How Will These Solutions Benefit My Business?<span class="ml-4"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
                <div class="overflow-hidden transition-all" x-cloak x-show="show === 3" x-transition.scale.origin.top>
                    <div
                        class="block w-full py-4 font-sans text-sm font-light leading-normal text-gray-700 antialiased">
                        <p class="block font-sans text-base font-normal leading-relaxed text-gray-500 antialiased">
                            The benefits of our solutions are extensive. They go beyond just streamlining processes
                            and increasing productivity. By implementing our solutions, you can expect to see an
                            improvement in efficiency, cost savings, enhanced customer experiences, and a
                            competitive edge. With a clear focus on your business's growth and success, our
                            solutions are geared to support your bottom line, allowing you to thrive in an
                            ever-competitive market.
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative block w-full">
                <button type="button" @click="show = 4"
                    class="flex w-full select-none items-center justify-between border-b border-b-blue-gray-100 py-4 text-left font-sans text-xl font-semibold leading-snug text-gray-900 antialiased transition-colors hover:text-blue-gray-900">
                    Is Training Provided for Our Staff?<span class="ml-4"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
                <div class="overflow-hidden transition-all" x-cloak x-show="show === 4" x-transition.scale.origin.top>
                    <div
                        class="block w-full py-4 font-sans text-sm font-light leading-normal text-gray-700 antialiased">
                        <p class="block font-sans text-base font-normal leading-relaxed text-gray-500 antialiased">
                            Yes, training is a key part of our service. We understand that adopting new technology
                            can be a challenge for your team. That's why we offer comprehensive training to ensure a
                            smooth transition. Our training programs are designed to equip your staff with the
                            skills and knowledge they need to make the most of our applications. We're dedicated to
                            making the adoption process as effortless as possible, helping your team embrace the
                            change with confidence.
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative block w-full">
                <button type="button" @click="show = 5"
                    class="flex w-full select-none items-center justify-between border-b border-b-blue-gray-100 py-4 text-left font-sans text-xl font-semibold leading-snug text-gray-900 antialiased transition-colors hover:text-blue-gray-900">
                    What If I Need Ongoing Assistance?<span class="ml-4"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
                <div class="overflow-hidden transition-all" x-cloak x-show="show === 5" x-transition.scale.origin.top>
                    <div
                        class="block w-full py-4 font-sans text-sm font-light leading-normal text-gray-700 antialiased">
                        <p class="block font-sans text-base font-normal leading-relaxed text-gray-500 antialiased">
                            We understand that your needs don't end once the solution is in place. That's why we
                            offer ongoing assistance and support. Our dedicated team is just a call or message away.
                            Whether you have questions, require updates, or need assistance with any aspect of the
                            solution, we're here to provide the support you need. We're committed to your long-term
                            success, and our ongoing support reflects that commitment, ensuring that you can always
                            count on us to assist you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-28 px-10 bg-gray-100">
    <div class="container mx-auto mb-12 px-6">
        <h2
            class="mb-3 block font-sans text-3xl! font-bold leading-[1.3] tracking-normal text-blue-gray-900 antialiased lg:text-4xl!">
            Unlock the Full Potential of Your Business
        </h2>
        <div class="flex flex-wrap items-center justify-between gap-6">
            <p
                class="block w-full font-sans text-base font-normal leading-relaxed text-inherit text-gray-500! antialiased lg:w-6/12">
                We understand that small and medium-sized businesses face unique challenges. That's why our tailored
                data and app solutions are meticulously crafted to empower your business in countless ways. By
                choosing our services, you can:
            </p>
            <a href="mailto:info@rscmedia.co.uk"
                class="select-none rounded-lg bg-linear-to-tr bg-accent1 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true">
                contact us
            </a>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 gap-y-3 md:grid-cols-2 lg:grid-cols-3 lg:gap-y-12">
        <div class="relative flex flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <div class="grid p-6">
                <div class="mb-4 h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 fill-blue-800 drop-shadow-md">
                        <path fill-rule="evenodd" d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 0 1 .75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 0 1 9.75 22.5a.75.75 0 0 1-.75-.75v-4.131A15.838 15.838 0 0 1 6.382 15H2.25a.75.75 0 0 1-.75-.75 6.75 6.75 0 0 1 7.815-6.666ZM15 6.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" clip-rule="evenodd" />
                        <path d="M5.26 17.242a.75.75 0 1 0-.897-1.203 5.243 5.243 0 0 0-2.05 5.022.75.75 0 0 0 .625.627 5.243 5.243 0 0 0 5.022-2.051.75.75 0 1 0-1.202-.897 3.744 3.744 0 0 1-3.008 1.51c0-1.23.592-2.323 1.51-3.008Z" />
                      </svg>
                </div>
                <h5
                    class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Enhance Efficiency
                </h5>
                <p
                    class="block font-sans text-sm font-normal leading-normal text-inherit text-gray-500! antialiased">
                    Our solutions streamline complex tasks, enhance productivity, and save you invaluable time. This
                    efficiency allows you to redirect your focus and resources towards what truly matters—growing
                    your business and serving your customers.
                </p>
            </div>
        </div>
        <div class="relative flex flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <div class="grid p-6">
                <div class="mb-4 h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 fill-green-800 drop-shadow-md">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                      </svg>
                </div>
                <h5
                    class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Customization to Your Needs
                </h5>
                <p
                    class="block font-sans text-sm font-normal leading-normal text-inherit text-gray-500! antialiased">
                    No two businesses are identical, and we believe your solutions shouldn't be either. We offer a
                    highly customizable approach, ensuring that our applications fit your unique requirements like a
                    glove. This tailored fit means you can optimize operations while staying true to your business's
                    identity.
                </p>
            </div>
        </div>
        <div class="relative flex flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <div class="grid p-6">
                <div class="mb-4 h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 fill-red-800 drop-shadow-md">
                        <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 0 0 0 1.5H3v10.5a3 3 0 0 0 3 3h1.21l-1.172 3.513a.75.75 0 0 0 1.424.474l.329-.987h8.418l.33.987a.75.75 0 0 0 1.422-.474l-1.17-3.513H18a3 3 0 0 0 3-3V3.75h.75a.75.75 0 0 0 0-1.5H2.25Zm6.54 15h6.42l.5 1.5H8.29l.5-1.5Zm8.085-8.995a.75.75 0 1 0-.75-1.299 12.81 12.81 0 0 0-3.558 3.05L11.03 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l2.47-2.47 1.617 1.618a.75.75 0 0 0 1.146-.102 11.312 11.312 0 0 1 3.612-3.321Z" clip-rule="evenodd" />
                      </svg>
                </div>
                <h5
                    class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Data-Driven Insights
                </h5>
                <p
                    class="block font-sans text-sm font-normal leading-normal text-inherit text-gray-500! antialiased">
                    In today's data-centric world, gaining insights is paramount. Our solutions provide you with
                    valuable data-driven insights, allowing you to make informed decisions, seize opportunities, and
                    adapt swiftly to evolving market trends. This data empowers you to stay ahead of the curve and
                    make strategic choices that matter.
                </p>
            </div>
        </div>
        <div class="relative flex flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <div class="grid p-6">
                <div class="mb-4 h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 fill-teal-800 drop-shadow-md">
                        <path fill-rule="evenodd" d="M15.22 6.268a.75.75 0 0 1 .968-.431l5.942 2.28a.75.75 0 0 1 .431.97l-2.28 5.94a.75.75 0 1 1-1.4-.537l1.63-4.251-1.086.484a11.2 11.2 0 0 0-5.45 5.173.75.75 0 0 1-1.199.19L9 12.312l-6.22 6.22a.75.75 0 0 1-1.06-1.061l6.75-6.75a.75.75 0 0 1 1.06 0l3.606 3.606a12.695 12.695 0 0 1 5.68-4.974l1.086-.483-4.251-1.632a.75.75 0 0 1-.432-.97Z" clip-rule="evenodd" />
                      </svg>
                </div>
                <h5
                    class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Scalability for Growth
                </h5>
                <p
                    class="block font-sans text-sm font-normal leading-normal text-inherit text-gray-500! antialiased">
                    We understand that your business is a dynamic entity. Our solutions are built with scalability
                    in mind. Whether you're looking to expand, diversify, or face market fluctuations, our
                    applications can evolve with you, ensuring you're always prepared for the future.
                </p>
            </div>
        </div>
        <div class="relative flex flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <div class="grid p-6">
                <div class="mb-4 h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 fill-purple-800 drop-shadow-md">
                        <path d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z" />
                      </svg>
                </div>
                <h5
                    class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Ongoing Support and Optimization
                </h5>
                <p
                    class="block font-sans text-sm font-normal leading-normal text-inherit text-gray-500! antialiased">
                    Your success is our priority. Our dedicated team is committed to providing continuous support,
                    keeping your solutions up-to-date, secure, and optimized. We're not just here for the setup;
                    we're here for the long run, assisting you in any way we can.
                </p>
            </div>
        </div>
        <div class="relative flex flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <div class="grid p-6">
                <div class="mb-4 h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 fill-amber-800 drop-shadow-md">
                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z" clip-rule="evenodd" />
                      </svg>
                </div>
                <h5
                    class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Maintain a Competitive Edge
                </h5>
                <p
                    class="block font-sans text-sm font-normal leading-normal text-inherit text-gray-500! antialiased">
                    The business landscape is ever-changing. With our innovative solutions, you're not just keeping
                    pace; you're staying one step ahead. We offer cutting-edge technology that helps you remain a
                    leader in your industry, no matter how fierce the competition gets.
                </p>
            </div>
        </div>
    </div>
</section>
@livewireScripts
</x-guest-layout>

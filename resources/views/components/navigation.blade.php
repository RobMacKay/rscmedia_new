<nav x-data="{ show: 0 }"
    class="block mx-auto max-w-5xl rounded-none border-0 border-white/80 bg-white bg-opacity-80 py-4 px-4 text-white backdrop-blur-2xl backdrop-saturate-200">
    <div class="container mx-auto flex items-center justify-between">
        <a href="/" aria-label="Home">
            <x-application-logo />
        </a>
        <ul class="ml-10 hidden items-center gap-8 lg:flex">
            <li>
                <a href="/"
                    class="flex items-center gap-2 font-sans text-base leading-relaxed text-gray-900 antialiased font-bold">
                    Home</a>
            </li>
            <li>
                <a href="/services"
                    class="flex items-center gap-2 font-sans text-base font-bold leading-relaxed text-gray-900 antialiased">
                    Services
                </a>
            </li>
            <li>
                <a href="/about"
                    class="flex items-center gap-2 font-sans text-base font-bold leading-relaxed text-gray-900 antialiased">
                    About
                </a>
            </li>
        </ul>
        <button @click="show = ! show"
            class="relative ml-auto inline-block h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-primary/10 active:bg-primary/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
            type="button" data-ripple-dark="true">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </span>
        </button>
    </div>
    <div x-show="show" x-cloak
        class="block w-full basis-full overflow-hidden transition-all duration-300 ease-in lg:hidden" :class="show ? '' : 'h-0'">
        <div class="container mx-auto mt-3 border-t border-gray-200 px-2 pt-4">
            <ul class="flex flex-col gap-4">
                <li>
                    <a href="/"
                        class="flex items-center gap-2 font-sans text-base font-medium leading-relaxed text-gray-900 antialiased">Home</a>
                </li>
                <li>
                    <a href="/services"
                        class="flex items-center gap-2 font-sans text-base font-medium leading-relaxed text-gray-900 antialiased">Services</a>
                </li>
                <li>
                    <a href="/about"
                        class="flex items-center gap-2 font-sans text-base font-medium leading-relaxed text-gray-900 antialiased">About</a>
                </li>
                <li>
                    <a href="https://client.rscmedia.co.uk/client/login"
                        class="flex items-center gap-2 font-sans text-base font-medium leading-relaxed text-gray-900 antialiased">Client Login</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>

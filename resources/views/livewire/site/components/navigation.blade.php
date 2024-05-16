<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="w-full mx-auto px-4 lg:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center space-x-2">
                <div>
                    <a href="{{ route('site.home') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 lg:-my-px lg:ms-10 lg:flex">
                <x-nav-link href="{{ route('site.home') }}" :active="request()->routeIs('site.home')">
                    {{ __('Início') }}
                </x-nav-link>
                <div class="hidden items-center space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-dropdown align="center" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ __('Sobre') }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('about.group') }}">
                                {{ __('Grupo VAT') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('about.cases') }}">
                                {{ __('Cases') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('about.awards') }}">
                                {{ __('Prêmios') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('about.videos') }}">
                                {{ __('Vídeos') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('about.privacypolicy') }}">
                                {{ __('Política de Privacidade') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
                <div class="hidden items-center space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-dropdown align="center" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ __('Soluções') }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('solutions.platform-iptv') }}">
                                {{ __('Plataforma IPTV') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('solutions.whitelabel') }}">
                                {{ __('WhiteLabel') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('solutions.platform-ava') }}">
                                {{ __('Plataforma AVA') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('solutions.studiopack') }}">
                                {{ __('Studio PACK') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
                <x-nav-link href="{{ route('producer.home') }}" :active="request()->routeIs('producer.home')">
                    {{ __('Produtora') }}
                </x-nav-link>
                <x-nav-link href="{{ route('compliance.home') }}" :active="request()->routeIs('compliance.home')">
                    {{ __('Compliance') }}
                </x-nav-link>
                <x-nav-link href="{{ route('contact.home') }}" :active="request()->routeIs('contact.home')">
                    {{ __('Fale Conosco') }}
                </x-nav-link>
            </div>

            <div class="hidden lg:flex lg:items-center lg:ms-6">
                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    @if(!\Illuminate\Support\Facades\Auth::check())
                        <div class="space-x-2">
                            <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                                {{ __('Login') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                                {{ __('Registro') }}
                            </x-nav-link>
                        </div>
                    @else
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @endif
                                @else
                                    <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                        @if(Auth::check())
                                            {{ Auth::user()->name }}
                                        @endif
                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-dropdown-link href="{{ route('admin.dashboard') }}">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}"
                                                     @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endif

                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('site.home') }}" :active="request()->routeIs('site.home')">
                {{ __('Início') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('about.group') }}" :active="request()->routeIs('about.group')">
                {{ __('Sobre') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('solutions.platform-iptv') }}" :active="request()->routeIs('solutions.platform-iptv')">
                {{ __('Soluções') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('producer.home') }}" :active="request()->routeIs('producer.home')">
                {{ __('Produtora') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('compliance.home') }}" :active="request()->routeIs('compliance.home')">
                {{ __('Compliance') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('contact.home') }}" :active="request()->routeIs('contact.home')">
                {{ __('Fale Conosco') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            @if( Auth::check() )
                <div class="flex items-center px-4">
                    <div>
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
            @endif


            <div class="mt-3 space-y-1">
                <x-responsive-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>

                @if(!\Illuminate\Support\Facades\Auth::check())
                    <div>
                        <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                            {{ __('Registro') }}
                        </x-responsive-nav-link>
                    </div>
                @else
                    <!-- Account Management -->
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                @endif
            </div>
        </div>
    </div>
</nav>

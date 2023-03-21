<nav
class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
<div
    class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
    <button
        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
        type="button" onclick="toggleNavbar('example-collapse-sidebar')">
        <i class="fas fa-bars"></i>
    </button>
    <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
       >
       BOT
    </a>
    <ul class="md:hidden items-center flex flex-wrap list-none">
        <li class="inline-block relative">
            <a class="text-blueGray-500 block py-1 px-3" href="#pablo"
                onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="notification-dropdown">
                <a href="{{ route('profile.show') }}"
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Perfil</a>
                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <a
                    href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"> {{ __('Cerrar Sesión') }}</a>


                </form>


            </div>
        </li>
        <li class="inline-block relative">
            <a class="text-blueGray-500 block" href="#pablo"
                onclick="openDropdown(event,'user-responsive-dropdown')">
                <div class="items-center flex">
                    <span
                        class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                          class="w-full rounded-full align-middle border-none shadow-lg"
                            src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->firstname }}" /></span>
                </div>
            </a>
            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="user-responsive-dropdown">
                <a href="{{ route('profile.show') }}"
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Perfil</a>
                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <a
                    href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">{{ __('Cerrar Sesión') }}</a>


                </form>

            </div>
        </li>
    </ul>
    <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
        id="example-collapse-sidebar">
        <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
            <div class="flex flex-wrap">
                <div class="w-6/12">
                    <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                        href="../../index.html">
                        Notus JS
                    </a>
                </div>
                <div class="w-6/12 flex justify-end">
                    <button type="button"
                        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                        onclick="toggleNavbar('example-collapse-sidebar')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <form class="mt-6 mb-4 md:hidden">
            <div class="mb-3 pt-0">
                <input type="text" placeholder="Search"
                    class="border-0 px-3 py-2 h-12 border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
            </div>
        </form>
        <!-- Divider -->
        <hr class="my-4 md:min-w-full" />
        <!-- Heading -->
        <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
            Administrador
        </h6>
        <!-- Navigation -->

        <ul class="md:flex-col md:min-w-full flex flex-col list-none">
            <li class="items-center">
                <a href="{{route('dashboard')}}"
                    class="text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600">
                    <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                    Dashboard
                </a>
            </li>


            <li class="items-center">
                <a href="./tables.html"
                    class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                    <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                Usuarios
                </a>
            </li>


        </ul>

        <!-- Divider -->
        <hr class="my-4 md:min-w-full" />
        <!-- Heading -->
        <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
            Redes Sociales
        </h6>
        <!-- Navigation -->

        <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
            <li class="items-center">
                <a href="{{route('twit.index')}}"
                    class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                    <i class="fab fa-twitter text-blueGray-300 mr-2 text-sm"></i>
                    Twitter
                </a>
            </li>

            <li class="items-center">
                <a href="{{ route("Facebook.index") }}"
                    class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                    <i class="fab fa-facebook-square text-blueGray-300 mr-2 text-sm"></i>
                   Facebook
                </a>
            </li>

            <li class="items-center">
                <a href="../auth/register.html"
                    class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                    <i class="fab fa-instagram text-blueGray-300 mr-2 text-sm"></i>
                   Instagram
                </a>
            </li>
            <li class="items-center">
                <a href="../auth/register.html"
                    class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                    <i class="fab fa-whatsapp text-blueGray-300 mr-2 text-sm"></i>
                  Whatsapp
                </a>
            </li>

            <li class="items-center">
                <a href="../auth/register.html"
                    class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                    <i class="fas fa-question text-blueGray-300 mr-2 text-sm"></i>
                 GETTR
                </a>
            </li>
        </ul>

        <!-- Divider -->
        <hr class="my-4 md:min-w-full" />
        <!-- Heading -->
        <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
            Beneficios
        </h6>
        <!-- Navigation -->

        <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
            <li class="items-center">
                <a href="{{route('chatify')}}"
                    class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                    <i class="fas fa-newspaper text-blueGray-300 mr-2 text-sm"></i>
                    chat
                </a>
            </li>


        </ul>

        <!-- Divider -->

    </div>
</div>
</nav>

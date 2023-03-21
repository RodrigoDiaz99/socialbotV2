<x-profile-layout>
    <!--

=========================================================
* Notus JS - v1.1.0 based on Tailwind Starter Kit by Creative Tim
=========================================================

* Product Page: https://www.creative-tim.com/product/notus-js
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md)

* Tailwind Starter Kit Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->








    <!-- Header -->
    <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">

    </div>
    <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">



            <div class="w-full lg:w-8/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                My account
                            </h6>

                        </div>
                    </div>
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')


                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))

                        @livewire('profile.update-password-form')

                @endif

                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())

                        @livewire('profile.two-factor-authentication-form')



                @endif


                    @livewire('profile.logout-other-browser-sessions-form')


                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())



                        @livewire('profile.delete-user-form')

                @endif

                </div>
            </div>



            <div class="w-full lg:w-4/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full px-4 flex justify-center">
                                <div class="relative">
                                    <img alt="" src="{{asset('img/team-2-800x800.jpg')}}"
                                        class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px" />
                                </div>
                            </div>
                            <div class="w-full px-4 text-center mt-20">
                                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                    <div class="mr-4 p-3 text-center">
                                        <span
                                            class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                                            22
                                        </span>
                                        <span class="text-sm text-blueGray-400">Friends</span>
                                    </div>
                                    <div class="mr-4 p-3 text-center">
                                        <span
                                            class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                                            10
                                        </span>
                                        <span class="text-sm text-blueGray-400">Photos</span>
                                    </div>
                                    <div class="lg:mr-4 p-3 text-center">
                                        <span
                                            class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                                            89
                                        </span>
                                        <span class="text-sm text-blueGray-400">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-12">
                            <h3 class="text-xl font-semibold leading-normal text-blueGray-700 mb-2">
                                Jenna Stones
                            </h3>
                            <div
                                class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                Los Angeles, California
                            </div>
                            <div class="mb-2 text-blueGray-600 mt-10">
                                <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
                                Solution Manager - Creative Tim Officer
                            </div>
                            <div class="mb-2 text-blueGray-600">
                                <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
                                University of Computer Science
                            </div>
                        </div>
                        <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-9/12 px-4">
                                    <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                        An artist of considerable range, Jenna the name taken
                                        by Melbourne-raised, Brooklyn-based Nick Murphy
                                        writes, performs and records all of his own music,
                                        giving it a warm, intimate feel with a solid groove
                                        structure. An artist of considerable range.
                                    </p>
                                    <a href="javascript:void(0);" class="font-normal text-pink-500">
                                        Show more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>





</x-profile-layout>

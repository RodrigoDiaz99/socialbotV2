<x-app-layout>
    <style>
        body {
  background: #15202b;
}

.modal {
  min-width: 60%;
}

    </style>
    <div class="relative bg-pink-600 md:pt-32">
        <div class="px-4 md:px-10 mx-auto w-full">

        </div>
    </div>

    <div class="md:flex md:flex-flow-col md:grid-cols-3 md:grid-rows-3 gap-6 px-6">
        <!-- button -->
        <div class="mb-4">
            <a type="button" href="{{ route('login.twitter') }}"
                class='flex max-w-sm w-full bg-gradient-to-r from-green-500 bg-blue-500 hover:from-green-600 hover:bg-blue-600 focus:outline-none text-dark text-2xl uppercase font-bold shadow-md rounded-full mx-auto p-5'>
                <div class="flex sm:flex-cols-12 gap-2">
                    <div class="col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                        </svg>
                    </div>
                    <div class="col-span-2 pt-2">Aceeder a twitter
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="md:flex md:flex-flow-col md:grid-cols-3 md:grid-rows-3 gap-6 px-6">
        <!-- button -->
        <div class="mb-4">
            <a type="button" href="{{ route('twitter.post') }}"
                class='flex max-w-sm w-full bg-gradient-to-r from-green-500 bg-blue-500 hover:from-green-600 hover:bg-blue-600 focus:outline-none text-dark text-2xl uppercase font-bold shadow-md rounded-full mx-auto p-5'>
                <div class="flex sm:flex-cols-12 gap-2">
                    <div class="col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                        </svg>
                    </div>
                    <div class="col-span-2 pt-2">{{$twitter ? 'Post a Messages': 'pending'}}
                    </div>
                </div>
            </a>
        </div>
    </div>
@if($twitter)
    <div class="bg-green-200 min-h-screen py-32 px-10">
        <div class="bg-white p-10 md:w-2/3 lg:w-1/2 mx-auto">
          <form method="post" action="{{route('twitter.post')}}">
@csrf
            <div class="flex items-center mb-10">
              <label for="twitter" class="w-20 inline-block text-right mr-6 text-gray-500">Twitter</label>
              <input type="text" name="message" id="message" placeholder="@web_smasher" class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">
            </div>
            <div class="text-right">
              <button class="py-3 px-8 bg-green-500 text-green-100 font-bold">Submit</button>
            </div>
          </form>
        </div>
      </div>>
      @endif
</x-app-layout>

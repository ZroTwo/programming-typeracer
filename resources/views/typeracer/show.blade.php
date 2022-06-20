<x-guest-layout>
    <div class="p-3">
    <div id="toast-notification" class="w-full fixed max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-300" role="alert">
        <div class="flex items-center mb-3">
            <span class="mb-1  text-sm font-semibold text-gray-900 dark:text-white">New notification</span>
            <button type="button" class="bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-700 hover:bg-gradient-to-r hover:from-pink-500 hover:to-yellow-500 ml-auto -mx-1.5 -my-1.5 bg-white text-white-400 hover:text-white-900 rounded-lg focus:ring-2 focus:ring-white-300 p-1.5 hover:bg-white-100 inline-flex h-8 w-8 dark:text-white-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-notification" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="flex items-center">
            <div class="relative inline-block shrink-0">
                <img class="w-12 h-12 rounded-full" src="{{asset('img/guest.png')}}" alt="Jese Leos image"/>
                <span class="absolute bottom-0 right-0 inline-flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
            </span>
            </div>
            <div class="ml-3 text-sm font-normal ">
                <h4 class="text-sm font-semibold text-gray-900 dark:text-white">Name Surname</h4>
                <div class="text-sm font-normal">finished their typeracer!</div>
                <span class="text-xs font-medium text-blue-600 dark:text-blue-500">completion</span>
            </div>
        </div>
    </div>
    </div>

    <!-- top bar -->
    <div class="flex justify-center">
        <div class="w-1/4">
        </div>

        <div class="flex mr-44 ml-auto w-2/5 pb-1">
            <a href="" class=" mr-96  px-2 py-1 text-white border border-slate-800 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-700 hover:bg-gradient-to-r hover:from-pink-500 hover:to-yellow-500 rounded">Start</a>
            <span class=" text-white pl-20 pr-10">WPM:</span>
            <span class="text-white">Accuracy: </span>
            <span class="text-white pl-80">Leaderboards</span>
        </div>

        <div class="w-1/5">

        </div>
    </div>

    <!-- midden en rechterblok -->
    <div class="flex justify-center pb-16">
        <div class="flex justify-center py-3 w-1/4">
        </div>

        <div class="flex flex-col mr-auto ml-auto w-2/5 h-96  ">
            <div class="bg-slate-700 h-full border border-gray-400 rounded-lg">
                
            </div>
        </div>
        <div class="flex mr-auto ml-auto w-52 h-96 bg-slate-700 border border-gray-400 rounded-lg w-1/6">
        </div>
    </div>
</x-guest-layout>

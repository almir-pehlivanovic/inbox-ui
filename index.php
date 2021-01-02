<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox UI</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="h-screen flex flex-col">
    
        <header class="flex flex-shrink-0">
            <div class="md:w-64 flex-shrink-0 px-5 py-3 bg-gray-800">
                <button class="w-full flex items-center">
                    <img class="w-8 h-8 rounded-full object-cover"
                        src="https://images.unsplash.com/photo-1510025987945-cf4ee9606b1b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=4&w=144&q=80" 
                        alt="">
                    <span class="hidden md:block ml-4 mr-2 text-sm font-medium text-white">Monica White</span>
                    <svg class="ml-2 md:ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex px-2 sm:px-6 items-center justify-between bg-gray-700">

                <nav>
                    <button class="block lg:hidden rounded-lg px-1 sm:px-3 py-2 mr-2 sm:mr-6 hover:bg-gray-600">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                    </button>
                    <div class="hidden lg:flex">
                        <a href="#" class="inline-block px-3 py-2 bg-gray-800 rounded-lg leading-none text-sm font-medium text-white">Mailbox</a>
                        <a href="#" class="ml-2 inline-block px-3 py-2 rounded-lg leading-none text-sm font-medium text-white hover:bg-gray-600">Customers</a>
                        <a href="#" class="ml-2 inline-block px-3 py-2 rounded-lg leading-none text-sm font-medium text-white hover:bg-gray-600">Reporting</a>
                        <a href="#" class="ml-2 inline-block px-3 py-2 rounded-lg leading-none text-sm font-medium text-white hover:bg-gray-600">Manage</a>
                    </div>
                </nav>
                <div class="flex items-center">
                    <div class="relative sm:w-44 md:w-64">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                        <input class="block pl-9 pr-4 py-2 w-full bg-gray-900 rounded-lg text-sm placeholder-gray-400 text-white transition duration-200 ease-in focus:bg-white focus:text-gray-900 focus:placeholder-gray-600 focus:outline-none" type="text" placeholder="Search">
                    </div>
                    <button class="ml-4 text-gray-300 hover:text-gray-100">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                          </svg>
                    </button>
                    <button class="ml-4 text-gray-300 hover:text-gray-100">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <div class="flex-1 flex overflow-hidden">
            <div class="md:w-64 p-6 bg-gray-100 overflow-y-auto">
                <nav>
                    <button class="hidden mobile-custom-button rounded-lg px-2 -ml-3 sm:px-3 py-2 hover:bg-gray-200">
                        <svg class="w-6 h-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </button>
                    <h2 class="mobile-custom-text text-xs font-semibold text-gray-600 uppercase tracking-wide">Mailboxes</h2>
                    <div class="mt-3">
                        <a href="#" class="font-bold description mt-2 -mx-3 px-3 py-2 flex items-center mobile-custom-justify justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                                <svg class="h-6 w-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="mobile-custom-text ml-2 text-gray-900">Description</span>
                            </span>
                        </a>

                        <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center mobile-custom-justify justify-between text-sm font-medium bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                                <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                <span class="mobile-custom-text ml-2 text-gray-900">Inbox</span>
                            </span>
                            <span class="w-9 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full mobile-custom-badge">
                                6
                            </span>
                        </a>
                        <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center mobile-custom-justify justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                                <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                                  </svg>
                                <span class="mobile-custom-text ml-2 text-gray-700">Flagged</span>
                            </span>
                        </a>
                        <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center mobile-custom-justify justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                                <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                  </svg>
                                <span class="mobile-custom-text ml-2 text-gray-700">Drafts</span>
                            </span>
                            <span class="w-9 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full mobile-custom-badge">
                                2
                            </span>
                        </a>
                        <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center mobile-custom-justify justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                                <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="mobile-custom-text ml-2 text-gray-700">Assigned</span>
                            </span>
                            <span class="w-9 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full mobile-custom-badge">
                                1
                            </span>
                        </a>
                        <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center mobile-custom-justify justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                                <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                <span class="mobile-custom-text ml-2 text-gray-700">Closed</span>
                            </span>
                        </a>
                        <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center mobile-custom-justify justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                                <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                  </svg>
                                <span class="mobile-custom-text ml-2 text-gray-700">Junk</span>
                            </span>
                        </a>
                    </div>

                    <h2 class="mobile-custom-text mt-8 text-xs font-semibold text-gray-600 uppercase tracking-wide">Folders</h2>
                    <div class="mobile-custom-text mt-4">
                        <a href="#" class="mt-4 block text-sm font-medium text-gray-700">Refunds</a>
                        <a href="#" class="mt-4 block text-sm font-medium text-gray-700">Discounts</a>
                        <a href="#" class="mt-4 block text-sm font-medium text-gray-700">Bugs</a>
                    </div>
                </nav>
            </div>
            <main class="flex flex-1 bg-gray-200">
                <div class="relative flex flex-col w-full sm:max-w-xs flex-grow border-l border-r border-gray-300 bg-gray-200">
                    <div class="flex-shrink-0 px-4 py-2 flex items-center justify-between border-b border-gray-300">
                        <button class="flex text-xs font-semibold text-gray-600">
                            Sorted by Date
                            <svg class="ml-1 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <button>
                            <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 overflow-y-auto">
                        <a href="#" class="px-6 pt-3 pb-4 block bg-indigo-50 border-l-4 border-indigo-500">
                            <div class="flex flex-wrap justify-between">
                                <span class="text-sm font-semibold text-gray-900">Joe Armnstrong</span>
                                <span class="text-sm text-gray-600">2 days ago</span>
                            </div>
                            <p class="text-sm text-gray-900">
                                Re: Student Discount?
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...
                            </p>
                        </a>
                        <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t hover:bg-indigo-50">
                            <div class="flex justify-between">
                                <span class="text-sm font-semibold text-gray-900">Gloria Robertson</span>
                                <span class="text-sm text-gray-600">2 days ago</span>
                            </div>
                            <p class="text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...
                            </p>
                        </a>
                        <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t hover:bg-indigo-50">
                            <div class="flex justify-between">
                                <span class="text-sm font-semibold text-gray-900">Gloria Robertson</span>
                                <span class="text-sm text-gray-600">2 days ago</span>
                            </div>
                            <p class="text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...
                            </p>
                        </a>
                        <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t hover:bg-indigo-50">
                            <div class="flex justify-between">
                                <span class="text-sm font-semibold text-gray-900">Gloria Robertson</span>
                                <span class="text-sm text-gray-600">2 days ago</span>
                            </div>
                            <p class="text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...
                            </p>
                        </a>
                        <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t hover:bg-indigo-50">
                            <div class="flex justify-between">
                                <span class="text-sm font-semibold text-gray-900">Gloria Robertson</span>
                                <span class="text-sm text-gray-600">2 days ago</span>
                            </div>
                            <p class="text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...
                            </p>
                        </a>
                        <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t hover:bg-indigo-50">
                            <div class="flex justify-between">
                                <span class="text-sm font-semibold text-gray-900">Gloria Robertson</span>
                                <span class="text-sm text-gray-600">2 days ago</span>
                            </div>
                            <p class="text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...
                            </p>
                        </a>
                        <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t hover:bg-indigo-50">
                            <div class="flex justify-between">
                                <span class="text-sm font-semibold text-gray-900">Gloria Robertson</span>
                                <span class="text-sm text-gray-600">2 days ago</span>
                            </div>
                            <p class="text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...
                            </p>
                        </a>
                        <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t hover:bg-indigo-50">
                            <div class="flex justify-between">
                                <span class="text-sm font-semibold text-gray-900">Gloria Robertson</span>
                                <span class="text-sm text-gray-600">2 days ago</span>
                            </div>
                            <p class="text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...
                            </p>
                        </a>
                        <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t hover:bg-indigo-50">
                            <div class="flex justify-between">
                                <span class="text-sm font-semibold text-gray-900">Gloria Robertson</span>
                                <span class="text-sm text-gray-600">2 days ago</span>
                            </div>
                            <p class="text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...
                            </p>
                        </a>
                    </div>
                </div> 
                <div class="flex-1 flex flex-col w-0">
                    <div class="relative shadow-md">
                        <div class="flex items-center flex-wrap justify-between bg-gray-100 px-5 py-4 border-b">
                            <div class="flex items-center">
                                <button>
                                    <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                    </svg>
                                </button>
                                <button class="ml-6">
                                    <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                </button>
                                <button class="ml-6">
                                    <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                                <button class="ml-6">
                                    <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                    </svg>
                                </button>
                                <button class="ml-6">
                                    <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button> 
                            </div>
                            <div class="flex items-center">
                                <button>
                                    <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                    </svg>
                                </button>
                                <button class="ml-4">
                                    <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between flex-wrap bg-white px-5 py-4">
                            <h3 class="text-xl text-gray-900 truncate">
                                Re: Student discount this is just a more text that has been added?
                                    
                            </h3>
                            <div class="ml-4 flex-shrink-0">
                                <span>#1428</span>
                                <span class="ml-2 text-sm font-semibold text-green-900 bg-green-200 rounded-full leading-none px-2 py-1">Active</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 flex-1 overflow-y-auto">
                        <article class="px-4 sm:px-10 pt-6 pb-8 bg-white rounded-lg shadow">
                            <div class="flex items-center justify-between flex-wrap">
                                <p class="text-lg font-semibold">
                                    <span class="text-gray-900">Joe Armnstrong</span>
                                    <span class="text-gray-600">wrote</span>
                                </p>
                                <div class="flex items-center flex-wrap">
                                    <span class="text-sm text-gray-600">
                                        Yesterday at 7:24 AM
                                    </span>
                                    <img class="mobile-custom-margin-image sm:ml-5 w-9 h-9 object-cover rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=3.5&w=144&q=80" alt="">
                                </div>
                            </div>
                            <div class="mt-6 text-gray-800 text-sm">
                                <p>Thanks so much!! Can't wait to try it out :)</p>
                            </div>
                        </article>
                        <article class="px-4 sm:px-10 pt-6 pb-8 mt-3 bg-white rounded-lg shadow">
                            <div class="flex items-center justify-between flex-wrap">
                                <p class="text-lg font-semibold">
                                    <span class="text-gray-900">Monica White</span>
                                    <span class="text-gray-600">wrote</span>
                                </p>
                                <div class="flex items-center flex-wrap">
                                    <span class="text-sm text-gray-600">
                                        Yesterday at 7:24 AM
                                    </span>
                                    <img class="mobile-custom-margin-image sm:ml-5 w-9 h-9 object-cover rounded-full" src="https://images.unsplash.com/photo-1510025987945-cf4ee9606b1b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=4&w=144&q=80" alt="">
                                </div>
                            </div>
                            <div class="mt-6 text-gray-800 text-sm">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                
                                <p class="mt-4">Viverra justo nec ultrices dui sapien eget. Adipiscing commodo elit at imperdiet. Vitae elementum curabitur vitae nunc turpis tincidunt id aliquet risus.</p>

                                <p class="mt-4 font-semibold text-gray-900">Monica White</p>
                                <p>Customer Service</p>
                            </div>
                        </article>
                        <article class="px-4 sm:px-10 pt-6 pb-8 mt-3 bg-white rounded-lg shadow">
                            <div class="flex items-center justify-between flex-wrap">
                                <p class="text-lg font-semibold">
                                    <span class="text-gray-900">Joe Armnstrong</span>
                                    <span class="text-gray-600">wrote</span>
                                </p>
                                <div class="flex items-center flex-wrap">
                                    <span class="text-sm text-gray-600">
                                        Yesterday at 7:24 AM
                                    </span>
                                    <img class="mobile-custom-margin-image sm:ml-5 w-9 h-9 object-cover rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=3.5&w=144&q=80" alt="">
                                </div>
                            </div>
                            <div class="mt-6 text-gray-800 text-sm">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                
                                <p class="mt-4">Viverra justo nec ultrices dui sapien eget. Adipiscing commodo elit at imperdiet. Vitae elementum curabitur vitae nunc turpis tincidunt id aliquet risus.</p>

                            </div>
                        </article>
                    </div>
                </div>
            </main>
        </div>
            
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="custom-modal fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!--
            Background overlay, show/hide based on modal state.

            Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
            Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <!--
            Modal panel, show/hide based on modal state.

            Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
            Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg  lg:max-w-xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                    Project Description
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500 mt-1">
                            This project is developed and represents the layout and plan of a web application control over the inbox. 
                            Project is developed to practice tailwind CSS and for the customers that want to implement this kind of design in their CRM, or want something similar for their system. 
                            The goal of this project is to show how it would look like an interface that manages user inboxes.  
                        </p>
                        <br>
                        <p class="text-sm text-gray-500 mt-1">
                            The application is currently not functional it's only designed and developed to show the message control interface.
                            The plan for future development is to make a fully functional application that will be used in all companies, institutions, faculties, for personal use, etc. 
                            Also, the plan is that it can be easily implemented in an already existing CRM. 
                        </p>  
                        <br>
                        <p class="text-sm text-gray-500 mt-1">
                            Tailwind CSS was used in making this project. The application is responsive for all devices. 
                            The development of a functional application would be further carried out using a Laravel framework.
                        </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="cancel-description mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
                </button>
            </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
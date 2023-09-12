<template>
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
          <NuxtLink to="#" class="inline-block px-3 py-2 bg-gray-800 rounded-lg leading-none text-sm font-medium text-white">Mailbox</NuxtLink>
          <NuxtLink to="#" class="ml-2 inline-block px-3 py-2 rounded-lg leading-none text-sm font-medium text-white hover:bg-gray-600">Customers</NuxtLink>
          <NuxtLink to="#" class="ml-2 inline-block px-3 py-2 rounded-lg leading-none text-sm font-medium text-white hover:bg-gray-600">Reporting</NuxtLink>
          <NuxtLink to="#" class="ml-2 inline-block px-3 py-2 rounded-lg leading-none text-sm font-medium text-white hover:bg-gray-600">Manage</NuxtLink>
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
</template>
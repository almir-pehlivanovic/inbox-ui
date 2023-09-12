<template>
  <div class="h-screen flex flex-col">
    <LazyHeader />
    <div class="flex-1 flex overflow-hidden">
      <div class="md:w-64 p-6 bg-gray-100 overflow-y-auto">
        <nav>
          <button class="hidden rounded-lg px-2 -ml-3 sm:px-3 py-2 hover:bg-gray-200">
            <svg class="w-6 h-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
          </button>
          <h2 class="text-xs font-semibold text-gray-600 uppercase tracking-wide">Mailboxes</h2>
          <div class="mt-3">
            <button @click="showHideDescription" to="#" class="font-bold mt-2 -mx-3 px-3 py-2 flex items-center justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
              <span class="inline-flex">
                <svg class="h-6 w-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-gray-900">Description</span>
              </span>
            </button>
            <NuxtLink to="#" class="mt-2 -mx-3 px-3 py-2 flex items-center gap-2 justify-between text-sm font-medium bg-gray-200 rounded-lg">
              <span class="inline-flex">
                <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
                <span class="ml-2 text-gray-900">Inbox</span>
              </span>
              <span class="w-9 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">
                6
              </span>
            </NuxtLink>
            <NuxtLink to="#" class="mt-2 -mx-3 px-3 py-2 flex items-center gap-2 justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
              <span class="inline-flex">
                <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                </svg>
                <span class="ml-2 text-gray-700">Flagged</span>
              </span>
            </NuxtLink>
            <NuxtLink to="#" class="mt-2 -mx-3 px-3 py-2 flex items-center gap-2 justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
              <span class="inline-flex">
                <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                <span class="ml-2 text-gray-700">Drafts</span>
              </span>
              <span class="w-9 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">
                2
              </span>
            </NuxtLink>
            <NuxtLink to="#" class="mt-2 -mx-3 px-3 py-2 flex items-center gap-2 justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
              <span class="inline-flex">
                <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-gray-700">Assigned</span>
              </span>
              <span class="w-9 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">
                1
              </span>
            </NuxtLink>
            <NuxtLink to="#" class="mt-2 -mx-3 px-3 py-2 flex items-center gap-2 justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
              <span class="inline-flex">
                <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-gray-700">Closed</span>
              </span>
            </NuxtLink>
            <NuxtLink to="#" class="mt-2 -mx-3 px-3 py-2 flex items-center gap-2 justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
              <span class="inline-flex">
                <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
                <span class="ml-2 text-gray-700">Junk</span>
              </span>
            </NuxtLink>
          </div>

          <h2 class="mt-8 text-xs font-semibold text-gray-600 uppercase tracking-wide">Folders</h2>
          <div class="mt-4">
            <NuxtLink to="#" class="mt-4 block text-sm font-medium text-gray-700">Refunds</NuxtLink>
            <NuxtLink to="#" class="mt-4 block text-sm font-medium text-gray-700">Discounts</NuxtLink>
            <NuxtLink to="#" class="mt-4 block text-sm font-medium text-gray-700">Bugs</NuxtLink>
          </div>
        </nav>
      </div>
      <main class="flex flex-1 bg-gray-200">
        <div class="relative flex flex-col w-full lg:max-w-xs flex-grow border-l border-r border-gray-300 bg-gray-200">
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
            <LazyChat v-for="(chat, index) in chats" :key="index" :chat="chat" />
          </div>
        </div> 
        <div class="hidden lg:flex flex-1 flex-col w-0">
          <div class="relative shadow-md">
            <LazyChatOptions />
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
          <div class="p-3 flex-1 overflow-y-auto space-y-3">
            <LazyChatMessage v-for="(message, index) in chatMessages" :key="index" :message="message" />
          </div>
        </div>
      </main>
    </div>
  </div>
  <!-- Modal state -->
  <div v-if="showModal" class="fixed z-10 inset-0 overflow-y-auto">
    <LazyModal @showHideDescription="showHideDescription" />
  </div>
</template>
<script setup>
const showModal = ref(true);
const showHideDescription = () => {
  showModal.value = !showModal.value
}
/**
 * demo data
 */
const chats = ref([
  { name: 'Joe Armnstrong', subject: 'Student Discount?', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...', days: '2' },
  { name: 'Gloria Robertson', subject: 'Refund', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...', days: '2' },
  { name: 'Gloria Robertson', subject: 'Refund', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...', days: '2' },
  { name: 'Gloria Robertson', subject: 'Refund', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...', days: '2' },
  { name: 'Gloria Robertson', subject: 'Refund', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...', days: '2' },
  { name: 'Gloria Robertson', subject: 'Refund', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...', days: '2' },
  { name: 'Gloria Robertson', subject: 'Refund', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...', days: '2' },
  { name: 'Gloria Robertson', subject: 'Refund', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...', days: '2' },
  { name: 'Gloria Robertson', subject: 'Refund', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ultricies...', days: '2' },
])

const chatMessages = ref([
  { name: 'Joe Armnstrong', proffession: null, replyDate: 'Yesterday at 7:24 AM', signature: false, message: "Thanks so much!! Can't wait to try it out :)", imageUrl: 'https://images.unsplash.com/photo-1463453091185-61582044d556?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=3.5&w=144&q=80'},
  { name: 'Monica White', proffession:'Customer Service', replyDate: 'Yesterday at 7:24 AM', signature: true, message: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra justo nec ultrices dui sapien eget. Adipiscing commodo elit at imperdiet. Vitae elementum curabitur vitae nunc turpis tincidunt id aliquet risus.', imageUrl: 'https://images.unsplash.com/photo-1510025987945-cf4ee9606b1b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=4&w=144&q=80'},
  { name: 'Joe Armnstrong', proffession: null, replyDate: 'Yesterday at 7:24 AM', signature: false, message: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra justo nec ultrices dui sapien eget. Adipiscing commodo elit at imperdiet. Vitae elementum curabitur vitae nunc turpis tincidunt id aliquet risus.', imageUrl: 'https://images.unsplash.com/photo-1463453091185-61582044d556?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=3.5&w=144&q=80'},
])
</script>
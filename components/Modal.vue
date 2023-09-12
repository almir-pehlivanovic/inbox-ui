<template>
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div @click="showHideDescription" class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
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
        <button @click="showHideDescription" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
          Cancel
        </button>
      </div>
    </div>
  </div>
</template>
<script setup>
const emit = defineEmits(['showHideDescription'])

const showHideDescription = () => {
  emit('showHideDescription')
}
</script>
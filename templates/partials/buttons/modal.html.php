<div
  id="button1" 
  x-data="{ 'showModal': false }"
  @keydown.escape="showModal = false"
>
    <!-- Trigger for Modal -->
    <button 
        type="button" 
        class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-600 hover:bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-400 border-t border-gray-200 rounded-md sm:mt-1 lg:mx-0 fold-bold focus:ring shadow-lg hover:shadow-none transition-all duration-300" 
        @click="showModal = true"><?= (isset($button_text)) ? $button_text : 'Donate Today!' ?>
    </button>
    <!-- / Trigger for Modal -->

    <!-- Modal -->
    <div
        class="fixed inset-0 w-full h-full z-50 bg-gray-300 duration-300 overflow-y-auto modal-window"
        x-cloak 
        x-show="showModal"
    >
        <!-- Modal inner -->
        <div
            class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
            @click.away="showModal = false"
            x-transition:enter="motion-safe:ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
        >
            <!-- Title / Close-->
            <div class="flex items-center justify-between px-12 py-5">
                <h2 class="text-gray-800 text-3xl font-semibold text-center"><?= (isset($form_title)) ? $form_title : 'Please complete this form' ; ?></h2>

                <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- / Title / Close-->
            
          <!-- Modal Body -->
          <div class="bg-gray-200 w-full flex flex-col items-center p-8"><?= partial('/forms/'.$form); ?></div>
          <!-- / Modal Body -->
        </div>
        <!-- / Modal inner -->

    </div>
    <!-- / Modal -->
</div>
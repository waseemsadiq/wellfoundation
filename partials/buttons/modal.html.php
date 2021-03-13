<!-- Modal button -->
<button 
  id="button<?= (isset($modal_window)) ? $modal_window : 1 ?>"  
  class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-2xl md:text-xl lg:text-base   font-bold text-white bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-600 hover:bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-400 border-t border-gray-200 rounded-md sm:mt-1 lg:mx-0 fold-bold focus:ring shadow-lg hover:shadow-none transition-all duration-300" 
  @click="showModal<?= (isset($modal_window)) ? $modal_window : 1 ?> = true"
>
  <?= (isset($button_text)) ? $button_text : 'Donate Today!' ?>
</button>
<!-- / Modal button -->

<!-- Modal Window -->
<div
  class="fixed inset-0 w-full h-full z-50 bg-gray-300 duration-300 overflow-y-auto"
  x-cloak 
  x-show="showModal<?= (isset($modal_window)) ? $modal_window : 1 ?>"
  x-transition:enter="transition duration-300"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition duration-300"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
>
<!-- / Modal Window -->

      <div class="py-3 sm:max-w-xl sm:mx-auto" 
      @click.away="showModal<?= (isset($modal_window)) ? $modal_window : 1 ?> = false"
      x-show="showModal<?= (isset($modal_window)) ? $modal_window : 1 ?>"
      x-transition:enter="transition transform duration-300"
      x-transition:enter-start="scale-0"
      x-transition:enter-end="scale-100"
      x-transition:leave="transition transform duration-300"
      x-transition:leave-start="scale-100"
      x-transition:leave-end="scale-0"
      >
        <!-- Modal Panel -->
        <div class="bg-white min-w-1xl flex flex-col rounded-xl shadow-lg">
          <!-- Modal Header -->
          <div class="px-12 py-5">
            <h2 class="text-gray-800 text-3xl font-semibold text-center"><?= (isset($form_title)) ? $form_title : 'Please complete this form' ; ?></h2>
          </div>
          <!-- / Modal Header -->
          <!-- Modal Body -->
          <div class="bg-gray-200 w-full flex flex-col items-center p-8">
            
            <?= import('/partials/forms/'.$form); ?>

          </div>
          <!-- / Modal Body -->
          <!-- Cancel Button -->
          <div class="h-20 flex items-center justify-center cursor-pointer" @click="showModal<?= (isset($modal_window)) ? $modal_window : 1 ?> = false">
            <span class="text-gray-600">Maybe later</span>
          </div>
          <!-- / Cancel Button -->
        </div>
        <!--/ Modal Panel -->
      </div>
</div>
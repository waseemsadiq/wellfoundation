<!-- Modal button -->
<button 
  id="button<?= (isset($modal_window)) ? $modal_window : 1 ?>"  
  class="button<?= (isset($button_class)) ? ' ' . $button_class : '' ?> <?= (isset($button_colour)) ? 'bg-'.$button_colour.'-600' : 'bg-indigo-600' ?> <?= (isset($button_colour)) ? 'hover:bg-'.$button_colour.'-400' : 'hover:bg-indigo-400' ?>" 
  @click="showModal<?= (isset($modal_window)) ? $modal_window : 1 ?> = true"
>
  <?= (isset($button_text)) ? $button_text : 'Donate Today!' ?>
</button>
<!-- / Modal button -->

<!-- Modal Window -->
<div
  class="fixed inset-0 w-full h-full z-50 bg-gray-300 duration-300 overflow-y-auto modal-window"
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
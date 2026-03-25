<a
  href="/forms/<?= $form ?>"
  class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-600 hover:bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-400 border-t border-gray-200 rounded-md sm:mt-1 lg:mx-0 fold-bold focus:ring shadow-lg hover:shadow-none transition-all duration-300"
>
  <?= (isset($button_text)) ? $button_text : 'Donate Today!' ?>
</a>

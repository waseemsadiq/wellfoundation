<div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
  <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
    <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
      <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
        <div class="z-50">
          <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
              </path>
            </svg>
          </button>
        </div>
        <div class="p-2">
          <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
          <p x-text="imgModalDesc" class="text-center text-white"></p>
        </div>
      </div>
    </div>
  </template>
</div>

<? if(isset($class)): ?>
  <? $class = 'lazyload gallery '.implode(' ', (array) $class); ?>
<? else : ?>
  <? $class = 'lazyload gallery block object-cover object-center w-full h-full rounded-lg  tns-lazy' ?>
<? endif ?>
<? /* TODO: Use static asset routing when available */ ?>
<? if(isset($folder)):

  $folder = str_replace('images://', PAGES_SITE_ROOT.'/images/', $folder);

  if(is_dir($folder)):
    $images = glob($folder.'/*.{jpg,jpeg,png,gif,svg}', GLOB_BRACE);
    array_walk($images, function(&$value, $key) {
      $value = str_replace(PAGES_SITE_ROOT.'/images/', 'images://', $value);
  		//var_dump($value);exit;
    });

  endif;

endif ?>

<? /* Shuffle the images */ ?>
<? if(isset($shuffle) && $shuffle):
  shuffle($images);
endif ?>

<? $images = ($limit) ? array_slice((array)$images, 0, $limit) : (array)$images ; ?>

<? if(isset($layout) && $layout=="grid"):  ?>

<? $mdColumns = ($columns) ? 'md:w-1/'.$columns : '' ; ?>

  <div x-data="{}" class="flex flex-wrap -m-1 md:-m-2">
  	<? foreach($images as $i => $image): ?>
  	<div class="flex flex-wrap w-1/2 <?= $mdColumns ?>">
  		<div class="w-full max-h-56 p-1 md:p-2">
        <a @click="$dispatch('img-modal', {  imgModalSrc: '<?= $image ?>', imgModalDesc: '' })" class="cursor-pointer">
  			 <img class="<?= $class ?>" alt="Randomly generated image showing completed Well Foundation project" src="<?= $image ?>" data-lazyload="progressive,inline">
        </a>
  		</div>
  	</div>
  	<? endforeach; ?>
  </div>


<? else:  ?>

  <? foreach($images as $i => $image): ?>

    <?  
    $svg = array('svg');
    $ext = pathinfo($image, PATHINFO_EXTENSION);
        if (in_array($ext, $svg)) :?>
      <?= $image; ?>
    <? else:  ?>
      <img class="<?= $class ?>" src="<?= $image ?>" data-lazyload="progressive,inline" alt="Randomly generated image showing completed Well Foundation project">
    <? endif; ?>

  <? endforeach; ?>

<? endif; ?>
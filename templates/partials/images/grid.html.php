<? if(isset($class)): ?>
  <? $class = 'lazyload gallery '.implode(' ', (array) $class); ?>
<? else : ?>
  <? $class = 'lazyload gallery' ?>
<? endif ?>
<? $images = []; ?>
<? /* TODO: Use static asset routing when available */ ?>
<? if(isset($folder)):

  if(strpos($folder, 'images://') !== false) {
    $folder = str_replace('images://', PAGES_SITE_ROOT.'/images/', $folder);
  } else {
    $folder = JPATH_ROOT.'/'.$folder;
  }

  if(is_dir($folder)):
    $images = glob($folder.'/*.{jpg,jpeg,png,gif,svg}', GLOB_BRACE);
    array_walk($images, function(&$value, $key) {
      $value = str_replace(JPATH_ROOT.'/', '', $value);
    });

  endif;

endif ?>

<? /* Shuffle the images */ ?>
<? if(isset($shuffle) && $shuffle):
  shuffle($images);
endif ?>

<? $images = ($limit) ? array_slice((array)$images, 0, $limit) : (array)$images ; ?>

<? $mdColumns = ($columns) ? 'md:w-1/'.$columns : '' ; ?>

<div class="flex flex-wrap -m-1 md:-m-2">
	<? foreach($images as $i => $image): ?>
	<div class="flex flex-wrap w-1/2 <?= $mdColumns ?>">
		<div class="w-full max-h-56 p-1 md:p-2">
			<img class="block object-cover object-center w-full h-full rounded-lg tns-lazy" src="<?= $image ?>" alt="Randomly generated image showing completed Well Foundation project" data-lazyload="progressive,inline">
		</div>
	</div>
	<? endforeach; ?>
</div>
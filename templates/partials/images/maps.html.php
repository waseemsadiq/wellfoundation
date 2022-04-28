<? if(isset($class)): ?>
  <? $class = 'lazyload gallery '.implode(' ', (array) $class); ?>
<? else : ?>
  <? $class = 'lazyload gallery' ?>
<? endif ?>
<? 
  $folder = 'images://maps'; 
  $shuffle = true;
?>
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

<? //$images = ($limit) ? array_slice((array)$images, 0, $limit) : (array)$images ; ?>

<div class="grid grid-cols-2 gap-16 mb-16 text-center lg:grid-cols-6">
  <? foreach($images as $i => $image):?>
  <div class="flex flex-col items-center justify-center">
    <img class="block object-contain h-32 tns-lazy" src="<?= $image ?>" alt="A map of a country supported by The Well Foundation food programme" data-lazyload="progressive,inline">
    <p class="block"><?= ucwords(str_replace('-',' ',basename($image, ".svg"))); ?></p>
  </div>
<? endforeach; ?>
</div>

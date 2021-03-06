<? if(isset($class)): ?>
  <? $class = 'lazyload gallery '.implode(' ', (array) $class); ?>
<? else : ?>
  <? $class = 'lazyload gallery' ?>
<? endif ?>

<div class="grid grid-cols-2 gap-16 mb-16 text-center lg:grid-cols-<?= (isset($columns))?$columns:2;?>">
	<? foreach(data($data)->shuffle() as $item) : ?>
		<div class="flex flex-col content-start text-center">
			<img class="object-contain h-32 tns-lazy" src="images://<?= $data ?>/<?= $item->image ?>" alt="Map of <?= $item->name ?>" data-lazyload="progressive,inline">
			<h2 class="my-6 text-lg font-black leading-tight text-gray-900 sm:text-2xl"><?= $item->name; ?></h2>
			<p class="text-gray-500"><?= $item->description; ?></p>
		</div>
	<? endforeach; ?>
</div>
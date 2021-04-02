<? if(isset($class)): ?>
  <? $class = 'lazyload gallery '.implode(' ', (array) $class); ?>
<? else : ?>
  <? $class = 'lazyload gallery' ?>
<? endif ?>

<div class="grid grid-cols-2 gap-16 mb-16 text-center lg:grid-cols-6">
	<? foreach(data($data)->shuffle() as $item) : ?>
		<div class="flex flex-col items-center justify-center">
			<img class="block object-contain h-32 tns-lazy" src="images://<?= $data ?>/<?= $item->image ?>" alt="Map of <?= $item->name ?>" data-lazyload="progressive,inline">
			<p class="block mt-2"><?= $item->name; //var_dump($item->image); ?></p>
		</div>
	<? endforeach; ?>
</div>
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

			<!-- Cart Button -->
			<button class="snipcart-add-item bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded"
				data-item-id="<?= $item->sku; ?>"
				data-item-price="<?= $item->price; ?>"
				data-item-url="<?= url(); ?>"
				data-item-description="<?= $item->description; ?>"
				data-item-image="images://snipcart/<?= $item->image; ?>"
				data-item-name="<?= $item->name; ?>"
				data-item-custom1-name="Which area would you like to donate towards?"
				data-item-custom1-options="<?= $item->options; ?>">
				Add to cart
			</button>
			<!-- End Cart Button -->
		</div>
	<? endforeach; ?>
</div>
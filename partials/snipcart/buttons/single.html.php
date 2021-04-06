<button class="snipcart-add-item bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded"
	data-item-id="<?= $item->sku; ?>"
	data-item-price="?= $item->price; ?>"
	data-item-url="<?= url(); ?>"
	data-item-description="<?= $item->description; ?>"
	data-item-image="images://snipcart/<?= $item->image; ?>"
	data-item-name="<?= $item->name; ?>">
	Add to cart
</button>
<?
	$button_colour = 'green';
	$button_text = (isset($button_text)) ? $button_text : 'Donate today!';
	$num_str =  (isset($num_str)) ? $num_str : '1';
?>

<button class="snipcart-add-item relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base   font-bold text-white bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-600 hover:bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-400 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 lg:mx-0 fold-bold"
	data-item-id="<?= $item->slug; ?>"
	data-item-price="<?= $item->price; ?>"
	data-item-url="<?= url(); ?>"
	data-item-description="<?= $item->description; ?>"
	data-item-image="images://<?= $item->image; ?>"
	data-item-name="<?= $item->title; ?>"
	<? if(isset($item->areas)): ?>
	data-item-custom1-name="Which area would you like to donate to?"
	data-item-custom1-options="<?= $item->areas; ?>"
	<? else: ?>
	data-item-stackable="always" 
	<? endif; ?>
	data-item-custom2-name="Gift note"
	data-item-custom3-name="Send us a message with your donation"
	data-item-custom3-type="textarea"
	data-item-custom4-name="Can we claim Giftaid on your donation?"
	data-item-custom4-type="checkbox"
	data-item-custom67-type="readonly"
	data-item-custom67-name="Why we ask for Giftaid"
	data-item-custom67-value="This online payment facility costs us 6.5% of the total, we use a portion of the accumulated Giftaid to pay these fees."
	>
	<?= $button_text; ?>
</button>
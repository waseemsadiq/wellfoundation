<?
	$button_colour = 'green';
	$button_text = (isset($button_text)) ? $button_text : 'Donate today!';
	$payment_interval = (isset($payment_interval)) ? $payment_interval : 'Month';
	$payment_interval_count = (isset($payment_interval_count)) ? $payment_interval_count : '1';
	$payment_trial = (isset($payment_trial) && isset($payment_trial_price)) ? 'data-item-payment-trial="' . $payment_trial_price . '"' : '';

	//var_dump($item->product_type);
?>
<button class="snipcart-add-item <?= (isset($button_colour)) ? 'bg-' . $button_colour . '-600' : 'bg-indigo-600' ?> <?= (isset($button_colour)) ? 'hover:bg-' . $button_colour . '-400' : 'hover:bg-indigo-400' ?>"
	data-item-name="<?= $item->title; ?>"
	data-item-id="<?= $item->slug; ?>"
	data-item-url="<?= url(); ?>"
	data-item-price="<?= $item->price; ?>"
	<? if(isset($item->product_type) && $item->product_type === 'subscription'): ?>
	data-item-payment-interval="<?= $payment_interval; ?>"
	data-item-payment-interval-count="<?= $payment_interval_count; ?>"
	<?= $payment_trial; ?>
	<? endif; ?>
	data-item-image="images://<?= $item->image; ?>"
	data-item-description="<?= $item->description; ?>"
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

<style type="tailwind/css">
.snipcart-add-item {
	@apply relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white border-t border-gray-200 rounded-md shadow-xl sm:mt-1 lg:mx-0 
}
</style>
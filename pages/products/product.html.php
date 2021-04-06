---
route: products/[:slug]
layout: products/snipcart
collection:
    extend: products
metadata:
    'og:type': article
visible: false
---
<section class="relative px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
	<div class="container flex flex-col items-center h-full max-w-7xl mx-auto">
		<h1 class="w-full max-w-4xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 mb-8">
			<?= collection()->title ?>	
		</h1>
		<p class="flex items-center"> 
			<button class="snipcart-checkout w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-600 hover:bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-400 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 lg:mx-4 fold-bold">
				Items in cart: <span class="snipcart-items-count"></span> (<span class="snipcart-total-price"></span>)
			</button>
			<button class="snipcart-customer-signin w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-600 hover:bg-<?= (isset($button_colour)) ? $button_colour : 'indigo' ?>-400 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 lg:mx-4 fold-bold">
				My account
			</button>
			<?= import('/partials/snipcart/buttons/variants', [ 'item' => collection() ]); ?>
		</p>
	</div>
</section>

<section class="relative px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
	<div class="container flex flex-col items-center h-full max-w-7xl mx-auto">
		
	
	</div>
</section>
---
route: products/[digit:page]?
layout: products/snipcart
summary: Well Foundation Products 
image: images://food-cover.jpg
visible: false
collection:
    model: airtable
    config:
        url: https://api.airtable.com/v0/appBkb3dw8veD8BO3/water
        api_key: keyziFXaehsfT8Rzk
        identity_key: slug
---
<section class="relative px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
    <div class="container flex flex-col items-center h-full max-w-7xl mx-auto">
        <h1 class="w-full max-w-4xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 mb-8">
            Shop for good
        </h1>
        <div class="flex items-center max-w-7xl mx-auto">
            <?  foreach(collection() as $product): ?>
                <a class="mx-8" href="/products/<?= $product->slug ?>"><?= $product->title ?></a>
            <? endforeach; ?>
        </div>
        <div class="flex flex-col items-center max-w-7xl mx-auto">
            <? foreach(collection() as $item): ?>
                <?= import('/partials/snipcart/buttons/variants', [ 'item' => $item, 'columns' => 4 ]); ?>
            <? endforeach; ?>
        </div>
    </div>
</section>

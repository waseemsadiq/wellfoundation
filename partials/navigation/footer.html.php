<div class="flex flex-col w-full p-0 font-medium text-left text-gray-700">
    <p class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">Projects</p>
    <p class="flex flex-col ml-3">
        <? foreach (collection('pages', ['folder' => $folder ?? '.', 'level' => 3,  'recurse' => 'true', 'filter' => ['visible' => 'true']]) as $item) { ?>
        <a <? if($item->route) : ?>href="<?= route($item->route); ?>"<? else: ?>rel="nofollow" href="<?= $item->url ?>"<? endif ?> class="block text-sm py-2 leading-none rounded border-white hover:border-transparent text-gray-500 hover:text-indigo-500 hover:bg-white mt-4 md:mt-0">
            <?= $item->name; ?>
        </a>
        <? } ?>
    </p>
</div>
<div class="prefetch flex flex-col w-full p-0 font-medium text-left text-gray-700">
    <p class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">Get Involved</p>
    <p class="flex flex-col ml-3">
        <? foreach (data('navigation/footer')->getinvolved as $item) { ?>
        <a <? if($item->route) : ?>href="<?= route($item->route); ?>"<? else: ?>rel="nofollow" href="<?= $item->url ?>"<? endif ?> class="block text-sm py-2 leading-none rounded border-white hover:border-transparent text-gray-500 hover:text-indigo-500 hover:bg-white mt-4 md:mt-0">
            <?= $item->title; ?>
        </a>
        <? } ?>
    </p>
</div>
<div class="prefetch flex flex-col w-full p-0 font-medium text-left text-gray-700">
    <p class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">Legal & Misc</p>
    <p class="flex flex-col ml-3">
		<? foreach (data('navigation/footer')->legal as $item) { ?>
		<a <? if($item->route) : ?>href="<?= route($item->route); ?>"<? else: ?>rel="nofollow" href="<?= $item->url ?>"<? endif ?> class="block text-sm py-2 leading-none rounded border-white hover:border-transparent text-gray-500 hover:text-indigo-500 hover:bg-white mt-4 md:mt-0">
			<?= $item->title; ?>
		</a>
		<? } ?>
    </p>
</div>
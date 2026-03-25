<div class="flex flex-col w-full p-0 font-medium text-left text-gray-700">
    <p class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">Projects</p>
    <p class="flex flex-col ml-3">
        <? $pages = collection('pages', ['folder' => $folder ?? '/', 'level' => 1, 'recurse' => 'true'], ['visible' => 'neq:false'])  ?>
        <? foreach ($pages as $page) :?>
        <a href="<?= route($page); ?>" class="block text-sm py-2 leading-none rounded border-white hover:border-transparent text-gray-500 hover:text-indigo-700 hover:bg-white mt-4 md:mt-0">
            <?= $page->name; ?>
        </a>
        <? endforeach ?>
    </p>
</div>
<div class="prefetch flex flex-col w-full p-0 font-medium text-left text-gray-700">
    <p class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">Get Involved</p>
    <p class="flex flex-col ml-3">
        <? foreach (data('navigation/footer')->getinvolved as $item) : ?>
        <a href="<?= ($item->route) ? $item->route :  $item->url; ?>" class="block text-sm py-2 leading-none rounded border-white hover:border-transparent text-gray-500 hover:text-indigo-700 hover:bg-white mt-4 md:mt-0">
            <?= $item->title; ?>
        </a>
        <? endforeach ?>
    </p>
</div>
<div class="prefetch flex flex-col w-full p-0 font-medium text-left text-gray-700">
    <p class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">Legal & Misc</p>
    <p class="flex flex-col ml-3">
		<? foreach (data('navigation/footer')->legal as $item) : ?>
		<a href="<?= ($item->route) ? $item->route :  $item->url; ?>" class="block text-sm py-2 leading-none rounded border-white hover:border-transparent text-gray-500 hover:text-indigo-700 hover:bg-white mt-4 md:mt-0">
			<?= $item->title; ?>
		</a>
		<? endforeach ?>
    </p>
</div>
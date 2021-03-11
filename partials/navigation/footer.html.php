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
<div class="flex flex-col w-full p-0 font-medium text-left text-gray-700">
    <p class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">Get Involved</p>
    <p class="flex flex-col ml-3">
        <? foreach (data('navigation/footer')->getinvolved as $item) { ?>
        <a <? if($item->route) : ?>href="<?= route($item->route); ?>"<? else: ?>rel="nofollow" href="<?= $item->url ?>"<? endif ?> class="block text-sm py-2 leading-none rounded border-white hover:border-transparent text-gray-500 hover:text-indigo-500 hover:bg-white mt-4 md:mt-0">
            <?= $item->title; ?>
        </a>
        <? } ?>
    </p>
</div>
<div class="flex flex-col w-full p-0 font-medium text-left text-gray-700">
    <p class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">Legal & Misc</p>
    <p class="flex flex-col ml-3">
		<? foreach (data('navigation/footer')->legal as $item) { ?>
		<a <? if($item->route) : ?>href="<?= route($item->route); ?>"<? else: ?>rel="nofollow" href="<?= $item->url ?>"<? endif ?> class="block text-sm py-2 leading-none rounded border-white hover:border-transparent text-gray-500 hover:text-indigo-500 hover:bg-white mt-4 md:mt-0">
			<?= $item->title; ?>
		</a>
		<? } ?>
    </p>
</div>
<div class="flex flex-col w-full text-gray-700">
    <div class="inline-block px-3 py-2 mt-5 font-bold text-gray-800 uppercase md:mt-0">Follow Us</div>
    <div class="flex justify-start pl-4 mt-2">
        <!-- Facebook icon-->
        <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
            target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/wellfoundation">
            <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
            </svg>
        </a>
        <!-- /Facebook icon-->
        <!-- Twitter icon-->
        <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
            target="_blank" rel="noopener noreferrer" href="https://twitter.com/wellfoundation/">
            <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" />
            </svg>
        </a>
        <!-- /Twitter icon-->
        <!-- Instagram icon-->
        <a class="flex items-center block text-gray-400 no-underline hover:text-gray-600"
            target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/wellfoundation/">
            <svg viewBox="0 0 512.00096 512.00096" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                <path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"/>
                <path d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"/><path d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"/>
            </svg>
        </a>
        <!-- /Instagram icon-->
    </div>
</div>
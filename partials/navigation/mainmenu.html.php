<? $pages = collection('pages', ['folder' => $folder ?? '.', 'level' => 3,  'recurse' => 'true', 'filter' => ['visible' => 'true']])  ?>
<? foreach ($pages as $page) :?>
<a 
	href="<?= route($page); ?>" 
	class="
	block 
	md:inline-block 
	text-base 
	px-4 
	py-2 
	leading-none 
	rounded 
	border-white 
	hover:border-transparent 
	hover:text-indigo-700 
	hover:bg-white 
	mt-4 
	md:mt-0
	<?= strpos(page()->path, $page->path) === 0 ? ' text-indigo-700 hover:text-gray-500 is-active' : '' ?>">
	<?= $page->name; ?>
</a>
<? endforeach ?>
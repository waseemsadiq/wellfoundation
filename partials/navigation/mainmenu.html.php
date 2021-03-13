<? $pages = collection('pages', ['folder' => $folder ?? '.', 'level' => 3,  'recurse' => 'true', 'filter' => ['visible' => 'true']])  ?>
<? foreach ($pages as $page) :?>
<a  href="<?= route($page); ?>" class="block md:inline-block text-2xl md:text-xl lg:text-base   px-4 py-2 leading-none rounded border-white hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 md:mt-0"><?= $page->name; ?></a>
<? endforeach ?>
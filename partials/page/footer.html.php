<footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
    <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
        <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left">
            <a href="/" class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start text-gray-500 no-underline hover:text-gray-600">
                <?= import('/partials/logos/wellfoundation'); ?>
            </a>
            <p class="mt-6 mr-4 text-base text-gray-500">Fresh, clean drinking water for all! It's a simple ask.
            </p>
        </div>
        <div class="block w-full pl-10 mt-6 text-sm lg:w-3/4 sm:flex lg:mt-0">
            <?= import('/partials/navigation/footer'); ?>
        </div>
    </div>
    <div class="pt-4 pt-6 mt-10 text-center text-sm text-gray-400 border-t border-gray-100">
        <p>&copy;<?= date('now', 'Y'); ?> <?= config()->site->name ?>. <?= config()->site->footer_address ?></p>
        <p class="text-xs mt-3">built by <a href="<?= config()->site->built_by_link ?>" target="_blank"><?= config()->site->built_by ?></a> with <a href="https://github.com/joomlatools/joomlatools-pages/" target="_blank">Joomlatools Pages</a>. </p>
    </div>
</footer>
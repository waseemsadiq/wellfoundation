---
@layout: default
@route: /forms/[:slug]
visible: false
metadata:
    og:type: false
    robots: [none]
---
<?php
$slug = basename(rtrim(strtok($_SERVER['REQUEST_URI'], '?'), '/'));

try {
    $exists = KObjectManager::getInstance()->getObject('ext:formman.model.forms')->slug($slug)->fetch()->count();
} catch (\Throwable $e) {
    $exists = 0;
}

if (!$exists) {
    \Joomla\CMS\Factory::getApplication()->redirect('/404', 302);
    return;
}
?>


<div class="relative px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 lg:pb-40 lg:px-20 xl:py-40 xl:px-20">
  <div class="container flex flex-col h-full px-8 lg:px-20">
    <?= form($slug) ?>
  </div>
</div>


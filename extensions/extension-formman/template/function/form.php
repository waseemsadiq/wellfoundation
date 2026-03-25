<?php
return function(string $slug)
{
    try {
        $view = $this->getObject('com://site/formman.view.form.html');
        return $view->slug($slug)->render();
    } catch (\Throwable $e) {
        // Unknown slug or disabled form — return a comment, don't break the page
        return '<!-- form("' . htmlspecialchars($slug, ENT_QUOTES) . '"): '
             . htmlspecialchars($e->getMessage(), ENT_QUOTES) . ' -->';
    }
};

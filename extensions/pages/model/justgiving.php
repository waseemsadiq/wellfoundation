<?php
class ExtPagesModelJustgiving extends ComPagesModelWebservice
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append([
            'data_path'    => 'fundraisingPages/fundraisingPage',
            'identity_key' => 'pageId',
            'cache_path'   => $this->getObject('com://site/pages.config')->getSitePath('cache') . '/justgiving',
        ]);
        parent::_initialize($config);
    }
}
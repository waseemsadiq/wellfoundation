<?php
class ExtFormmanModelForms extends ComPagesModelDatabase
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append([
            'table'        => 'formman_forms',
            'identity_key' => 'slug',
        ]);

        parent::_initialize($config);
    }
}

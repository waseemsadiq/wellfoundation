<?php
return function(array $config = [])
{
    $defaults = (array) KObjectConfig::unbox($this->getObject('pages.config')->get('justgiving', []));
    $params   = array_merge($defaults, $config);

    $model = $this->getObject('ext:justgiving.model.justgiving');
    foreach ($params as $key => $value) {
        $model->$key($value);
    }

    return $model->fetch();
};

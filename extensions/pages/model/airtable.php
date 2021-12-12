<?php
class ExtPagesModelAirtable extends ComPagesModelWebservice
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append([
            'api_key'    => null,
            'data_path'   => 'records',
            'cache_path'  =>  $this->getObject('com://site/pages.config')->getCachePath().'/airtable',
        ]);
       
        parent::_initialize($config);
    }
    
    public function getHeaders($cache = true)
    {
        $headers = parent::getHeaders($cache);
        $headers['Authorization'] = 'Bearer '.$this->getConfig()->api_key;

        return $headers;
    }
    
    public function fetchData($count = false)
    {
        $data = parent::fetchData();
        array_walk($data, function(&$item)
        {
            $item += $item['fields'];
            unset($item['fields']);
        });
        
        //Check if the database has a lastModified column
        if(!$this->_hash_key && array_key_exists('lastModified', $data[0])) {
            $this->_hash_key = array('lastModified');
        }
        
        return $data;
    }
}
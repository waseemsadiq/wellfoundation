<?php
class ExtPagesModelJustgiving extends ComPagesModelWebservice
{
    public function __construct(KObjectConfig $config)
    {
        parent::__construct($config);
        $this->getState()
            ->insertRequired('jg_appid', 'alnum')
            ->insertRequired('jg_email', 'email')
            ->insertRequired('jg_charityid', 'int')
            ->insertRequired('jg_staging', 'boolean', false);
    }
    protected function _initialize(KObjectConfig $config)
    {
        $config->append([
            'data_path'    => 'fundraisingPages/fundraisingPage',
            'identity_key' => 'slug',
            'cache_path'   => $this->getObject('com://site/pages.config')->getSitePath('cache') . '/justgiving',
            'url'          => 'https://{host}/{jg_appid}/v1/account/{jg_email}/pages?charityid={jg_charityid}'
        ]);
        parent::_initialize($config);
    }
    public function getUrl(array $variables = array())
    {
        if($variables['jg_staging']) {
        	$variables['host'] = 'api.staging.justgiving.com'; 
        } else {
            $variables['host'] = 'api.justgiving.com';
        }
        return KHttpUrl::fromTemplate($this->_url, $variables);
    }
    public function fetchData($count = false)
    {
        $data = parent::fetchData();
        $slugs = array();
        array_walk($data, function(&$item) use(&$slugs)
        {
            $item['slug'] = $this->getObject('filter.factory')
                ->createFilter('slug')
                ->sanitize($item['eventName']);
            $i = 0;
            while(in_array( $item['slug'].'-'.$i, $slugs)) {
                $i++;
            }
            $slugs[] = $item['slug'].'-'.$i;
            if($i > 0) {
                $item['slug'] = $item['slug'].'-'.$i;
            }
        });
        return $data;
    }
}
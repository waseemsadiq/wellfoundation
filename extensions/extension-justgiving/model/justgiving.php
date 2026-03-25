<?php
class ExtJustgivingModelJustgiving extends ComPagesModelWebservice
{
    public function __construct(KObjectConfig $config)
    {
        parent::__construct($config);

        $this->getState()
            ->insertRequired('jg_appid',    'alnum')
            ->insertRequired('jg_email',    'email')
            ->insertRequired('jg_charityid','int')
            ->insertRequired('jg_staging',  'boolean', false);
    }

    protected function _initialize(KObjectConfig $config)
    {
        $config->append([
            'data_path'    => '',
            'identity_key' => 'slug',
            'url'          => 'https://{host}/{jg_appid}/v1/account/{jg_email}/pages?charityid={jg_charityid}',
            'headers'      => ['x-application-id' => '{jg_appid}', 'Accept' => 'application/json'],
        ]);

        parent::_initialize($config);
    }

    public function getUrl(array $variables = array())
    {
        $variables['host'] = $variables['jg_staging']
            ? 'api.staging.justgiving.com'
            : 'api.justgiving.com';

        return KHttpUrl::fromTemplate($this->_url, $variables);
    }

    public function getHeaders($cache = true)
    {
        $headers = parent::getHeaders($cache);

        // Resolve {jg_appid} placeholder in header values
        $state = $this->getState()->getValues();
        foreach ($headers as $name => $value) {
            $headers[$name] = preg_replace_callback('/\{(\w+)\}/', function ($m) use ($state) {
                return $state[$m[1]] ?? $m[0];
            }, (string) $value);
        }

        return $headers;
    }

    public function fetchData($count = false)
    {
        $cacheFile = JPATH_SITE . '/sites/thewell.foundation/cache/jg_pages_list.json';
        $ttl       = 3600;

        if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $ttl) {
            return json_decode(file_get_contents($cacheFile), true) ?: [];
        }

        $data = parent::fetchData();

        array_walk($data, function (&$item) {
            $item['slug'] = basename($item['pageShortName']);
        });

        @file_put_contents($cacheFile, json_encode($data));

        return $data;
    }
}

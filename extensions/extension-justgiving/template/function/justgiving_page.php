<?php
return function(string $pageShortName)
{
    $cacheFile = JPATH_SITE . '/sites/thewell.foundation/cache/jg_page_' . md5($pageShortName) . '.json';
    $ttl       = 3600;

    if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $ttl) {
        return json_decode(file_get_contents($cacheFile));
    }

    $cfg   = (array) KObjectConfig::unbox($this->getObject('pages.config')->get('justgiving', []));
    $appid = $cfg['jg_appid'];
    $ctx   = stream_context_create(['http' => ['header' => "x-application-id: {$appid}\r\nAccept: application/json\r\n"]]);
    $json  = @file_get_contents("https://api.justgiving.com/{$appid}/v1/fundraising/pages/{$pageShortName}", false, $ctx);

    if (!$json) {
        return null;
    }

    @file_put_contents($cacheFile, $json);

    return json_decode($json);
};

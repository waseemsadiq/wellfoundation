<?= helper('behavior.prefetcher', [
    'selector' => '.prefetch',
    'debug'    =>  debug()
]) ?>
<!DOCTYPE html>
<html xmlns:og="http://opengraphprotocol.org/schema/" class="h-full" lang="<?= language() ?>" dir="<?= direction() ?>" vocab="http://schema.org/">
<head>
    <meta charset="utf-8"/>
    <base href="<?= url(); ?>" />

    <ktml:title>
    <ktml:meta>
    <ktml:link>
    <ktml:style>
    <ktml:script>

    <title><?= title() ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="apple-mobile-web-app-title" content="Well Foundation"/>
        
    <link href="theme://images/favicon.ico" rel="shortcut icon" type="image/ico" />
    <link href="theme://images/favicon.png" rel="icon" type="image/png" />
    <link href="theme://images/xtouch-icon.png" rel="apple-touch-icon" />
    <link href="theme://images/safari-pinned-tab.svg" rel="mask-icon" />
    <link href="theme://manifest.json" rel="manifest" />

    <meta name="msapplication-TileColor" content="#51cc41"/>
    <meta name="msapplication-config" content="theme://browserconfig.xml"/>
    <meta name="theme-color" content="#51cc41"/>
        
    <ktml:style src="theme://css/output.min.css" rel="preload" as="style" />

    <link rel="preconnect" href="https://cdn.jsdelivr.net/"  />
    <link rel="preconnect" href="https://unpkg.com/"  />

    <ktml:script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer="defer" />
    <ktml:script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js"  defer="defer" module="nomodule" />

    <? if (config()->ga_code): ?>
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?= config()->ga_code ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?= config()->ga_code ?>');
        </script>
        <? if (page()->name =='Thank You'): ?>
        <script>gtag('event', 'conversion', {'send_to': 'AW-408347838/kos0CJKKx_oBEL7J28IB'});</script>
        <? endif; ?>
        <!-- End Google Analytics -->
    <? endif; ?>

    <noscript>
      <style data-inline>
        img.lazyprogressive {
            background-image: none;
            display: none;
        }
      </style>
    </noscript>

</head>

    <ktml:content>

</html>
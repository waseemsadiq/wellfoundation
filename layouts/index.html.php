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
---
@layout: template://pages/document.html
---

    <meta name="msapplication-TileColor" content="#51cc41"/>
    <meta name="msapplication-config" content="theme://browserconfig.xml"/>
    <meta name="theme-color" content="#51cc41"/>

    <ktml:style src="theme://css/output.min.css" rel="preload" as="style" />

    <ktml:script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer="defer" />

    <!--[if IE]>
    <ktml:script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js"  defer="defer" module="nomodule" />
    <![endif]-->


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
    <style>
        @media(max-width:1520px) {
            .left-svg {
                display: none;
            }
        }
    </style>
<body
    class="<?= isset(layout()->class)  ? config()->site->body_class . ' ' . $class : config()->site->body_class; ?>">
    <ktml:content>
</body>
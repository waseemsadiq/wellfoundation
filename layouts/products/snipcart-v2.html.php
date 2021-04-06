---
layout: index
---
<?
    $xData = '';
    $sc_api_key = config()->sc_api_key;
?>

<? if ($sc_api_key): ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" data-api-key="<?= $sc_api_key ?>" id="snipcart"></script>
<link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" rel="stylesheet" type="text/css" />
<? endif; ?>

<body 
    class="<?= isset($class) ? config()->site->body_class . ' ' . $class : config()->site->body_class; ?>" <?= $xData ?>>
    <div class="h-screen w-full flex flex-col">
        <!-- Header Section -->
        <?= import('/partials/page/header'); ?>
        <!-- End Header Section -->
        
        <!-- Main Section -->
        <div class="main-wrapper w-full bg-white">
            <? if ($sc_api_key): ?>
                <ktml:content>
            <? else: ?>
                <p>Please add your Snipcart Api Key to your config.php</p>
            <? endif; ?>
            <!-- Start Testimonials -->
            <?= import('/partials/features/testimonials'); ?>
            <!-- End Testimonials-->

        </div>
        <!-- End Main Section -->
        
        <!-- Footer Section -->
        <?= import('/partials/page/footer'); ?>
        <!-- End Footer Section -->
    </div>
    <?= import('/partials/page/cookieconsent',[
        'close_button' => "That's Fine",
    ]); ?>
</body>
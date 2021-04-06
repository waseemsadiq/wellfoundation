---
layout: index
---
<?
    $xData = '';
    if (isset($modalCount)) :
        # code...
        $showModal = '';
        $overflow = '';
        for ($k = 0 ; $k < $modalCount; $k++) :
            if (($k + 1) < $modalCount):
                $showModal .= 'showModal'.($k + 1). ': false, ';
                $overflow .= 'showModal'.($k + 1). ' || ';
            else: 
                $showModal .= 'showModal'.($k + 1). ': false';
                $overflow .= 'showModal'.($k + 1);
            endif;
        endfor;
        $xData = 'x-data="{'.$showModal.'}" :class="{\'overflow-y-hidden\': '.$overflow.'}"';
        //  x-data="{showModal1: false, showModal2: false, showModal3: false, showModal4: false}" :class="{'overflow-y-hidden': showModal1 || showModal2 || showModal3 || showModal4}"
    endif;
    //echo $showModal;

    // Snipcart Api Key
    $sc_api_key = config()->sc_api_key;
?>

<? if ($sc_api_key): ?>
<link rel="preconnect" href="https://app.snipcart.com">
<link rel="preconnect" href="https://cdn.snipcart.com">

<link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.31/default/snipcart.css" />
<script async src="https://cdn.snipcart.com/themes/v3.0.31/default/snipcart.js"></script>
<div hidden id="snipcart" data-api-key="<?= $sc_api_key ?>" data-config-modal-style="side"></div>
<? endif; ?>

<body 
    class="<?= isset($class) ? config()->site->body_class . ' ' . $class : config()->site->body_class; ?>" <?= $xData ?>>
    <div class="h-screen w-full flex flex-col">
        <!-- Header Section -->
        <?= import('/partials/page/header'); ?>
        <!-- End Header Section -->
        
        <!-- Main Section -->
        <div class="main-wrapper w-full bg-white">

            <ktml:content>

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
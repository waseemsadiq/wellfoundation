---
layout: index
---
<?
    $xData = '';
    if (isset(page()->modalCount)) :
        # code...
        $showModal = '';
        $overflow = '';
        for ($k = 0 ; $k < page()->modalCount; $k++) :
            if (($k + 1) < page()->modalCount):
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
?>
<style>
    @media(max-width:1520px) {
        .left-svg {
            display: none;
        }
    }
</style>
<body 
    class="<?= isset(page()->class) ? config()->site->body_class . ' ' . page()->class : config()->site->body_class ?>" <?= $xData ?>>
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
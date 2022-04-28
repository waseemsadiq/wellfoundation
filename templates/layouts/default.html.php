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
?>
<style>
    @media(max-width:1520px) {
        .left-svg {
            display: none;
        }
    }
</style>
<body 
    class="<?= isset($class) ? config()->site->body_class . ' ' . $class : config()->site->body_class; ?>" <?= $xData ?>>
    <div class="h-screen w-full flex flex-col">
        <!-- Header Section -->
        <?= partial('/page/header'); ?>
        <!-- End Header Section -->
        
        <!-- Main Section -->
        <div class="main-wrapper w-full bg-white">

            <ktml:content>

        </div>
        <!-- End Main Section -->
        
        <!-- Footer Section -->
        <?= partial('/page/footer'); ?>
        <!-- End Footer Section -->
    </div>
    <?= partial('/page/cookieconsent',[
        'close_button' => "That's Fine",
    ]); ?>
</body>
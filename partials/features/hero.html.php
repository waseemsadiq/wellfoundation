<? 
if(isset($slug)):
    switch ($slug) :
    case 'water':
        $title = str_replace(", ", ",<br>", $title);
        $summary = str_replace("safe clean drinking water for all", "<strong>safe clean drinking water for all</strong>", $summary);
        break;
    case ('about'):
        $summary = str_replace(". ", ".<br><br>", $summary);
        break;
    case 'food':
        $summary = str_replace("26 countries every 26 weeks", "<strong>26 countries</strong> every <strong>26 weeks</strong>", $summary);
        break;
    endswitch;
endif;
?>
<div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
    <div class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
        <div class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
            <? if (isset($sub_title)) { ?>
            <h2 class="my-5 text-base   font-medium tracking-tight text-indigo-700 uppercase"><?= $sub_title ?></h2>
            <? } ?>
            <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8"><?= str_replace(", ", ",<br>", $title) ?></h1>
            <p class="pr-0 mb-8 text-base   text-gray-600 md:text-lg xl:text-xl lg:pr-20"><?= $summary ?></p>

            <? if (isset($form)) : ?>
                <?= import('/partials/buttons/modal',[
                    'form' => $form,
                    'form_title' => isset($form_title) ? $form_title : NULL,
                    'button_colour' => isset($button_colour) ? $button_colour : NULL,
                ]); ?>
            <? else : ?>
                <?= import('/partials/buttons/primary',[
                    'button_colour' => isset($button_colour) ? $button_colour : NULL,
                ]); ?> 
            <? endif ; ?>

        </div>
        <div class="relative z-10 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
            <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                <img src="<?= $image ?>" class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-20 rounded-3xl" alt="<?= $title ?>">
            </div>
        </div>
    </div>
</div>

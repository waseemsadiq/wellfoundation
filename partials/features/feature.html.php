<!-- BEGIN FEATURE-->
<div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
    <!-- BEGIN FEATURE BG -->
    <?= import('/partials/features/feature_bg'); ?>
    <!-- END FEATURE BG -->
    <!-- BEGIN FEATURE ICON -->
    <?= import('/partials/features/feature_icon', [
        'feature_icon' => $feature_icon
    ]); ?>
    </span>
    <!-- END FEATURE ICON -->
    <h4 class="relative mt-6 text-2xl text-center font-bold"><?= $feature_title ?></h4>
    <p class="relative mt-2 text-base   text-center text-gray-600"><?= $feature_description ?></p>
    <a href="/<?= $feature_link ?>" class="relative flex mt-2 text-sm font-medium text-indigo-700 underline">Learn More</a>
</div>
<!-- END FEATURE-->
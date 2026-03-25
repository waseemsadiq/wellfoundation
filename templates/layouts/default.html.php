---
@layout: index
---
<style>
    @media(max-width:1520px) {
        .left-svg {
            display: none;
        }
    }
</style>
<body
    class="<?= isset(page()->class) ? config()->site->body_class . ' ' . page()->class : config()->site->body_class; ?>">
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
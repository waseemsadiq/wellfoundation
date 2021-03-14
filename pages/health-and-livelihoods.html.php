---
layout: default
name: Health & Livelihoods
title: The Well Foundation eye camp programme
sub_title: Giving the gift of sight
summary: The Well Foundation Eye and Health care programme has been implemented in Punjab Pakistan. There is a real need for support and help for the people who are poverty stricken. In a nation of 180 million cataract accounts for nearly 66 percent of all blindness.
image: images://eyecamp-cover.jpg
slug: health-and-livelihoods
modalCount: 1
---

    <!-- BEGIN HERO SECTION -->
    <?= import('/partials/features/hero'); ?>
    <!-- HERO SECTION END -->

    <div class="relative lg:pb-40 lg:px-20">
        <p class="px-8 mb-2 text-base   text-gray-600 md:text-lg xl:text-xl lg:px-20">Surprising to hear yes but sadly with a lack of human resources, coupled with a lack of training facilities for qualified ophthalmologists and soaring costs the prevention measures are difficult to achieve; the problem is compounded further by a lack of the necessary infrastructure combined with little modern technology at the district level. Poorly maintained equipment and the absence of any referral chain along with a lack of motivation, advocacy, and awareness make cataract a huge burden for the poor.</p>
        <p class="px-8 mb-2 text-base   text-gray-600 md:text-lg xl:text-xl lg:px-20">Our dedicated team in Pakistan work around the year identifying areas and planning the two assessment camps.</p>
    </div>



    <!-- Livelihoods header -->
    <div class="relative px-8 py-10  border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div
            class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
            <div class="relative z-10 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pr-10">
                <div class="container relative right-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                    <img src="images://livelihoods-cover.jpg"
                        class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-20">
                </div>
            </div>
            <div class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                <h2 class="my-5 text-base   font-medium tracking-tight text-indigo-700 uppercase">Empowering the poor by supporting their income-generating activities.</h2>
                <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8">The Well Foundation livelihoods project </h1>
                <p class="pr-0 mb-8 text-base   text-gray-600 md:text-lg xl:text-xl lg:pr-20">Give a Man a fish he will eat for a day, Teach him to fish he will eat for a lifetime</p>
                <p class="pr-0 mb-8 text-base   text-gray-600 md:text-lg xl:text-xl lg:pr-20">Over 1 billion people live on less than £1.25 a day. Nearly 250 million children have to work to help their families. More than 1.3 billion around the world live in extreme poverty</p>
                <p class="pr-0 mb-8 text-base   text-gray-600 md:text-lg xl:text-xl lg:pr-20">The Income Generating Programme helps poor families to set up income generating activities based on their skills and availability of local resources. In case of lack of skills and resources the programme also helps family members by providing training to enhance their skills. Through trained social mobilisers local resources are explored to create livelihood opportunities and generate income on a sustainable basis.</p>
                <p class="flex items-center text-gray-600 mb-6 px-8 lg:px-20">
                    <?= import('/partials/buttons/modal',[
                      'form' => 'livelihoods',
                      'form_title' => 'Please complete all sections',
                      'button_colour' => 'green'
                    ]); ?>
                </p>
            </div>
        </div>

    </div>
    <!-- End Livelihoods header -->

    <div class="relative pb-20 lg:pb-40 lg:px-20">
        <h3 class="relative mb-2 text-lg font-black leading-tight text-gray-900 sm:text-2xl xl:mb-4 px-8 lg:px-20">Creating a Chance and an Opportunity</h3>
        <p class="px-8 mb-6 text-base   text-gray-600 md:text-lg xl:text-xl lg:px-20">Many people in developing countries have the skills and enthusiasm to generate an income for themselves, yet lack the opportunity to put it into practice, we at the Well Foundation believe in empowering people to help themselves. We strive to give people access to sustainable ways of supporting themselves and their communities. With support from our donors we’re making a real difference.</p>
        <h3 class="w-full max-w-4xl px-5 px-8 mx-auto pt-24 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 mb-8">A few of the amazing projects that we have delivered:</h3>

        <div class="container px-8 lg:px-20 projects-list">
            <? foreach (data('projects')->livelihoods as $item) : ?>
                <div class="flex items-start text-gray-600 mb-2">
                    <p class="w-4 h-4 mr-2 mt-1 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg>
                    </p>
                    <p><?= $item->title ?><?= ($item->summary) ? '<span class="block text-sm text-gray-600 pr-8">'. $item->summary . '</span>' : '' ?></p>
                </div>
            <? endforeach ?>
        </div>
    </div>

    <div class="relative px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 lg:pb-40 lg:px-20 xl:py-40 xl:px-20">
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-16">
            <h3 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Some of our completed livelihoods project</h3>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base  ">These are just some of the livelihoods projects that we've complete thanks to our donors. A special thanks goes to our "Monthly blessings" donors without whom we wouldn't have been able to complete some of these projects.</p>
          </div>

          <?=  import('/partials/images/random', [
            'folder' => 'images://livelihoods-donate-monthly',
            'layout' => 'grid',
            'shuffle' => true,
            'limit' => 12,
            'columns' => 4,
          ]); ?>

        </div>
      </section>
    </div>

    <!-- Start Testimonials -->
    <?= import('/partials/features/testimonials'); ?>
    <!-- End Testimonials-->

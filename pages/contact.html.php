---
@layout: default
name: Contact
title: Contact Us 
summary: The Well Foundation is a volunteer-staffed charity, as such we don't have a full-time admin team, or an office telephone number. Whilst we try to answer all messages and enquiries quickly, please bear with us if you send us a message, one of our volunteers will respond as soon as possible.
image: contact-cover.jpg
slug: contact
visible: false
---

<!-- BEGIN HERO SECTION -->
<div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
    <div class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
        <div class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
            <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8"><?= $title ?></h1>
            <p class="pr-0 mb-8 text-base text-gray-600 md:text-lg xl:text-xl"><?= $summary ?></p>
            <h3 class="relative mb-4 text-xl font-black leading-tight text-gray-900 sm:text-3xl xl:mb-6">Visit our office</h3>
            <p class="pr-0 mb-8 text-base text-gray-600 md:text-lg xl:text-xl">
                <span>
                  Building 2<sup>*</sup>, <br>Unit C, <br>Ground Floor, <br>4 Parklands Way, <br>Eurocentral, <br>Holytown, <br>ML1 4WR
                </span>
            </p>
            <p class="pr-0 -mt-4 mb-8 text-base text-gray-600 xl:text-lg">
                <sup>*</sup>Entrance at rear of building
            </p>
            <h3 class="relative mb-4 text-xl font-black leading-tight text-gray-900 sm:text-3xl xl:mb-6">Send us an email</h3>
            <?= form('contact-us'); ?>
        </div>
        <div class="relative z-10 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
            <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                <img src="images://<?= $image ?>" alt="Image of man holding an @ sign with an envelope background" class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-20">
            </div>
        </div>
    </div>
</div>
<!-- HERO SECTION END -->

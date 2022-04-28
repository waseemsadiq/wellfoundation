---
layout: default
name: Last Ten
title: Last Ten Days
summary: Never miss the reward of giving sadaqa during Laylatul Qadr by automating your donations
image: images://last-ten-days-cover.jpg
slug: last10
visible: false
form:
    name: last-ten-days
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Last 10 Days Form
            subject: New message from the Last 10 Days page
    schema:
        Name: [string, required]
        Mobile: [string, required]
        DonateTowards: [string, required]
    redirect: https://www.justgiving.com/fundraising/wften
    honeypot: well_786d3z02
---

<!-- BEGIN HERO SECTION -->
<div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
    <div class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
        <div class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
            <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8"><?= $title ?></h1>
            <p class="pr-0 mb-4 text-base text-gray-600 md:text-lg xl:text-xl">Allah says in the Qur'an,</p>
            <figure class="pr-0 mb-8">
              <blockquote>
                <p class="text-xl">The Night of Decree is better than a thousand months</p>
              </blockquote>
              <figcaption class="text-sm text-gray-600">
                - <cite title="Source Qur'an">(Qur'an, 97:3)</cite>
              </figcaption>
            </figure>
            <p class="pr-0 mb-8 text-base text-gray-600 md:text-lg xl:text-xl"><?= $summary ?></p>
            <p class="pr-0 mb-8 text-base text-gray-600 md:text-lg xl:text-xl">Did you know the rewards of giving sadaqa during Ramadan are multiplied by 70 and the reward for any righteous act during Laylatul Qadr is equivalent to having performed the same act for over 83 years!</p>
            <p class="pr-0 mb-8 text-base text-gray-600 md:text-lg xl:text-xl">Anything you donate, the reward is multiplied by 83 years if it falls on Layaltur Qadr.</p>
            <form method="post" class="w-full">
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Name" id="Name-ariaLabel">Contact Name</label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Name" name="Name" type="text" aria-labelledby="Name-ariaLabel" placeholder="Firstname Lastname" required>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Mobile" id="Mobile-ariaLabel">
                    Mobile Number
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Mobile" name="Mobile" type="text" aria-labelledby="Mobile-ariaLabel" placeholder="07123456789" required>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label for="DonateTowards" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    What would you like to donate towards?
                  </label>
                </div>
                <div class="md:w-2/3">
                  <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" value="Water Projects" name="DonateTowards[]">
                    <span class="text-sm">
                      Water Projects
                    </span>
                  </label>

                  <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" value="Food Projects" name="DonateTowards[]">
                    <span class="text-sm">
                      Food Projects
                    </span>
                  </label>

                  <label class="md:w-full block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" value="Eye Camp" name="DonateTowards[]">
                    <span class="text-sm">
                      Eye Camp
                    </span>
                  </label>
                </div>
              </div>
              <div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md mb-6 text-left" role="alert">
                <div class="flex">
                  <div class="py-1"><svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                  <div>
                    <p class="font-bold mb-2">You will be forwarded to our JustGiving.com donation page</p>
                    <p class="text-sm leading-relaxed">Once you click send, you will be forwarded to our JustGiving.com donation page, to make your payment. Please leave your name, without this information we can not start the process.</p>
                  </div>
                </div>
              </div>
              <div class="md:flex md:items-center">
                <div class="md:w-1/3"><?= helper('form.honeypot', page()->form->honeypot); ?></div>
                <div class="md:w-2/3">
                  <button class="shadow bg-purple-600 hover:bg-purple-500 focus:ring focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Send
                  </button>
                </div>
              </div>
            </form>
        </div>
        <div class="relative z-10 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
            <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                <img src="<?= $image ?>" alt="Image of man holding an @ sign with an envelope background" class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-20">
            </div>
        </div>
    </div>
</div>
<!-- HERO SECTION END -->

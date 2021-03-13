---
layout: default
name: Contact
title: Contact Us 
summary: Please send us a message using the following contact form
cover_img: images://contact-cover.jpg
slug: contact
visible: false
form:
    name: contact-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Contact Us Form
            subject: New message from the contact page
    schema:
        Name: [string, required]
        Email: [email, required]
        Message: [string, required]
    redirect: thank-you
    honeypot: well_786d3z01
---

<!-- BEGIN HERO SECTION -->
<div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
    <div class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
        <div class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
            <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8"><?= $title ?></h1>
            <p class="pr-0 mb-8 text-base text-gray-600 sm:text-lg xl:text-xl lg:pr-20"><?= $summary ?></p>
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
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Email" id="Email-ariaLabel">
                    Your Email
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Email" name="Email" type="email" aria-labelledby="Email-ariaLabel" placeholder="you@example.com" required>
                </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"  for="Message" id="Message-ariaLabel">
                    Message
                  </label>
                </div>
                <div class="md:w-2/3">
                  <textarea id="Message" name="Message" cols="20" rows="3" aria-labelledby="Message-ariaLabel" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Please leave a message for our team" required></textarea>
                </div>
              </div>
              <div class="md:flex md:items-center">
                <div class="md:w-1/3"><?= helper('form.honeypot', page()->form->honeypot); ?></div>
                <div class="md:w-2/3">
                  <button class="shadow bg-purple-500 hover:bg-purple-400 focus:ring focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Send
                  </button>
                </div>
              </div>
            </form>
        </div>
        <div class="relative z-10 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
            <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                <img src="<?= $cover_img ?>" class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-20">
            </div>
        </div>
    </div>
</div>
<!-- HERO SECTION END -->

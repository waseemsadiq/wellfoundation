<form method="post" action="<?= route('forms/eye-camp') ?>" class="w-full">

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Name" required>Name</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Name" name="Name" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="MobileNumber">Mobile phone number</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="MobileNumber" name="MobileNumber" type="tel" placeholder="07723456789" pattern="[0-9]{11}" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Email">Your Email</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Email" name="Email" type="email" placeholder="you@example.com" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="DonationAmount">Donation Amount (&pound;)</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="DonationAmount" name="DonationAmount" type="text">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Cataract Operation</label>
      <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">Please select your donation type</p>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input value="Donate as Sadkah" id="CataractOperation_41" name="CataractOperation" type="radio" required>
        <span class="text-sm">Donate as Sadkah</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Donate as Zakat" id="CataractOperation_42" name="CataractOperation" type="radio" required>
        <span class="text-sm">Donate as Zakat</span>
      </label>
    </div>
  </div>

  <div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md mb-6" role="alert">
    <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
      <div>
        <p class="font-bold mb-2">You will be forwarded to our JustGiving.com donation page</p>
        <p class="text-sm leading-relaxed mb-2">Once you click send, you will be forwarded to our JustGiving.com donation page, to make your payment. Please leave your name, without this information we can not start the process.</p>
      </div>
    </div>
  </div>
  
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"><?= helper('form.honeypot', page('forms/eye-camp')->form->honeypot); ?></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-600 hover:bg-purple-500 focus:ring focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" data-errormsg="Send message" data-successmsg="Sending" <? //onclick="return validChk()" ?>>
        Send
      </button>
    </div>
  </div>
</form>
<form method="post" action="<?= route('forms/humanitarian-cup') ?>" class="w-full">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="TeamName">Team Name</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="TeamName" name="TeamName" type="text" placeholder="Well Foundation FC" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Player1">Player 1</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Player1" name="Player1" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Player2">Player 2</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Player2" name="Player2" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Player3">Player 3</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Player3" name="Player3" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Player4">Player 4</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Player4" name="Player4" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Player5">Player 5</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Player5" name="Player5" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Player6">Player 6</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Player6" name="Player6" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Player7">Player 7</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Player7" name="Player7" type="text" placeholder="Firstname Lastname">
    </div>
  </div>
  <div class="mb-6">
    <p class="mb-2 text-base text-gray-600 sm:text-lg xl:text-xl">Contact Details</p>
    <p class="mb-8 text-base text-gray-600">Please enter the contact details for your team's representative.</p>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="FullName">Full Name</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="FullName" name="FullName" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="PhoneNumber">Contact Number</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="PhoneNumber" name="PhoneNumber" type="tel" placeholder="07723456789" pattern="[0-9]{11}" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Email">Contact E-mail</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Email" name="Email" type="email" placeholder="you@example.com" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"><?= helper('form.honeypot', page('forms/humanitarian-cup')->form->honeypot); ?></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:ring focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" data-errormsg="Send message" data-successmsg="Sending">
        Send
      </button>
    </div>
  </div>
</form>
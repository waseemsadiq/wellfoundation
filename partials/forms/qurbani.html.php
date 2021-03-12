<form method="post" action="<?= route('forms/qurbani') ?>" class="w-full">

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Name">Name</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Name" name="Name" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="MobilePhoneNumber">Mobile Number</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="MobilePhoneNumber" name="MobilePhone" type="tel" placeholder="07723456789" pattern="[0-9]{11}" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Postcode">Postcode</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Postcode" name="Postcode" type="text" placeholder="ML4 1AJ" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="NamesofpeopleforQurbani">Names of people for Qurbani</label>
    </div>
    <div class="md:w-2/3">
      <textarea id="NamesofpeopleforQurbani" name="NamesofpeopleforQurbani" cols="20" rows="3" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Firstname Lastname - one on each line" required></textarea>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="IndiaCow">India (Cow)</label>
      <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">£154 per cow (£22 / share)</p>
    </div>
    <div class="md:w-2/3">
      <div class="inline-block relative w-auto">
        <select class="block appearance-none w-full bg-white border-2 border-gray-200 hover:border-gray-200 px-4 py-2 pr-8 rounded leading-tight focus:outline-none" id="IndiaCow" name="IndiaCow">
          <option value="">Please Select...</option>
          <option value="Whole">Whole</option>
          <option value="2 Parts">2 Parts</option>
          <option value="3 Parts">3 Parts</option>
          <option value="4 Parts">4 Parts</option>
          <option value="5 Parts">5 Parts</option>
          <option value="6 Parts">6 Parts</option>
          <option value="7 Parts">7 Parts</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="PakistanCow">Pakistan (Cow)</label>
      <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">£280 per cow (£40 / share)</p>
    </div>
    <div class="md:w-2/3">
      <div class="inline-block relative w-auto">
        <select class="block appearance-none w-full bg-white border-2 border-gray-200 hover:border-gray-200 px-4 py-2 pr-8 rounded leading-tight focus:outline-none" id="PakistanCow" name="PakistanCow">
          <option value="">Please Select...</option>
          <option value="Whole">Whole</option>
          <option value="2 Parts">2 Parts</option>
          <option value="3 Parts">3 Parts</option>
          <option value="4 Parts">4 Parts</option>
          <option value="5 Parts">5 Parts</option>
          <option value="6 Parts">6 Parts</option>
          <option value="7 Parts">7 Parts</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Pakistan (Sheep)</label>
      <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">£110 per sheep</p>
    </div>
    <div class="md:w-2/3">
      <input id="PakistanSheep" name="PakistanSheep" type="checkbox">
      <span><label for="PakistanSheep">Whole Sheep</label></span>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="PalestineCow">Palestine (Cow)</label>
      <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">£1,750 per cow (£250 / share)</p>
    </div>
    <div class="md:w-2/3">
      <div class="inline-block relative w-auto">
        <select class="block appearance-none w-full bg-white border-2 border-gray-200 hover:border-gray-200 px-4 py-2 pr-8 rounded leading-tight focus:outline-none" id="PalestineCow" name="PalestineCow">
          <option value="">Please Select...</option>
          <option value="Whole">Whole</option>
          <option value="2 Parts">2 Parts</option>
          <option value="3 Parts">3 Parts</option>
          <option value="4 Parts">4 Parts</option>
          <option value="5 Parts">5 Parts</option>
          <option value="6 Parts">6 Parts</option>
          <option value="7 Parts">7 Parts</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="GhanaCow">Ghana (Cow)</label>
      <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">£280 per cow (£40 / share)</p>
    </div>
    <div class="md:w-2/3">
      <div class="inline-block relative w-auto">
        <select class="block appearance-none w-full bg-white border-2 border-gray-200 hover:border-gray-200 px-4 py-2 pr-8 rounded leading-tight focus:outline-none" id="GhanaCow" name="GhanaCow">
          <option value="">Please Select...</option>
          <option value="Whole">Whole</option>
          <option value="2 Parts">2 Parts</option>
          <option value="3 Parts">3 Parts</option>
          <option value="4 Parts">4 Parts</option>
          <option value="5 Parts">5 Parts</option>
          <option value="6 Parts">6 Parts</option>
          <option value="7 Parts">7 Parts</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="KenyaCow">Kenya (Cow)</label>
      <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">£280 per cow (£40 / share)</p>
    </div>
    <div class="md:w-2/3">
      <div class="inline-block relative w-auto">
        <select class="block appearance-none w-full bg-white border-2 border-gray-200 hover:border-gray-200 px-4 py-2 pr-8 rounded leading-tight focus:outline-none" id="KenyaCow" name="KenyaCow">
          <option value="">Please Select...</option>
          <option value="Whole">Whole</option>
          <option value="2 Parts">2 Parts</option>
          <option value="3 Parts">3 Parts</option>
          <option value="4 Parts">4 Parts</option>
          <option value="5 Parts">5 Parts</option>
          <option value="6 Parts">6 Parts</option>
          <option value="7 Parts">7 Parts</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md mb-6" role="alert">
    <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
      <div>
        <p class="font-bold mb-2">You will be forwarded to our JustGiving.com donation page</p>
        <p class="text-sm leading-relaxed">Once you click send, you will be forwarded to our JustGiving.com donation page, to pay your Qurbani donation. Please leave your name, without this information we can not start the process.</p>
      </div>
    </div>
  </div>
  
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"><?= helper('form.honeypot', page()->form->honeypot); ?></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:ring focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" data-errormsg="Send message" data-successmsg="Sending">
        Send
      </button>
    </div>
  </div>
</form>
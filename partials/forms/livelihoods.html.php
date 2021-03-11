<form method="post" action="<?= route('forms/livelihoods') ?>" class="w-full">

 <div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Firstname">First Name</label>
  </div>
  <div class="md:w-2/3">
    <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Firstname" name="Firstname" type="text">
  </div>
</div>
<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Lastname">Lastname</label>
  </div>
  <div class="md:w-2/3">
    <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Lastname" name="Lastname" type="text">
  </div>
</div>
<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="PhoneNumber">Phone Number</label>
  </div>
  <div class="md:w-2/3">
    <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="PhoneNumber" name="PhoneNumber" type="text">
  </div>
</div>
<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Town">Town</label>
  </div>
  <div class="md:w-2/3">
    <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Town" name="Town" type="text">
  </div>
</div>
<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Feed the World</label>
    <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">We work in 30 countries, If you want to donate towards helping Feed any country, get in touch</p>
  </div>
  <div class="md:w-2/3">
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Asia" id="FeedtheWorld_21" name="FeedtheWorld[]" type="checkbox">
      <span class="text-sm">Asia</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Africa" id="FeedtheWorld_22" name="FeedtheWorld[]" type="checkbox">
      <span class="text-sm">Africa</span>
    </label>
  </div>
</div>
<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Orphans Education</label>
    <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">Help the Orphans & Poor with Stationary, Clothing etc</p>
  </div>
  <div class="md:w-2/3">
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Stationary Clothing" id="OrphansEducation_23" name="OrphansEducation[]" type="checkbox">
      <span class="text-sm">Stationary Clothing</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Livelihoods" id="OrphansEducation_24" name="OrphansEducation[]" type="checkbox">
      <span class="text-sm">Livelihoods</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Qurans" id="OrphansEducation_25" name="OrphansEducation[]" type="checkbox">
      <span class="text-sm">Qurans</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Weddings" id="OrphansEducation_26" name="OrphansEducation[]" type="checkbox">
      <span class="text-sm">Weddings</span>
    </label>
  </div>
</div>
<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Getting Back into Work</label>
    <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">Giving the poor means to get back to work</p>
  </div>
  <div class="md:w-2/3">
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Rickshaws £800" id="GettingBackintoWork_27" name="GettingBackintoWork[]" type="checkbox">
      <span class="text-sm">Rickshaws £800</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Fishing Boats TBC" id="GettingBackintoWork_28" name="GettingBackintoWork[]" type="checkbox">
      <span class="text-sm">Fishing Boats TBC</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Farming Materials TBC" id="GettingBackintoWork_29" name="GettingBackintoWork[]" type="checkbox">
      <span class="text-sm">Farming Materials TBC</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Sewing Machines £50 each" id="GettingBackintoWork_30" name="GettingBackintoWork[]" type="checkbox">
      <span class="text-sm">Sewing Machines £50 each</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Gardening (Help them grow their own Crops)" id="GettingBackintoWork_31" name="GettingBackintoWork[]" type="checkbox">
      <span class="text-sm">Gardening (Help them grow their own Crops)</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Others - On Request" id="GettingBackintoWork_32" name="GettingBackintoWork[]" type="checkbox">
      <span class="text-sm">Others - On Request</span>
    </label>
  </div>
</div>
<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Health</label>
    <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">So many people cant afford simple Health care, if you want to help out please get in touch with current projects</p>
  </div>
  <div class="md:w-2/3">
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Dental Treatment TBC" id="Health_33" name="Health[]" type="checkbox">
      <span class="text-sm">Dental Treatment TBC</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Medicine " id="Health_34" name="Health[]" type="checkbox">
      <span class="text-sm">Medicine </span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Women's Needs" id="Health_35" name="Health[]" type="checkbox">
      <span class="text-sm">Women's Needs</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Wheel Chairs" id="Health_36" name="Health[]" type="checkbox">
      <span class="text-sm">Wheel Chairs</span>
    </label>
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Others on Request" id="Health_37" name="Health[]" type="checkbox">
      <span class="text-sm">Others on Request</span>
    </label>
  </div>
</div>
<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Qurans</label>
  </div>
  <div class="md:w-2/3">
    <label class="block text-gray-500 font-bold">
      <input class="mr-2 leading-tight" value="10k Great Scottish Run" value="Qurans" id="Qurans_38" name="Qurans[]" type="checkbox">
      <span class="text-sm">Qurans</span>
    </label>
  </div>
</div>
<div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md mb-6" role="alert">
  <div class="flex">
    <div class="py-1"><svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
    <div>
      <p class="font-bold mb-2">You will be forwarded to our JustGiving.com donation page</p>
      <p class="text-sm leading-relaxed">Once you click send, you will be forwarded to our JustGiving.com donation page, to make your payment. Please leave your name, without this information we can not start the process.</p>
    </div>
  </div>
</div>

<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3"></div>
  <div class="md:w-2/3">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:ring focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" data-errormsg="Send message" data-successmsg="Sending">
      Send
    </button>
  </div>
</div>
</form>
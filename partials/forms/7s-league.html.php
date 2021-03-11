<form method="post" action="<?= route('forms/7s-league') ?>" class="w-full">

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="YourName">Your Name</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="YourName" name="YourName" type="text" title="Your Name. This is a required field">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Address">Address</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Address" name="Address" type="text">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Addressline2">Address line 2</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Addressline2" name="Addressline2" type="text">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="TownCity">Town / City</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="TownCity" name="TownCity" type="text">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Postcode">Postcode</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Postcode" name="Postcode" type="text">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Email">Your Email</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Email" name="Email" type="text" title="Your Email. This is a required field">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="PhoneNumber">Your contact telephone number</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="PhoneNumber" name="PhoneNumber" type="text" title="Your contact telephone number. This is a required field">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Dateofbirth">Date of birth</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Dateofbirth" name="Dateofbirth" type="date" title="Your date of birth. This is a required field">
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Do you have any pre-existing medical conditions?</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="No" id="MedicalConditions_1" name="MedicalConditions" type="radio" title="No. This is a required field">
        <span class="text-sm">No</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="Yes" id="MedicalConditions_2" name="MedicalConditions" type="radio" title="Yes. This is a required field">
        <span class="text-sm">Yes</span>
      </label>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">What other Activities would you like to be involved with?</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="None" id="Activities_3" name="Activities[]" type="checkbox" title="None. This is a required field">
        <span class="text-sm">None</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="10k Charity Run" id="Activities_4" name="Activities[]" type="checkbox" title="10k Charity Run. This is a required field">
        <span class="text-sm">10k Charity Run</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="47mile Bike Pedal for Scotland" id="Activities_5" name="Activities[]" type="checkbox" title="47mile Bike Pedal for Scotland. This is a required field">
        <span class="text-sm">47mile Bike Pedal for Scotland</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="Become a Coach for kids under 16" id="Activities_6" name="Activities[]" type="checkbox" title="Become a Coach for kids under 16. This is a required field">
        <span class="text-sm">Become a Coach for kids under 16</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="Do First Aid Course" id="Activities_7" name="Activities[]" type="checkbox" title="Do First Aid Course. This is a required field">
        <span class="text-sm">Do First Aid Course</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="Referee Course" id="Activities_8" name="Activities[]" type="checkbox" title="Referee Course. This is a required field">
        <span class="text-sm">Referee Course</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="Help with our Feed Scotland Project once a month" id="Activities_9" name="Activities[]" type="checkbox" title="Help with our Feed Scotland Project once a month. This is a required field">
        <span class="text-sm">Help with our Feed Scotland Project once a month</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="Other" id="Activities_10" name="Activities[]" type="checkbox" title="Other. This is a required field">
        <span class="text-sm">Other</span>
      </label>
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
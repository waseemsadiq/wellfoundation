<form method="post" action="<?= route('forms/activities') ?>" class="w-full">

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
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Email">Email</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Email" name="Email" type="email" placeholder="you@example.com" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="MobilePhoneNumber">Mobile Phone Number</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="MobilePhone" name="MobilePhoneNumber" type="tel" placeholder="07723456789" pattern="[0-9]{11}" required>
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
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Sign me up to</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="10k Great Scottish Run" id="Signmeupto_19" name="Signmeupto[]" type="checkbox" title="10k Great Scottish Run. This is a required field">
        <span class="text-sm">10k Great Scottish Run</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" value="5k Movember Run" id="Signmeupto_20" name="Signmeupto[]" type="checkbox" title="5k Movember Run. This is a required field">
        <span class="text-sm">5k Movember Run</span>
      </label>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="DoyouNeedaTshirt">Do you Need a T-shirt? (&pound;5)</label>
    </div>
    <div class="md:w-2/3">
      <div class="inline-block relative w-auto">
        <select class="block appearance-none w-full bg-white border-2 border-gray-200 hover:border-gray-200 px-4 py-2 pr-8 rounded leading-tight focus:outline-none" id="DoyouNeedaTshirt" name="DoyouNeedaTshirt" required>
          <option value="No">No</option>
          <option value="Small">Small</option>
          <option value="Medium">Medium</option>
          <option value="Large">Large</option>
          <option value="XL">XL</option>
          <option value="XXL">XXL</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:ring focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" data-errormsg="Send message" data-successmsg="Sending" onclick="return validChk()">
        Send
      </button>
    </div>
  </div>
</form>
<script>
  function validChk() {
    var chkBox = document.getElementsByName('Signmeupto[]');
    var lenChkBox = chkBox.length;
    //Signmeupto
    var valid=0;
    for(var i=0;i<lenChkBox;i++) {
      if(chkBox[i].checked==true) {
        valid=1;
        break;
      }
    }
    if(valid==0) {
      msg='Please select at least one event to sign up to';
      alert(msg);
      return false;
    }
    return true;
  }
</script>
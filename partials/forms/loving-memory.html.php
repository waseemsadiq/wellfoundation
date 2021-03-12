<form method="post" action="<?= route('forms/loving-memory') ?>" class="w-full">

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
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"for="Email">Your Email</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Email" name="Email" type="email" placeholder="you@example.com" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"for="PhoneNumber">Phone</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="PhoneNumber" name="PhoneNumber" type="tel" placeholder="07723456789" pattern="[0-9]{11}" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"for="Town">Town</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Town" name="Town" type="text" placeholder="Motherwell" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"for="NameonPlaque">Name on Plaque</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="NameonPlaque" name="NameonPlaque" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Do you want us to set up a Just Giving Page where friends can donate?</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input value="No" id="JustGivingPage_58" name="JustGivingPage" type="radio">
        <span class="text-sm">No</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Yes" id="JustGivingPage_59" name="JustGivingPage" type="radio">
        <span class="text-sm">Yes</span>
      </label>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">What do you want us to arrange?</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input value="Fundraising Event" id="Arrange_60" name="Arrange[]" type="checkbox">
        <span class="text-sm">Fundraising Event</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Join in an arranged event" id="Arrange_61" name="Arrange[]" type="checkbox">
        <span class="text-sm">Join in an arranged event</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="11s Football Games" id="Arrange_62" name="Arrange[]" type="checkbox">
        <span class="text-sm">11s Football Games</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Other" id="Arrange_63" name="Arrange[]" type="checkbox">
        <span class="text-sm">Other</span>
      </label>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">What do you want us to build in Loving Memory</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input value="Water Wells" id="Build_64" name="Build[]" type="checkbox">
        <span class="text-sm">Water Wells</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Deep Bore" id="Build_65" name="Build[]" type="checkbox">
        <span class="text-sm">Deep Bore</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Water Wells" id="Build_66" name="Build[]" type="checkbox">
        <span class="text-sm">Water Wells</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Mosque" id="Build_67" name="Build[]" type="checkbox">
        <span class="text-sm">Mosque</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Classrooms" id="Build_68" name="Build[]" type="checkbox">
        <span class="text-sm">Classrooms</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="other " id="Build_69" name="Build[]" type="checkbox">
        <span class="text-sm">other </span>
      </label>
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
    var radio = document.getElementsByName('JustGivingPage');
    var lenRadio = radio.length;
    //JustGivingPage
    var valid=0;
    for(var i=0;i<lenRadio;i++) {
      if(radio[i].checked==true) {
        valid=1;
        break;
      }
    }
    if(valid==0) {
      msg='Please select whether or not you want us to set up a JustGiving page on your behalf';
      alert(msg);
      return false;
    }

    var valid2=0;
    //Arrange
    var chkBox = document.getElementsByName('Arrange[]');
    var lenChkBox = chkBox.length;
    for(var i=0;i<lenChkBox;i++) {
      if(chkBox[i].checked==true) {
        valid2=1;
        break;
      }
    }
    //Build
    var chkBox2 = document.getElementsByName('Build[]');
    var lenChkBox2 = chkBox2.length;
    for(var i=0;i<lenChkBox2;i++) {
      if(chkBox2[i].checked==true) {
        valid2=1;
        break;
      }
    }
    if(valid2==0) {
      msg='Please select what you would like us to arrange or build';
      alert(msg);
      return false;
    }

    return true;
  }
</script>
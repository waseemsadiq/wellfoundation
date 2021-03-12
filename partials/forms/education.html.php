<form method="post" action="<?= route('forms/education') ?>" class="w-full">

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
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Email">Your Email</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Email" name="Email" type="email" placeholder="you@example.com" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="PhoneNumber">Phone</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="PhoneNumber" name="PhoneNumber" type="tel" placeholder="07723456789" pattern="[0-9]{11}" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Town">Town</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Town" name="Town" type="text" placeholder="Motherwell" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Classrooms</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input value="Malawi £3,500" id="Classrooms_43" name="Classrooms[]" type="checkbox">
        <span class="text-sm">Malawi £3,500</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Pakistan £2,500" id="Classrooms_44" name="Classrooms[]" type="checkbox">
        <span class="text-sm">Pakistan £2,500</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Uganda £3,000" id="Classrooms_45" name="Classrooms[]" type="checkbox">
        <span class="text-sm">Uganda £3,000</span>
      </label>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Mosques</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input value="Pakistan (Small ) £6,000" id="Mosques_46" name="Mosques[]" type="checkbox">
        <span class="text-sm">Pakistan (Small ) £6,000</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Pakistan (Large) £11,000" id="Mosques_47" name="Mosques[]" type="checkbox">
        <span class="text-sm">Pakistan (Large) £11,000</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Africa (Small) £5,000" id="Mosques_48" name="Mosques[]" type="checkbox">
        <span class="text-sm">Africa (Small) £5,000</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Qurans for Mosques £3" id="Mosques_49" name="Mosques[]" type="checkbox">
        <span class="text-sm">Qurans for Mosques £3</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Prayer Mats £5" id="Mosques_50" name="Mosques[]" type="checkbox">
        <span class="text-sm">Prayer Mats £5</span>
      </span>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">School Essentials</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input value="Books £2" id="SchoolEssentials_51" name="SchoolEssentials[]" type="checkbox">
        <span class="text-sm">Books £2</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Pens £1" id="SchoolEssentials_52" name="SchoolEssentials[]" type="checkbox">
        <span class="text-sm">Pens £1</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Bags £3" id="SchoolEssentials_53" name="SchoolEssentials[]" type="checkbox">
        <span class="text-sm">Bags £3</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Uniforms £5" id="SchoolEssentials_54" name="SchoolEssentials[]" type="checkbox">
        <span class="text-sm">Uniforms £5</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Shoes £2" id="SchoolEssentials_55" name="SchoolEssentials[]" type="checkbox">
        <span class="text-sm">Shoes £2</span>
      </span>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Mosque Essentials</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input value="Quran £3" id="MosqueEssentials_56" name="MosqueEssentials[]" type="checkbox">
        <span class="text-sm">Quran £3</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Prayer Mats £5" id="MosqueEssentials_57" name="MosqueEssentials[]" type="checkbox">
        <span class="text-sm">Prayer Mats £5</span>
      </label>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"><?= helper('form.honeypot', page()->form->honeypot); ?></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:ring focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" data-errormsg="Send message" data-successmsg="Sending" onclick="return validChk()">
        Send
      </button>
    </div>
  </div>
</form>
<script>
  function validChk() {
    var valid=0;
    //Classrooms
    var chkBox = document.getElementsByName('Classrooms[]');
    var lenChkBox = chkBox.length;
    for(var i=0;i<lenChkBox;i++) {
      if(chkBox[i].checked==true) {
        valid=1;
        break;
      }
    }
    //Mosques
    var chkBox2 = document.getElementsByName('Mosques[]');
    var lenChkBox2 = chkBox2.length;
    for(var i=0;i<lenChkBox2;i++) {
      if(chkBox2[i].checked==true) {
        valid=1;
        break;
      }
    }
    //SchoolEssentials
    var chkBox3 = document.getElementsByName('SchoolEssentials[]');
    var lenChkBox3 = chkBox3.length;
    for(var i=0;i<lenChkBox3;i++) {
      if(chkBox3[i].checked==true) {
        valid=1;
        break;
      }
    }
    //MosqueEssentials
    var chkBox4 = document.getElementsByName('MosqueEssentials[]');
    var lenChkBox4 = chkBox4.length;
    for(var i=0;i<lenChkBox4;i++) {
      if(chkBox4[i].checked==true) {
        valid=1;
        break;
      }
    }
    if(valid==0) {
      msg='Please select what you would like to donate towards';
      alert(msg);
      return false;
    }
    return true;
  }
</script>
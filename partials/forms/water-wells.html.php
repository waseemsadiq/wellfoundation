<form method="post" action="<?= route('forms/water-wells') ?>" class="w-full">

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Name" require>Name</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" id="Name" name="Name" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Email" id="Email-ariaLabel">Your Email</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Email" name="Email" type="email" placeholder="you@example.com" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="MobilePhone">Mobile</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Mobile" name="MobilePhone" type="tel" placeholder="07723456789" pattern="[0-9]{11}" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="NameonPlaque">Name on Plaque</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="NameonPlaque" name="NameonPlaque" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Town">Town</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Town" name="Town" type="text" placeholder="Motherwell" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3 text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Hand Pumps</div>
    <div class="md:w-2/3 text-left">
      <span class="block">
        <input value="Pakistan Sindh (£175)" id="HandPumps_1" name="HandPumps" type="radio" aria-labelledby="HandPumps-ariaLabel" />
        <label for="HandPumps_1" id="HandPumps-ariaLabel">Pakistan Sindh (£175)</label>
      </span>
      <span class="block">
        <input value="Pakistan Layyah (£175)" id="HandPumps_2" name="HandPumps" type="radio" aria-labelledby="HandPumps-ariaLabel" />
        <label for="HandPumps_2" id="HandPumps-ariaLabel">Pakistan Layyah (£175)</label>
      </span>
      <span class="block">
        <input value="Pakistan Punjab (£180)" id="HandPumps_3" name="HandPumps" type="radio" aria-labelledby="HandPumps-ariaLabel" />
        <label for="HandPumps_3" id="HandPumps-ariaLabel">Pakistan Punjab (£180)</label>
      </span>
      <span class="block">
        <input value="Cambodia (£275)" id="HandPumps_4" name="HandPumps" type="radio" aria-labelledby="HandPumps-ariaLabel" />
        <label for="HandPumps_4" id="HandPumps-ariaLabel">Cambodia (£275)</label>
      </span>
      <span class="block">
        <input value="Sri Lanka (£275)" id="HandPumps_5" name="HandPumps" type="radio" aria-labelledby="HandPumps-ariaLabel" />
        <label for="HandPumps_5" id="HandPumps-ariaLabel">Sri Lanka (£275)</label>
      </span>
      <span class="block">
        <input value="India (£325)" id="HandPumps_6" name="HandPumps" type="radio" aria-labelledby="HandPumps-ariaLabel" />
        <label for="HandPumps_6" id="HandPumps-ariaLabel">India (£325)</label>
      </span>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3 text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Solar Power Water Wells</div>
    <div class="md:w-2/3 text-left">
      <span class="block">
        <input value="Pakistan (£600)" id="SolarPowerWaterWells_7" name="SolarPowerWaterWells" type="radio" aria-labelledby="SolarPowerWaterWells-ariaLabel" />
        <label for="SolarPowerWaterWells_7" id="SolarPowerWaterWells-ariaLabel">Pakistan (£600)</label>
      </span>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3 text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Dig a Well</div>
    <div class="md:w-2/3 text-left">
      <span class="block">
        <input value="Pakistan (£800)" id="DigaWell_8" name="DigaWell" type="radio" aria-labelledby="DigaWell-ariaLabel" />
        <label for="DigaWell_8" id="DigaWell-ariaLabel">Pakistan (£800)</label>
      </span>
      <span class="block">
        <input value="Tanzania (£1250)" id="DigaWell_9" name="DigaWell" type="radio" aria-labelledby="DigaWell-ariaLabel" />
        <label for="DigaWell_9" id="DigaWell-ariaLabel">Tanzania (£1250)</label>
      </span>
      <span class="block">
        <input value="Kenya (£1250)" id="DigaWell_10" name="DigaWell" type="radio" aria-labelledby="DigaWell-ariaLabel" />
        <label for="DigaWell_10" id="DigaWell-ariaLabel">Kenya (£1250)</label>
      </span>
      <span class="block">
        <input value="Uganda (£1500)" id="DigaWell_11" name="DigaWell" type="radio" aria-labelledby="DigaWell-ariaLabel" />
        <label for="DigaWell_11" id="DigaWell-ariaLabel">Uganda (£1500)</label>
      </span>
      <span class="block">
        <input value="Gambia (£1800)" id="DigaWell_12" name="DigaWell" type="radio" aria-labelledby="DigaWell-ariaLabel" />
        <label for="DigaWell_12" id="DigaWell-ariaLabel">Gambia (£1800)</label>
      </span>
      <span class="block">
        <input value="Niger (£1900)" id="DigaWell_13" name="DigaWell" type="radio" aria-labelledby="DigaWell-ariaLabel" />
        <label for="DigaWell_13" id="DigaWell-ariaLabel">Niger (£1900)</label>
      </span>
      <span class="block">
        <input value="Sri Lanka (£2000)" id="DigaWell_14" name="DigaWell" type="radio" aria-labelledby="DigaWell-ariaLabel" />
        <label for="DigaWell_14" id="DigaWell-ariaLabel">Sri Lanka (£2000)</label>
      </span>
      <span class="block">
        <input value="Other" id="DigaWell_15" name="DigaWell" type="radio" aria-labelledby="DigaWell-ariaLabel" />
        <label for="DigaWell_15" id="DigaWell-ariaLabel">Other</label>
      </span>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3 text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Community Bore Wells</div>
    <div class="md:w-2/3 text-left">
      <span class="block">
        <input value="Gambia (£6000)" id="CommunityBoreWells_16" name="CommunityBoreWells" type="radio" aria-labelledby="CommunityBoreWells-ariaLabel" />
        <label for="CommunityBoreWells_16" id="CommunityBoreWells-ariaLabel">Gambia (£6000)</label>
      </span>
      <span class="block">
        <input value="Uganda (£6000)" id="CommunityBoreWells_17" name="CommunityBoreWells" type="radio" aria-labelledby="CommunityBoreWells-ariaLabel" />
        <label for="CommunityBoreWells_17" id="CommunityBoreWells-ariaLabel">Uganda (£6000)</label>
      </span>
      <span class="block">
        <input value="Somalia (£6000)" id="CommunityBoreWells_18" name="CommunityBoreWells" type="radio" aria-labelledby="CommunityBoreWells-ariaLabel" />
        <label for="CommunityBoreWells_18" id="CommunityBoreWells-ariaLabel">Somalia (£6000)</label>
      </span>
      <span class="block">
        <input value="Cameroon (£6250)" id="CommunityBoreWells_19" name="CommunityBoreWells" type="radio" aria-labelledby="CommunityBoreWells-ariaLabel" />
        <label for="CommunityBoreWells_19" id="CommunityBoreWells-ariaLabel">Cameroon (£6250)</label>
      </span>
      <span class="block">
        <input value="Malawi (£6250)" id="CommunityBoreWells_20" name="CommunityBoreWells" type="radio" aria-labelledby="CommunityBoreWells-ariaLabel" />
        <label for="CommunityBoreWells_20" id="CommunityBoreWells-ariaLabel">Malawi (£6250)</label>
      </span>
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
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"><?= helper('form.honeypot', page('forms/water-wells')->form->honeypot); ?></div>
    <div class="md:w-2/3 text-left">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:ring focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" data-errormsg="Send message" data-successmsg="Sending"onclick="return validChk()">
        Send
      </button>
    </div>
  </div>
</form>
<script>
  function validChk() {
    var valid=0;
    //HandPumps
    var radio = document.getElementsByName('HandPumps');
    var lenRadio = radio.length;
    for(var i=0;i<lenRadio;i++) {
      if(radio[i].checked==true) {
        valid=1;
        break;
      }
    }
    //SolarPowerWaterWells
    var radio2 = document.getElementsByName('SolarPowerWaterWells');
    var lenRadio2 = radio2.length;
    for(var i=0;i<lenRadio2;i++) {
      if(radio2[i].checked==true) {
        valid=1;
        break;
      }
    }
    //DigaWell
    var radio3 = document.getElementsByName('DigaWell');
    var lenRadio3 = radio3.length;
    for(var i=0;i<lenRadio3;i++) {
      if(radio3[i].checked==true) {
        valid=1;
        break;
      }
    }
    //CommunityBoreWells
    var radio4 = document.getElementsByName('CommunityBoreWells');
    var lenRadio4 = radio4.length;
    for(var i=0;i<lenRadio4;i++) {
      if(radio4[i].checked==true) {
        valid=1;
        break;
      }
    }
    if(valid==0) {
      msg='Please select which type of well you would like to donate towards';
      alert(msg);
      return false;
    }
    return true;
  }
</script>
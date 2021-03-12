<form method="post" action="<?= route('forms/business-partners') ?>" class="w-full max-w-4xl m-auto">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Name">Contact Name</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Name" name="Name" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="CompanyName">
        Company Name
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="CompanyName" name="CompanyName" type="text" placeholder="Acme Ltd" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Email">
        Your Email
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Email" name="Email" type="email" placeholder="you@example.com" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="MobileNumber">
        Mobile
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="MobileNumber" name="MobileNumber" type="tel" placeholder="07723456789" pattern="[0-9]{11}" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="WebsiteURL">
        Website URL
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="WebsiteURL" name="WebsiteURL" type="url" pattern="https?://.+" placeholder="https://www.example.com">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label for="Where_would_you_like_to_get_involved" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
        Where would you like to get involved?
      </label>
    </div>
    <div class="md:w-2/3">
      <label class="md:w-2/3 block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" value="Business Partnership at £350 per year" name="Where_would_you_like_to_get_involved[]">
        <span class="text-sm">
          Business Partnership at £350 per year
        </span>
      </label>

      <label class="md:w-2/3 block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" value="Place a Well Charity tub at your work" name="Where_would_you_like_to_get_involved[]">
        <span class="text-sm">
          Place a Well Charity tub at your work
        </span>
      </label>

      <label class="md:w-full block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" value="Active Campaign where donations go towards projects" name="Where_would_you_like_to_get_involved[]">
        <span class="text-sm">
          Active Campaign where donations go towards projects
        </span>
      </label>

      <label class="md:w-2/3 block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" value="Sponsorship of individual projects" name="Where_would_you_like_to_get_involved[]">
        <span class="text-sm">
          Sponsorship of individual projects
        </span>
      </label>

      <label class="md:w-2/3 block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" value="Other areas" name="Where_would_you_like_to_get_involved[]">
        <span class="text-sm">
          Other areas
        </span>
      </label>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Message" id="Message-ariaLabel">
        Message
      </label>
    </div>
    <div class="md:w-2/3">
      <textarea id="Message" name="Message" cols="20" rows="3" aria-labelledby="Message-ariaLabel" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Please add a message for our team" required></textarea>
    </div>
  </div>  
  <div class="md:flex md:items-center">
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
    var chkBox = document.getElementsByName('Where_would_you_like_to_get_involved[]');
    var lenChkBox = chkBox.length;
    //Where_would_you_like_to_get_involved
    var valid=0;
    for(var i=0;i<lenChkBox;i++) {
      if(chkBox[i].checked==true) {
        valid=1;
        break;
      }
    }
    if(valid==0) {
      msg='Please select at least one area where would you would like to get involved';
      alert(msg);
      return false;
    }
    return true;
  }
</script>
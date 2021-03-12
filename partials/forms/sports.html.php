<form method="post" action="<?= route('forms/sports') ?>" class="w-full">

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="ParentName">Your / Parent's name</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="ParentFirstname" name="ParentFirstname" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="ChildName">Child's name</label>
      <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">If registering for one of our kids' clubs</p>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="ChildName" name="ChildName" type="text" placeholder="Firstname Lastname">
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="DateofBirth">Date of Birth</label>
      <p class="text-sm md:text-right mb-1 md:mb-0 pr-4">Of person you are registering for</p>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="DateofBirth" name="DateofBirth" type="date" required>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" >Male / Female</label>
    </div>
    <div class="md:w-2/3">
      <label class="block text-gray-500 font-bold">
        <input value="Male" id="MaleFemale_1" name="MaleFemale" class="mr-2 leading-tight" type="radio">
        <span class="text-sm">Male</span>
      </label>
      <label class="block text-gray-500 font-bold">
        <input value="Female" id="MaleFemale_2" name="MaleFemale" class="mr-2 leading-tight" type="radio">
        <span class="text-sm">Female</span>
      </label>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Email">Email</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Email" name="Email" type="email" placeholder="you@example.com" required>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="MobilePhone">Mobile Phone Number</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="MobilePhone" name="MobilePhone" type="tel" placeholder="07723456789" pattern="[0-9]{11}" required>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Address">Address</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Address" name="Address" type="text" placeholder="Address Line 1" required>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="AddressLine2">Address Line 2</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="AddressLine2" name="AddressLine2" type="text">
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Postcode">Postcode</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Postcode" name="Postcode" type="text" placeholder="ML4 1AJ" required>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="ExistingMedicalConditions">Existing Medical Conditions</label>
    </div>
    <div class="md:w-2/3">
      <textarea class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="ExistingMedicalConditions" name="ExistingMedicalConditions" cols="20" rows="3"></textarea>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="DoctorsName">Doctor's Name</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="DoctorsName" name="DoctorsName" type="text" placeholder="Dr Khan">
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="DoctorsNumber">Doctor's Number</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="DoctorsNumber" name="DoctorsNumber" type="text">
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Pleasetypeyourname">Please type your name</label>
    </div>
    <div class="md:w-2/3">
      <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Pleasetypeyourname" name="Pleasetypeyourname" type="text" placeholder="Firstname Lastname" required>
    </div>
  </div>

  <div class="md:flex mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Male Sports</label>
    </div>
    <div class="md:w-2/3">

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Mon - Mens Yoga" id="MaleSports_3">
        <span class="text-sm">
          Mon - Mens Yoga<span class="block ml-6 font-normal text-gray-400">8pm - Lanarkshire Mosque - £5 - Contact Feem 07714247787.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Mon - Mens Badminton" id="MaleSports_4">
        <span class="text-sm">
          Mon - Mens Badminton<span class="block ml-6 font-normal text-gray-400">9pm - Ravenscraig - £4 - Contact Imtiaz Ali 07834 010308.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Mon - MMA" id="MaleSports_5">
        <span class="text-sm">
          Mon - MMA<span class="block ml-6 font-normal text-gray-400">7pm - Maximum Power Scotland, Bellshill - £5 - Contact 01698 743050.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Tue - Tae Kwan Do (Adults / Kids)" id="MaleSports_6">
        <span class="text-sm">
          Tue - Tae Kwan Do<span class="block ml-6 font-normal text-gray-400"> (Adults / Kids) - 7pm - 9pm at John McCormack Community Centre, Motherwell Road, Carfin.- £3 - Contact Atief 07790 006583.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Tue - Basketball (over 16s)" id="MaleSports_7">
        <span class="text-sm">
          Tue - Basketball<span class="block ml-6 font-normal text-gray-400"> (over 16s) - 9pm at Sir Matt Busby, Bellshill - £3.50 - Contact Hussan to join 07505399587.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Wed - Kids Football Academy" id="MaleSports_8">
        <span class="text-sm">
          Wed - Kids Football Academy<span class="block ml-6 font-normal text-gray-400">8pm - 9pm - Ravenscraig, Motherwell, ages 4 - 8years old - Contact Adnan Ramzan - 07786 076358 ‭ - £3.50 per Class.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Wed - Kids Football Academy" id="MaleSports_9">
        <span class="text-sm">
          Wed - Kids Football Academy <span class="block ml-6 font-normal text-gray-400">7.30pm - 9pm - Ravenscraig, Motherwell, ages 9 - 12 years old - Contact Adnan Ramzan - 07786 076358‭ ‬- £4 per Class.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Wed - Adults Indoor Cricket" id="MaleSports_10">
        <span class="text-sm">
          Wed - Adults Indoor Cricket<span class="block ml-6 font-normal text-gray-400">7.30pm - 9.30pm - Dalziel High School - £3 - Contact Mubushar 07838 197022 - OFF at Moment.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Wed - Over 30s 7aside Football" id="MaleSports_11">
        <span class="text-sm">
          Wed - Over 30s 7aside Football<span class="block ml-6 font-normal text-gray-400">9pm - 10pm - Ravenscraig - £6 - Contact Feem 07714247787.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Wed - Tae Kwon Do Kids" id="MaleSports_12">
        <span class="text-sm">
          Wed - Tae Kwon Do Kids<span class="block ml-6 font-normal text-gray-400">6pm to 7pm at Lorne St Primary, Kinning Park, Glasgow - £3 - Contact Atief 07790 006583.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Wed - Tae Kwon Do Adults" id="MaleSports_13">
        <span class="text-sm">
          Wed - Tae Kwon Do Adults<span class="block ml-6 font-normal text-gray-400">7pm to 8pm at Lorne St Primary, Kinning Park, Glasgow - £3 - Contact Atief 07790 006583.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Thu / Sun - Adults Cricket Academy" id="MaleSports_14">
        <span class="text-sm">
          Thu / Sun - Adults Cricket Academy<span class="block ml-6 font-normal text-gray-400">9pm - Dalziel Grounds, Motherwell - Adults - Contact Imtiaz 07834 010308 - £5</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Thu - Kick Boxing - Maximum Power" id="MaleSports_15">
        <span class="text-sm">
          Thu - Kick Boxing<span class="block ml-6 font-normal text-gray-400">Maximum Power - 7pm - £5 - Contact 01698 743050.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Fri - Edinburgh Football Academy" id="MaleSports_16">
        <span class="text-sm">
          Fri - Edinburgh Football Academy<span class="block ml-6 font-normal text-gray-400">8.15pm - 9.30pm - Corn Exchange, Edinburgh - Ages 5 - 16years old - Contact Mohsin Akhtar 07903 001001 - £4 per class.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Fri - Under 16s Kids Football Academy" id="MaleSports_17">
        <span class="text-sm">
          Fri - Under 16s Kids Football Academy<span class="block ml-6 font-normal text-gray-400">8pm - 9pm - Ravenscraig, Motherwell ages 13 - 16 years old - Contact Feem Baq - 07714 247787 - £3 per class.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Fri - Div 2 Sevens Football" id="MaleSports_18">
        <span class="text-sm">
          Fri - Div 2 Sevens Football<span class="block ml-6 font-normal text-gray-400">9pm - 10pm - Ravenscraig, Motherwell, ages 14 and over years old - contact Feem 07714247787 - £5 per class.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Fri - Adults 7s League" id="MaleSports_19">
        <span class="text-sm">
          Fri - Adults 7s League<span class="block ml-6 font-normal text-gray-400">9pm - 10pm - Ravenscraig, Motherwell, Adults, contact Contact Feem 07714247787 - £6 per person.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Fri - Footaball" id="MaleSports_20">
        <span class="text-sm">
          Fri - Footaball<span class="block ml-6 font-normal text-gray-400">5.30pm - Aberdeen Soccer Academy - Contact Nav 07870 601691.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Sat - Boys Tae Kwan Do Classes" id="MaleSports_21">
        <span class="text-sm">
          Sat - Boys Tae Kwan Do Classes<span class="block ml-6 font-normal text-gray-400">10am - 11am - Lanarkshire Mosque - ages 5 to 14 years old - £3 per child - Contact Atief 07790 006583.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Sat - Park-run 5k" id="MaleSports_22">
        <span class="text-sm">
          Sat - Park-run 5k<span class="block ml-6 font-normal text-gray-400">9.30pm - Strathclyde Park - Free - Register here - <a class="relative flex text-sm font-medium text-indigo-500 underline" href="https://www.parkrun.org.uk/strathclyde/">https://www.parkrun.org.uk/strathclyde</a></span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Sat - Motherwell FC toddler Football" id="MaleSports_23">
        <span class="text-sm">
          Sat - Motherwell FC toddler Football<span class="block ml-6 font-normal text-gray-400">Fir Park - ages 18months - 5 years old - <a class="relative flex text-sm font-medium text-indigo-500 underline" href="https://www.motherwellfcct.co.uk">www.motherwellfcct.co.uk</a> or call 01698 239926.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Sun - Adults Cricket" id="MaleSports_24">
        <span class="text-sm">
          Sun - Adults Cricket<span class="block ml-6 font-normal text-gray-400">Dalziel Park - times TBC - contact Imtiaz 07834 010308 - £TBC.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Sun - Glasgow Football Academy" id="MaleSports_25">
        <span class="text-sm">
          Sun - Glasgow Football Academy<span class="block ml-6 font-normal text-gray-400">Super Soccer, Scotland St, Glasgow, 10.30am - 12pm - Contact Atta ‭07967 569588‬ - £3 Per Class.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Sun - Adult Male Boxing Fitness Classes" id="MaleSports_26">
        <span class="text-sm">
          Sun - Adult Male Boxing Fitness Classes<span class="block ml-6 font-normal text-gray-400">Maximum Power Scotland, Bellshill - 12pm - £5 - Contact Feem 07714247787</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Sun - Kids Boxing Exercise Classes" id="MaleSports_27">
        <span class="text-sm">
          Sun - Kids Boxing Exercise Classes<span class="block ml-6 font-normal text-gray-400"> 10 & Over - Bellshill - 12pm - £5 - Contact Feem 07714247787 - OFF</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Sun - Tae Kwon Do (kids and parents)" id="MaleSports_28">
        <span class="text-sm">
          Sun - Tae Kwon Do (kids and parents)<span class="block ml-6 font-normal text-gray-400">10am - 11am - New Stevenston Primary, Coronation Road East, New Stevenston - £3 - Contact Atief 07790 006583.</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Monthly events - Hill Walking" id="MaleSports_29">
        <span class="text-sm">
          Monthly events - Hill Walking.
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Mountain Climbing" id="MaleSports_30">
        <span class="text-sm">
          Mountain Climbing
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Cycle / Running / Walking Club" id="MaleSports_31">
        <span class="text-sm">
          Cycle Club TBC Running / Walking Club
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Massages">
        <span class="text-sm">
          Massages<span class="block ml-6 font-normal text-gray-400"> contact - Anthony 07463 655443</span>
        </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MaleSports[]" value="Physio" id="MaleSports_33">
        <span class="text-sm">
          Physio or Acupuncture<span class="block ml-6 font-normal text-gray-400"> contact - Amar 07795 692383</span>
        </span>
      </label>
    </div>
  </div>

  <div class="md:flex mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Female Sports</label>
    </div>
    <div class="md:w-2/3">

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Mon - Women’s Fitness Walk" id="FemaleSports_34">
        <span class="text-sm">Mon - Women’s Fitness Walk<span class="block ml-6 font-normal text-gray-400">10am - Strathclyde Park - Contact Faiza 07772 457478 (Off at Moment).</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Tue - Girls Netball" id="FemaleSports_35">
        <span class="text-sm">Tue - Girls Netball<span class="block ml-6 font-normal text-gray-400"> (7 - 15years old) - 5pm / 6pm - Ravenscraig, Motherwell - £23 per month - contact Craig.holmes@nllleisure.com.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Wed - Female Yoga" id="FemaleSports_36">
        <span class="text-sm">Wed - Female Yoga<span class="block ml-6 font-normal text-gray-400">5.45pm - 6.45pm - Holytown community Centre - £4 a class - Contact Ayisha 07738 698083.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Wed - Kids Football Academy" id="FemaleSports_37">
        <span class="text-sm">Wed - Kids Football Academy<span class="block ml-6 font-normal text-gray-400">8pm - 9pm - Ravenscraig, Motherwell, ages 4 - 8years old - Contact Adnan Ramzan - 07786 076358 ‭ - £3.50 per Class.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Wed - Female Boxercise classes" id="FemaleSports_38">
        <span class="text-sm">Wed - Female Boxercise classes<span class="block ml-6 font-normal text-gray-400">8pm - 9pm - Ravenscraig- £4 - contact Faiza 07772 457478.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Wed - Girls / Women's Badminton" id="FemaleSports_39">
        <span class="text-sm">Wed - Girls / Women's Badminton<span class="block ml-6 font-normal text-gray-400">8pm - 9pm - Ravenscraig, Motherwell - £3 - Contact Faiza 07772 457478.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Wed - Girls Tae Kwan Do self defence" id="FemaleSports_40">
        <span class="text-sm">Wed - Girls Tae Kwan Do self defence<span class="block ml-6 font-normal text-gray-400">7.15pm - 8.30pm - Lanarkshire Mosque - ages 5 - 15 years old - Contact Iqra 07462 228570 - £3 per Class.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Wed - Female Tae Kwon Do Kids" id="FemaleSports_41">
        <span class="text-sm">Wed - Tae Kwon Do Kids<span class="block ml-6 font-normal text-gray-400">6pm to 7pm at Lorne St Primary, Kinning Park, Glasgow - £3 - Contact Atief 07790 006583.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Thu - Female Kick Boxing" id="FemaleSports_42">
        <span class="text-sm">Thu - Kick Boxing<span class="block ml-6 font-normal text-gray-400">Maximum Power - 7pm - £5 - Contact 01698 743050.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Fri - Female Edinburgh Football Academy" id="FemaleSports_43">
        <span class="text-sm">Fri - Edinburgh Football Academy<span class="block ml-6 font-normal text-gray-400">8.15pm - 9.30pm - Corn Exchange, Edinburgh - Ages 5 - 16years old - Contact Mohsin Akhtar 07903 001001 - £4 per class.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Fri - Motherwell FC Girls Football" id="FemaleSports_44">
        <span class="text-sm">Fri - Motherwell FC Girls Football<span class="block ml-6 font-normal text-gray-400">6pm - 7pm - Fir Park, Motherwell - under 12s - Cost TBC - Contact <a class="relative flex text-sm font-medium text-indigo-500 underline" href="https://www.motherwellfcct.co.uk">www.motherwellfcct.co.uk</a> or call 01698 239926.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Sat - Female Parkrun 5k" id="FemaleSports_45">
        <span class="text-sm">Sat - Parkrun 5k<span class="block ml-6 font-normal text-gray-400">9.30pm - Strathclyde Park - Free - Register here - <a class="relative flex text-sm font-medium text-indigo-500 underline" href="https://www.parkrun.org.uk/strathclyde/">https://www.parkrun.org.uk/strathclyde</a></span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Sun - Female Glasgow Football Academy" id="FemaleSports_46">
        <span class="text-sm">Sun - Glasgow Football Academy<span class="block ml-6 font-normal text-gray-400">Super Soccer, Scotland St, Glasgow, 10.30am - 12pm - Contact Atta ‭07967 569588‬ - £3 Per Class.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Sun - Girls Tae Kwan Do self defence" id="FemaleSports_47">
        <span class="text-sm">Sun - Girls Tae Kwan Do self defence<span class="block ml-6 font-normal text-gray-400">7.15pm - 8.30pm - Lanarkshire Mosque - Contact Iqra 07462 228570 - £4 per Class.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Sun - Female Tae Kwon Do (kids and parents)" id="FemaleSports_48">
        <span class="text-sm">Sun - Tae Kwon Do<span class="block ml-6 font-normal text-gray-400"> (kids and parents) - 10am - 11am - New Stevenston Primary, Coronation Road East, New Stevenston - £3 - Contact Atief 07790 006583.</span></span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Monthly events - Female Hill Walking" id="FemaleSports_49">
        <span class="text-sm">Monthly events - Hill Walking.</span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Women's Cycle Club TBC Walking Club" id="FemaleSports_50">
        <span class="text-sm">Women's Cycle Club TBC Walking Club </span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="FemaleSports[]" value="Female Physio or Acupuncture">
        <span class="text-sm">Physio or Acupuncture<span class="block ml-6 font-normal text-gray-400"> contact - Amar 07795 692383</span></span>
      </label>
    </div>
  </div>
  <div class="md:flex mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Monthly Events</label>
    </div>
    <div class="md:w-2/3">

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MonthlyEvents[]" value="Monthly Cycle Club" id="MonthlyEvents_52">
        <span class="text-sm">Cycle Club</span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MonthlyEvents[]" value="Monthly 10k Great Scottish Run" id="MonthlyEvents_53">
        <span class="text-sm">10k Great Scottish Run</span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MonthlyEvents[]" value="Monthly 5K Movember Run" id="MonthlyEvents_54">
        <span class="text-sm">5K Movember Run</span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MonthlyEvents[]" value="Monthly Mountain Climbing" id="MonthlyEvents_55">
        <span class="text-sm">Mountain Climbing</span>
      </label>

      <label class="block text-gray-500 font-bold">
        <input class="mr-2 leading-tight" type="checkbox" name="MonthlyEvents[]" value="Monthly Water Sports" id="MonthlyEvents_56">
        <span class="text-sm">Water Sports</span>
      </label>
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:ring focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" data-errormsg="Send message" data-successmsg="Sending">
        Send
      </button>
    </div>
  </div>
</form>
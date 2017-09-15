
<!DOCTYPE html>
<html>
<head>
  <title>Title of the document</title>
  <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
  <script>

    function toObject(arr) {
      var rv = {};
      for (var i = 0; i < arr.length; ++i)
        rv[i] = arr[i];
      return rv;
    }

    $( document ).ready(function() {
      var $par = $(".category-list");
      var category;
      var subcategory;
      var data = new Array();

      var keywords = new Array();
      $par.children().each(function(index){
        if(index % 2 == 0){
          category = $(this).text().replace(/\([a-zA-Z]+\)/, "");
          data[category] = new Array();
        }
        else{
          $(this).children().each(function(){
            if($(this).children().length == 0){
              subcategory = $(this).text().trim().replace(/\([a-zA-Z\_\s]+\)/, "");
              data[category].push(subcategory);
            }
            else if($(this).children().length > 0){
              keywords[subcategory] = new Array();
              $(this).children().each(function(){
                keywords[subcategory].push($(this).text().trim().replace(/\([a-zA-Z]+\)/, ""));
              });
            }
          });
        }

      });



      for(var k in data)  {
        $("form").append('<input name="'+ k.trim()+'" type="hidden" value="'+data[k]+'"/>');
        for(var j in data[k]) {

        }
      }




      //$("#c").val(data);




     // console.log(keywords);
    });
  </script>
</head>

<body>
The content of the document......
<ul class="bullet-list-round category-list">
  <li> Active Life
    (active)
  </li>
  <ul class="bullet-list-round">
    <li> ATV Rentals/Tours
      (atvrentals)
    </li>
    <li> Airsoft
      (airsoft)
    </li>
    <li> Amateur Sports Teams
      (amateursportsteams)
    </li>
    <li> Amusement Parks
      (amusementparks)
    </li>
    <li> Aquariums
      (aquariums)
    </li>
    <li> Archery
      (archery)
    </li>
    <li> Badminton
      (badminton)
    </li>
    <li> Baseball Fields
      (baseballfields)
    </li>


    <li> Basketball Courts
      (basketballcourts)
    </li>


    <li> Batting Cages
      (battingcages)
    </li>


    <li> Beach Equipment Rentals
      (beachequipmentrental)
    </li>


    <li> Beaches
      (beaches)
    </li>


    <li> Bike Parking
      (bikeparking)
    </li>


    <li> Bike Rentals
      (bikerentals)
    </li>


    <li> Boating
      (boating)
    </li>


    <li> Bobsledding
      (bobsledding)
    </li>


    <li> Bocce Ball
      (bocceball)
    </li>


    <li> Bowling
      (bowling)
    </li>


    <li> Bubble Soccer
      (bubblesoccer)
    </li>


    <li> Bungee Jumping
      (bungeejumping)
    </li>


    <li> Carousels
      (carousels)
    </li>


    <li> Challenge Courses
      (challengecourses)
    </li>


    <li> Climbing
      (climbing)
    </li>


    <li> Cycling Classes
      (cyclingclasses)
    </li>


    <li> Day Camps
      (daycamps)
    </li>


    <li> Disc Golf
      (discgolf)
    </li>


    <li> Diving
      (diving)
    </li>

    <ul class="bullet-list-round">
      <li> Free Diving
        (freediving)
      </li>


      <li> Scuba Diving
        (scuba)
      </li>


    </ul>

    <li> Escape Games
      (escapegames)
    </li>


    <li> Fencing Clubs
      (fencing)
    </li>


    <li> Fishing
      (fishing)
    </li>


    <li> Fitness &amp; Instruction
      (fitness)
    </li>

    <ul class="bullet-list-round">
      <li> Aerial Fitness
        (aerialfitness)
      </li>


      <li> Barre Classes
        (barreclasses)
      </li>


      <li> Boot Camps
        (bootcamps)
      </li>


      <li> Boxing
        (boxing)
      </li>


      <li> Cardio Classes
        (cardioclasses)
      </li>


      <li> Dance Studios
        (dancestudio)
      </li>


      <li> Golf Lessons
        (golflessons)
      </li>


      <li> Gyms
        (gyms)
      </li>

      <ul class="bullet-list-round">
        <li> Circuit Training Gyms
          (circuittraininggyms)
        </li>


        <li> Interval Training Gyms
          (intervaltraininggyms)
        </li>


      </ul>

      <li> Martial Arts
        (martialarts)
      </li>

      <ul class="bullet-list-round">
        <li> Brazilian Jiu-jitsu
          (brazilianjiujitsu)
        </li>


        <li> Chinese Martial Arts
          (chinesemartialarts)
        </li>


        <li> Karate
          (karate)
        </li>


        <li> Kickboxing
          (kickboxing)
        </li>


        <li> Muay Thai
          (muaythai)
        </li>


        <li> Taekwondo
          (taekwondo)
        </li>


      </ul>

      <li> Meditation Centers
        (meditationcenters)
      </li>


      <li> Pilates
        (pilates)
      </li>


      <li> Qi Gong
        (qigong)
      </li>


      <li> Self-defense Classes
        (selfdefenseclasses)
      </li>


      <li> Swimming Lessons/Schools
        (swimminglessons)
      </li>


      <li> Tai Chi
        (taichi)
      </li>


      <li> Trainers
        (healthtrainers)
      </li>


      <li> Yoga
        (yoga)
      </li>


    </ul>

    <li> Flyboarding
      (flyboarding)
    </li>


    <li> Go Karts
      (gokarts)
    </li>


    <li> Golf
      (golf)
    </li>


    <li> Gun/Rifle Ranges
      (gun_ranges)
    </li>


    <li> Gymnastics
      (gymnastics)
    </li>


    <li> Hang Gliding
      (hanggliding)
    </li>


    <li> Hiking
      (hiking)
    </li>


    <li> Horse Racing
      (horseracing)
    </li>


    <li> Horseback Riding
      (horsebackriding)
    </li>


    <li> Hot Air Balloons
      (hot_air_balloons)
    </li>


    <li> Indoor Playcentre
      (indoor_playcenter)
    </li>


    <li> Jet Skis
      (jetskis)
    </li>


    <li> Kids Activities
      (kids_activities)
    </li>


    <li> Kiteboarding
      (kiteboarding)
    </li>


    <li> Lakes
      (lakes)
    </li>


    <li> Laser Tag
      (lasertag)
    </li>


    <li> Mini Golf
      (mini_golf)
    </li>


    <li> Mountain Biking
      (mountainbiking)
    </li>


    <li> Nudist
      (nudist)
    </li>


    <li> Paddleboarding
      (paddleboarding)
    </li>


    <li> Paintball
      (paintball)
    </li>


    <li> Parasailing
      (parasailing)
    </li>


    <li> Parks
      (parks)
    </li>

    <ul class="bullet-list-round">
      <li> Dog Parks
        (dog_parks)
      </li>


      <li> Skate Parks
        (skate_parks)
      </li>


    </ul>

    <li> Playgrounds
      (playgrounds)
    </li>


    <li> Races &amp; Competitions
      (races)
    </li>


    <li> Racing Experience
      (racingexperience)
    </li>


    <li> Rafting/Kayaking
      (rafting)
    </li>


    <li> Recreation Centers
      (recreation)
    </li>


    <li> Rock Climbing
      (rock_climbing)
    </li>


    <li> Sailing
      (sailing)
    </li>


    <li> Scavenger Hunts
      (scavengerhunts)
    </li>


    <li> Scooter Rentals
      (scooterrentals)
    </li>


    <li> Senior Centers
      (seniorcenters)
    </li>


    <li> Skating Rinks
      (skatingrinks)
    </li>


    <li> Skydiving
      (skydiving)
    </li>


    <li> Sledding
      (sledding)
    </li>


    <li> Snorkeling
      (snorkeling)
    </li>


    <li> Soccer
      (football)
    </li>


    <li> Sports Clubs
      (sports_clubs)
    </li>


    <li> Squash
      (squash)
    </li>


    <li> Summer Camps
      (summer_camps)
    </li>


    <li> Surfing
      (surfing)
    </li>


    <li> Swimming Pools
      (swimmingpools)
    </li>


    <li> Tennis
      (tennis)
    </li>


    <li> Trampoline Parks
      (trampoline)
    </li>


    <li> Tubing
      (tubing)
    </li>


    <li> Water Parks
      (waterparks)
    </li>


    <li> Wildlife Hunting Ranges
      (wildlifehunting)
    </li>


    <li> Ziplining
      (zipline)
    </li>


    <li> Zoos
      (zoos)
    </li>

    <ul class="bullet-list-round">
      <li> Petting Zoos
        (pettingzoos)
      </li>


    </ul>

    <li> Zorbing
      (zorbing)
    </li>


  </ul>

  <li> Arts &amp; Entertainment
    (arts)
  </li>

  <ul class="bullet-list-round">
    <li> Arcades
      (arcades)
    </li>


    <li> Art Galleries
      (galleries)
    </li>


    <li> Bingo Halls
      (bingo)
    </li>


    <li> Botanical Gardens
      (gardens)
    </li>


    <li> Cabaret
      (cabaret)
    </li>


    <li> Casinos
      (casinos)
    </li>


    <li> Cinema
      (movietheaters)
    </li>

    <ul class="bullet-list-round">
      <li> Drive-In Theater
        (driveintheater)
      </li>


      <li> Outdoor Movies
        (outdoormovies)
      </li>


    </ul>

    <li> Country Clubs
      (countryclubs)
    </li>


    <li> Cultural Center
      (culturalcenter)
    </li>


    <li> Eatertainment
      (eatertainment)
    </li>


    <li> Farms
      (farms)
    </li>

    <ul class="bullet-list-round">
      <li> Attraction Farms
        (attractionfarms)
      </li>


      <li> Pick Your Own Farms
        (pickyourown)
      </li>


      <li> Ranches
        (ranches)
      </li>


    </ul>

    <li> Festivals
      (festivals)
    </li>


    <li> Haunted Houses
      (hauntedhouses)
    </li>


    <li> Jazz &amp; Blues
      (jazzandblues)
    </li>


    <li> LAN Centers
      (lancenters)
    </li>


    <li> Makerspaces
      (makerspaces)
    </li>


    <li> Museums
      (museums)
    </li>

    <ul class="bullet-list-round">
      <li> Art Museums
        (artmuseums)
      </li>


      <li> Children's Museums
        (childrensmuseums)
      </li>


    </ul>

    <li> Music Venues
      (musicvenues)
    </li>


    <li> Observatories
      (observatories)
    </li>


    <li> Opera &amp; Ballet
      (opera)
    </li>


    <li> Paint &amp; Sip
      (paintandsip)
    </li>


    <li> Performing Arts
      (theater)
    </li>


    <li> Planetarium
      (planetarium)
    </li>


    <li> Professional Sports Teams
      (sportsteams)
    </li>


    <li> Race Tracks
      (racetracks)
    </li>


    <li> Rodeo
      (rodeo)
    </li>


    <li> Social Clubs
      (social_clubs)
    </li>

    <ul class="bullet-list-round">
      <li> Veterans Organizations
        (veteransorganizations)
      </li>


    </ul>

    <li> Stadiums &amp; Arenas
      (stadiumsarenas)
    </li>


    <li> Studio Taping
      (studiotaping)
    </li>


    <li> Supernatural Readings
      (psychic_astrology)
    </li>

    <ul class="bullet-list-round">
      <li> Astrologers
        (astrologers)
      </li>


      <li> Mystics
        (mystics)
      </li>


      <li> Psychic Mediums
        (psychicmediums)
      </li>


      <li> Psychics
        (psychics)
      </li>


    </ul>

    <li> Ticket Sales
      (ticketsales)
    </li>


    <li> Virtual Reality Centers
      (virtualrealitycenters)
    </li>


    <li> Wineries
      (wineries)
    </li>

    <ul class="bullet-list-round">
      <li> Wine Tasting Room
        (winetastingroom)
      </li>


    </ul>

  </ul>

  <li> Automotive
    (auto)
  </li>

  <ul class="bullet-list-round">
    <li> Aircraft Dealers
      (aircraftdealers)
    </li>


    <li> Aircraft Repairs
      (aircraftrepairs)
    </li>


    <li> Auto Customization
      (autocustomization)
    </li>


    <li> Auto Detailing
      (auto_detailing)
    </li>


    <li> Auto Glass Services
      (autoglass)
    </li>

    <ul class="bullet-list-round">
      <li> Car Window Tinting
        (carwindowtinting)
      </li>


    </ul>

    <li> Auto Loan Providers
      (autoloanproviders)
    </li>


    <li> Auto Parts &amp; Supplies
      (autopartssupplies)
    </li>


    <li> Auto Repair
      (autorepair)
    </li>

    <ul class="bullet-list-round">
      <li> DIY Auto Shop
        (diyautoshop)
      </li>


    </ul>

    <li> Auto Security
      (autosecurity)
    </li>


    <li> Auto Upholstery
      (autoupholstery)
    </li>


    <li> Boat Dealers
      (boatdealers)
    </li>


    <li> Body Shops
      (bodyshops)
    </li>


    <li> Car Auctions
      (carauctions)
    </li>


    <li> Car Brokers
      (carbrokers)
    </li>


    <li> Car Buyers
      (carbuyers)
    </li>


    <li> Car Dealers
      (car_dealers)
    </li>


    <li> Car Inspectors
      (autodamageassessment)
    </li>


    <li> Car Share Services
      (carshares)
    </li>


    <li> Car Stereo Installation
      (stereo_installation)
    </li>


    <li> Car Wash
      (carwash)
    </li>


    <li> Commercial Truck Dealers
      (truckdealers)
    </li>


    <li> Commercial Truck Repair
      (truckrepair)
    </li>


    <li> EV Charging Stations
      (evchargingstations)
    </li>


    <li> Fuel Docks
      (fueldocks)
    </li>


    <li> Gas Stations
      (servicestations)
    </li>


    <li> Golf Cart Dealers
      (golfcartdealers)
    </li>


    <li> Hybrid Car Repair
      (hybridcarrepair)
    </li>


    <li> Interlock Systems
      (interlocksystems)
    </li>


    <li> Marinas
      (marinas)
    </li>


    <li> Mobile Dent Repair
      (mobiledentrepair)
    </li>


    <li> Mobility Equipment Sales &amp; Services
      (mobilityequipment)
    </li>


    <li> Motorcycle Dealers
      (motorcycledealers)
    </li>


    <li> Motorcycle Repair
      (motorcyclerepair)
    </li>


    <li> Motorsport Vehicle Dealers
      (motodealers)
    </li>


    <li> Motorsport Vehicle Repairs
      (motorepairs)
    </li>


    <li> Oil Change Stations
      (oilchange)
    </li>


    <li> Parking
      (parking)
    </li>


    <li> RV Dealers
      (rv_dealers)
    </li>


    <li> RV Repair
      (rvrepair)
    </li>


    <li> Registration Services
      (registrationservices)
    </li>


    <li> Roadside Assistance
      (roadsideassist)
    </li>


    <li> Service Stations
      (service_stations)
    </li>


    <li> Smog Check Stations
      (smog_check_stations)
    </li>


    <li> Tires
      (tires)
    </li>


    <li> Towing
      (towing)
    </li>


    <li> Trailer Dealers
      (trailerdealers)
    </li>


    <li> Trailer Rental
      (trailerrental)
    </li>


    <li> Trailer Repair
      (trailerrepair)
    </li>


    <li> Transmission Repair
      (transmissionrepair)
    </li>


    <li> Truck Rental
      (truck_rental)
    </li>


    <li> Used Car Dealers
      (usedcardealers)
    </li>


    <li> Vehicle Shipping
      (vehicleshipping)
    </li>


    <li> Vehicle Wraps
      (vehiclewraps)
    </li>


    <li> Wheel &amp; Rim Repair
      (wheelrimrepair)
    </li>


    <li> Windshield Installation &amp; Repair
      (windshieldinstallrepair)
    </li>


  </ul>

  <li> Beauty &amp; Spas
    (beautysvc)
  </li>

  <ul class="bullet-list-round">
    <li> Acne Treatment
      (acnetreatment)
    </li>


    <li> Barbers
      (barbers)
    </li>


    <li> Cosmetics &amp; Beauty Supply
      (cosmetics)
    </li>


    <li> Day Spas
      (spas)
    </li>


    <li> Eyebrow Services
      (eyebrowservices)
    </li>


    <li> Eyelash Service
      (eyelashservice)
    </li>


    <li> Hair Extensions
      (hair_extensions)
    </li>


    <li> Hair Loss Centers
      (hairloss)
    </li>


    <li> Hair Removal
      (hairremoval)
    </li>

    <ul class="bullet-list-round">
      <li> Laser Hair Removal
        (laser_hair_removal)
      </li>


      <li> Sugaring
        (sugaring)
      </li>


      <li> Threading Services
        (threadingservices)
      </li>


      <li> Waxing
        (waxing)
      </li>


    </ul>

    <li> Hair Salons
      (hair)
    </li>

    <ul class="bullet-list-round">
      <li> Blow Dry/Out Services
        (blowoutservices)
      </li>


      <li> Hair Extensions
        (hair_extensions)
      </li>


      <li> Hair Stylists
        (hairstylists)
      </li>


      <li> Men's Hair Salons
        (menshair)
      </li>


    </ul>

    <li> Hot Springs
      (hotsprings)
    </li>


    <li> Makeup Artists
      (makeupartists)
    </li>


    <li> Massage
      (massage)
    </li>


    <li> Medical Spas
      (medicalspa)
    </li>


    <li> Nail Salons
      (othersalons)
    </li>

    <ul class="bullet-list-round">
      <li> Nail Technicians
        (nailtechnicians)
      </li>


    </ul>

    <li> Perfume
      (perfume)
    </li>


    <li> Permanent Makeup
      (permanentmakeup)
    </li>


    <li> Piercing
      (piercing)
    </li>


    <li> Skin Care
      (skincare)
    </li>


    <li> Tanning
      (tanning)
    </li>

    <ul class="bullet-list-round">
      <li> Spray Tanning
        (spraytanning)
      </li>


      <li> Tanning Beds
        (tanningbeds)
      </li>


    </ul>

    <li> Tattoo
      (tattoo)
    </li>


    <li> Teeth Whitening
      (teethwhitening)
    </li>


  </ul>

  <li> Education
    (education)
  </li>

  <ul class="bullet-list-round">
    <li> Adult Education
      (adultedu)
    </li>


    <li> Art Classes
      (artclasses)
    </li>

    <ul class="bullet-list-round">
      <li> Glass Blowing
        (glassblowing)
      </li>


    </ul>

    <li> College Counseling
      (collegecounseling)
    </li>


    <li> Colleges &amp; Universities
      (collegeuniv)
    </li>


    <li> Educational Services
      (educationservices)
    </li>


    <li> Elementary Schools
      (elementaryschools)
    </li>


    <li> Middle Schools &amp; High Schools
      (highschools)
    </li>


    <li> Montessori Schools
      (montessori)
    </li>


    <li> Preschools
      (preschools)
    </li>


    <li> Private Schools
      (privateschools)
    </li>


    <li> Private Tutors
      (privatetutors)
    </li>


    <li> Religious Schools
      (religiousschools)
    </li>


    <li> Special Education
      (specialed)
    </li>


    <li> Specialty Schools
      (specialtyschools)
    </li>

    <ul class="bullet-list-round">
      <li> Art Schools
        (artschools)
      </li>


      <li> Bartending Schools
        (bartendingschools)
      </li>


      <li> CPR Classes
        (cprclasses)
      </li>


      <li> Cheerleading
        (cheerleading)
      </li>


      <li> Childbirth Education
        (childbirthedu)
      </li>


      <li> Cooking Schools
        (cookingschools)
      </li>


      <li> Cosmetology Schools
        (cosmetology_schools)
      </li>


      <li> DUI Schools
        (duischools)
      </li>


      <li> Dance Schools
        (dance_schools)
      </li>


      <li> Driving Schools
        (driving_schools)
      </li>


      <li> Firearm Training
        (firearmtraining)
      </li>


      <li> First Aid Classes
        (firstaidclasses)
      </li>


      <li> Flight Instruction
        (flightinstruction)
      </li>


      <li> Food Safety Training
        (foodsafety)
      </li>


      <li> Language Schools
        (language_schools)
      </li>


      <li> Massage Schools
        (massage_schools)
      </li>


      <li> Nursing Schools
        (nursingschools)
      </li>


      <li> Parenting Classes
        (parentingclasses)
      </li>


      <li> Photography Classes
        (photoclasses)
      </li>


      <li> Pole Dancing Classes
        (poledancingclasses)
      </li>


      <li> Ski Schools
        (skischools)
      </li>


      <li> Speech Training
        (speechtraining)
      </li>


      <li> Surf Schools
        (surfschools)
      </li>


      <li> Swimming Lessons/Schools
        (swimminglessons)
      </li>


      <li> Traffic Schools
        (trafficschools)
      </li>


      <li> Vocational &amp; Technical School
        (vocation)
      </li>


    </ul>

    <li> Tasting Classes
      (tastingclasses)
    </li>

    <ul class="bullet-list-round">
      <li> Cheese Tasting Classes
        (cheesetastingclasses)
      </li>


      <li> Wine Tasting Classes
        (winetasteclasses)
      </li>


    </ul>

    <li> Test Preparation
      (testprep)
    </li>


    <li> Tutoring Centers
      (tutoring)
    </li>


    <li> Waldorf Schools
      (waldorfschools)
    </li>


  </ul>

  <li> Event Planning &amp; Services
    (eventservices)
  </li>

  <ul class="bullet-list-round">
    <li> Balloon Services
      (balloonservices)
    </li>


    <li> Bartenders
      (bartenders)
    </li>


    <li> Boat Charters
      (boatcharters)
    </li>


    <li> Cards &amp; Stationery
      (stationery)
    </li>


    <li> Caricatures
      (caricatures)
    </li>


    <li> Caterers
      (catering)
    </li>


    <li> Clowns
      (clowns)
    </li>


    <li> DJs
      (djs)
    </li>


    <li> Face Painting
      (facepainting)
    </li>


    <li> Floral Designers
      (floraldesigners)
    </li>


    <li> Game Truck Rental
      (gametruckrental)
    </li>


    <li> Golf Cart Rentals
      (golfcartrentals)
    </li>


    <li> Henna Artists
      (hennaartists)
    </li>


    <li> Hotels
      (hotels)
    </li>

    <ul class="bullet-list-round">
      <li> Mountain Huts
        (mountainhuts)
      </li>


      <li> Rest Stops
        (reststops)
      </li>


    </ul>

    <li> Magicians
      (magicians)
    </li>


    <li> Mohels
      (mohels)
    </li>


    <li> Musicians
      (musicians)
    </li>


    <li> Officiants
      (officiants)
    </li>


    <li> Party &amp; Event Planning
      (eventplanning)
    </li>


    <li> Party Bike Rentals
      (partybikerentals)
    </li>


    <li> Party Bus Rentals
      (partybusrentals)
    </li>


    <li> Party Characters
      (partycharacters)
    </li>


    <li> Party Equipment Rentals
      (partyequipmentrentals)
    </li>

    <ul class="bullet-list-round">
      <li> Audio/Visual Equipment Rental
        (audiovisualequipmentrental)
      </li>


      <li> Bounce House Rentals
        (bouncehouserentals)
      </li>


    </ul>

    <li> Party Supplies
      (partysupplies)
    </li>


    <li> Personal Chefs
      (personalchefs)
    </li>


    <li> Photo Booth Rentals
      (photoboothrentals)
    </li>


    <li> Photographers
      (photographers)
    </li>

    <ul class="bullet-list-round">
      <li> Boudoir Photography
        (boudoirphotography)
      </li>


      <li> Event Photography
        (eventphotography)
      </li>


      <li> Session Photography
        (sessionphotography)
      </li>


    </ul>

    <li> Silent Disco
      (silentdisco)
    </li>


    <li> Sommelier Services
      (sommelierservices)
    </li>


    <li> Team Building Activities
      (teambuilding)
    </li>


    <li> Trivia Hosts
      (triviahosts)
    </li>


    <li> Valet Services
      (valetservices)
    </li>


    <li> Venues &amp; Event Spaces
      (venues)
    </li>


    <li> Videographers
      (videographers)
    </li>


    <li> Wedding Chapels
      (weddingchappels)
    </li>


    <li> Wedding Planning
      (wedding_planning)
    </li>


  </ul>

  <li> Financial Services
    (financialservices)
  </li>

  <ul class="bullet-list-round">
    <li> Banks &amp; Credit Unions
      (banks)
    </li>


    <li> Business Financing
      (businessfinancing)
    </li>


    <li> Check Cashing/Pay-day Loans
      (paydayloans)
    </li>


    <li> Currency Exchange
      (currencyexchange)
    </li>


    <li> Debt Relief Services
      (debtrelief)
    </li>


    <li> Financial Advising
      (financialadvising)
    </li>


    <li> Installment Loans
      (installmentloans)
    </li>


    <li> Insurance
      (insurance)
    </li>

    <ul class="bullet-list-round">
      <li> Auto Insurance
        (autoinsurance)
      </li>


      <li> Home &amp; Rental Insurance
        (homeinsurance)
      </li>


      <li> Life Insurance
        (lifeinsurance)
      </li>


    </ul>

    <li> Investing
      (investing)
    </li>


    <li> Mortgage Lenders
      (mortgagelenders)
    </li>


    <li> Tax Services
      (taxservices)
    </li>


    <li> Title Loans
      (titleloans)
    </li>


  </ul>

  <li> Food
    (food)
  </li>

  <ul class="bullet-list-round">
    <li> Acai Bowls
      (acaibowls)
    </li>


    <li> Bagels
      (bagels)
    </li>


    <li> Bakeries
      (bakeries)
    </li>


    <li> Beer, Wine &amp; Spirits
      (beer_and_wine)
    </li>


    <li> Beverage Store
      (beverage_stores)
    </li>


    <li> Breweries
      (breweries)
    </li>

    <ul class="bullet-list-round">
      <li> Brewpubs
        (brewpubs)
      </li>


    </ul>

    <li> Bubble Tea
      (bubbletea)
    </li>


    <li> Butcher
      (butcher)
    </li>


    <li> CSA
      (csa)
    </li>


    <li> Chimney Cakes
      (chimneycakes)
    </li>


    <li> Cideries
      (cideries)
    </li>


    <li> Coffee &amp; Tea
      (coffee)
    </li>


    <li> Coffee Roasteries
      (coffeeroasteries)
    </li>


    <li> Convenience Stores
      (convenience)
    </li>


    <li> Cupcakes
      (cupcakes)
    </li>


    <li> Custom Cakes
      (customcakes)
    </li>


    <li> Desserts
      (desserts)
    </li>


    <li> Distilleries
      (distilleries)
    </li>


    <li> Do-It-Yourself Food
      (diyfood)
    </li>


    <li> Donuts
      (donuts)
    </li>


    <li> Empanadas
      (empanadas)
    </li>


    <li> Farmers Market
      (farmersmarket)
    </li>


    <li> Food Delivery Services
      (fooddeliveryservices)
    </li>


    <li> Food Trucks
      (foodtrucks)
    </li>


    <li> Gelato
      (gelato)
    </li>


    <li> Grocery
      (grocery)
    </li>


    <li> Honey
      (honey)
    </li>


    <li> Ice Cream &amp; Frozen Yogurt
      (icecream)
    </li>


    <li> Imported Food
      (importedfood)
    </li>


    <li> International Grocery
      (intlgrocery)
    </li>


    <li> Internet Cafes
      (internetcafe)
    </li>


    <li> Juice Bars &amp; Smoothies
      (juicebars)
    </li>


    <li> Kombucha
      (kombucha)
    </li>


    <li> Organic Stores
      (organic_stores)
    </li>


    <li> Patisserie/Cake Shop
      (cakeshop)
    </li>


    <li> Piadina
      (piadina)
    </li>


    <li> Poke
      (poke)
    </li>


    <li> Pretzels
      (pretzels)
    </li>


    <li> Shaved Ice
      (shavedice)
    </li>


    <li> Shaved Snow
      (shavedsnow)
    </li>


    <li> Smokehouse
      (smokehouse)
    </li>


    <li> Specialty Food
      (gourmet)
    </li>

    <ul class="bullet-list-round">
      <li> Candy Stores
        (candy)
      </li>


      <li> Cheese Shops
        (cheese)
      </li>


      <li> Chocolatiers &amp; Shops
        (chocolate)
      </li>


      <li> Fruits &amp; Veggies
        (markets)
      </li>


      <li> Health Markets
        (healthmarkets)
      </li>


      <li> Herbs &amp; Spices
        (herbsandspices)
      </li>


      <li> Macarons
        (macarons)
      </li>


      <li> Meat Shops
        (meats)
      </li>


      <li> Olive Oil
        (oliveoil)
      </li>


      <li> Pasta Shops
        (pastashops)
      </li>


      <li> Popcorn Shops
        (popcorn)
      </li>


      <li> Seafood Markets
        (seafoodmarkets)
      </li>


    </ul>

    <li> Street Vendors
      (streetvendors)
    </li>


    <li> Tea Rooms
      (tea)
    </li>


    <li> Water Stores
      (waterstores)
    </li>


    <li> Wineries
      (wineries)
    </li>

    <ul class="bullet-list-round">
      <li> Wine Tasting Room
        (winetastingroom)
      </li>


    </ul>

  </ul>

  <li> Health &amp; Medical
    (health)
  </li>

  <ul class="bullet-list-round">
    <li> Acupuncture
      (acupuncture)
    </li>


    <li> Alternative Medicine
      (alternativemedicine)
    </li>


    <li> Animal Assisted Therapy
      (animalassistedtherapy)
    </li>


    <li> Assisted Living Facilities
      (assistedliving)
    </li>


    <li> Ayurveda
      (ayurveda)
    </li>


    <li> Behavior Analysts
      (behavioranalysts)
    </li>


    <li> Blood &amp; Plasma Donation Centers
      (blooddonation)
    </li>


    <li> Body Contouring
      (bodycontouring)
    </li>


    <li> Cannabis Clinics
      (cannabis_clinics)
    </li>

    <ul class="bullet-list-round">
      <li> Cannabis Tours
        (cannabistours)
      </li>


    </ul>

    <li> Cannabis Collective
      (cannabiscollective)
    </li>


    <li> Chiropractors
      (chiropractors)
    </li>


    <li> Colonics
      (colonics)
    </li>


    <li> Concierge Medicine
      (conciergemedicine)
    </li>


    <li> Counseling &amp; Mental Health
      (c_and_mh)
    </li>

    <ul class="bullet-list-round">
      <li> Psychologists
        (psychologists)
      </li>


      <li> Sex Therapists
        (sextherapists)
      </li>


      <li> Sports Psychologists
        (sportspsychologists)
      </li>


    </ul>

    <li> Cryotherapy
      (cryotherapy)
    </li>


    <li> Dental Hygienists
      (dentalhygienists)
    </li>


    <li> Dentists
      (dentists)
    </li>

    <ul class="bullet-list-round">
      <li> Cosmetic Dentists
        (cosmeticdentists)
      </li>


      <li> Endodontists
        (endodontists)
      </li>


      <li> General Dentistry
        (generaldentistry)
      </li>


      <li> Oral Surgeons
        (oralsurgeons)
      </li>


      <li> Orthodontists
        (orthodontists)
      </li>


      <li> Pediatric Dentists
        (pediatric_dentists)
      </li>


      <li> Periodontists
        (periodontists)
      </li>


    </ul>

    <li> Diagnostic Services
      (diagnosticservices)
    </li>

    <ul class="bullet-list-round">
      <li> Diagnostic Imaging
        (diagnosticimaging)
      </li>


      <li> Laboratory Testing
        (laboratorytesting)
      </li>


    </ul>

    <li> Dialysis Clinics
      (dialysisclinics)
    </li>


    <li> Dietitians
      (dietitians)
    </li>


    <li> Doctors
      (physicians)
    </li>

    <ul class="bullet-list-round">
      <li> Addiction Medicine
        (addictionmedicine)
      </li>


      <li> Allergists
        (allergist)
      </li>


      <li> Anesthesiologists
        (anesthesiologists)
      </li>


      <li> Audiologist
        (audiologist)
      </li>


      <li> Cardiologists
        (cardiology)
      </li>


      <li> Cosmetic Surgeons
        (cosmeticsurgeons)
      </li>


      <li> Dermatologists
        (dermatology)
      </li>


      <li> Ear Nose &amp; Throat
        (earnosethroat)
      </li>


      <li> Emergency Medicine
        (emergencymedicine)
      </li>


      <li> Endocrinologists
        (endocrinologists)
      </li>


      <li> Family Practice
        (familydr)
      </li>


      <li> Fertility
        (fertility)
      </li>


      <li> Gastroenterologist
        (gastroenterologist)
      </li>


      <li> Geneticists
        (geneticists)
      </li>


      <li> Gerontologists
        (gerontologist)
      </li>


      <li> Hepatologists
        (hepatologists)
      </li>


      <li> Hospitalists
        (hospitalists)
      </li>


      <li> Immunodermatologists
        (immunodermatologists)
      </li>


      <li> Infectious Disease Specialists
        (infectiousdisease)
      </li>


      <li> Internal Medicine
        (internalmed)
      </li>


      <li> Naturopathic/Holistic
        (naturopathic)
      </li>


      <li> Nephrologists
        (nephrologists)
      </li>


      <li> Neurologist
        (neurologist)
      </li>


      <li> Neuropathologists
        (neuropathologists)
      </li>


      <li> Neurotologists
        (neurotologists)
      </li>


      <li> Obstetricians &amp; Gynecologists
        (obgyn)
      </li>


      <li> Oncologist
        (oncologist)
      </li>


      <li> Ophthalmologists
        (opthamalogists)
      </li>

      <ul class="bullet-list-round">
        <li> Retina Specialists
          (retinaspecialists)
        </li>


      </ul>

      <li> Orthopedists
        (orthopedists)
      </li>


      <li> Osteopathic Physicians
        (osteopathicphysicians)
      </li>


      <li> Otologists
        (otologists)
      </li>


      <li> Pain Management
        (painmanagement)
      </li>


      <li> Pathologists
        (pathologists)
      </li>


      <li> Pediatricians
        (pediatricians)
      </li>


      <li> Phlebologists
        (phlebologists)
      </li>


      <li> Plastic Surgeons
        (plasticsurgeons)
      </li>


      <li> Podiatrists
        (podiatrists)
      </li>


      <li> Preventive Medicine
        (preventivemedicine)
      </li>


      <li> Proctologists
        (proctologist)
      </li>


      <li> Psychiatrists
        (psychiatrists)
      </li>


      <li> Pulmonologist
        (pulmonologist)
      </li>


      <li> Radiologists
        (radiologists)
      </li>


      <li> Rheumatologists
        (rhematologists)
      </li>


      <li> Spine Surgeons
        (spinesurgeons)
      </li>


      <li> Sports Medicine
        (sportsmed)
      </li>


      <li> Surgeons
        (surgeons)
      </li>


      <li> Tattoo Removal
        (tattooremoval)
      </li>


      <li> Toxicologists
        (toxicologists)
      </li>


      <li> Undersea/Hyperbaric Medicine
        (underseamedicine)
      </li>


      <li> Urologists
        (urologists)
      </li>


      <li> Vascular Medicine
        (vascularmedicine)
      </li>


    </ul>

    <li> Doulas
      (doulas)
    </li>


    <li> Emergency Rooms
      (emergencyrooms)
    </li>


    <li> Float Spa
      (floatspa)
    </li>


    <li> Habilitative Services
      (habilitativeservices)
    </li>


    <li> Halfway Houses
      (halfwayhouses)
    </li>


    <li> Halotherapy
      (halotherapy)
    </li>


    <li> Health Coach
      (healthcoach)
    </li>


    <li> Health Insurance Offices
      (healthinsurance)
    </li>


    <li> Hearing Aid Providers
      (hearingaidproviders)
    </li>


    <li> Herbal Shops
      (herbalshops)
    </li>


    <li> Home Health Care
      (homehealthcare)
    </li>


    <li> Hospice
      (hospice)
    </li>


    <li> Hospitals
      (hospitals)
    </li>


    <li> Hydrotherapy
      (hydrotherapy)
    </li>


    <li> Hypnosis/Hypnotherapy
      (hypnosis)
    </li>


    <li> IV Hydration
      (ivhydration)
    </li>


    <li> Lactation Services
      (lactationservices)
    </li>


    <li> Laser Eye Surgery/Lasik
      (laserlasikeyes)
    </li>


    <li> Lice Services
      (liceservices)
    </li>


    <li> Massage Therapy
      (massage_therapy)
    </li>


    <li> Medical Cannabis Referrals
      (cannabisreferrals)
    </li>


    <li> Medical Centers
      (medcenters)
    </li>

    <ul class="bullet-list-round">
      <li> Walk-in Clinics
        (walkinclinics)
      </li>


    </ul>

    <li> Medical Spas
      (medicalspa)
    </li>


    <li> Medical Transportation
      (medicaltransportation)
    </li>


    <li> Midwives
      (midwives)
    </li>


    <li> Nurse Practitioner
      (nursepractitioner)
    </li>


    <li> Nutritionists
      (nutritionists)
    </li>


    <li> Occupational Therapy
      (occupationaltherapy)
    </li>


    <li> Optometrists
      (optometrists)
    </li>


    <li> Organ &amp; Tissue Donor Services
      (organdonorservices)
    </li>


    <li> Orthotics
      (orthotics)
    </li>


    <li> Oxygen Bars
      (oxygenbars)
    </li>


    <li> Personal Care Services
      (personalcare)
    </li>


    <li> Pharmacy
      (pharmacy)
    </li>


    <li> Physical Therapy
      (physicaltherapy)
    </li>


    <li> Placenta Encapsulations
      (placentaencapsulation)
    </li>


    <li> Prenatal/Perinatal Care
      (prenatal)
    </li>


    <li> Prosthetics
      (prosthetics)
    </li>


    <li> Prosthodontists
      (prosthodontists)
    </li>


    <li> Reflexology
      (reflexology)
    </li>


    <li> Rehabilitation Center
      (rehabilitation_center)
    </li>


    <li> Reiki
      (reiki)
    </li>


    <li> Retirement Homes
      (retirement_homes)
    </li>


    <li> Saunas
      (saunas)
    </li>


    <li> Skilled Nursing
      (skillednursing)
    </li>


    <li> Sleep Specialists
      (sleepspecialists)
    </li>


    <li> Speech Therapists
      (speech_therapists)
    </li>


    <li> Sperm Clinic
      (spermclinic)
    </li>


    <li> Traditional Chinese Medicine
      (tcm)
    </li>

    <ul class="bullet-list-round">
      <li> Tui Na
        (tuina)
      </li>


    </ul>

    <li> Urgent Care
      (urgent_care)
    </li>


    <li> Weight Loss Centers
      (weightlosscenters)
    </li>


  </ul>

  <li> Home Services
    (homeservices)
  </li>

  <ul class="bullet-list-round">
    <li> Artificial Turf
      (artificialturf)
    </li>


    <li> Building Supplies
      (buildingsupplies)
    </li>


    <li> Cabinetry
      (cabinetry)
    </li>


    <li> Carpenters
      (carpenters)
    </li>


    <li> Carpet Installation
      (carpetinstallation)
    </li>


    <li> Carpeting
      (carpeting)
    </li>


    <li> Childproofing
      (childproofing)
    </li>


    <li> Chimney Sweeps
      (chimneysweeps)
    </li>


    <li> Contractors
      (contractors)
    </li>


    <li> Countertop Installation
      (countertopinstall)
    </li>


    <li> Damage Restoration
      (damagerestoration)
    </li>


    <li> Decks &amp; Railing
      (decksrailing)
    </li>


    <li> Demolition Services
      (demolitionservices)
    </li>


    <li> Door Sales/Installation
      (doorsales)
    </li>


    <li> Drywall Installation &amp; Repair
      (drywall)
    </li>


    <li> Electricians
      (electricians)
    </li>


    <li> Excavation Services
      (excavationservices)
    </li>


    <li> Fences &amp; Gates
      (fencesgates)
    </li>


    <li> Fire Protection Services
      (fireprotection)
    </li>


    <li> Fireplace Services
      (fireplace)
    </li>


    <li> Firewood
      (firewood)
    </li>


    <li> Flooring
      (flooring)
    </li>


    <li> Foundation Repair
      (foundationrepair)
    </li>


    <li> Furniture Assembly
      (furnitureassembly)
    </li>


    <li> Garage Door Services
      (garage_door_services)
    </li>


    <li> Gardeners
      (gardeners)
    </li>


    <li> Glass &amp; Mirrors
      (glassandmirrors)
    </li>


    <li> Grout Services
      (groutservices)
    </li>


    <li> Gutter Services
      (gutterservices)
    </li>


    <li> Handyman
      (handyman)
    </li>


    <li> Heating &amp; Air Conditioning/HVAC
      (hvac)
    </li>


    <li> Holiday Decorating Services
      (seasonaldecorservices)
    </li>


    <li> Home Automation
      (homeautomation)
    </li>


    <li> Home Cleaning
      (homecleaning)
    </li>


    <li> Home Energy Auditors
      (homeenergyauditors)
    </li>


    <li> Home Inspectors
      (home_inspectors)
    </li>


    <li> Home Network Installation
      (homenetworkinstall)
    </li>


    <li> Home Organization
      (home_organization)
    </li>


    <li> Home Theatre Installation
      (hometheatreinstallation)
    </li>


    <li> Home Window Tinting
      (homewindowtinting)
    </li>


    <li> House Sitters
      (housesitters)
    </li>


    <li> Insulation Installation
      (insulationinstallation)
    </li>


    <li> Interior Design
      (interiordesign)
    </li>


    <li> Internet Service Providers
      (isps)
    </li>


    <li> Irrigation
      (irrigation)
    </li>


    <li> Keys &amp; Locksmiths
      (locksmiths)
    </li>


    <li> Landscape Architects
      (landscapearchitects)
    </li>


    <li> Landscaping
      (landscaping)
    </li>

    <ul class="bullet-list-round">
      <li> Lawn Services
        (lawnservices)
      </li>


    </ul>

    <li> Lighting Fixtures &amp; Equipment
      (lighting)
    </li>


    <li> Masonry/Concrete
      (masonry_concrete)
    </li>


    <li> Mobile Home Repair
      (mobile_home_repair)
    </li>


    <li> Movers
      (movers)
    </li>


    <li> Packing Services
      (packingservices)
    </li>


    <li> Painters
      (painters)
    </li>


    <li> Patio Coverings
      (patiocoverings)
    </li>


    <li> Plumbing
      (plumbing)
    </li>

    <ul class="bullet-list-round">
      <li> Backflow Services
        (backflowservices)
      </li>


    </ul>

    <li> Pool &amp; Hot Tub Service
      (poolservice)
    </li>


    <li> Pool Cleaners
      (poolcleaners)
    </li>


    <li> Pressure Washers
      (pressurewashers)
    </li>


    <li> Real Estate
      (realestate)
    </li>

    <ul class="bullet-list-round">
      <li> Apartments
        (apartments)
      </li>


      <li> Art Space Rentals
        (artspacerentals)
      </li>


      <li> Commercial Real Estate
        (commercialrealestate)
      </li>


      <li> Condominiums
        (condominiums)
      </li>


      <li> Estate Liquidation
        (estateliquidation)
      </li>


      <li> Home Developers
        (homedevelopers)
      </li>


      <li> Home Staging
        (homestaging)
      </li>


      <li> Homeowner Association
        (homeownerassociation)
      </li>


      <li> Housing Cooperatives
        (housingcooperatives)
      </li>


      <li> Kitchen Incubators
        (kitchenincubators)
      </li>


      <li> Mobile Home Dealers
        (mobilehomes)
      </li>


      <li> Mobile Home Parks
        (mobileparks)
      </li>


      <li> Mortgage Brokers
        (mortgagebrokers)
      </li>


      <li> Property Management
        (propertymgmt)
      </li>


      <li> Real Estate Agents
        (realestateagents)
      </li>


      <li> Real Estate Services
        (realestatesvcs)
      </li>

      <ul class="bullet-list-round">
        <li> Land Surveying
          (landsurveying)
        </li>


        <li> Real Estate Photography
          (estatephotography)
        </li>


      </ul>

      <li> Shared Office Spaces
        (sharedofficespaces)
      </li>


      <li> University Housing
        (university_housing)
      </li>


    </ul>

    <li> Refinishing Services
      (refinishing)
    </li>


    <li> Roof Inspectors
      (roofinspectors)
    </li>


    <li> Roofing
      (roofing)
    </li>


    <li> Security Systems
      (securitysystems)
    </li>


    <li> Shades &amp; Blinds
      (blinds)
    </li>


    <li> Shutters
      (shutters)
    </li>


    <li> Siding
      (vinylsiding)
    </li>


    <li> Solar Installation
      (solarinstallation)
    </li>


    <li> Solar Panel Cleaning
      (solarpanelcleaning)
    </li>


    <li> Structural Engineers
      (structuralengineers)
    </li>


    <li> Stucco Services
      (stucco)
    </li>


    <li> Television Service Providers
      (televisionserviceproviders)
    </li>


    <li> Tiling
      (tiling)
    </li>


    <li> Tree Services
      (treeservices)
    </li>


    <li> Utilities
      (utilities)
    </li>


    <li> Wallpapering
      (wallpapering)
    </li>


    <li> Water Heater Installation/Repair
      (waterheaterinstallrepair)
    </li>


    <li> Water Purification Services
      (waterpurification)
    </li>


    <li> Waterproofing
      (waterproofing)
    </li>


    <li> Window Washing
      (windowwashing)
    </li>


    <li> Windows Installation
      (windowsinstallation)
    </li>


  </ul>

  <li> Hotels &amp; Travel
    (hotelstravel)
  </li>

  <ul class="bullet-list-round">
    <li> Airports
      (airports)
    </li>

    <ul class="bullet-list-round">
      <li> Airport Terminals
        (airportterminals)
      </li>


    </ul>

    <li> Bed &amp; Breakfast
      (bedbreakfast)
    </li>


    <li> Campgrounds
      (campgrounds)
    </li>


    <li> Car Rental
      (carrental)
    </li>


    <li> Guest Houses
      (guesthouses)
    </li>


    <li> Health Retreats
      (healthretreats)
    </li>


    <li> Hostels
      (hostels)
    </li>


    <li> Hotels
      (hotels)
    </li>

    <ul class="bullet-list-round">
      <li> Mountain Huts
        (mountainhuts)
      </li>


      <li> Rest Stops
        (reststops)
      </li>


    </ul>

    <li> Motorcycle Rental
      (motorcycle_rental)
    </li>


    <li> RV Parks
      (rvparks)
    </li>


    <li> RV Rental
      (rvrental)
    </li>


    <li> Resorts
      (resorts)
    </li>


    <li> Ski Resorts
      (skiresorts)
    </li>


    <li> Tours
      (tours)
    </li>

    <ul class="bullet-list-round">
      <li> Aerial Tours
        (aerialtours)
      </li>


      <li> Architectural Tours
        (architecturaltours)
      </li>


      <li> Art Tours
        (arttours)
      </li>


      <li> Beer Tours
        (beertours)
      </li>


      <li> Bike tours
        (biketours)
      </li>


      <li> Boat Tours
        (boattours)
      </li>


      <li> Bus Tours
        (bustours)
      </li>


      <li> Food Tours
        (foodtours)
      </li>


      <li> Historical Tours
        (historicaltours)
      </li>


      <li> Scooter Tours
        (scootertours)
      </li>


      <li> Walking Tours
        (walkingtours)
      </li>


      <li> Whale Watching Tours
        (whalewatchingtours)
      </li>


      <li> Wine Tours
        (winetours)
      </li>


    </ul>

    <li> Train Stations
      (trainstations)
    </li>


    <li> Transportation
      (transport)
    </li>

    <ul class="bullet-list-round">
      <li> Airlines
        (airlines)
      </li>


      <li> Airport Shuttles
        (airport_shuttles)
      </li>


      <li> Bike Sharing
        (bikesharing)
      </li>


      <li> Bus Stations
        (busstations)
      </li>


      <li> Buses
        (buses)
      </li>


      <li> Cable Cars
        (cablecars)
      </li>


      <li> Ferries
        (ferries)
      </li>


      <li> Limos
        (limos)
      </li>


      <li> Metro Stations
        (metrostations)
      </li>


      <li> Pedicabs
        (pedicabs)
      </li>


      <li> Private Jet Charter
        (privatejetcharter)
      </li>


      <li> Public Transportation
        (publictransport)
      </li>


      <li> Taxis
        (taxis)
      </li>


      <li> Town Car Service
        (towncarservice)
      </li>


      <li> Trains
        (trains)
      </li>


    </ul>

    <li> Travel Services
      (travelservices)
    </li>

    <ul class="bullet-list-round">
      <li> Luggage Storage
        (luggagestorage)
      </li>


      <li> Passport &amp; Visa Services
        (passportvisaservices)
      </li>


      <li> Travel Agents
        (travelagents)
      </li>


      <li> Visitor Centers
        (visitorcenters)
      </li>


    </ul>

    <li> Vacation Rental Agents
      (vacationrentalagents)
    </li>


    <li> Vacation Rentals
      (vacation_rentals)
    </li>


  </ul>

  <li> Local Flavor
    (localflavor)
  </li>

  <ul class="bullet-list-round">
    <li> Parklets
      (parklets)
    </li>


    <li> Public Art
      (publicart)
    </li>


    <li> Unofficial Yelp Events
      (unofficialyelpevents)
    </li>


    <li> Yelp Events
      (yelpevents)
    </li>


  </ul>

  <li> Local Services
    (localservices)
  </li>

  <ul class="bullet-list-round">
    <li> 3D Printing
      (3dprinting)
    </li>


    <li> Adoption Services
      (adoptionservices)
    </li>


    <li> Air Duct Cleaning
      (airductcleaning)
    </li>


    <li> Appliances &amp; Repair
      (homeappliancerepair)
    </li>


    <li> Appraisal Services
      (appraisalservices)
    </li>


    <li> Art Restoration
      (artrestoration)
    </li>


    <li> Awnings
      (awnings)
    </li>


    <li> Bail Bondsmen
      (bailbondsmen)
    </li>


    <li> Bike Repair/Maintenance
      (bike_repair_maintenance)
    </li>


    <li> Bookbinding
      (bookbinding)
    </li>


    <li> Bus Rental
      (busrental)
    </li>


    <li> Calligraphy
      (calligraphy)
    </li>


    <li> Carpet Cleaning
      (carpet_cleaning)
    </li>


    <li> Carpet Dyeing
      (carpetdyeing)
    </li>


    <li> Child Care &amp; Day Care
      (childcare)
    </li>


    <li> Clock Repair
      (clockrepair)
    </li>


    <li> Community Book Box
      (communitybookbox)
    </li>


    <li> Community Gardens
      (communitygardens)
    </li>


    <li> Community Service/Non-Profit
      (nonprofit)
    </li>

    <ul class="bullet-list-round">
      <li> Food Banks
        (foodbanks)
      </li>


      <li> Homeless Shelters
        (homelessshelters)
      </li>


    </ul>

    <li> Couriers &amp; Delivery Services
      (couriers)
    </li>


    <li> Crane Services
      (craneservices)
    </li>


    <li> Donation Center
      (donationcenter)
    </li>


    <li> Elder Care Planning
      (eldercareplanning)
    </li>


    <li> Electronics Repair
      (electronicsrepair)
    </li>


    <li> Engraving
      (engraving)
    </li>


    <li> Environmental Abatement
      (enviroabatement)
    </li>


    <li> Environmental Testing
      (environmentaltesting)
    </li>


    <li> Farm Equipment Repair
      (farmequipmentrepair)
    </li>


    <li> Fingerprinting
      (fingerprinting)
    </li>


    <li> Funeral Services &amp; Cemeteries
      (funeralservices)
    </li>

    <ul class="bullet-list-round">
      <li> Cremation Services
        (cremationservices)
      </li>


      <li> Mortuary Services
        (mortuaryservices)
      </li>


    </ul>

    <li> Furniture Rental
      (rentfurniture)
    </li>


    <li> Furniture Repair
      (furniturerepair)
    </li>


    <li> Furniture Reupholstery
      (reupholstery)
    </li>


    <li> Generator Installation/Repair
      (generatorinstallrepair)
    </li>


    <li> Gunsmith
      (gunsmith)
    </li>


    <li> Hazardous Waste Disposal
      (hazardouswastedisposal)
    </li>


    <li> Hydro-jetting
      (hydrojetting)
    </li>


    <li> IT Services &amp; Computer Repair
      (itservices)
    </li>

    <ul class="bullet-list-round">
      <li> Data Recovery
        (datarecovery)
      </li>


      <li> Mobile Phone Repair
        (mobilephonerepair)
      </li>


      <li> Telecommunications
        (telecommunications)
      </li>


    </ul>

    <li> Ice Delivery
      (icedelivery)
    </li>


    <li> Jewelry Repair
      (jewelryrepair)
    </li>


    <li> Junk Removal &amp; Hauling
      (junkremovalandhauling)
    </li>

    <ul class="bullet-list-round">
      <li> Dumpster Rental
        (dumpsterrental)
      </li>


    </ul>

    <li> Junkyards
      (junkyards)
    </li>


    <li> Knife Sharpening
      (knifesharpening)
    </li>


    <li> Laundry Services
      (laundryservices)
    </li>

    <ul class="bullet-list-round">
      <li> Dry Cleaning
        (dryclean)
      </li>


      <li> Laundromat
        (laundromat)
      </li>


    </ul>

    <li> Machine &amp; Tool Rental
      (machinerental)
    </li>


    <li> Machine Shops
      (machineshops)
    </li>


    <li> Mailbox Centers
      (mailboxcenters)
    </li>


    <li> Metal Fabricators
      (metalfabricators)
    </li>


    <li> Misting System Services
      (mistingsystemservices)
    </li>


    <li> Musical Instrument Services
      (musicinstrumentservices)
    </li>

    <ul class="bullet-list-round">
      <li> Guitar Stores
        (guitarstores)
      </li>


      <li> Piano Services
        (pianoservices)
      </li>


      <li> Piano Stores
        (pianostores)
      </li>


      <li> Vocal Coach
        (vocalcoach)
      </li>


    </ul>

    <li> Nanny Services
      (nannys)
    </li>


    <li> Notaries
      (notaries)
    </li>


    <li> Pest Control
      (pest_control)
    </li>


    <li> Powder Coating
      (powdercoating)
    </li>


    <li> Printing Services
      (copyshops)
    </li>


    <li> Propane
      (propane)
    </li>


    <li> Recording &amp; Rehearsal Studios
      (recording_studios)
    </li>


    <li> Recycling Center
      (recyclingcenter)
    </li>


    <li> Sandblasting
      (sandblasting)
    </li>


    <li> Screen Printing
      (screenprinting)
    </li>


    <li> Screen Printing/T-Shirt Printing
      (screen_printing_tshirt_printing)
    </li>


    <li> Self Storage
      (selfstorage)
    </li>


    <li> Septic Services
      (septicservices)
    </li>


    <li> Sewing &amp; Alterations
      (sewingalterations)
    </li>


    <li> Shipping Centers
      (shipping_centers)
    </li>


    <li> Shoe Repair
      (shoerepair)
    </li>


    <li> Shoe Shine
      (shoeshine)
    </li>


    <li> Snow Removal
      (snowremoval)
    </li>


    <li> Snuggle Services
      (snuggleservices)
    </li>


    <li> TV Mounting
      (tvmounting)
    </li>


    <li> Watch Repair
      (watch_repair)
    </li>


    <li> Water Delivery
      (waterdelivery)
    </li>


    <li> Well Drilling
      (welldrilling)
    </li>


    <li> Wildlife Control
      (wildlifecontrol)
    </li>


  </ul>

  <li> Mass Media
    (massmedia)
  </li>

  <ul class="bullet-list-round">
    <li> Print Media
      (printmedia)
    </li>


    <li> Radio Stations
      (radiostations)
    </li>


    <li> Television Stations
      (televisionstations)
    </li>


  </ul>

  <li> Nightlife
    (nightlife)
  </li>

  <ul class="bullet-list-round">
    <li> Adult Entertainment
      (adultentertainment)
    </li>

    <ul class="bullet-list-round">
      <li> Strip Clubs
        (stripclubs)
      </li>


      <li> Striptease Dancers
        (stripteasedancers)
      </li>


    </ul>

    <li> Bar Crawl
      (barcrawl)
    </li>


    <li> Bars
      (bars)
    </li>

    <ul class="bullet-list-round">
      <li> Airport Lounges
        (airportlounges)
      </li>


      <li> Beer Bar
        (beerbar)
      </li>


      <li> Champagne Bars
        (champagne_bars)
      </li>


      <li> Cigar Bars
        (cigarbars)
      </li>


      <li> Cocktail Bars
        (cocktailbars)
      </li>


      <li> Dive Bars
        (divebars)
      </li>


      <li> Drive-Thru Bars
        (drivethrubars)
      </li>


      <li> Gay Bars
        (gaybars)
      </li>


      <li> Hookah Bars
        (hookah_bars)
      </li>


      <li> Irish Pub
        (irish_pubs)
      </li>


      <li> Lounges
        (lounges)
      </li>


      <li> Pubs
        (pubs)
      </li>


      <li> Speakeasies
        (speakeasies)
      </li>


      <li> Sports Bars
        (sportsbars)
      </li>


      <li> Tiki Bars
        (tikibars)
      </li>


      <li> Vermouth Bars
        (vermouthbars)
      </li>


      <li> Whiskey Bars
        (whiskeybars)
      </li>


      <li> Wine Bars
        (wine_bars)
      </li>


    </ul>

    <li> Beer Gardens
      (beergardens)
    </li>


    <li> Club Crawl
      (clubcrawl)
    </li>


    <li> Comedy Clubs
      (comedyclubs)
    </li>


    <li> Country Dance Halls
      (countrydancehalls)
    </li>


    <li> Dance Clubs
      (danceclubs)
    </li>


    <li> Jazz &amp; Blues
      (jazzandblues)
    </li>


    <li> Karaoke
      (karaoke)
    </li>


    <li> Music Venues
      (musicvenues)
    </li>


    <li> Piano Bars
      (pianobars)
    </li>


    <li> Pool Halls
      (poolhalls)
    </li>


  </ul>

  <li> Pets
    (pets)
  </li>

  <ul class="bullet-list-round">
    <li> Animal Shelters
      (animalshelters)
    </li>


    <li> Horse Boarding
      (horse_boarding)
    </li>


    <li> Pet Adoption
      (petadoption)
    </li>


    <li> Pet Services
      (petservices)
    </li>

    <ul class="bullet-list-round">
      <li> Animal Physical Therapy
        (animalphysicaltherapy)
      </li>


      <li> Aquarium Services
        (aquariumservices)
      </li>


      <li> Dog Walkers
        (dogwalkers)
      </li>


      <li> Emergency Pet Hospital
        (emergencypethospital)
      </li>


      <li> Farriers
        (farriers)
      </li>


      <li> Holistic Animal Care
        (animalholistic)
      </li>


      <li> Pet Breeders
        (petbreeders)
      </li>


      <li> Pet Cremation Services
        (petcremation)
      </li>


      <li> Pet Groomers
        (groomer)
      </li>


      <li> Pet Hospice
        (pethospice)
      </li>


      <li> Pet Insurance
        (petinsurance)
      </li>


      <li> Pet Photography
        (petphotography)
      </li>


      <li> Pet Sitting
        (pet_sitting)
      </li>

      <ul class="bullet-list-round">
        <li> Pet Boarding
          (petboarding)
        </li>


      </ul>

      <li> Pet Training
        (pet_training)
      </li>


      <li> Pet Transportation
        (pettransport)
      </li>


    </ul>

    <li> Pet Stores
      (petstore)
    </li>

    <ul class="bullet-list-round">
      <li> Bird Shops
        (birdshops)
      </li>


      <li> Local Fish Stores
        (localfishstores)
      </li>


      <li> Reptile Shops
        (reptileshops)
      </li>


    </ul>

    <li> Veterinarians
      (vet)
    </li>


  </ul>

  <li> Professional Services
    (professional)
  </li>

  <ul class="bullet-list-round">
    <li> Accountants
      (accountants)
    </li>


    <li> Advertising
      (advertising)
    </li>


    <li> Architects
      (architects)
    </li>


    <li> Billing Services
      (billingservices)
    </li>


    <li> Boat Repair
      (boatrepair)
    </li>


    <li> Bookkeepers
      (bookkeepers)
    </li>


    <li> Business Consulting
      (businessconsulting)
    </li>


    <li> Career Counseling
      (careercounseling)
    </li>


    <li> Commissioned Artists
      (commissionedartists)
    </li>


    <li> Customs Brokers
      (customsbrokers)
    </li>


    <li> Digitizing Services
      (digitizingservices)
    </li>


    <li> Duplication Services
      (duplicationservices)
    </li>


    <li> Editorial Services
      (editorialservices)
    </li>


    <li> Employment Agencies
      (employmentagencies)
    </li>


    <li> Feng Shui
      (fengshui)
    </li>


    <li> Graphic Design
      (graphicdesign)
    </li>


    <li> Indoor Landscaping
      (indoorlandscaping)
    </li>


    <li> Internet Service Providers
      (isps)
    </li>


    <li> Lawyers
      (lawyers)
    </li>

    <ul class="bullet-list-round">
      <li> Bankruptcy Law
        (bankruptcy)
      </li>


      <li> Business Law
        (businesslawyers)
      </li>


      <li> Contract Law
        (contractlaw)
      </li>


      <li> Criminal Defense Law
        (criminaldefense)
      </li>


      <li> DUI Law
        (duilawyers)
      </li>


      <li> Disability Law
        (disabilitylaw)
      </li>


      <li> Divorce &amp; Family Law
        (divorce)
      </li>


      <li> Employment Law
        (employmentlawyers)
      </li>


      <li> Entertainment Law
        (entertainmentlaw)
      </li>


      <li> Estate Planning Law
        (estateplanning)
      </li>

      <ul class="bullet-list-round">
        <li> Wills, Trusts, &amp; Probates
          (willstrustsprobates)
        </li>


      </ul>

      <li> General Litigation
        (general_litigation)
      </li>


      <li> IP &amp; Internet Law
        (iplaw)
      </li>


      <li> Immigration Law
        (immigrationlawyers)
      </li>


      <li> Medical Law
        (medicallaw)
      </li>


      <li> Personal Injury Law
        (personal_injury)
      </li>


      <li> Real Estate Law
        (realestatelawyers)
      </li>


      <li> Social Security Law
        (socialsecuritylaw)
      </li>


      <li> Tax Law
        (taxlaw)
      </li>


      <li> Traffic Ticketing Law
        (trafficticketinglaw)
      </li>


      <li> Workers Compensation Law
        (workerscomplaw)
      </li>


    </ul>

    <li> Legal Services
      (legalservices)
    </li>

    <ul class="bullet-list-round">
      <li> Court Reporters
        (courtreporters)
      </li>


      <li> Process Servers
        (processservers)
      </li>


    </ul>

    <li> Life Coach
      (lifecoach)
    </li>


    <li> Marketing
      (marketing)
    </li>


    <li> Matchmakers
      (matchmakers)
    </li>


    <li> Mediators
      (mediators)
    </li>


    <li> Music Production Services
      (musicproduction)
    </li>


    <li> Office Cleaning
      (officecleaning)
    </li>


    <li> Patent Law
      (patentlaw)
    </li>


    <li> Payroll Services
      (payroll)
    </li>


    <li> Personal Assistants
      (personalassistants)
    </li>


    <li> Private Investigation
      (privateinvestigation)
    </li>


    <li> Product Design
      (productdesign)
    </li>


    <li> Public Adjusters
      (publicadjusters)
    </li>


    <li> Public Relations
      (publicrelations)
    </li>


    <li> Security Services
      (security)
    </li>


    <li> Shredding Services
      (shredding)
    </li>


    <li> Signmaking
      (signmaking)
    </li>


    <li> Software Development
      (softwaredevelopment)
    </li>


    <li> Talent Agencies
      (talentagencies)
    </li>


    <li> Taxidermy
      (taxidermy)
    </li>


    <li> Tenant and Eviction Law
      (tenantlaw)
    </li>


    <li> Translation Services
      (translationservices)
    </li>


    <li> Video/Film Production
      (videofilmproductions)
    </li>


    <li> Web Design
      (web_design)
    </li>


    <li> Wholesalers
      (wholesalers)
    </li>

    <ul class="bullet-list-round">
      <li> Restaurant Supplies
        (suppliesrestaurant)
      </li>


    </ul>

  </ul>

  <li> Public Services &amp; Government
    (publicservicesgovt)
  </li>

  <ul class="bullet-list-round">
    <li> Civic Center
      (civiccenter)
    </li>


    <li> Community Centers
      (communitycenters)
    </li>


    <li> Courthouses
      (courthouses)
    </li>


    <li> Departments of Motor Vehicles
      (departmentsofmotorvehicles)
    </li>


    <li> Embassy
      (embassy)
    </li>


    <li> Fire Departments
      (firedepartments)
    </li>


    <li> Landmarks &amp; Historical Buildings
      (landmarks)
    </li>


    <li> Libraries
      (libraries)
    </li>


    <li> Municipality
      (municipality)
    </li>


    <li> Police Departments
      (policedepartments)
    </li>


    <li> Post Offices
      (postoffices)
    </li>


    <li> Town Hall
      (townhall)
    </li>


  </ul>

  <li> Real Estate
    (realestate)
  </li>

  <ul class="bullet-list-round">
    <li> Apartments
      (apartments)
    </li>


    <li> Art Space Rentals
      (artspacerentals)
    </li>


    <li> Commercial Real Estate
      (commercialrealestate)
    </li>


    <li> Condominiums
      (condominiums)
    </li>


    <li> Estate Liquidation
      (estateliquidation)
    </li>


    <li> Home Developers
      (homedevelopers)
    </li>


    <li> Home Staging
      (homestaging)
    </li>


    <li> Homeowner Association
      (homeownerassociation)
    </li>


    <li> Housing Cooperatives
      (housingcooperatives)
    </li>


    <li> Kitchen Incubators
      (kitchenincubators)
    </li>


    <li> Mobile Home Dealers
      (mobilehomes)
    </li>


    <li> Mobile Home Parks
      (mobileparks)
    </li>


    <li> Mortgage Brokers
      (mortgagebrokers)
    </li>


    <li> Property Management
      (propertymgmt)
    </li>


    <li> Real Estate Agents
      (realestateagents)
    </li>


    <li> Real Estate Services
      (realestatesvcs)
    </li>

    <ul class="bullet-list-round">
      <li> Land Surveying
        (landsurveying)
      </li>


      <li> Real Estate Photography
        (estatephotography)
      </li>


    </ul>

    <li> Shared Office Spaces
      (sharedofficespaces)
    </li>


    <li> University Housing
      (university_housing)
    </li>


  </ul>

  <li> Religious Organizations
    (religiousorgs)
  </li>

  <ul class="bullet-list-round">
    <li> Buddhist Temples
      (buddhist_temples)
    </li>


    <li> Churches
      (churches)
    </li>


    <li> Hindu Temples
      (hindu_temples)
    </li>


    <li> Mosques
      (mosques)
    </li>


    <li> Synagogues
      (synagogues)
    </li>


  </ul>

  <li> Restaurants
    (restaurants)
  </li>

  <ul class="bullet-list-round">
    <li> Afghan
      (afghani)
    </li>


    <li> African
      (african)
    </li>

    <ul class="bullet-list-round">
      <li> Senegalese
        (senegalese)
      </li>


      <li> South African
        (southafrican)
      </li>


    </ul>

    <li> American (New)
      (newamerican)
    </li>


    <li> American (Traditional)
      (tradamerican)
    </li>


    <li> Arabian
      (arabian)
    </li>


    <li> Argentine
      (argentine)
    </li>


    <li> Armenian
      (armenian)
    </li>


    <li> Asian Fusion
      (asianfusion)
    </li>


    <li> Australian
      (australian)
    </li>


    <li> Austrian
      (austrian)
    </li>


    <li> Bangladeshi
      (bangladeshi)
    </li>


    <li> Barbeque
      (bbq)
    </li>


    <li> Basque
      (basque)
    </li>


    <li> Belgian
      (belgian)
    </li>


    <li> Brasseries
      (brasseries)
    </li>


    <li> Brazilian
      (brazilian)
    </li>


    <li> Breakfast &amp; Brunch
      (breakfast_brunch)
    </li>


    <li> British
      (british)
    </li>


    <li> Buffets
      (buffets)
    </li>


    <li> Burgers
      (burgers)
    </li>


    <li> Burmese
      (burmese)
    </li>


    <li> Cafes
      (cafes)
    </li>

    <ul class="bullet-list-round">
      <li> Themed Cafes
        (themedcafes)
      </li>


    </ul>

    <li> Cafeteria
      (cafeteria)
    </li>


    <li> Cajun/Creole
      (cajun)
    </li>


    <li> Cambodian
      (cambodian)
    </li>


    <li> Caribbean
      (caribbean)
    </li>

    <ul class="bullet-list-round">
      <li> Dominican
        (dominican)
      </li>


      <li> Haitian
        (haitian)
      </li>


      <li> Puerto Rican
        (puertorican)
      </li>


      <li> Trinidadian
        (trinidadian)
      </li>


    </ul>

    <li> Catalan
      (catalan)
    </li>


    <li> Cheesesteaks
      (cheesesteaks)
    </li>


    <li> Chicken Shop
      (chickenshop)
    </li>


    <li> Chicken Wings
      (chicken_wings)
    </li>


    <li> Chinese
      (chinese)
    </li>

    <ul class="bullet-list-round">
      <li> Cantonese
        (cantonese)
      </li>


      <li> Dim Sum
        (dimsum)
      </li>


      <li> Hainan
        (hainan)
      </li>


      <li> Shanghainese
        (shanghainese)
      </li>


      <li> Szechuan
        (szechuan)
      </li>


    </ul>

    <li> Comfort Food
      (comfortfood)
    </li>


    <li> Creperies
      (creperies)
    </li>


    <li> Cuban
      (cuban)
    </li>


    <li> Czech
      (czech)
    </li>


    <li> Delis
      (delis)
    </li>


    <li> Diners
      (diners)
    </li>


    <li> Dinner Theater
      (dinnertheater)
    </li>


    <li> Ethiopian
      (ethiopian)
    </li>


    <li> Fast Food
      (hotdogs)
    </li>


    <li> Filipino
      (filipino)
    </li>


    <li> Fish &amp; Chips
      (fishnchips)
    </li>


    <li> Fondue
      (fondue)
    </li>


    <li> Food Court
      (food_court)
    </li>


    <li> Food Stands
      (foodstands)
    </li>


    <li> French
      (french)
    </li>

    <ul class="bullet-list-round">
      <li> Mauritius
        (mauritius)
      </li>


      <li> Reunion
        (reunion)
      </li>


    </ul>

    <li> Game Meat
      (gamemeat)
    </li>


    <li> Gastropubs
      (gastropubs)
    </li>


    <li> German
      (german)
    </li>


    <li> Gluten-Free
      (gluten_free)
    </li>


    <li> Greek
      (greek)
    </li>


    <li> Guamanian
      (guamanian)
    </li>


    <li> Halal
      (halal)
    </li>


    <li> Hawaiian
      (hawaiian)
    </li>


    <li> Himalayan/Nepalese
      (himalayan)
    </li>


    <li> Honduran
      (honduran)
    </li>


    <li> Hong Kong Style Cafe
      (hkcafe)
    </li>


    <li> Hot Dogs
      (hotdog)
    </li>


    <li> Hot Pot
      (hotpot)
    </li>


    <li> Hungarian
      (hungarian)
    </li>


    <li> Iberian
      (iberian)
    </li>


    <li> Indian
      (indpak)
    </li>


    <li> Indonesian
      (indonesian)
    </li>


    <li> Irish
      (irish)
    </li>


    <li> Italian
      (italian)
    </li>

    <ul class="bullet-list-round">
      <li> Calabrian
        (calabrian)
      </li>


      <li> Sardinian
        (sardinian)
      </li>


      <li> Sicilian
        (sicilian)
      </li>


      <li> Tuscan
        (tuscan)
      </li>


    </ul>

    <li> Japanese
      (japanese)
    </li>

    <ul class="bullet-list-round">
      <li> Conveyor Belt Sushi
        (conveyorsushi)
      </li>


      <li> Izakaya
        (izakaya)
      </li>


      <li> Japanese Curry
        (japacurry)
      </li>


      <li> Ramen
        (ramen)
      </li>


      <li> Teppanyaki
        (teppanyaki)
      </li>


    </ul>

    <li> Kebab
      (kebab)
    </li>


    <li> Korean
      (korean)
    </li>


    <li> Kosher
      (kosher)
    </li>


    <li> Laotian
      (laotian)
    </li>


    <li> Latin American
      (latin)
    </li>

    <ul class="bullet-list-round">
      <li> Colombian
        (colombian)
      </li>


      <li> Salvadoran
        (salvadoran)
      </li>


      <li> Venezuelan
        (venezuelan)
      </li>


    </ul>

    <li> Live/Raw Food
      (raw_food)
    </li>


    <li> Malaysian
      (malaysian)
    </li>


    <li> Mediterranean
      (mediterranean)
    </li>

    <ul class="bullet-list-round">
      <li> Falafel
        (falafel)
      </li>


    </ul>

    <li> Mexican
      (mexican)
    </li>

    <ul class="bullet-list-round">
      <li> Tacos
        (tacos)
      </li>


    </ul>

    <li> Middle Eastern
      (mideastern)
    </li>

    <ul class="bullet-list-round">
      <li> Egyptian
        (egyptian)
      </li>


      <li> Lebanese
        (lebanese)
      </li>


    </ul>

    <li> Modern European
      (modern_european)
    </li>


    <li> Mongolian
      (mongolian)
    </li>


    <li> Moroccan
      (moroccan)
    </li>


    <li> New Mexican Cuisine
      (newmexican)
    </li>


    <li> Nicaraguan
      (nicaraguan)
    </li>


    <li> Noodles
      (noodles)
    </li>


    <li> Pakistani
      (pakistani)
    </li>


    <li> Pan Asian
      (panasian)
    </li>


    <li> Persian/Iranian
      (persian)
    </li>


    <li> Peruvian
      (peruvian)
    </li>


    <li> Pizza
      (pizza)
    </li>


    <li> Polish
      (polish)
    </li>


    <li> Pop-Up Restaurants
      (popuprestaurants)
    </li>


    <li> Portuguese
      (portuguese)
    </li>


    <li> Poutineries
      (poutineries)
    </li>


    <li> Russian
      (russian)
    </li>


    <li> Salad
      (salad)
    </li>


    <li> Sandwiches
      (sandwiches)
    </li>


    <li> Scandinavian
      (scandinavian)
    </li>


    <li> Scottish
      (scottish)
    </li>


    <li> Seafood
      (seafood)
    </li>


    <li> Singaporean
      (singaporean)
    </li>


    <li> Slovakian
      (slovakian)
    </li>


    <li> Soul Food
      (soulfood)
    </li>


    <li> Soup
      (soup)
    </li>


    <li> Southern
      (southern)
    </li>


    <li> Spanish
      (spanish)
    </li>


    <li> Sri Lankan
      (srilankan)
    </li>


    <li> Steakhouses
      (steak)
    </li>


    <li> Supper Clubs
      (supperclubs)
    </li>


    <li> Sushi Bars
      (sushi)
    </li>


    <li> Syrian
      (syrian)
    </li>


    <li> Taiwanese
      (taiwanese)
    </li>


    <li> Tapas Bars
      (tapas)
    </li>


    <li> Tapas/Small Plates
      (tapasmallplates)
    </li>


    <li> Tex-Mex
      (tex-mex)
    </li>


    <li> Thai
      (thai)
    </li>


    <li> Turkish
      (turkish)
    </li>


    <li> Ukrainian
      (ukrainian)
    </li>


    <li> Uzbek
      (uzbek)
    </li>


    <li> Vegan
      (vegan)
    </li>


    <li> Vegetarian
      (vegetarian)
    </li>


    <li> Vietnamese
      (vietnamese)
    </li>


    <li> Waffles
      (waffles)
    </li>


    <li> Wraps
      (wraps)
    </li>


  </ul>

  <li> Shopping
    (shopping)
  </li>

  <ul class="bullet-list-round">
    <li> Adult
      (adult)
    </li>


    <li> Antiques
      (antiques)
    </li>


    <li> Art Galleries
      (galleries)
    </li>


    <li> Arts &amp; Crafts
      (artsandcrafts)
    </li>

    <ul class="bullet-list-round">
      <li> Art Supplies
        (artsupplies)
      </li>


      <li> Cards &amp; Stationery
        (stationery)
      </li>


      <li> Cooking Classes
        (cookingclasses)
      </li>


      <li> Costumes
        (costumes)
      </li>


      <li> Embroidery &amp; Crochet
        (embroideryandcrochet)
      </li>


      <li> Fabric Stores
        (fabricstores)
      </li>


      <li> Framing
        (framing)
      </li>


      <li> Paint-Your-Own Pottery
        (paintyourownpottery)
      </li>


    </ul>

    <li> Auction Houses
      (auctionhouses)
    </li>


    <li> Baby Gear &amp; Furniture
      (baby_gear)
    </li>


    <li> Battery Stores
      (batterystores)
    </li>


    <li> Bespoke Clothing
      (bespoke)
    </li>


    <li> Books, Mags, Music &amp; Video
      (media)
    </li>

    <ul class="bullet-list-round">
      <li> Bookstores
        (bookstores)
      </li>


      <li> Comic Books
        (comicbooks)
      </li>


      <li> Music &amp; DVDs
        (musicvideo)
      </li>


      <li> Newspapers &amp; Magazines
        (mags)
      </li>


      <li> Video Game Stores
        (videogamestores)
      </li>


      <li> Videos &amp; Video Game Rental
        (videoandgames)
      </li>


      <li> Vinyl Records
        (vinyl_records)
      </li>


    </ul>

    <li> Brewing Supplies
      (brewingsupplies)
    </li>


    <li> Bridal
      (bridal)
    </li>


    <li> Cannabis Dispensaries
      (cannabisdispensaries)
    </li>


    <li> Computers
      (computers)
    </li>


    <li> Cosmetics &amp; Beauty Supply
      (cosmetics)
    </li>


    <li> Customized Merchandise
      (custommerchandise)
    </li>


    <li> Department Stores
      (deptstores)
    </li>


    <li> Discount Store
      (discountstore)
    </li>


    <li> Drugstores
      (drugstores)
    </li>


    <li> Duty-Free Shops
      (dutyfreeshops)
    </li>


    <li> Electronics
      (electronics)
    </li>


    <li> Eyewear &amp; Opticians
      (opticians)
    </li>


    <li> Farming Equipment
      (farmingequipment)
    </li>


    <li> Fashion
      (fashion)
    </li>

    <ul class="bullet-list-round">
      <li> Accessories
        (accessories)
      </li>


      <li> Ceremonial Clothing
        (ceremonialclothing)
      </li>


      <li> Children's Clothing
        (childcloth)
      </li>


      <li> Clothing Rental
        (clothingrental)
      </li>


      <li> Department Stores
        (deptstores)
      </li>


      <li> Formal Wear
        (formalwear)
      </li>


      <li> Fur Clothing
        (furclothing)
      </li>


      <li> Hats
        (hats)
      </li>


      <li> Leather Goods
        (leather)
      </li>


      <li> Lingerie
        (lingerie)
      </li>


      <li> Maternity Wear
        (maternity)
      </li>


      <li> Men's Clothing
        (menscloth)
      </li>


      <li> Plus Size Fashion
        (plus_size_fashion)
      </li>


      <li> Shoe Stores
        (shoes)
      </li>


      <li> Sports Wear
        (sportswear)
      </li>

      <ul class="bullet-list-round">
        <li> Dance Wear
          (dancewear)
        </li>


      </ul>

      <li> Surf Shop
        (surfshop)
      </li>


      <li> Swimwear
        (swimwear)
      </li>


      <li> Traditional Clothing
        (tradclothing)
      </li>


      <li> Used, Vintage &amp; Consignment
        (vintage)
      </li>


      <li> Women's Clothing
        (womenscloth)
      </li>


    </ul>

    <li> Fireworks
      (fireworks)
    </li>


    <li> Fitness/Exercise Equipment
      (fitnessequipment)
    </li>


    <li> Flea Markets
      (fleamarkets)
    </li>


    <li> Flowers &amp; Gifts
      (flowers)
    </li>

    <ul class="bullet-list-round">
      <li> Cards &amp; Stationery
        (stationery)
      </li>


      <li> Florists
        (florists)
      </li>


      <li> Gift Shops
        (giftshops)
      </li>


    </ul>

    <li> Gold Buyers
      (goldbuyers)
    </li>


    <li> Guns &amp; Ammo
      (guns_and_ammo)
    </li>


    <li> Head Shops
      (headshops)
    </li>


    <li> High Fidelity Audio Equipment
      (hifi)
    </li>


    <li> Hobby Shops
      (hobbyshops)
    </li>


    <li> Home &amp; Garden
      (homeandgarden)
    </li>

    <ul class="bullet-list-round">
      <li> Appliances
        (appliances)
      </li>


      <li> Candle Stores
        (candlestores)
      </li>


      <li> Christmas Trees
        (christmastrees)
      </li>


      <li> Furniture Stores
        (furniture)
      </li>


      <li> Grilling Equipment
        (grillingequipment)
      </li>


      <li> Hardware Stores
        (hardware)
      </li>


      <li> Holiday Decorations
        (holidaydecorations)
      </li>


      <li> Home Decor
        (homedecor)
      </li>


      <li> Hot Tub &amp; Pool
        (hottubandpool)
      </li>


      <li> Kitchen &amp; Bath
        (kitchenandbath)
      </li>


      <li> Mattresses
        (mattresses)
      </li>


      <li> Nurseries &amp; Gardening
        (gardening)
      </li>

      <ul class="bullet-list-round">
        <li> Hydroponics
          (hydroponics)
        </li>


      </ul>

      <li> Outdoor Furniture Stores
        (outdoorfurniture)
      </li>


      <li> Paint Stores
        (paintstores)
      </li>


      <li> Playsets
        (playsets)
      </li>


      <li> Pumpkin Patches
        (pumpkinpatches)
      </li>


      <li> Rugs
        (rugs)
      </li>


      <li> Tableware
        (tableware)
      </li>


    </ul>

    <li> Horse Equipment Shops
      (horsequipment)
    </li>


    <li> Jewelry
      (jewelry)
    </li>


    <li> Knitting Supplies
      (knittingsupplies)
    </li>


    <li> Livestock Feed &amp; Supply
      (livestocksupply)
    </li>


    <li> Luggage
      (luggage)
    </li>


    <li> Medical Supplies
      (medicalsupplies)
    </li>


    <li> Military Surplus
      (militarysurplus)
    </li>
    <li> Mobile Phone Accessories
      (cellphoneaccessories)
    </li>
    <li> Mobile Phones
      (mobilephones)
    </li>
    <li> Motorcycle Gear
      (motorcyclinggear)
    </li>
    <li> Musical Instruments &amp; Teachers
      (musicalinstrumentsandteachers)
    </li>
    <li> Office Equipment
      (officeequipment)
    </li>
    <li> Outlet Stores
      (outlet_stores)
    </li>
    <li> Packing Supplies
      (packingsupplies)
    </li>
    <li> Pawn Shops
      (pawn)
    </li>
    <li> Perfume
      (perfume)
    </li>
    <li> Personal Shopping
      (personal_shopping)
    </li>
    <li> Photography Stores &amp; Services
      (photographystores)
    </li>
    <li> Pool &amp; Billiards
      (poolbilliards)
    </li>
    <li> Pop-up Shops
      (popupshops)
    </li>
    <li> Props
      (props)
    </li>
    <li> Public Markets
      (publicmarkets)
    </li>
    <li> Religious Items
      (religiousitems)
    </li>
    <li> Safe Stores
      (safestores)
    </li>
    <li> Safety Equipment
      (safetyequipment)
    </li>
    <li> Shopping Centers
      (shoppingcenters)
    </li>
    <li> Souvenir Shops
      (souvenirs)
    </li>
    <li> Spiritual Shop
      (spiritual_shop)
    </li>
    <li> Sporting Goods
      (sportgoods)
    </li>
    <ul class="bullet-list-round">
      <li> Bikes
        (bikes)
      </li>
      <li> Dive Shops
        (diveshops)
      </li>
      <li> Golf Equipment
        (golfequipment)
      </li>
      <li> Hunting &amp; Fishing Supplies
        (huntingfishingsupplies)
      </li>
      <li> Outdoor Gear
        (outdoorgear)
      </li>
      <li> Skate Shops
        (skateshops)
      </li>
      <li> Ski &amp; Snowboard Shops
        (skishops)
      </li>
      <li> Sports Wear
        (sportswear)
      </li>

      <ul class="bullet-list-round">
        <li> Dance Wear
          (dancewear)
        </li>


      </ul>

    </ul>

    <li> Tabletop Games
      (tabletopgames)
    </li>


    <li> Teacher Supplies
      (teachersupplies)
    </li>


    <li> Thrift Stores
      (thrift_stores)
    </li>


    <li> Tobacco Shops
      (tobaccoshops)
    </li>


    <li> Toy Stores
      (toys)
    </li>


    <li> Trophy Shops
      (trophyshops)
    </li>


    <li> Uniforms
      (uniforms)
    </li>


    <li> Used Bookstore
      (usedbooks)
    </li>


    <li> Vape Shops
      (vapeshops)
    </li>


    <li> Vitamins &amp; Supplements
      (vitaminssupplements)
    </li>


    <li> Watches
      (watches)
    </li>


    <li> Wholesale Stores
      (wholesale_stores)
    </li>


    <li> Wigs
      (wigs)
    </li>


  </ul>
</ul>

<form method="post" action="execute.php">
  <input type="hidden" name="c" value="" id="c" />
  <input type="submit" />
</form>
</body>

</html>
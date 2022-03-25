<?php
include 'header.php';
?>

<!-- start header -->
<div class="w-full md:flex md:justify-between md:z-40 md:pb-24 md:pt-5 md:px-28 z-50 items-start bg-gradient-to-b from-gray-300  to-white">
  <div class="  md:pl-0  md:pt-8  w-full  mx-auto z-50">
    <div class="relative md:mt-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1100">
      <h1 class="text-3xl font-bold text-gray-800 text-center md:text-left">économiser davantage
        sur votre <br>voiture de <span class="element text-orange-600"></span></h1>
      <hr class=" mt-6 mb-8 mx-auto md:mx-0" style="background-color:#002F75;width:45px;height:6px;border: 0;">
      <!-- <p class=" text-sm font-bold text-gray-600 md:text-left  text-center">Lorem ipsum dolor sit amet consectetur, <br> adipisicing elit.
          Mollitia, modi. Perferendis laborum eos fuga consectetur .</p> -->
    </div>
    <div class="bg-white p-4 w-3/4 md:mx-0 mx-auto   rounded-xl drop-shadow-2xl md:z-50  z-50" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1200">
      <form action="cmd.php" class="z-50 md:z-50">
        <div class="md:flex z-50">
          <div class="w-full md:w-1/2 relative z-50">
            <select class="block appearance-none w-full hover:cursor-pointer md:z-50 z-50 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none">
              <option>Marque</option>
              <option>ALfa romeo</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 z-50">
              <svg class="fill-current h-4 w-4 z-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </div>
          </div>
          <div class="w-full md:w-1/2 relative z-50">
            <select class="block appearance-none w-full hover:cursor-pointer text-gray-700 md:z-50 z-50 py-3 px-4 pr-8 rounded leading-tight focus:outline-none ">
              <option>Modéle</option>
              <option>ALfa romeo</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </div>
          </div>
        </div>
        <div class="md:flex z-50">
          <div class="w-full md:w-1/2 relative z-50">
            <select class="block appearance-none w-full hover:cursor-pointer md:z-50 z-50 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none ">
              <option>Ville</option>
              <option>Laayoune</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </div>
          </div>
          <div class="w-full md:w-1/2 relative z-50">
            <input type="date" class="block appearance-none w-full hover:cursor-pointer md:z-50 z-50 text-gray-700 py-3 pl-4 pr-2 rounded leading-tight focus:outline-none ">
          </div>
        </div>
        <div class="w-full md:z-40 z-50">
          <button class="bg-blue-900 hover:bg-blue-600 md:z-50 z-50 duration-300 text-white font-bold w-full mt-3 py-3 rounded-xl  items-center">
            <i class="fa-solid fa-magnifying-glass"></i>
            <span class="pr-2 pl-2">Recherche</span>
          </button>
        </div>
      </form>
    </div>

  </div>
  <div class=" md:pt-12  w-full md:pr-0 z-10" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1300">
    <img src="AZUL-PACIFICO.png" class="z-10" width="800vw" height="450vw" alt="">
  </div>
  <div style="width:32vw;height:32vw;" class=" rounded-full  bg-orange-500  md:absolute  opacity-90 md:bg-gradient-to-b md:from-orange-400 md:to-orange-900 md:rounded-full md:top-24 md:right-28 ">
  </div>
</div>

<script>
  var typed = new Typed('.element', {
    strings: ['location .'],
    loop: true,
    loopCount: Infinity,
    typeSpeed: 50,
    startspeed: 40,
    backSpeed: 40,
  });
</script>

<!-- end header -->

<!-- start section one -->
<div class="px-48">

  <div class="w-full flex justify-center pt-16">
    <div class="" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1500">
      <h1 class="font-bold text-2xl text-gray-600">Comment ça fonctionne ?</h1>
      <hr class=" mt-3 mb-3 mx-auto" style="background-color:#002F75;width:45px;height:6px;border: 0; ">
    </div>
  </div>

  <div class="w-full flex justify-around pt-10 ">

    <div class="w-52" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500">
      <div class="w-16 h-16 bg-gray-200 rounded-xl drop-shadow-lg mx-auto flex justify-center items-center">
        <span class=" text-orange-600 text-2xl"><i class="fa-solid fa-list-ul"></i></span>
      </div>
      <h2 class="font-bold mt-3 text-xl text-center">1.Choisir</h2>
      <h1 class="text-gray-600 text-center mx-auto">Trouver l’offre qui vous
        convient.</h1>
    </div>

    <div class="w-52" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500">
      <div class="w-16 h-16 bg-gradient-to-b from-orange-500 to-orange-700 rounded-xl drop-shadow-lg mx-auto flex justify-center items-center">
        <span class=" text-white text-2xl"><i class="fa-solid fa-phone-volume"></i></span>
      </div>
      <h2 class="font-bold mt-3 text-xl text-center">2.Réserver</h2>
      <h1 class="text-gray-600 text-center mx-auto">Contacter notre equipe pour
        reserver votre voiture.</h1>
    </div>

    <div class="w-52" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
      <div class="w-16 h-16 bg-gray-200 rounded-xl drop-shadow-xl mx-auto flex justify-center items-center">
        <span class=" text-orange-600 text-2xl"><i class="fa-solid fa-circle-check"></i></span>
      </div>
      <h2 class="font-bold mt-3 text-xl text-center">3.Confirmer</h2>
      <p class=" text-gray-600  text-center mx-auto">Patienter , pour nous confirmons
        votre resérvation</p>
    </div>
  </div>
</div>
<!-- end section -->

<!-- start section two -->
<div class="md:flex mt-28 " id="service">
  <div class="md:w-1/2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500">
    <img src="ve2.png" alt="">
  </div>
  <div class="md:w-1/2 md:pr-28">
    <div data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
      <h1 class="font-bold text-2xl text-gray-600">Nos services</h1>
      <h1 class="font-bold text-2xl text-gray-900">sentez-vous avec la meilleure expérience
        avec nos offres de location</h1>
      <hr class=" mt-3 mb-3" style="background-color:#002F75;width:45px;height:6px;border: 0; ">
    </div>
    <div class="flex items-center mt-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1700">
      <div class="w-10 h-10 bg-gray-200 rounded-full drop-shadow-lg flex justify-center items-center">
        <span class=" text-orange-600 font-bold"><i class="fa-solid fa-dollar-sign"></i></ion-icon></span>
      </div>
      <div class="flex justify-center items-center ">
        <h2 class=" font-bold ml-7 text-lg text-gray-500 ">Meilleur prix garanti</h2>
      </div>
    </div>
    <div class="flex items-center mt-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1900">
      <div class="w-10 h-10 bg-gray-200 rounded-full drop-shadow-lg flex justify-center items-center">
        <span class=" text-orange-600 font-bold"><i class="fa-solid fa-wallet"></i></ion-icon></span>
      </div>
      <div class="flex justify-center items-center ">
        <h2 class=" font-bold ml-7 text-lg text-gray-500 ">Des offres pour tous les budgets</h2>
      </div>
    </div>
    <div class="flex items-center mt-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="2100">
      <div class="w-10 h-10 bg-gray-200 rounded-full drop-shadow-lg flex justify-center items-center">
        <span class=" text-orange-600 font-bold"><i class="fa-solid fa-headset"></i></span>
      </div>
      <div class="flex justify-center items-center ">
        <h2 class=" font-bold ml-7 text-lg text-gray-500 ">Support 24/7</h2>
      </div>
    </div>
  </div>
</div>
<!-- end setion two -->




<?php
include 'footer.php';
?>
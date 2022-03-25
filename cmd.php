<?php
include 'header.php';
?>

<div class="w-full md:flex md:justify-between md:pb-24 md:px-28  items-start bg-gradient-to-b from-gray-300  to-white">
  <div class="absolute bg-orange-600 opacity-30  top-24 mx-auto md:w-96 md:h-72 rounded-full md:-left-40 md:top-28 ">
  </div>
  <div class="  md:pl-0 md:pt-20 p-8 w-full z-20 mx-auto " data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">

  </div>
  <div class=" md:pt-12  w-full md:pr-0 z-10" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
    <img src="stelv.png" class="z-10" width="800vw" height="450vw" alt="">
  </div>
</div>
<div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" class=" flex  justify-between items-center md:z-50 mx-28 bg-white p-6 rounded-2xl -mt-12 drop-shadow-lg">
  <div>
    <h1 class="text-xl font-bold text-gray-800 md:z-40">Alfa-Romeo Stelvio</h1>
  </div>
  <div>
    <img src="arl.png" class="md:z-40" alt="">
  </div>
  <div>
    <span class="text-xl md:z-40 font-bold text-gray-800 ">250 - 1500 DH/J</span>
  </div>
</div>
<!-- strart filter form -->
<div class="bg-white p-4  md:mx-28 mx-auto md:mt-20  rounded-xl drop-shadow-2xl md:z-50  z-50" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1200">
  <form action="cmd.php" class="z-50 md:z-50 md:flex md:items-center">
    <div class="w-full ">
      <div class="md:flex z-50">
        <div class="w-full md:w-1/4 relative z-50">
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
        <div class="w-full md:w-1/4 relative z-50">
          <select class="block appearance-none w-full hover:cursor-pointer text-gray-700 md:z-50 z-50 py-3 px-4 pr-8 rounded leading-tight focus:outline-none ">
            <option>Modéle</option>
            <option>ALfa romeo 104</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
        <div class="w-full md:w-1/4 relative z-50">
          <select class="block appearance-none w-full hover:cursor-pointer text-gray-700 md:z-50 z-50 py-3 px-4 pr-8 rounded leading-tight focus:outline-none ">
            <option>Ville</option>
            <option>Laayoune</option>
            <option>Agadir</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
        <div class="w-full md:w-1/4 relative z-50">
          <select class="block appearance-none w-full hover:cursor-pointer text-gray-700 md:z-50 z-50 py-3 px-4 pr-8 rounded leading-tight focus:outline-none ">
            <option>Date</option>
            <option>15/06/2022</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="md:flex z-50">
        <div class="w-full md:w-1/4 relative z-50">
          <select class="block appearance-none w-full hover:cursor-pointer md:z-50 z-50 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none">
            <option>Carburant</option>
            <option></option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 z-50">
            <svg class="fill-current h-4 w-4 z-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
        <div class="w-full md:w-1/4 relative z-50">
          <select class="block appearance-none w-full hover:cursor-pointer text-gray-700 md:z-50 z-50 py-3 px-4 pr-8 rounded leading-tight focus:outline-none ">
            <option>Transmission</option>
            <option></option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
        <div class="w-full md:w-1/4 relative z-50">
          <select class="block appearance-none w-full hover:cursor-pointer text-gray-700 md:z-50 z-50 py-3 px-4 pr-8 rounded leading-tight focus:outline-none ">
            <option>Carrosserie</option>
            <option></option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
        <div class="w-full md:w-1/4 relative z-50">
          <select class="block appearance-none w-full hover:cursor-pointer text-gray-700 md:z-50 z-50 py-3 px-4 pr-8 rounded leading-tight focus:outline-none ">
            <option>Consommation</option>
            <option></option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class=" md:z-40 z-50 md:mx-6">
      <button class="bg-blue-900 hover:bg-blue-600 md:z-50 z-50 duration-300 text-white font-bold  mt-3 py-3 px-4 rounded-xl  items-center">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </div>

  </form>
</div>
<!-- end filter form -->
<div data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000" class=" flex justify-start items-center mx-32 mt-6">
  <div>
    <h1 class="font-bold text-gray-700 ">Alfa-Romeo Stelvio</h1>
    <h1 class="font-bold text-gray-700 ">10 resultats trouvé</h1>
  </div>
</div>
<div>
  <div class="bg-gray-200 mx-28 rounded-2xl drop-shadow-xl" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    <div class="flex justify-between  p-5  mt-4 ">
      <h1 class="font-bold text-xl text-gray-600">Alfa-Romeo Stelvio</h1>
      <h1 class="font-bold text-xl text-orange-600">350 DH/J</h1>
    </div>
    <hr class=" mb-3 mx-auto bg-slate-300" style="width:800px;height:1px;border: 0; ">
    <div class="flex justify-around items-center  p-5 ">
      <div>
        <h1 class="font-bold  text-gray-900">Diesel</h1>
        <h1>Carburant</h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">Manuelle</h1>
        <h1>Boite de vitesse </h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">5,6 L/100km</h1>
        <h1>Consommation </h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">173 km/h</h1>
        <h1>Vitesse maximale</h1>
      </div>
      <div>
        <button class="bg-orange-500 text-white font-bold p-3 rounded-3xl px-5" type="button" data-modal-toggle="authentication-modal">Reserver</button>
      </div>
    </div>
  </div>
  <div class="bg-gray-200 mx-28 rounded-2xl drop-shadow-xl" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    <div class="flex justify-between  p-5  mt-4 ">
      <h1 class="font-bold text-xl text-gray-600">Alfa-Romeo Stelvio</h1>
      <h1 class="font-bold text-xl text-orange-600">350 DH/J</h1>
    </div>
    <hr class=" mb-3 mx-auto bg-slate-300" style="width:800px;height:1px;border: 0; ">
    <div class="flex justify-around items-center  p-5 ">
      <div>
        <h1 class="font-bold  text-gray-900">Diesel</h1>
        <h1>Carburant</h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">Manuelle</h1>
        <h1>Boite de vitesse </h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">5,6 L/100km</h1>
        <h1>Consommation </h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">173 km/h</h1>
        <h1>Vitesse maximale</h1>
      </div>
      <div>
        <button class="bg-orange-500 text-white font-bold p-3 rounded-3xl px-5" type="button" data-modal-toggle="authentication-modal">Reserver</button>
      </div>
    </div>
  </div>
  <div class="bg-gray-200 mx-28 rounded-2xl drop-shadow-xl" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    <div class="flex justify-between  p-5  mt-4 ">
      <h1 class="font-bold text-xl text-gray-600">Alfa-Romeo Stelvio</h1>
      <h1 class="font-bold text-xl text-orange-600">350 DH/J</h1>
    </div>
    <hr class=" mb-3 mx-auto bg-slate-300" style="width:800px;height:1px;border: 0; ">
    <div class="flex justify-around items-center  p-5 ">
      <div>
        <h1 class="font-bold  text-gray-900">Diesel</h1>
        <h1>Carburant</h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">Manuelle</h1>
        <h1>Boite de vitesse </h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">5,6 L/100km</h1>
        <h1>Consommation </h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">173 km/h</h1>
        <h1>Vitesse maximale</h1>
      </div>
      <div>
        <button class="bg-orange-500 text-white font-bold p-3 rounded-3xl px-5" type="button" data-modal-toggle="authentication-modal">Reserver</button>
      </div>
    </div>
  </div>
  <div class="bg-gray-200 mx-28 rounded-2xl drop-shadow-xl" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    <div class="flex justify-between  p-5  mt-4 ">
      <h1 class="font-bold text-xl text-gray-600">Alfa-Romeo Stelvio</h1>
      <h1 class="font-bold text-xl text-orange-600">350 DH/J</h1>
    </div>
    <hr class=" mb-3 mx-auto bg-slate-300" style="width:800px;height:1px;border: 0; ">
    <div class="flex justify-around items-center  p-5 ">
      <div>
        <h1 class="font-bold  text-gray-900">Diesel</h1>
        <h1>Carburant</h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">Manuelle</h1>
        <h1>Boite de vitesse </h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">5,6 L/100km</h1>
        <h1>Consommation </h1>
      </div>
      <div>
        <h1 class="font-bold  text-gray-900">173 km/h</h1>
        <h1>Vitesse maximale</h1>
      </div>
      <div>
        <button class="bg-orange-500 text-white font-bold p-3 rounded-3xl px-5" type="button" data-modal-toggle="authentication-modal">Reserver</button>
      </div>
    </div>
  </div>
</div>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
  <div class="relative p-4 w-full max-w-md h-full md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-xl shadow dark:bg-gray-800">
      <div class="flex justify-end p-2">
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Alfa-Romeo Stelvio 350dh</h3>
        <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " required />
          <label for="floating_first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom complet</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
          <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " required />
          <label for="floating_phone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Télephone</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
          <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " required />
          <label for="floating_phone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date</label>
        </div>
        <div class="flex mt-3">
          <button type="submit" class="w-full text-white bg-orange-600 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm mr-2 px-4 py-2 text-center ">Res.direct</button>
          <button type="submit" class="w-full text-green-600   border-2 border-green-600 hover:bg-green-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300  rounded-lg text-xl font-bold  ml-2 px-4 py-2 text-center "><i class="fa-brands fa-whatsapp"></i></button>
        </div>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
        Contactez-nous pour plus infos : <a href="tel:+212628079479" class="text-blue-700 hover:underline dark:text-orange-500">+212512345678</a>
        </div>
      </form>
    </div>
  </div>
</div>
<!--end Main modal -->

<?php
include 'footer.php';
?>
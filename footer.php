<!-- start footer -->

<!-- start section pub -->
<div class="mt-28  px-28">
  <div class="md:flex md:justify-around md:items-center md:p-10 rounded-3xl bg-orange-500" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500">
    <div class="flex justify-around items-center">
      <img src="megaphone.png" class="w-20 h-20" alt="" srcset="">
      <div class="px-10">
        <h1 class="text-white text-xl font-bold">les pubs</h1>
        <p class="text-white font-bold">
          </h1class>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h1>
      </div>
    </div>
    <div>
      <button class="bg-white font-bold text-gray-600 px-6 py-3 rounded-xl hover:bg-gray-200 duration-300">En savoir plus <i class="fa-solid fa-angles-right px-2"></i></button>
    </div>
  </div>
</div>
<!-- end section pub -->

<!-- start partenaire -->
<div class="mt-28 ">
  <div class="w-full flex justify-center" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1500">
    <div class="">
      <h1 class="font-bold text-2xl text-gray-600">Nos partenaires</h1>
      <hr class=" mt-3 mb-3 mx-auto" style="background-color:#002F75;width:45px;height:6px;border: 0; ">
    </div>
  </div>
</div>
<div class="mt-16  px-28">
  <div class="flex justify-between" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500">
    <h1 class="text-6xl text-gray-700 font-bold">LOGO</h1>
    <h1 class="text-6xl text-gray-700 font-bold">LOGO</h1>
    <h1 class="text-6xl text-gray-700 font-bold">LOGO</h1>
    <h1 class="text-6xl text-gray-700 font-bold">LOGO</h1>
  </div>
</div>
<!-- end partenaire -->
<!-- star main footer -->
<div class="mt-28 w-full bg-slate-800   drop-shadow-2xl" id="footer">
  <div class="flex justify-between  px-28 rounded-br-full  rounded-tr-full  pt-16 p-5">
    <h1 class="font-bold text-4xl  text-white"><a href="#louer">L<img src="wheel.svg" class="-mt-2 w-8 h-8 inline motion-safe:animate-spin" alt="">CAOTO</a>
    </h1>
    <a href="#" class="text-slate-800 animate-bounce text-3xl  bg-orange-500 p-4 rounded-full drop-shadow-2xl"><i class="fas fa-angle-double-up"></i></a>
  </div>

  <div class="flex justify-around p-14 pb-16 ">
    <div>
      <h1 class="font-bold text-xl text-white">Liens</h1>
      <h1 class="font-bold text-orange-400 mt-3"><a href="#louer">Louer</a></h1>
      <h1 class="font-bold text-orange-400 mt-2"><a href="#">A propos</a></h1>
      <h1 class="font-bold text-orange-400 mt-2"><a href="#service">Services</a></h1>
    </div>
    <div>
      <h1 class="font-bold text-xl text-white">Contact infos</h1>
      <p class="font-bold text-orange-400 mt-3">+212512345678</p>
      <p class="font-bold text-orange-400 mt-2">+212512345678</p>
      <p class="font-bold text-orange-400 mt-2">conatct@locaoto.com</p>
    </div>
    <div>
      <h1 class="font-bold text-xl text-white">A propos</h1>
      <p class="font-bold text-orange-400 mt-3">Termes et conditions</p>
      <p class="font-bold text-orange-400 mt-2">Déclaration de confidentialité</p>
    </div>
    <div>
      <h1 class="font-bold text-xl text-white">Emplacement</h1>
      <p class="font-bold text-orange-400 mt-3">Maroc</p>
    </div>
  </div>
  <hr class=" mb-3 mx-auto" style="background-color:rgb(88, 88, 88);width:380px;height:2px;border: 0; ">
  <div class="flex justify-center mt-4 pb-4">
    <h1 class="font-bold text-white text-sm">Copyrights © 2022 Locaoto.com . All Rights Reserved .</h1>
  </div>
</div>

<!-- end main footer -->
<!-- end footer -->

<script>
  AOS.init();
</script>

<canvas class="background md:z-0 -z-10 "></canvas>
<script>
  window.onload = function() {                  
    Particles.init({
      selector: '.background',
      maxParticles: 100,
      color: ['#002F75', '#FFA500'],
      responsive: [
        {
          breakpoint: 680,
          options: {
            maxParticles:0,
          }
        }
      ]
    });
  };
</script>
</body>

</html>
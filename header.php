<!doctype html>
<html class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <TItle>LOCAOTO</TItle>
    <link rel="icon" type="image/x-icon" href="wheel56.svg">
  <style>
.background {
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  z-index: 0;
}
.bord-hov:after {
  display:block;
  content: '';
  border-bottom: solid 3px #FF6600;  
  transform: scaleX(0);  
  width:50%; 
  transition: transform 250ms ease-in-out;
}
.bord-hov:hover:after { transform: scaleX(1); }
.bord-hov:after{  transform-origin:  0% 50%; }
.activel::after{
  display:block;
  content: '';
  border-bottom: solid 3px blue;  
  transform: scaleX(1);  
  width:50%; 
}
  </style>
</head>


<body>
  <!-- start navbar -->
  <div class="z-30" id="louer">
    <nav class=" md:flex w-full md:justify-between md:items-center md:z-50 z-50 md:px-28  md:pt-6 md:pb-6 p-4 justify-start items-start  bg-gray-300 animated">
      <div class="flex justify-between items-center z-30">
        <h1 class="font-bold text-2xl md:px-0 px-4 md:z-50  z-50"> <a href="index.php">L<img src="wheel.svg" class="-mt-1 w-6 h-6 inline motion-safe:animate-spin" alt="">CAOTO</a></h1>
        <span class="md:hidden text-3xl  z-50  mt-1 cursor-pointer">
          <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
      </div>
      <ul id="ul1" class=" md:flex md:z-10  z-50 md:static absolute text-gray-900 bg-gray-300 w-full left-0 md:w-auto
            md:px-0 px-4 md:opacity-100 opacity-0  transition-all ease-in duration-300 
            ">
        <li class="px-4 my-5 md:my-0 md:z-30 "><a class=" bord-hov activel font-bold " href="#">Louer</a>
        </li>
        <li class="px-4 my-5 md:my-0 md:z-30 "><a class="font-bold bord-hov text-gray-700  duration-300" href="#footer">A
            propos</a></li>
        <li class="px-4 my-5 md:my-0 md:z-30"><a class="font-bold bord-hov text-gray-700  duration-300"
            href="#service">Services</a></li>
      </ul>
      <div>
        <ul class="md:flex my-1 hidden ">
          <li class="md:px-1 px-4 text-xl md:z-30"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
          <li class="md:px-1 px-4 text-xl md:z-30"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li class="md:px-1 px-4 text-xl md:z-30"><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
        </ul>
      </div>
    </nav>
  </div>
  <script>
    function Menu(e) {
      let list = document.querySelector('#ul1');
      e.name === 'menu' ? (e.name = "close", list.classList.add('top-[50px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[50px]'), list.classList.remove('opacity-100')) 
    }
  </script>
  
  <!-- end navbar -->
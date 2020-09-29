<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href={{ asset('css/home.css') }}>
  <link rel="stylesheet" href={{ asset('css/homedesktop.css') }}>
</head>
<body>

     <nav class="btn">
       <a href="#" id="btn-options">
        <img src={{ asset('imgIcones/directions_car-white-48dp.svg') }} alt="Icone de Carro" id="img-icons"/>
       </a>

       <a href="#" id="btn-options">
        <img src={{ asset('imgIcones/two_wheeler-white-48dp.svg') }} alt="Icone de moto" id="img-icons"/>
       </a>
     </nav>

     <section class="vacancies">

       <!-- Vagas para carros-->
       <div class="car-parking">
         <a href="#" id="btn-vagas" style="background-color: DarkRed;">A</a>
         
         <div id="v-a">
            <img src={{ asset('imgIcones/directions_car-white-48dp.svg') }} alt="Icone de Carro" id="img-icons"/>
            <p class="vacancy-number-a">A01</p>
        </div>
        <div id="v-a">
            <img src={{ asset('imgIcones/directions_car-white-48dp.svg') }} alt="Icone de Carro" id="img-icons"/>
            <p class="vacancy-number-a">A02</p>
        </div>
        <div id="v-a">
           <img src={{ asset('imgIcones/accessible-white-36dp.svg') }} alt="Icone de Carro"  id="img-icons"/>
           <p class="vacancy-number-a">A03</p>
        </div>
        <div id="v-a">
           <img src={{ asset('imgIcones/accessible-white-36dp.svg') }} alt="Icone de Carro"  id="img-icons"/>
           <p class="vacancy-number-a">A04</p>
        </div>
        <div id="v-a">
           <img src={{ asset('imgIcones/directions_car-white-48dp.svg') }} alt="Icone de Carro" style="display: none;" id="img-icons"/>
           <p class="vacancy-number-a">A05</p>
        </div>
        <div id="v-a">
           <img src={{ asset('imgIcones/directions_car-white-48dp.svg') }} alt="Icone de Carro" id="img-icons"/>
           <p class="vacancy-number-a">A06</p>
        </div>
        <div id="v-a">
           <img src={{ asset('imgIcones/directions_car-white-48dp.svg') }} alt="Icone de Carro" id="img-icons"/>
           <p class="vacancy-number-a">A07</p>
        </div>
        <div id="v-a">
           <img src={{ asset('imgIcones/directions_car-white-48dp.svg') }} alt="Icone de Carro" style="display: none;" id="img-icons"/>
           <p class="vacancy-number-a">A08</p>
        </div>
        <div id="v-a">
           <img src={{ asset('imgIcones/accessible-white-36dp.svg') }} alt="Icone de Carro"  id="img-icons"/>
           <p class="vacancy-number-a">A09</p>
        </div>
        <div id="v-a">
           <img src={{ asset('imgIcones/accessible-white-36dp.svg') }} alt="Icone de Carro"  id="img-icons"/>
           <p class="vacancy-number-a">A10</p>
        </div>

    </div>

     <div class="vagas-veiculos-peq">
    
      <div class="bicycle-parking">
        <a href="#" id="btn-vagas"   style="background-color: DarkGreen;">B</a>
  
          <div id="v-b">
             <p class="vacancy-number-b">B01</p>
             <img src={{ asset('imgIcones/directions_bike-white-48dp.svg') }} alt="Icone de bicicleta"  id="img-icons"/>
         </div>
         <div id="v-b">
             <p class="vacancy-number-b">B02</p>
              <img src={{ asset('imgIcones/directions_bike-white-48dp.svg') }} alt="Icone de bicicleta"  id="img-icons"/>
         </div>
         <div id="v-b">
              <p class="vacancy-number-b">B02</p>
              <img src={{ asset('imgIcones/directions_bike-white-48dp.svg') }} alt="Icone de bicicleta" style="display: none;"  id="img-icons"/>
         </div>
          <div id="v-b">
              <p class="vacancy-number-b">B02</p>
              <img src={{ asset('imgIcones/directions_bike-white-48dp.svg') }} alt="Icone de bicicleta" id="img-icons"/>
         </div>
         
       </div>


       <div class="motorcycle-parking">
           <a href="#" id="btn-vagas">C</a>
        
           <div id="v-c">
             <img src={{ asset('imgIcones/two_wheeler-white-48dp.svg') }} alt="Icone de moto"  id="img-icons"/>
             <p class="vacancy-number-c">C01</p>
          </div>
          <div id="v-c">
            <img src={{ asset('imgIcones/two_wheeler-white-48dp.svg') }} alt="Icone de moto"  id="img-icons"/>
            <p class="vacancy-number-c">C02</p>
         </div>
         <div id="v-c">
           <img src={{ asset('imgIcones/two_wheeler-white-48dp.svg') }} alt="Icone de moto" style="display: none; "  id="img-icons"/>
           <p class="vacancy-number-c">C03</p>
        </div>
        <div id="v-c">
           <img src={{ asset('imgIcones/two_wheeler-white-48dp.svg') }} alt="Icone de moto" id="img-icons"/>
          <p class="vacancy-number-c">C04</p>
       </div>

  </div>
</section>

     <nav class="nav-footer">
         <img src={{ asset('imgIcones/supervisor_account-black-36dp.svg') }} alt="Icone de usuario"  id="img-icons"/>
          <a href="#">
             <img src={{ asset('imgIcones/settings-black-36dp.svg') }} alt="Icone de configurações"  id="img-icons"/>
          </a>
     </nav>

</body>
</html>

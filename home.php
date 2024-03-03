<?php require 'layouts/navbar.html'; ?>
<!-- HOME PAGE -->
<div class="container text-dark mt-5 text-center">
        <h1>Arctic Monkeys World Tour Concert</h1>
        <h3 class="text-warning">Get Ready For The Concert</h3>
        <!-- IMAGE -->
        <img src="img/arctic.png" alt="" class="mt-5 mb-5">

        <!-- Counter Time -->
        <div class="content text-light mt-5">
            <div class="launch-time">
                    <div class="">
                    <p id="days">00</p>
                    <span>Days</span>
                    </div>
                    <div class="">
                    <p id="hours">00</p>
                    <span>Hours</span>
                    </div>
                    <div class="">
                    <p id="minutes">00</p>
                    <span>Minutes</span>
                    </div>
                    <div class="">
                    <p id="seconds">00</p>
                    <span>Seconds</span>
                    </div>
                </div>
              
        </div>   
   
    <!-- TICKET PAGE -->
    <div id="ticket">
        <h1 class="mt-5">TICKET</h1>
        <div class="container mt-5">
            <img src="img/venuee.png.png"  width="325px" height="350px">
        </div>
    </div>

    <!-- VENUE PAGE -->
    <div id="venue">
        <h1 class="mt-5">VENUE</h1>
        <div class="container mt-5">
            <img src="img/jis.jpg.jfif" width="400px" height="350">
          <h3 class="mt-3">  <i data-feather="map-pin"></i
          >Jakarta International Stadium,North Jakarta</h3>
        </div>
    </div>
</div>
<script>
      feather.replace();
    </script>
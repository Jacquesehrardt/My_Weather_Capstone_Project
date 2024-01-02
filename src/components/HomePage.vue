<template>
   <div id="cityCarousel" class="carousel slide">
      <div class="carousel-inner">
         <div 
            class="carousel-item" 
            v-for="city in cityList" :key="city.id"
            :class="[city.id===1 ? 'active' : '']"
         >
            <WeatherComponent :city="city"/>
         </div>
      </div>
   </div>
</template>

<script>
   import WeatherComponent from './WeatherComponent.vue';

   export default {
      components: {
        WeatherComponent
      },

      data(){
         return {
            cityList: [
               {
                  id: 1,
                  name: 'Vancouver',
                  temp: 4,
                  state: 'Sunny',
                  feelsLike: 3,
                  wind: 39,
                  humidity: 40,
               },
               {
                  id: 2,
                  name: 'Maceio',
                  temp: 29,
                  state: 'Cloud',
                  feelsLike: 32,
                  wind: 29,
                  humidity: 50,
               },
               {
                  id: 3,
                  name: 'Viena',
                  state: 'Rain',
                  temp: 15,
                  feelsLike: 16,
                  wind: 59,
                  humidity: 60,
               }
            ],
         }
      },

      props: {
         
      },
   }
</script>

<style>
   div{
    height: 100vh;
  }

   #carouselExample{
      width: 100%;
      height: 100%;
      background: #000;
      display: flex;
      align-items: center;
   }

   .carousel-control-prev, .carousel-control-next{
      position: relative;
   }
</style>
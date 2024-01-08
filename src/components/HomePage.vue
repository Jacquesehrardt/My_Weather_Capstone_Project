<template>
   <div id="cityCarousel" class="carousel slide carousel-fade">
      <HeaderComponent />
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
   import HeaderComponent from './HeaderComponent.vue';

   export default {
      components: {
        WeatherComponent,
        HeaderComponent
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
   .carousel{
      display: flex;
      flex-direction: column;
   }

   #cityCarousel, .carousel-inner, .carousel-item{
      height: 100%;
   }
</style>
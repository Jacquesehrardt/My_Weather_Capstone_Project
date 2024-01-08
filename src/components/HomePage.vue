<template>
   <div id="cityCarousel" class="carousel slide carousel-fade">
      <HeaderComponent :elementsNumber="weatherInfoList.length" />
      <div class="carousel-inner">
         <div 
            v-for="(city, index) in weatherInfoList" :key="city.location.name"
            class="carousel-item" 
            :class="[index===0 ? 'active' : '']"
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
               {"name": "vancouver"},
               // {"name": "maceio"},
               // {"name": "vienna"},
            ],
            weatherInfoList: [],
            dataIsReturn: false
         }
      },
      methods:{
         async getWeatherInfo(city){
            const url = `http://api.weatherapi.com/v1/forecast.json?key=d8d254ee61c74b4c833222501240701&q=${city}&days=5&aqi=no&alerts=no`;
            const options = {
               method: 'GET',
            };

            try {
               const response = await fetch(url, options);
               const result = await response.text();
               const weather = JSON.parse(result);
               this.weatherInfoList.push(weather);
               console.log(weather.location);
            } catch (error) {
               console.error(error);
            }
         },
      },
      beforeMount(){
         // for(const city of this.cityList){
         //    this.getWeatherInfo(city.name);
         // }
      }
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
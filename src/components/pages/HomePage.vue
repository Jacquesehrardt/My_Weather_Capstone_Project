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
   import VueCookies from 'vue-cookies';
   import WeatherComponent from '../WeatherComponent.vue';
   import HeaderComponent from '../HeaderComponent.vue';

   export default {
      components: {
        WeatherComponent,
        HeaderComponent
      },

      data(){
         return {
            user: {},
            citymarksList: [],
            weatherInfoList: [],
            citymarkUrl: "http://localhost/my_weather/api/citymark.php",
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
            } catch (error) {
               console.error(error);
            }
         },
         async getCitymarks(id) {
				try {
					await fetch(this.citymarkUrl, {
						method: "POST",
						body: JSON.stringify({
							userId: id
						})
					}).then((response) => response.json()
					).then((data) => {
						if (data.success) {
							this.citymarksList = data.citymarksList;
                     if(this.citymarksList.length == 0){
                        window.location.replace("/addcity")
                     }
                     else{
                        for(const city of this.citymarksList){
                           this.getWeatherInfo(city.url);
                        }
                     }
						}
					});
            } catch (error) {
					console.log(error);
            }
			},
      },
      beforeMount(){
			if(VueCookies.isKey("session")){
				this.user = VueCookies.get("session").user;
				this.getCitymarks(this.user.userId);
			}
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
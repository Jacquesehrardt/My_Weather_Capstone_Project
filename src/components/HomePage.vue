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
            weatherInfoList: [
               {
                  "location": {
                     "name": "Maceio",
                     "region": "Alagoas",
                     "country": "Brazil",
                     "lat": -9.67,
                     "lon": -35.72,
                     "tz_id": "America/Maceio",
                     "localtime_epoch": 1704752717,
                     "localtime": "2024-01-08 19:25"
                  },
                  "current": {
                     "last_updated": "2024-01-08 19:15",
                     "temp_c": 27.0,
                     "temp_f": 80.6,
                     "is_day": 0,
                     "condition": {
                        "text": "Overcast",
                        "icon": "//cdn.weatherapi.com/weather/64x64/night/122.png"
                     },
                     "wind_mph": 11.9,
                     "wind_kph": 19.1,
                     "humidity": 89,
                     "feelslike_c": 30.5,
                     "feelslike_f": 86.9
                  },
                  "forecast": {
                     "forecastday": [
                        {
                           "date_epoch": 1704672000,
                           "day": {
                              "maxtemp_c": 30.0,
                              "maxtemp_f": 86.0,
                              "mintemp_c": 24.1,
                              "mintemp_f": 75.4,
                              "condition": {
                                    
                              }
                           },
                           "astro": {
                              
                           },
                           "hour": [
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              }
                           ]
                        },
                        {
                           "date_epoch": 1704758400,
                           "day": {
                              "maxtemp_c": 29.5,
                              "maxtemp_f": 85.1,
                              "mintemp_c": 25.9,
                              "mintemp_f": 78.6,
                              "condition": {
                                    
                              }
                           },
                           "astro": {
                              
                           },
                           "hour": [
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              }
                           ]
                        },
                        {
                           "date_epoch": 1704844800,
                           "day": {
                              "maxtemp_c": 28.7,
                              "maxtemp_f": 83.7,
                              "mintemp_c": 25.4,
                              "mintemp_f": 77.7,
                              "condition": {
                                    
                              }
                           },
                           "astro": {
                              
                           },
                           "hour": [
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              }
                           ]
                        },
                        {
                           "date_epoch": 1704931200,
                           "day": {
                              "maxtemp_c": 27.8,
                              "maxtemp_f": 82.1,
                              "mintemp_c": 25.6,
                              "mintemp_f": 78.1,
                              "condition": {
                                    
                              }
                           },
                           "astro": {
                              
                           },
                           "hour": [
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              }
                           ]
                        },
                        {
                           "date_epoch": 1705017600,
                           "day": {
                              "maxtemp_c": 28.7,
                              "maxtemp_f": 83.6,
                              "mintemp_c": 25.2,
                              "mintemp_f": 77.3,
                              "condition": {
                                    
                              }
                           },
                           "astro": {
                              
                           },
                           "hour": [
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              },
                              {
                                    "condition": {
                                       
                                    }
                              }
                           ]
                        }
                     ]
                  }
               }
            ],
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
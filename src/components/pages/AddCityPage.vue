<template>
   <section class="addCity">
      <aside>
         <button @click="goHome()" type="button" class="btn btn-light">
            <FontAwesomeIcon :icon="['fas', 'arrow-left']" />
         </button>
      </aside>
      <form @submit.prevent="searchCitymarks">
         <div class="form-group">
            <label for="cityname" class="form-label">City name</label>
            <input v-model.lazy="cityName" type="text" class="form-control" id="cityname">
         </div>
         <button type="submit" class="btn btn-primary">Search</button>
      </form>
      <section>
         <ul v-if="this.isSearch" class="list-group list-group-flush">
            <li v-for="city in this.cityList" :key="city.id" class="list-group-item">
               {{ city.name }} - {{ city.country }}
               <button @click="addCitymarks(city)" type="button" class="btn btn-success">Add</button>
            </li>
         </ul>
         <ul v-else class="list-group list-group-flush">
            <li v-for="city in this.citymarksList" :key="city.id" class="list-group-item">
               {{ city.cityName }} - {{ city.country }}
               <button @click="removeCitymark(city.citymarkId)" type="button" class="btn btn-danger">Remove</button>
            </li>
         </ul>
      </section>
   </section>
</template>

<script>
   import VueCookies from 'vue-cookies';

export default ({
   name: 'AddCityPage',
   props: {
      
   },
   data() {
      return {
         user: {},
         cityName: "",
         cityList: [],
         citymarksList: [],
         isSearch: false,
         citymarkUrl: "http://localhost/my_weather/api/citymark.php",
         addcitymarkUrl: "http://localhost/my_weather/api/addCitymark.php",
         deletecitymarkUrl: "http://localhost/my_weather/api/deleteCitymark.php",
      }
   },
   methods:{
      async searchCitymarks(){
         const url = `http://api.weatherapi.com/v1/search.json?key=d8d254ee61c74b4c833222501240701 &q=${this.cityName}`;
         const options = {
            method: 'GET',
         };

         try {
            const response = await fetch(url, options);
            const result = await response.text();
            const data = JSON.parse(result);
            this.cityList = data;
            this.isSearch = true;
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
               }
            });
         } catch (error) {
            console.log(error);
         }
      },
      async addCitymarks(city) {
         try {
            await fetch(this.addcitymarkUrl, {
               method: "POST",
               body: JSON.stringify({
                  userId: this.user.userId,
                  cityName: city.name,
                  region: city.region,
                  country: city.country,
                  url: city.url,
               })
            }).then((response) => response.json()
            ).then((data) => {
               if (data.success) {
                  window.location.replace("/addcity");
               }
            });
         } catch (error) {
            console.log(error);
         }
      },
      async removeCitymark(citymarkId) {
         try {
            await fetch(this.deletecitymarkUrl, {
               method: "POST",
               body: JSON.stringify({
                  citymarkId: citymarkId,
               })
            }).then((response) => response.json()
            ).then((data) => {
               if (data.success) {
                  window.location.replace("/addcity");
               }
            });
         } catch (error) {
            console.log(error);
         }
      },
      goHome(){
         window.location.replace("/home");
      }
   },
   beforeMount(){
      if(VueCookies.isKey("session")){
         this.user = VueCookies.get("session").user;
         this.getCitymarks(this.user.userId);
      }
   },
})
</script>
   
<style>
   .addCity{
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      row-gap: 4vh;
   }

   .addCity > form{
		display: flex;
		flex-direction: column;
		row-gap: 2vh;
	}

   .list-group-item{
      padding-left: 0;
      padding-right: 0;
   }

   aside{
      width: 80%;
   }

   @media (min-width: 300px) {
      .addCity{
         padding-top: 6%;
      }

      .addCity > form,
      .addCity > section{
         width: 80%;
      }
   }

   @media (min-width: 1000px) {
      .addCity{
         padding-top: 4%;
      }

      .addCity > form,
      .addCity > section{
         width: 40%;
      }

      aside{
         width: 60%;
      }
   }
</style>
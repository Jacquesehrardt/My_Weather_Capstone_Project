<template>
   <header>
      <button @click="addCityPage">
         <FontAwesomeIcon :icon="['fas', 'plus']" />
      </button>
      <div class="carousel-indicators" id="indicators">
         <button
            v-for="index in this.elementsNumber"
            :key="index"
            type="button"
            data-bs-target="#cityCarousel"
            v-bind:data-bs-slide-to=index-1
            aria-current="true"
            :class="[index===1 ? 'active' : '']"
         ></button>
      </div>
      <div class="dropdown">
         <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <FontAwesomeIcon :icon="['fas', 'ellipsis-vertical']" />
         </button>
         <ul class="dropdown-menu">
            <li><button @click="logout()" type="button" class="btn btn-danger">logout</button></li>
         </ul>
      </div>
   </header>
</template>

<script>
import VueCookies from 'vue-cookies';

export default ({
   name: 'HeaderComponent',
   props: {
      elementsNumber: Number,
   },
   methods:{
      addCityPage(){
         window.location.replace("/addcity")
      },
      logout() {
			if (VueCookies.isKey("session")) {
				VueCookies.remove("session");
				this.logged = false;
            window.location.replace("/");
			}
		}
   }
})
</script>
   
<style>
   header{
      display: flex;
      justify-content: space-between;
   }

   header > button,
   .dropdown > button{
      height: 5vh;
      width: 5vh;
      margin: 0;
      padding: 0;
      background-color: transparent;
      border: none;
      border-radius: 8px;
      font-size: 20px;
      transition: .5s;
   }

   header > button:hover,
   .dropdown > button:hover{
      color: white;
      background-color: #66adffa2;
   }

   #indicators{
      margin: 0;
      display: flex;
      align-items: center;
      position: relative;
      width: fit-content;
      gap: 5vw;
   }

   #indicators > button{
      margin: 0;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background-color: #5c9ce5;
   }

   #indicators > .active{
      width: 12px;
      height: 12px;
   }

   @media (min-width: 1000px) {
      header{
         width: 35%;
         background-color: #5c9ce5;
      }

      #indicators > button{
         background-color: #fff;
      }
   }

</style>
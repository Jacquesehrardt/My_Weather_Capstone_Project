<template>
   <header>
      <button>
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
      <button>
         <FontAwesomeIcon :icon="['fas', 'ellipsis-vertical']" />
      </button>
   </header>
</template>

<script>
export default ({
   name: 'HeaderComponent',
   props: {
      elementsNumber: Number,
   },
})
</script>
   
<style>
   header{
      display: flex;
      justify-content: space-between;
   }

   header > button{
      height: 5vh;
      width: 5vh;
      margin: 0;
      padding: 0;
      background-color: transparent;
      border: none;
      font-size: 20px;
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
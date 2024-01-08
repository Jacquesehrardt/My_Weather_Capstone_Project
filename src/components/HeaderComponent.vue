<template>
   <header>
      <button>
         <FontAwesomeIcon :icon="['fas', 'plus']" />
      </button>
      <div class="carousel-indicators" id="indicators">
         <button type="button" data-bs-target="#cityCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#cityCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#cityCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <button>
         <FontAwesomeIcon :icon="['fas', 'ellipsis-vertical']" />
      </button>
   </header>
</template>

<script>
export default ({
   name: 'HeaderComponent',
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
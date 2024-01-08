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
</style>
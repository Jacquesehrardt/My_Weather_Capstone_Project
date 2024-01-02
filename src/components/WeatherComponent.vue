<template>
   <main>
      <section>
         <section>
            <button 
               class="carousel-control-prev" 
               type="button" 
               data-bs-target="#cityCarousel" 
               data-bs-slide="prev"
            >
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <article>
               <h1>{{ city.name }}</h1>
               <h3>{{ city.state }}</h3>
               <h2>{{ city.temp }} &deg;C</h2>
            </article>
            <button 
               class="carousel-control-next" 
               type="button"
               data-bs-target="#cityCarousel" 
               data-bs-slide="next"
            >
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </section>
      </section>
      <article>
         <aside>
            <h4>Feels Like</h4>
            <p>{{ city.feelsLike}} &deg;C</p>
         </aside>
         <aside>
            <h4>Wind</h4>
            <p>{{ city.wind}}km/h</p>
         </aside>
         <aside>
            <h4>Humidity</h4>
            <p>{{ city.humidity}}%</p>
         </aside>
      </article>
   </main>
</template>

<script>
export default ({
   name: 'WeatherComponent',
   props: {
      city: {},
   },
})
</script>

<style>
   
</style>
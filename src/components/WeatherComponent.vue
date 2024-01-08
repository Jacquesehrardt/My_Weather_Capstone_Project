<template>
   <main>
      <section>
         <section class="temperature">
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
               <aside>
                  <h2>{{ city.name }}</h2>
                  <h2>{{ city.state }}</h2>
               </aside>
               <h1>{{ city.temp }} &deg;C</h1>
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
      <article class="information">
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

<style>s
   h1, h2, h4, p{
      margin: 0;
      padding: 0;
   }
   
   @media (min-width: 300px){
      main{
         display: flex;
         flex-direction: column;
         align-items: center;
      }

      main > section{
         height: 35vh;
         width: 100%;
      }

      .temperature{
         height: 100%;
         display: flex;
         justify-content: space-evenly;
         align-items: center;
      }
      
      .temperature > article{
         width: 80%;
         height: 90%;
         padding: 5%;
         display: flex;
         justify-content: space-between;
         flex-direction: column;
         background-color: #5c9ce5;
         border-radius: 20px;
      }

      .temperature button{
         display: none;
      }

      .carousel-control-prev, .carousel-control-next{
         position: relative;
      }

      h1{
         font-size: 60px;
         font-weight: 400;
         color: #fdfdfe;
      }

      h2{
         font-size: 24px;
         font-weight: 300;
         color: #fdfdfe;
      }

      .information{
         width: 80%;
         display: flex;
         flex-wrap: wrap;
         justify-content: space-between;
         row-gap: 10px;
      }

      .information > aside{
         width: 48%;
         padding: 4%;
         background-color: #cccccc;
         border-radius: 15px;
      }

      .information > aside:nth-child(1){
         width: 100%;
      }

      h4{
         font-size: 20px;
         font-weight: 300;
      }

      p{
         font-size: 18px;
         font-weight: 300;
      }
   }

   @media (min-width: 700px){

      .temperature > article{
         width: 84%;
         padding: 4%;
      }

      h1{
         font-size: 80px;
      }

      h2{
         font-size: 30px;
      }

      .information{
         width: 84%;
      }

      .information > aside{
         width: 32%;
         padding: 3%;
      }

      .information > aside:nth-child(1){
         width: 32%;
      }

      h4{
         font-size: 22px;
      }

      p{
         font-size: 20px;
      }
   }

   @media (min-width: 1000px){
      main{
         height: 100%;
         flex-direction: row;
         align-items: normal;
      }

      main > section{
         height: 100%;
         width: 35%;
         background-color: #5c9ce5;
      }

      .temperature > article{
         width: 65%;
         justify-content: flex-start;
         gap: 10%;
      }

      .temperature button{
         display: block;
         width: 3vw;
         height: 3vw;
      }

      .carousel-control-prev-icon, .carousel-control-next-icon{
         width: 30px;
      }

      .information{
         padding-top: 5%;
         width: 65%;
         justify-content: space-evenly;
      }

      .information > aside,
      .information > aside:nth-child(1){
         width: 30%;
         height: fit-content;
         border-radius: 20px;
      }

      h4{
         font-size: 28px;
      }

      p{
         font-size: 26px;
      }
   }
   </style>
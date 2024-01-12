<template>
   <section class="forecast">
      <div id="chart">
        <apexchart type="line" height="350" :options="this.chartOptions" :series="this.series"></apexchart>
      </div>
   </section>
</template>

<script>
   export default ({
      name: 'ForecastComponent',
      props: {
         forecast: Array,
      },
      data(){
         return{
            series: [
               {
                  name: "High",
                  data: []
               },
               {
                  name: "Low",
                  data: []
               }
            ],
            chartOptions: {
               chart: {
               type: 'line',
               dropShadow: {
                  enabled: true,
                  color: '#000',
                  top: 18,
                  left: 7,
                  blur: 10,
                  opacity: 0.2
               },
               toolbar: {
                  show: false
               }
               },
               colors: ['#77B6EA', '#545454'],
               dataLabels: {
                  enabled: true,
                  offsetY: -6,
                  background:{
                     enabled: false,
                  }
               },
               stroke: {
                  curve: 'smooth'
               },
               title: {
                  text: '5-day forecast',
                  align: 'left'
               },
               grid: {
               borderColor: '#e7e7e7',
               },
               markers: {
                  size: 2
               },
               xaxis: { 
                  categories: [],
                  position: "top",
                  tickPlacement: 'between'
               },
               legend: {
                  show: false,
               }
            },
         }
      },
      beforeMount(){
         for(let forecastday of this.forecast){
            this.series[0].data.push(forecastday.day.maxtemp_c);
            this.series[1].data.push(forecastday.day.mintemp_c);

            const date = new Date(forecastday.date_epoch*1000);
            const options = { 
               weekday: "long", 
               month: "short",
               day: "numeric",
               timeZone: "UTC"
            };
            const formatDate = new Intl.DateTimeFormat("en-US", options).format(date);
            this.chartOptions.xaxis.categories.push(formatDate);
         }
      }
   })
</script>

<style>
   .forecast{
      width: 90%;
   }
</style>
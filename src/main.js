import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap.js'
import VueApexCharts from "vue3-apexcharts";
import { createApp } from 'vue'
import App from './App.vue'


/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'
/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
/* import specific icons */
import { faPlus } from '@fortawesome/free-solid-svg-icons'
import { faEllipsisVertical } from '@fortawesome/free-solid-svg-icons'
/* add icons to the library */
library.add(faPlus, faEllipsisVertical)

createApp(App)
.use(VueApexCharts)
.component('FontAwesomeIcon', FontAwesomeIcon)
.component('apexcharts', VueApexCharts)
.mount('#app')

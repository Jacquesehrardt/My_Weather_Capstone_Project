import 'bootstrap/dist/css/bootstrap.css'
import { createApp } from 'vue'
import App from './App.vue'

import 'bootstrap/dist/js/bootstrap.js'

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
.component('FontAwesomeIcon', FontAwesomeIcon)
.mount('#app')

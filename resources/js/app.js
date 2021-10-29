// //require('./bootstrap');
// import './bootstrap'
// import { createApp } from 'vue';
// import Index from './Index'
// import router from './router'

// const app = createApp(Index)
// //app.config.globalProperties.$axios = axios;
// app.use(router)
// app.mount('#app')

require('./bootstrap');

import { createApp } from 'vue';
import axios from 'axios'
//import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
//import VueRouter from 'vue-router'
import Index from './Index'
import auth from './auth'
import router from './router'

const app = createApp(Index)
// //app.config.globalProperties.$axios = axios;
//app.router = router;
app.use(router);
app.use(VueAxios, axios)
axios.defaults.baseURL = `${process.env.MIX_APP_URL}:8000/api/v1`
app.use(auth)
app.mount('#app')

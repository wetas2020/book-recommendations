import {createApp} from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import { createProvider } from './vue-apollo'

// new Vue({
//     apolloProvider: createProvider(),
//     render: h => h(App)
// }).$mount('#app');

createApp(App).use(store).use(router).mount('#app')

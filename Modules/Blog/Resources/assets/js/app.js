import { createApp } from "vue";
import Home from "./components/Home.vue";

const app = createApp({
  components: {
    Home
  }
});

app.mount("#app");




/* import { createApp } from "vue";
import VueRouter from 'vue-router'
import AppComponent from './components/app.vue';

const app = createApp({});

Vue.use(VueRouter)


const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }


const routes = [
  { path: '/', component: Foo },
  { path: '/bar', component: Bar },
  { path: '/app', component: AppComponent }
]


const router = new VueRouter({
    routes
  })


  app.mount("#app"); */

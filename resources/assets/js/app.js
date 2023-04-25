import './bootstrap';
import { createApp } from 'vue';
import CreateUser from "./components/CreateUser.vue";


const app = createApp({});

app.component('create-user', CreateUser);

app.mount('#app');

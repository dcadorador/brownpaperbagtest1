import {createApp} from 'vue';
import Register from '@/components/login/Register.vue'

const app = createApp({});
app.component('register', Register);
app.mount('#app');

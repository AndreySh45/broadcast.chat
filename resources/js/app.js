import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';
import TestComponent from './TestComponent.vue';
import ChatMessages from './components/ChatMessages';
import ChatForm from './components/ChatForm';

const app = createApp({
    components: {
        TestComponent,
        ChatMessages,
        ChatForm
    }
});

app.mount('#app')

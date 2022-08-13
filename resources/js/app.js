import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';
import TestComponent from './TestComponent.vue';
import ChatMessages from './components/ChatMessages.vue';
import ChatForm from './components/ChatForm.vue';

const app = createApp({
    components: {
        TestComponent,
        ChatMessages,
        ChatForm
    }
});

app.mount('#app')

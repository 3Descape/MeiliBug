/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Meili from './components/Meili.vue'
import { createApp } from "vue"

const base_app = createApp({
    components: {
        Meili,
    }
})

const vue = base_app.mount("#app")
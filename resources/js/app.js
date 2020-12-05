require('./bootstrap');

import Vue from 'vue'

import testone from './components/app'
import testtwo from './components/test2'

const app = new Vue({
    el: '#app',
    components: {
        testone,
        testtwo
    }
})

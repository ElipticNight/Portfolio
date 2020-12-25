require('./bootstrap');

import Vue from 'vue'

import TicTacToe from './components/TicTacToe'

const app = new Vue({
    el: '#app',
    components: {
        TicTacToe
    }
})


require('./bootstrap');

import Vue from 'vue'

import HeaderMain from './components/Header'
import TicTacToe from './components/projects/TicTacToe'

const app = new Vue({
    el: '#app',
    components: {
        HeaderMain,
        TicTacToe
    }
})


require('./bootstrap');

import Vue from 'vue'

import ProjectCard from './components/ProjectCard'

const app = new Vue({
    el: '#app',
    components: {
        ProjectCard
    }
})


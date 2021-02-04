import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)

const routes = [
    // { path: '/foo', component: ToolBar },
    // { path: '/bar', component: Bar }
]

const router = new VueRouter({
    routes // short for `routes: routes`
})

export default router

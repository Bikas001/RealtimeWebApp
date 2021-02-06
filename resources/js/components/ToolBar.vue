0<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="#">Bikas chaudhary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <router-link v-for="item in items"
                             :key="item.title"
                             :to="item.to"
                             v-if="item.show"
                >
                <li class="nav-item active">
                    <a class="nav-link" href="#">{{item.title}}</a>
                </li>
                </router-link>
            </ul>
        </div>
        </div>
    </nav>
</template>

<script>
export default {
    data(){
        return {
            items : [
                {title:'Forum',to:'/forum',show:true},
                {title: 'Category',to: '/category',show: User.loggedIn()},
                {title: 'Ask Question ?',to: '/ask',show: User.loggedIn()},
                {title: 'Login',to: '/login',show: !User.loggedIn()},
                {title: 'Logout', to: '/logout', show: User.loggedIn()}
            ]
        }
    },
    created() {
        EventBus.$on('logout' ,()=>{
            User.logout()
        })
    }


}
</script>

<style>

</style>

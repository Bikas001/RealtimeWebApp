<template>
    <div class="container">
        <br>
        <form @submit.prevent="login">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" v-model="form.email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" v-model="form.password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <router-link to="/signup">
                <button type="submit" class="btn btn-success">signup</button>
            </router-link>
        </form>
    </div>
</template>

<script>


import router from "../../Router/router";

export default {
    data(){
        return {
            form :{
                email:null,
                password:null
            }
        }
    },
    created() {
        if(User.loggedIn()){
            router.push({name:'forum'})
        }
    },
    methods : {
       login(){
           User.login(this.form)
       }
    }
}
</script>

<style>

</style>

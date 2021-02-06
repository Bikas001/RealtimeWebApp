<template>
    <div class="container">
        <br>
        <form @submit.prevent="signup">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" v-model="form.name"  class="form-control" id="exampleName" aria-describedby="emailHelp">
                <small  class="form-text text-danger" v-if="errors.name">{{errors.name[0]}}</small>

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" v-model="form.email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <small  class="form-text text-danger" v-if="errors.email">{{errors.email[0]}}</small>
            </div>

            <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" v-model="form.password" name="password" class="form-control" id="password1">
                <small  class="form-text text-danger" v-if="errors.password">{{errors.password[0]}}</small>
            </div>
            <div class="form-group">
                <label for="password2">Password</label>
                <input type="password" v-model="form.password_confirmation" name="password" class="form-control" id="password2">
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
            <router-link to="/login">
            <button type="submit" class="btn btn-success">login</button>
        </router-link>

        </form>
    </div>

</template>

<script>
import router from "../../Router/router";

export default{
    data(){
        return {
            form : {
                name:null,
                email:null,
                password:null,
                password_confirmation:null
            },
            errors : {

            }

        }
    },
    created() {
        if(User.loggedIn()){
            router.push({name:'forum'})
        }
    },

    methods : {
        signup() {
            axios.post('/api/auth/signup',this.form)
            .then(res=>{User.responseAfterLogin(res)
            router.push({name:'forum'})}
            )
            .catch(error =>this.errors = error.response.data.errors)

        }
    }

}
</script>

<style>

</style>

0<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="#">Bikas chaudhary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Forum <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ask Question?</a>
                </li>

                <router-link to="/category" >
                        <li class="nav-item">
                            <a class="nav-link" >Category</a>
                        </li>
                </router-link>

                <router-link to="/login">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                </router-link>

            </ul>
        </div>
        </div>
    </nav>
</template>

<script>
export default {

}
</script>

<style>

</style>

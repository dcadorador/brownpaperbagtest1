<template>
<div>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="">
                        <img class="align-content" src="/images/logo.png" alt="">
                    </a>
                </div>
                <div id="session-message" style="text-align: center" v-show="errorMessage" class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    <span class="badge badge-pill badge-danger">{{ errorMessage }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="login-form">
                    <form method="POST" @submit.prevent="authentication">
                        <input type="hidden" name="_token" :value="csrf">
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input id="email" v-model="email" type="email" placeholder="Email" class="form-control" name="email" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" v-model="password" id="password" name="password" placeholder="Password" class="form-control" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox">
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Log in</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="/register"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import axios from "axios";

export default {
    name: "Login",

    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            email: '',
            password: '',
            errorMessage: '',
        }
    },

    mounted() {
      console.log(import.meta.env.VITE_API_ENDPOINT);
    },

    methods: {

        authentication() {
            axios
                .post(import.meta.env.VITE_API_ENDPOINT + 'login', {
                    'email' : this.email,
                    'password': this.password,
                    '_token': this.csrf
                })
                .then(({data}) => {
                    if(data.status) {
                        window.location.href = import.meta.env.VITE_APP_URL + 'dashboard'
                    } else {
                        this.errorMessage = data.message
                    }
                });
        }

    }
}
</script>

<style scoped>

</style>

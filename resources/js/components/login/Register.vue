<template>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="/login">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" @submit.prevent="registration">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" v-model="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" v-model="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" v-model="password" placeholder="Password"
                                   required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="/login"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Register",

    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            email: '',
            password: '',
            name: '',
        }
    },

    methods: {

        registration() {

            axios
                .post(import.meta.env.VITE_API_ENDPOINT + 'register', {
                    'email': this.email,
                    'password': this.password,
                    'name': this.name,
                    '_token': this.csrf
                })
                .then(({data}) => {
                    if (data.status) {
                        window.location.href = import.meta.env.VITE_APP_URL + 'dashboard'
                    }
                });
        }

    }
}
</script>

<style scoped>

</style>

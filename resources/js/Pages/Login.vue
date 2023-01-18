<template>
<div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3></h3>
            <p></p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" v-model="form.email" placeholder="Username" required="">
                    <span v-if="error && error.email">{{ error.email[0] }}</span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" v-model="form.password" placeholder="Password" required="">
                    <span v-if="error && error.password">{{ error.password[0] }}</span>
                </div>
                <button type="submit" @click.prevent="submit()" class="btn btn-primary block full-width m-b">
                Login
                </button>
                <a href="#"><small>Forgot password?</small></a>
            </form>
            <p class="m-t"> 
            <small>
            &copy; 2020</small> 
            </p>
        </div>
    </div>
</template>

<script>
//import Main from '@/User/Main'
export default {
    //   layout: Main,
    //   components: {
    //     Main,
    //   },
    data() {
        return {
            error: null,
            form: {
                email: null,
                password:"",
            },
        };
    },
    methods:{
        submit() {
            //   this.$inertia.post(this.$page.url+'login', this.form)
            let vm = this;
            axios.post('/adminlogin', this.form)
                .then(function (response) {
                    //swal("Success!", 'Successfully Logged in', "success");
                    setTimeout(function() {
                            window.location.href = response.data;
                        }, 1000);
                })
                .catch(function (error) {
                    if(error.response.data.errors);
                    vm.error = error.response.data.errors;
                });
                },
        },
}
</script>
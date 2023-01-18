<template>

<div id="wrapper">
       <Sidebar />
       <!-- sidebar -->

    <div id="page-wrapper" class="gray-bg">
         
		<Header />
		<!-- Header -->   
        
        <!-- Body -->
        <slot />
        
         <Footer />
         <!-- Footer -->
    </div>
        
        <!-- Something -->

</div>

</template>

<script>
import Sidebar from "./Sidebar";
import Header from "./Header";
import Footer from "./Footer";
export default {
    //   layout: Main,
       components: {
         Sidebar,
         Header,
         Footer,
       },
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
            axios.post('/login', this.form)
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
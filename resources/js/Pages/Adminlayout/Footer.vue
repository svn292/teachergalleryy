<template>

    <div class="footer">
        <div class="float-right">
            OEM <strong>AUTO</strong> PART.
        </div>
        <div>
            <strong>Copyright</strong> OEM &copy; 2020
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
<template>

  <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a @click.prevent="togglebody" class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <!-- <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form> -->
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Teacher Gallery.</span>
                </li>
               
             


                <li>
    
                    <inertia-link href="/logout" method="post">
                        <i class="fa fa-sign-out"></i> Log out
                    </inertia-link>
                </li>
               
            </ul>

        </nav>
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
       togglebody: function(){
      $("body").toggleClass("mini-navbar");
    }
    
        },
}
</script>
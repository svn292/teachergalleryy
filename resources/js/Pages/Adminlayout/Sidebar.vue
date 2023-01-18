<template>

  <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <!-- <img alt="image" style="width:40px;" class="rounded-circle" src="img/user-icon.png"/> -->
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{ $page.props.user.name }}</span>
                            
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a target="_blank" class="dropdown-item" href="/">Site</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <inertia-link class="dropdown-item" href="/logout" method="post">
                                Logout
                                </inertia-link>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        
                    </div>
                </li>

                <li>                   
                <inertia-link href="/adminhome">
                <i class="fa fa-database"></i> 
                <span class="nav-label">Dashboard</span>
                </inertia-link>
                </li>
                 <li>                   
                <inertia-link href="/admin/allstudent">
                <i class="fa fa-database"></i> 
                <span class="nav-label">Student</span>
                </inertia-link>
                </li>  
                  <li>                   
                <inertia-link href="/admin/allteacher">
                <i class="fa fa-database"></i> 
                <span class="nav-label">Teacher</span>
                </inertia-link>
                </li>
                <li>                   
                <inertia-link href="/admin/allsubject">
                <i class="fa fa-database"></i> 
                <span class="nav-label">Subject</span>
                </inertia-link>
                </li>
                  <li>                   
                <inertia-link href="/admin/allpublisher">
                <i class="fa fa-database"></i> 
                <span class="nav-label">Publisher</span>
                </inertia-link>
                </li>
                 <li>                   
                <inertia-link href="/admin/package">
                <i class="fa fa-database"></i> 
                <span class="nav-label">Package</span>
                </inertia-link>
                </li> 
                <li>                   
                <inertia-link href="/admin/allads">
                <i class="fa fa-database"></i> 
                <span class="nav-label">Ads</span>
                </inertia-link>
                </li> 
                <li>                   
                <inertia-link href="/admin/paymenthistory">
                <i class="fa fa-database"></i> 
                <span class="nav-label">Payment History</span>
                </inertia-link>
                </li>
                  <li class="drop">
                    <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Sliders</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                         <li>
                        <inertia-link href="/admin/sliders">
                        Manage Sliders
                        </inertia-link>
                       </li>
                       <li>
                           
                        <inertia-link href="/admin/newslider">
                        New Slider
                        </inertia-link>
                       </li>
                         
                      
                    </ul>
                </li>
                <li>                   
                <inertia-link href="/admin/cms">
                <i class="fa fa-database"></i> 
                <span class="nav-label">Cms</span>
                </inertia-link>
                </li>
                <!-- <li class="drop" v-if="$page.props.user.id == 1 || $page.props.user.can['Blog']">
                    <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Posts</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                         <li>
                        <inertia-link href="/posts">
                        Manage Posts
                        </inertia-link>
                       </li>
                       <li>
                           
                        <inertia-link href="/newpost">
                        New Posts
                        </inertia-link>
                       </li>
                      
                    </ul>
                </li>
                
             
                
                 <li   class="special_link">
                    <inertia-link href="/setting"><i class="fa fa-database"></i>
                     <span class="nav-label">Settings</span></inertia-link>
                </li> -->
            </ul>

        </div>
    </nav>

</template>

<script>
//import Main from '@/User/Main'
export default {
    //   layout: Main,
    //   components: {
    //     Main,
    //   },
      mounted(){
   
    $(".drop").click(function(e){
        // $(this).toggleClass("open");
        e.preventDefault();
        $(this).find('ul').toggleClass("collapse");
        // $(this).find('ul').find('li').toggleClass("animation");
    })
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
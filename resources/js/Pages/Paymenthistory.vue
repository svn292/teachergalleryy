<template>
  <div>
   <div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Payment History</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="">Payment History</a>
			</li>
		
		</ol>
	</div>
	<div class="col-lg-2">

	</div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-12">
			
			<div class="ibox">
					<div class="ibox-title">
                     
									
					<a class="btn btn-sm btn-primary" href="">
						<i class="fa fa-refresh"></i> Refresh
					</a>
							
					</div>
				
					<div class="ibox-content">
                   	<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example" >
							<thead>
							<tr>
							   <!-- <th>Sl.No.</th> -->
							   <th class="th-sm">Name</th>
							   <th class="th-sm">Package</th>	
							   <th class="th-sm">Price</th>	
							   <th class="th-sm">Payment Id</th>	
							   <th class="th-sm">Date</th>	
							   <th class="th-sm">Status</th>	
							 	   	
							
							                           						
							</tr>
							</thead>

							<tbody>	
							
							<tr :key="key" v-for="(item,key) in rows.data" class="gradeX2">							
								<!-- <td>1</td> -->
							
								<td>{{item.user.name}}</td>
								<td>{{item.package.name}}</td>
								<td>{{item.price}}</td>	
								<td>{{item.payment_id}}</td>	
								<td>{{new Date(item.created_at)  | dateFormat('DD-MM-YYYY')}}</td>	
								<td v-if="item.status == 1">Success</td>	
								<td v-else>Pending</td>	
							</tr>
							
							</tbody>
							<tfoot>
							
							</tfoot>
						</table>
						<!-- <pagination :data="rows" @pagination-change-page="getResults"></pagination> -->
					</div>

				</div>
			</div>
		</div>
		</div>
</div>
</div>
</template>

<script>
import App from './Adminlayout/App'
export default {
       layout: App,
       components: {
         App,
	   },
	     props: {
	errors: Object,
	flash: null,
	appurl: null,
    data: null,
  },
     watch: {
	// whenever question changes, this function will run
	data: function (value) {
		this.rows = value;
	},
    errors: function (value) {
      $.each(value, function(key, val) {
						// swal("error!", val[0], "error");br
						toastr.error('Error', val[0]);	
					});
	},
	 flash: function (value) {
		 alert("Dd");
		 toastr.success('Success', value);	
    }
  },
  mounted(){
	  if(this.flash)
	  toastr.success('Success', this.flash);	
  },
    data() {
        return {
            error: null,
            show: false,
            rows: this.data,
			tempitem : null,
            form: {
                email: null,
                password:"",
            },
        };
    },
    methods:{
		getResults(page = 1){
			        this.$inertia.visit(this.appurl+'/pages?page='+ page, {
  method: 'get',
  replace: false,
  preserveState: true,
  preserveScroll: true,
  only: [],
})
		},
		delitem(tempitem){
			this.show = true;
			this.tempitem = tempitem;
		},
		chngsts(id){
			axios.get('/changepagestatus/'+id)
			.then(function (response) {
				 toastr.success('Success', "Status Changed");	
			});
		},
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
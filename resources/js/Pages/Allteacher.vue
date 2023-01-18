<template>
  <div>
   <div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Teachers</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="">Teachers</a>
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
                     
									
					<inertia-link  class="btn btn-sm btn-primary" href="/admin/addteacher">
                       Add New
                    </inertia-link>	
							
					</div>
				
					<div class="ibox-content">
                   	<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example" >
							<thead>
							<tr>
							   <!-- <th>Sl.No.</th> -->
							   <th class="th-sm">Name</th>
							   <th class="th-sm">Email</th>	
							   <th class="th-sm">Phone</th>					   	
							 <th class="th-sm" width="160">Action</th> 
							                           						
							</tr>
							</thead>

							<tbody>	
							
							<tr :key="key" v-for="(item,key) in rows.data" class="gradeX2">							
								<!-- <td>1</td> -->
							
								<td>{{item.name}}</td>
								<td>{{item.email}}</td>
								<td>{{item.phone}}</td>	
									<td width=140>
								    
									<inertia-link  :href="'editteacher/'+item.id" class="btn btn-primary btn-sm edit_item"  > 
									<i class="fa fa-pencil"></i> Edit
									</inertia-link >
									<a href="" @click.prevent="delitem(item.id)" class="btn btn-danger btn-sm edit_item"  > 
									<i class="fa fa-trash"></i> Delete
									</a>
									
								</td>
							</tr>
							
							</tbody>
							<tfoot>
							
							</tfoot>
						</table>
						<pagination :data="rows" @pagination-change-page="getResults"></pagination>
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
			        this.$inertia.visit(this.appurl+'/admin/allteacher?page='+ page, {
  method: 'get',
  replace: false,
  preserveState: true,
  preserveScroll: true,
  only: [],
})
		},
			edititem(item){
			this.title = "Edit Package";
			this.show = true;
			this.form = {
				name: item.name,
				description: item.description,
				price: item.price,
				duration: item.duration,
				noOfAds: item.noOfAds,
				id: item.id
			};
		},
		delitem(id){
		swal({
  title: "Are you sure?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    this.$inertia.visit(this.appurl+'/admin/deleteteacher/'+id, { method: 'delete' })
  }
});
		},
  
        },
}
</script>
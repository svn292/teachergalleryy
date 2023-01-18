<template>
<div>
   <div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Manage Sliders</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="">Manage Sliders</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Manage Sliders</strong>
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
                     
					<inertia-link class="btn btn-sm btn-primary" href="/admin/newslider">
                       Add New
                    </inertia-link>						
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
							   <th class="th-sm">Image</th>
						
							   <th class="th-sm">Title</th>
							   <th class="th-sm">Subtitle</th>						   	
										   	
							
							   <th class="th-sm" width="160">Action</th>                                						
							</tr>
							</thead>

							<tbody>	
							
							<tr :key="key" v-for="(item,key) in rows" class="gradeX2">							
								<!-- <td>1</td> -->
								<td><img width="120px" :src="appurl+'/'+item.image"></td>
						
								<td>{{item.title}}</td>
								<td>{{item.subtitle}}</td>
								
								
								
								<td width=140>
								    
									<inertia-link :href="'/admin/editslider/'+item.id" class="btn btn-primary btn-sm edit_item"  > 
									<i class="fa fa-pencil"></i> Edit
									</inertia-link>
									<a href="" @click.prevent="delitem(item.id)" class="btn btn-danger btn-sm edit_item"  > 
									<i class="fa fa-trash"></i> Delete
									</a>
								</td>
								
							</tr>
							
							</tbody>
							<tfoot>
							
							</tfoot>
						</table>
					
					</div>

				</div>
			</div>
		</div>
		</div>
</div>
</div>
</template>
<style scoped>

.ibox-content {box-shadow: 0px -1px 4px 0px #000 !important;}
.ibox-title { box-shadow: -2px 6px 15px -10px #000 !important;}

#image_preview img {
    width: 80px;
    height: auto;
}
#image_preview2 img {
    width: 80px;
    height: auto;
}
.modal-title {
    color: #EA2;
}
</style>
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
            rows: this.data,
        };
    },
    methods:{
		delitem(id){
		swal({
  title: "Are you sure?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    this.$inertia.visit(this.appurl+'/deleteslider/'+id, { method: 'delete' })
  }
});
		},

        },
}
</script>
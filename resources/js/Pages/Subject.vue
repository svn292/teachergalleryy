<template>
<div>
   <div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Manage Subject</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="">Home</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Manage Subject</strong>
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
					<div class="ibox-title row">
                     
				
					<div style="margin-right:2px">
  <b-button class="btn btn-sm btn-primary" @click="show=true">Add New</b-button>
    <b-modal
	hide-backdrop content-class="shadow"
       v-model="show"
      :title="title"
      
      @hidden="resetModal"
    >
      <form ref="form" @submit.stop.prevent="handleSubmit">
        <b-form-group
          label="Name"
          label-for="name-input"
          invalid-feedback="Name is required"
        >
          <b-form-input
            id="name-input"
            v-model="form.name"
            required
          ></b-form-input>
        </b-form-group>  
		 <b-form-group
          label="Image"
          label-for="name-input"
          invalid-feedback="Name is required"
        >
         <b-form-file
		 v-model="image"
		 ref="file" @change="onFileChange"
     accept="image/*"
      placeholder="Choose a file or drop it here..."
      drop-placeholder="Drop file here..."
    ></b-form-file>
        </b-form-group> 
      
      </form>
	  <template #modal-footer>
        <div class="w-100">
         
          <b-button
            variant="primary"
            size="sm"
            class="float-right"
            @click="handleSubmit()"
          >
            Save
          </b-button>
        </div>
      </template>
    </b-modal>
</div>				
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
							   <th class="th-sm">Image</th>
							
							   <th class="th-sm" width="160">Action</th>                                						
							</tr>
							</thead>

							<tbody>	
							
							<tr :key="key" v-for="(item,key) in rows.data" class="gradeX2">							
								<!-- <td>1</td> -->
								<td>{{item.name}}</td>
									<td><img width="120px" :src="appurl+'/'+item.image"></td>
								
								<td width=140>
								    
									<a @click.prevent="edititem(item)" href="" class="btn btn-primary btn-sm edit_item"  > 
									<i class="fa fa-pencil"></i> Edit
									</a>
									<a href="" @click.prevent="delitem(item.id)" class="btn btn-danger btn-sm edit_item"  > 
									<i class="fa fa-trash"></i> Delete
									</a>
									<!-- <button class="btn btn-primary btn-sm delete_item"  data-id="{{$value->id}}"> 
									<i class="fa fa-trash"></i> Delete
									</button> -->
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
			 show: false,
            title: "Add Subject",
          
            error: null,
            rows: this.data,
			image : null,
            form: {
				name: '',
				id: ''
			},
        };
    },
    methods:{
			onFileChange: function() {
    //   this.image = this.$refs.file.files[0];
    //   console.log(this.image);
    },
		getResults(page = 1){
			        this.$inertia.visit(this.appurl+'/admin/allsubject?page='+ page, {
  method: 'get',
  replace: false,
  preserveState: true,
  preserveScroll: true,
  only: [],
})
		},
		edititem(item){
			this.title = "Edit Subject";
			this.show = true;
			this.form = {
				name: item.name,
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
    this.$inertia.visit(this.appurl+'/admin/deletesubject/'+id, { method: 'delete' })
  }
});
		},
	resetModal(){
			this.title = "Add Subject";
			this.image = null;
		this.form = {
				name: '',
				id: ''
			};
	},
	handleSubmit(){
		let vm = this
		let frm = new FormData();
			let myObj = this.form;
					$.each(myObj, function(key, val) {
						if(val != null)
						frm.append(key,val);
						else
						frm.append(key,'');
					});
					if(this.image){
						frm.append('image',this.image);
					}
			 this.$inertia.post(this.$page.url, frm)
       .then(function(response) {
        if(Object.entries(vm.errors).length==0){
              vm.form = {
                name: '',
				id: ''
      };
	   vm.show = false;
	   vm.image = null;
	   vm.resetModal();
        }

      });
		}
		},
		
}
</script>
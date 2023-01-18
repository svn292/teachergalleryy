<template>
<div>
   <div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Add New Teacher</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="">Teacher</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Add Teacher</strong>
			</li>
		</ol>
	</div>
	<div class="col-lg-2">

	</div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
		<div class="col-lg-10">
			<div class="ibox border-bottom">
				<div class="ibox-title">
					<h5>Teacher Details</h5>
					
				</div>
				<div class="ibox-content" >
					<form @submit.prevent="submit" class="form" enctype="multipart/form-data" method="post" id="addFrm">
						
						<div class="form-group  row"><label class="col-sm-2 col-form-label">Name  <span class="requiredstar">*</span></label>

							<div class="col-sm-10"><input type="text" v-model="form.name" class="form-control"></div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10"><input type="text"  v-model="form.email" class="form-control"> 
							
							</div>
						</div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Profile Image</label>
							<div class="col-sm-10"><input type="file" @change="onFileChange" ref="file"  class="form-control"> 
							
							</div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Phone  <span class="requiredstar">*</span></label>
							<div class="col-sm-10"><input type="number"  v-model="form.phone" class="form-control"> 
							
							</div>
						</div>
					
						
						
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Password</label>

							<div class="col-sm-10"><input type="password" v-model="form.password" class="form-control" name="password"></div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">About</label>

							<div class="col-sm-10"><textarea v-model="form.about" class="form-control"></textarea></div>
						</div>
						<div class="hr-line-dashed"></div>
						
						
						<div class="form-group row">
							<div class="col-sm-4 col-sm-offset-2">
								<button class="btn btn-white btn-sm" type="submit">Cancel</button>
								<button class="btn btn-primary btn-sm" type="submit">Save changes</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	
</div>

</div>
</template>
<style scoped>
	.wrapper-content {
		box-shadow: 0px 7px 23px -10px #000 !important;
	}

	label {
		font-weight: 600 !important;
	}

	.note-editor.note-frame .note-editing-area .note-editable {
		height: 280px !important;
	}

	.note-editor.note-frame {
		border: 1px solid #ccc;
	}

	.publish {
		padding: 10px;
		border: 1px solid #F5F5DA;
		background: #F5F5FA;
	}
	#image_preview img {
    width: 100%;
    height: 170px;
    border: 3px solid #ccc;
}
#image_preview1 img {
    width: 100%;
    height: 170px;
    border: 3px solid #ccc;
}
</style>
<script>
import App from './Adminlayout/App'
export default {
       layout: App,
	   props: {
    errors: Object,
	data: null,
	flash: null,
  },

    watch: {
    // whenever question changes, this function will run
    errors: function (value) {
      $.each(value, function(key, val) {
						// swal("error!", val[0], "error");br
						toastr.error('Error', val[0]);
						
					});
    }
  },
	   mounted(){
		   if(this.data)
		   {
			    this.form.name = this.data.name;
		   this.form.phone = this.data.phone;
		   this.form.email = this.data.email;
		   this.form.about = this.data.about;
		   }
		  
		//   this.form.role = this.data.roles[0].id;
	   },

    data() {
        return {
            error: null,
          
            form: {
                name: "",
                email: "",
                password:"",
                about:"",
               
			},
			profileImage: null,
        };
    },
    methods:{
		 onFileChange: function() {
      this.profileImage = this.$refs.file.files[0];
      console.log(this.logo);
    },
        submit() {
			let frm = new FormData();
			let myObj = this.form;
					$.each(myObj, function(key, val) {
						frm.append(key,val);
					});
					if(this.profileImage){
						frm.append('profileImage',this.profileImage);
					}
            this.$inertia.post(this.$page.url, frm);
                },
        },
}
</script>
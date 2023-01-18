<template>
<div>
   <div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Add New Slider</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="">Sliders</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Add Slider</strong>
			</li>
		</ol>
	</div>
	<div class="col-lg-2">

	</div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
		<div class="col-lg-12">
			<div class="ibox border-bottom">
				<div class="ibox-title">
					<h5>Slider Details</h5>
					
				</div>
				<div class="ibox-content" >
					<form @submit.prevent="submit" class="form" enctype="multipart/form-data" method="post" id="addFrm">
						
						<div class="form-group  row"><label class="col-sm-2 col-form-label">Image</label>

							<div class="col-sm-10"><input ref="file" @change="onFileChange" type="file"  class="form-control"></div>
						</div>
						
						<div class="hr-line-dashed"></div>
						<div class="form-group  row"><label class="col-sm-2 col-form-label">Title</label>

							<div class="col-sm-10"><input type="text" v-model="form.title" class="form-control"></div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Subtitle</label>
							<div class="col-sm-10"><input type="text"  v-model="form.subtitle" class="form-control"> 
							
							</div>
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
// import { VueEditor } from "vue2-editor";
import App from './Adminlayout/App'
export default {
       layout: App,
       components: {
         App
	   },
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
		   if(this.data){
			    this.form = this.data;
		   this.form.image = '';
		   }
		  
	   },

    data() {
        return {
            error: null,
          
            form: {
                link: "",
                buttonText: "",
                subtitle:"",
                title: '',
			},
			image: null,
			icon: null,
        };
    },
    methods:{
		 onFileChange: function() {
      this.image = this.$refs.file.files[0];
      console.log(this.image);
	}, 
	onFileChange1: function() {
      this.icon = this.$refs.file1.files[0];
      console.log(this.image);
    },
        submit() {
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
					if(this.icon){
						frm.append('icon',this.icon);
					}
					else
					frm.append('icon','');
            this.$inertia.post(this.$page.url, frm);
                },
        },
}
</script>
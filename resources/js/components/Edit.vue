<template>
	<div>
		<h2>Edit User</h2>
		<form class="form-horizontal" action="/users" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Firstname:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" v-model="firstname">
					<span v-if="errors.firstname" class="text-danger">{{errors.firstname[0]}}</span>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Lastname:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" v-model="lastname">
					<span v-if="errors.lastname" class="text-danger">{{errors.lastname[0]}}</span>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" v-model="email">
					<span v-if="errors.email" class="text-danger">{{errors.email[0]}}</span>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="button" class="btn btn-success" v-on:click="UpdateUser()">Update</button>
				</div>
			</div>
		</form>
	</div>
</template>

<script>
	
	export default {

		props: ['id'],

		data(){
			return {
					firstname: '',
					lastname: '',
					email: '',
					errors: []
				}
			},

		mounted() {

			axios.get('/api/users/'+this.id).then(response => {

				var user = response.data
				this.firstname = user.firstname
				this.lastname = user.lastname
				this.email = user.email

			}).catch(error => {
				console.log(error)
			})
		},

		methods: {

			UpdateUser(){
				this.errors = []
				axios.put('/api/users/'+this.id, {
					firstname: this.firstname,
					lastname: this.lastname,
					email: this.email
				}).then(response => {                   
      
					alert('User Updated');
					window.location.replace('/')				 
					
				})
				

				.catch(error => {

					if(error.response.status = 422) {
						this.errors = error.response.data.errors
					}
				})
			}

		}	

	}
</script>


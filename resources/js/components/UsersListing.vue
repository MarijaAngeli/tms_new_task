<template>
	<div>
		<h2>Users</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Email</th>
					
				</tr>
			</thead>
			<tbody>
				<tr v-for="user in users">
					<td>{{user.id}}</td>
					<td>{{user.firstname}}</td>
					<td>{{user.lastname}}</td>
					<td>{{user.email}}</td>
					
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
	export default {
		data(){
			return {
				users: [],
				user: {
					id: 0,
					firstname: '',
					lastname: '',
					email: ''
				}
			}
		},
		mounted(){
			this.getUsers()
		},

		methods: {
		getUsers() {
		axios.get('/api/users').then(response => {
			console.log(response)
			this.users = response.data
		})
		}
		}
	}
</script>
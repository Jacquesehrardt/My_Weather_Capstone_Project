<template>
	<section class="formSection">
		<form @submit.prevent="login">
			<div class="form-group">
				<label for="exampleInputEmail1" class="form-label">Email address</label>
				<input v-model.lazy="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input  v-model.lazy="password" type="password" class="form-control" id="password">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</section>
</template>

<script>
import VueCookies from 'vue-cookies'

export default {
	name: 'LoginForm',
  
	data() {
		return {
			logged: false,
			email: "",
			password: "",
			loginUrl: "http://localhost/my_weather/api/login.php",
			serverUrl: "http://localhost/my_weather/api/server.php",
			token: "",
			userLogged: {},
		}
	},
	methods: {
		async login() {
			try {
				await fetch(this.loginUrl, {
					method: "POST",
					body: JSON.stringify({
						email: this.email,
						password: this.password
					})
				}).then((response) => response.json()
				).then((data) => {
					if (data.success) {
						this.token = data.sessionToken;
						this.userLogged = data.user; 
					}
				});
			} catch (error) {
				console.log(error);
			}
			if(this.token){
				VueCookies.set("session", {"token": this.token, "user": this.userLogged}, "60d");
				this.logged = true;
				console.log(VueCookies.get("session"));
				window.location.replace("/home");
			}
		}
	},
	created() {
		if(VueCookies.isKey("session")) {
			this.logged = true;
		}
	}
}
</script>

<style>
	.formSection > form{
		display: flex;
		flex-direction: column;
		row-gap: 2vh;
	}
</style>

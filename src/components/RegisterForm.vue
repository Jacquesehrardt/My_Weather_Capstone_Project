<template>
	<section class="formSection">
		<form @submit.prevent="register">
         <div class="mb-3">
            <label for="username" class="form-label">Name</label>
            <input v-model.lazy="username" type="text" class="form-control" id="username" placeholder="Your Name">
         </div>
         <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input v-model.lazy="email" type="email" class="form-control" id="email" placeholder="name@example.com">
         </div>
         <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input v-model.lazy="password" type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">
               Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </div>
         </div>
			<button type="submit" class="btn btn-primary">Signup</button>
		</form>
	</section>
</template>

<script>
import VueCookies from 'vue-cookies'

export default {
	name: 'RegisterForm',
  
	data() {
		return {
			logged: false,
			username: "",
			email: "",
			password: "",
			registerUrl: "http://localhost/my_weather/api/register.php",
			token: "",
			userLogged: {},
		}
	},
	methods: {
		async register() {
			try {
				await fetch(this.registerUrl, {
					method: "POST",
					body: JSON.stringify({
                  username: this.username,
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
		},
	},
	created() {
		if(VueCookies.isKey("session")) {
			this.logged = true;
		}
	}
}
</script>

<style>

</style>

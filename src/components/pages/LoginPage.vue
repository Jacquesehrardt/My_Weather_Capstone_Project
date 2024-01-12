<template>
   <section class="loginPage">
      <section v-if="isRegister">
         <RegisterForm />
         <button @click="check" type="button" class="btn btn-link">Login Here!</button>
      </section>
      <section v-else>
         <LoginForm />
         <button @click="check" type="button" class="btn btn-link">Signup Here!</button>
      </section>
   </section>
</template>

<script>
import LoginForm from '../LoginForm.vue';
import RegisterForm from '../RegisterForm.vue'; 

export default ({
   name: 'LoginPage',
   components: {
      LoginForm,
      RegisterForm
   },
   data(){
      return{
         isRegister: false,
      }
   },
   methods:{
      check(){
         this.isRegister = !this.isRegister;
      }
   }
})
</script>

<style>
   .loginPage{
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
   }

   .loginPage > section{
      display: flex;
      flex-direction: column;
      row-gap: 2vh;
   }

   @media (min-width: 300px) {
      .loginPage{
         padding-top: 15%;
      }

      .loginPage > section{
         width: 80%;
      }
   }

   @media (min-width: 1000px) {
      .loginPage{
         padding-top: 10%;
      }

      .loginPage > section{
         width: 40%;
      }
   }
</style>
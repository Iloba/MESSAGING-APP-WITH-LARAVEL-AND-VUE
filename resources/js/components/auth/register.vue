<template>
    <div>
          <div class="mb-5">
              <div class="container">
                 <div class="row">
                     <div class="col-md-6 mx-auto">
                        <div id="login-form">
                            <form @submit.prevent="RegisterUser()">
                                
                                <div class="mt-4 mb-4">
                                    <h3 class="text-center text-success mb-4"> <span class="text-danger">Mess</span>enger</h3>
                                    <h3 class="text-center mb-5">Create Account</h3>
                                   
                                </div>
                                <div class="mb-5">
                                   <div class="mb-4">
                                        <input type="text"  class="form-control" placeholder="Username" v-model="username">
                                   </div>
                                   <div class="mb-4">
                                        <input type="email"  class="form-control mb-4" placeholder="Email Address" v-model="email">
                                   </div>
                                   <div class="mb-4">
                                         <input type="number"  class="form-control mb-4" placeholder="Phone Number" v-model="phone">
                                   </div>
                                   <div class="mb-4">
                                     <input type="password"  class="form-control mb-4" placeholder="Password" v-model="password" required>
                                   </div>
                                   <div class="mb-4">
                                        <input type="password"  class="form-control mb-4" placeholder="Confirm Password" v-model="password_confirmation" required>
                                   </div>
                                </div>
                                <div class="d-flex justify-content-between mb-5">
                                    <router-link :to="{name: 'LoginUser'}" class="create-account">Sign In</router-link>
                                    <button @click="RegisterUser()" type="submit" class="btn btn-info text-light">Register</button>
                                </div>
                            </form>    
                        </div>
                     </div>
                 </div>
              </div>
          </div>    
    </div>
</template>

<script>
export default {
    data(){
        return{
           username: '',
           email: '',
           phone: '',
           password: '',
           password_confirmation: ''

        };
    },
   
    methods:{
        RegisterUser(){
           
        } 
    }
}
</script>

<style>

</style>
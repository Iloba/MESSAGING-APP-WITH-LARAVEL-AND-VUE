<template>
    <div>
          <div class="mb-5">
              <div class="container">
                 <div class="row">
                     <div class="col-md-6 mx-auto">
                        <div id="login-form">
                            <form @submit.prevent="LoginUser()">
                                
                                <div class="mt-4 mb-4">
                                    <h3 class="text-center text-success mb-4"> <span class="text-danger">Mess</span>enger</h3>
                                    <h3 class="text-center mb-3">Sign in</h3>
                                    <p class="text-center mb-5">Use your messenger account</p>
                                </div>
                                <div class="mb-5">
                                    <input type="text" name="email" class="form-control mb-4" placeholder="Email Address" v-model="email">
                                    <input type="password" name="password" class="form-control mb-4" placeholder="Password" v-model="password">
                                </div>
                                <div class="d-flex justify-content-between mb-5">
                                    <router-link :to="{name: 'RegisterUser'}" class="create-account">Create Account</router-link>
                                  
                                    <button @click="LoginUser()" class="btn btn-info text-light"  type="submit">Login</button>
                                    
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
          
                email: '',
                password: '',
            
        };
    },
  
    methods:{
        LoginUser(){
          
        } 
    }
}
</script>

<style>

</style>
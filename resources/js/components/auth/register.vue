<template>
    <div>
          <div class="mb-5">
              <div class="container">
                 <div class="row">
                     <div class="col-md-6 mx-auto">
                        <div id="login-form">
                            <form @submit.prevent="RegisterUser">
                                
                                <div class="mt-4 mb-4">
                                    <h3 class="text-center text-success mb-4"> <span class="text-danger">Mess</span>enger</h3>
                                    <h3 class="text-center mb-5">Create Account</h3>
                                   
                                </div>
                                <div class="mb-5">
                                   <div class="mb-4">
                                        <input type="text" name="username" class="form-control" placeholder="Username" v-model="form.username">
                                   </div>
                                   <div class="mb-4">
                                        <input type="email" name="email" class="form-control mb-4" placeholder="Email Address" v-model="form.email">
                                   </div>
                                   <div class="mb-4">
                                         <input type="number" name="phone" class="form-control mb-4" placeholder="Phone Number" v-model="form.phone">
                                   </div>
                                   <div class="mb-4">
                                     <input type="password" name="password" class="form-control mb-4" placeholder="Password" v-model="form.pass_word" required>
                                   </div>
                                   <div class="mb-4">
                                        <input type="password" name="password_confirmation" class="form-control mb-4" placeholder="Confirm Password" v-model="form.password_confirmation" required>
                                   </div>
                                </div>
                                <div class="d-flex justify-content-between mb-5">
                                    <router-link :to="{name: 'LoginUser'}" class="create-account">Sign In</router-link>
                                    <button type="submit" class="btn btn-info text-light">Register</button>
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
            form:{
                username: '',
                email: '',
                phone: '',
                pass_word: '',
                password_confirmation
            }
        };
    },
    created(){
         RegisterUser()
    },
    methods:{
        RegisterUser(){
            axios.post("/api/register", {
                'username': this.form.username,
                'email': this.form.email,
                'phone': this.form.phone,
                'password': this.form.pass_word,
                'password_confirmation': this.form.password_confirmation
            })
            .then(response =>{
                console.log(response);
            }).catch(error => {
                console.log(error);
            });
        } 
    }
}
</script>

<style>

</style>
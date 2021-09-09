<template>
    <div>
          <div class="mb-5">
              <div class="container">
                 <div class="row">
                     <div class="col-md-6 mx-auto">
                        <div id="login-form">
                            <form>
                                
                                <div class="mt-4 mb-4">
                                    <h3 class="text-center text-success mb-4"> <span class="text-danger">Mess</span>enger</h3>
                                    <h3 class="text-center mb-5">Create Account</h3>
                                   
                                </div>
                                <div class="mb-5">
                                    <input type="text" name="username" class="form-control mb-4" placeholder="Username">
                                    <input type="text" name="email" class="form-control mb-4" placeholder="Email Address">
                                    <input type="number" name="phone" class="form-control mb-4" placeholder="Phone Number">
                                    <input type="password" class="form-control mb-4" placeholder="Password">
                                    <input type="password_confirmation" class="form-control mb-4" placeholder="Confirm Password">
                                </div>
                                <div class="d-flex justify-content-between mb-5">
                                    <router-link :to="{name: 'LoginUser'}" class="create-account">Sign In</router-link>
                                    
                                    <button type="submit" class="btn btn-info text-light" href="">Register</button>
                                    
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

}
</script>

<style>

</style>
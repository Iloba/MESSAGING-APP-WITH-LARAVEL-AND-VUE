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
                                    <h3 class="text-center mb-3">Sign in</h3>
                                    <p class="text-center mb-5">Use your messenger account</p>
                                </div>
                                <div class="mb-5">
                                    <input type="text" name="email" class="form-control mb-4" placeholder="Email Address">
                                    <input type="password" name="password" class="form-control mb-4" placeholder="Password">
                                </div>
                                <div class="d-flex justify-content-between mb-5">
                                    <router-link :to="{name: 'RegisterUser'}" class="create-account">Create Account</router-link>
                                  
                                    <button class="btn btn-info text-light" href="">Login</button>
                                    
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
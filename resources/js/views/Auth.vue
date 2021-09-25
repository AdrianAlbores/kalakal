<template>
    <div v-if="signup==false">
        <sign-in :signup="signup" @signuptoggle="toggle"/>
    </div>
    <div v-else>
        <sign-up :signup="signup"  @signuptoggle="toggle"/>
    </div>
</template>

<script>
import SignIn from './Sign-In.vue';
import SignUp from './Sign-Up.vue';
export default {
    components:{
        SignIn,
        SignUp
    },
    data(){
        return{
            signup:false,
        }
    },
    methods:{
        toggle(){
            this.signup = !this.signup;
        }
    }

}
</script>
<!-- 
	This is the sign up page, it uses the dashboard layout in: 
	"./layouts/Default.vue" .
 -->

<template>
    <div id="container" style="width:50%; margin: 0 auto; margin-top: 13em">
        <a-row :gutter="18" type="flex" justify="center" align="middle">
            <!-- Sign In Form Column -->
            <a-col
            class="logo"
                :span="24"
                :md="24"
                :lg="{ span: 12, offset: 0 }"
                :xl="{ span: 12, offset: 0 }"
            >
                <img
                    width="100%"
                    src="storage/images/icons/KALAKAL_greenBG.png"
                />
            </a-col>
            <a-col
                :span="24"
                :md="24"
                :lg="{ span: 12, offset: 0 }"
                :xl="{ span: 12, offset: 0 }"
                class="col-form"
            >
                <!-- Sign Up Form -->
                <a-card
                    class="card-warning"
                    style="box-shadow: 5px 10px #888888;"
                >
                    <template #title>
											<br/>
                        <h5 class="font-semibold text-center">REGISTER</h5>
                    </template>
                    <a-form
                        id="components-form-demo-normal-login"
                        :form="form"
                        class="login-form"
                        @submit="handleSubmit"
												:hideRequiredMark="true"
                    >
                        <a-form-item class="mb-10" label="Full name" :colon="false">
                            <a-input
                                v-decorator="[
                                    'name',
                                    {
                                        rules: [
                                            {
                                                required: true,
                                                message:
                                                    'Please input your name!'
                                            }
                                        ]
                                    }
                                ]"
                                placeholder="Name"
                            >
                            </a-input>
                        </a-form-item>
                        <a-form-item class="mb-10" label="Email" :colon="false">
                            <a-input
                                v-decorator="[
                                    'email',
                                    {
                                        rules: [
                                            {
                                                required: true,
                                                message:
                                                    'Please input your email!'
                                            }
                                        ]
                                    }
                                ]"
                                placeholder="Email"
                            >
                            </a-input>
                        </a-form-item>
                        <a-form-item class="mb-5" label="Password" :colon="false">
                            <a-input
                                v-decorator="[
                                    'password',
                                    {
                                        rules: [
                                            {
                                                required: true,
                                                message:
                                                    'Please input your Password!'
                                            },
                                            {
                                                min: 8,
                                                message:
                                                    'Password must have atleast 8 characters'
                                            }
                                        ]
                                    }
                                ]"
                                type="password"
                                placeholder="Password"
                            >
                            </a-input>
                        </a-form-item>
                        <a-form-item class="mb-5" label="Confirm password" :colon="false">
                            <a-input
                                v-decorator="[
                                    'password_confirmation',
                                    {
                                        rules: [
                                            {
                                                required: true,
                                                message:
                                                    'Please confirm your Password!'
                                            },
                                            {
                                                validator: compareToFirstPassword
                                            }
                                        ]
                                    }
                                ]"
                                type="password"
                                placeholder="Confirm Password"
                            >
                            </a-input>
                        </a-form-item>
                        <!-- <a-form-item class="mb-10">
					<a-checkbox
						v-decorator="[
						'remember',
						{
							valuePropName: 'checked',
							initialValue: true,
						},
						]"
					>
						I agree the <a href="#" class="font-bold text-dark">Terms and Conditions</a>
					</a-checkbox>
				</a-form-item> -->
                        <a-form-item>
                            <a-button
                                type="primary"
                                block
                                html-type="submit"
                                class="login-form-button"
                            >
                                SIGN UP
                            </a-button>
                        </a-form-item>
                    </a-form>
                    <p class="font-semibold text-muted text-center">
                        Already have an account?
                        <a href="javascript:void(0)" @click="signuptoggle">
                            Sign In
                        </a>
                    </p>
                    <!-- <router-link to="/sign-in" class="font-bold text-dark">Sign In</router-link></p> -->
                </a-card>
            </a-col>
        </a-row>
        <!-- / Sign Up Form -->
    </div>
</template>

<script>
export default {
    props: ["signup"],
    data() {
        return {
            name: "",
            email: "",
            password: "",
            password_confirmation: ""
        };
    },
    beforeCreate() {
        // Creates the form and adds to it component's "form" property.
        this.form = this.$form.createForm(this, { name: "normal_login" });
    },
    methods: {
        // passwordlength(rule,value,callback){
        // 	var lg = value.length;
        // 	if(lg && lg < 8){
        // 		callback('Password must have atleast 8 characters');
        // 	}else{
        // 		callback();
        // 	}
        // },
        compareToFirstPassword(rule, value, callback) {
            const form = this.form;
            if (value && value !== form.getFieldValue("password")) {
                callback("Two passwords that you enter is inconsistent!");
            } else {
                callback();
            }
        },
        signuptoggle() {
            this.$emit("signuptoggle");
        },
        // Handles input validation after submission.
        handleSubmit(e) {
            e.preventDefault();
            let dis = this;
            this.form.validateFields((err, values) => {
                if (!err) {
                    this.$message.loading("Loading please wait..").then(() => {
                        // console.log('Received values of form: ', values) ;
                        axios.get("/sanctum/csrf-cookie").then(response => {
                            axios
                                .post("/register", values)
                                .then(response => {
                                    location.reload();
                                })
                                .catch(err => {
                                    if (err.response.status == 422) {
                                        // console.log(err.response.data);
                                        var errors = err.response.data.errors;
                                        let list = [];
                                        $.each(errors, function(key, value) {
                                            list.push(value[0]);
                                        });
                                        // console.log(list);

                                        this.$message.error(list);
                                    } else if (err.response.status == 500) {
                                        this.$message.error(
                                            err.response.data.message
                                        );
                                    }
                                });
                        });
                    });
                }
            });
        }
    }
};
</script>

<style lang="scss"></style>
<style scoped>
.spin-content {
    border: 1px solid #91d5ff;
    background-color: #e6f7ff;
    padding: 30px;
}
@media only screen and (max-width: 800px) {
    #container {
        width: 80% !important;
        margin-top: 0px !important;
        margin-bottom: 10px !important;
    }
    .logo {
        width: 50%;
    }
}
</style>

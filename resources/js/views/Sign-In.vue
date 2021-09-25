<!-- 
	This is the sign in page, it uses the dashboard layout in: 
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
                <a-card
                    class="card-warning"
                    style="box-shadow: 5px 10px #888888;"
                >
                    <br />
                    <h5 class="mb-15" style="text-align: center">
                        Welcome!
                    </h5>
                    <!-- <a-alert type="info" message="Error text" banner /> -->
                    <!-- Sign In Form -->
                    <a-form
                        id="components-form-demo-normal-login"
                        :form="form"
                        class="login-form"
                        @submit="handleSubmit"
                        :hideRequiredMark="true"
                    >
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
                            />
                        </a-form-item>
                        <a-form-item
                            class="mb-5"
                            label="Password"
                            :colon="false"
                        >
                            <a-input
                                v-decorator="[
                                    'password',
                                    {
                                        rules: [
                                            {
                                                required: true,
                                                message:
                                                    'Please input your password!'
                                            }
                                        ]
                                    }
                                ]"
                                type="password"
                                placeholder="Password"
                            />
                        </a-form-item>
                        <a-form-item class="mb-10">
                            <a-switch v-model="rememberMe" /> Remember Me
                        </a-form-item>
                        <a-form-item>
                            <a-button
                                type="primary"
                                block
                                html-type="submit"
                                class="login-form-button"
                            >
                                SIGN IN
                            </a-button>
                        </a-form-item>
                    </a-form>
                    <!-- / Sign In Form -->

                    <p class="font-semibold text-muted">
                        Don't have an account?
                        <a
                            href="javascript:void(0)"
                            class="font-bold text-dark"
                            @click="signuptoggle"
                            >Sign Up</a
                        >
                    </p>
                </a-card>
            </a-col>

            <!-- / Sign In Form Column -->
        </a-row>
    </div>
</template>

<script>
export default {
    props: ["signup"],
    data() {
        return {
            // Binded model property for "Sign In Form" switch button for "Remember Me" .
            rememberMe: true
        };
    },
    beforeCreate() {
        // Creates the form and adds to it component's "form" property.
        this.form = this.$form.createForm(this, { name: "normal_login" });
    },
    methods: {
        signuptoggle() {
            this.$emit("signuptoggle");
        },
        logout() {
            axios.post("/logout");
        },
        // Handles input validation after submission.
        handleSubmit(e) {
            e.preventDefault();
            this.form.validateFields((err, values) => {
                if (!err) {
                    axios.get("/sanctum/csrf-cookie").then(response => {
                        axios
                            .post("/login", values)
                            .then(response => {
                                location.reload();
                            })
                            .catch(err => {
                                if (err.response.status == 422) {
                                    this.$message.error(
                                        err.response.data.message
                                    );
                                }
                            });
                    });
                }
            });
        }
    }
};
</script>

<style lang="scss">
body {
    overflow: hidden;
    background-color: #132e1f;
}
.login-form-button {
    background: #132e1f;
    border-color: #132e1f;
}
.login-form-button:hover,
.login-form-button:active,
.login-form-button:focus {
    background: #1b4b30;
    border-color: #132e1f;
}
.ant-switch {
    background: #c9c9c9;
    border-color: #c9c9c9;
}
.ant-switch-checked {
    background: #1b4b30;
    border-color: #132e1f;
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
//#132E1F
</style>

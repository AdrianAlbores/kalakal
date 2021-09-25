<template>
    <a-card :bordered="false" class="card-info" :title="title">
        
        <a-row type="flex">
            <a-col class="col-content" :span="24" :xl="12">
                <div class="card-content" v-if="title === 'Exchange'">
                    <h6>
                        Trade tokens in an instant
                    </h6>
                    <br />
                    <p>From</p>
                    <Input />
                    <br />
                    <p>To</p>
                    <Input />
                    
                </div>
                <div class="card-content" v-else>
                  <Input/>
                </div>
                <br />
                <div class="card-footer">
                    <a-button type="primary" v-if="title === 'Exchange'" block>
                        Connect Wallet
                    </a-button>
                    <a-button type="primary" v-else-if="title === 'Rewards'"  block>
                        Get Rewards
                    </a-button>
                    <a-button type="primary" v-else block>
                        Withdraw
                    </a-button>
                </div>
            </a-col>
        </a-row>
    </a-card>
</template>

<script>
import Input from "../Forms/Input.vue";

export default {
    components: {
        Input
    },
    props: ["title"],
    data() {
        return {
            dd: true
        };
    },
};
</script>

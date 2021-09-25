<template>
    <a-row :gutter="[24, 16]">
        <a-col :span="16">
            <a-card
                :bordered="false"
                class="header-solid h-full"
                :bodyStyle="{ padding: 0 }"
            >
                <template #title>
                    <a-row type="flex" align="middle">
                        <a-col :span="24" :md="12">
                            <h5 class="font-semibold m-0">BET MATCH WINNER</h5>
                        </a-col>
                    </a-row>
                    <a-card :bordered="false" class="card-info" style="text-align:center; padding: 10px"> 
                        <span slot="title">Apeks vs KOVA BO3</span>
                        <div style="text-align:center">
                            <a-row :gutter="[16, 16]">
                                <a-col :span="5">
                                    <h5>
                                        Apeks
                                    </h5>
                                    <span>45.92%</span>
                                    <span>Payout Ratio (1:2.09)</span>
                                </a-col>
                                <a-col :span="5">
                                    <a-avatar
                                        shape="square"
                                        :size="64"
                                        src="https://2ez.bet/public_image/1628373659.png"
                                    />
                                    <br>
                                    <a-button type="danger">
                                        Bet on Apeks
                                    </a-button>
                                </a-col>
                                <a-col :span="4">
                                    <h5>BO3</h5>
                                    <h3>V.S</h3>
                                </a-col>
                                <a-col :span="5">
                                    <a-avatar
                                        shape="square"
                                        :size="64"
                                        src="https://2ez.bet/public_image/1622438425.png"
                                    />
                                    <br>
                                    <a-button type="danger">
                                        Bet on KOVA
                                    </a-button>
                                </a-col>
                                <a-col :span="5">
                                    <h5>
                                        KOVA
                                    </h5>
                                    <span>54.08%</span>
                                    <span>Payout Ratio (1:1.77)</span>
                                </a-col>
                            </a-row>
                        </div>
                    </a-card>
                    <a-row>
                        <div class="card-footer" style="margin-top:30px">
                            <template>
                                <div id="components-button-demo-button-group">
                                    <a-button-group>
                                        <a-button
                                            v-for="betType in betTypes"
                                            :key="betType.betTypeId"
                                            style="margin-left:5px"
                                            >{{ betType.desc }}</a-button
                                        >
                                    </a-button-group>
                                </div>
                            </template>
                        </div>
                    </a-row>
                </template>
            </a-card>
        </a-col>
        <a-col :span="5">
            <a-card :bordered="false" class="card-info">
                <template #title>
                    <a-row type="flex" align="middle">
                        <a-col :span="24" :md="12">
                            <h5 class="font-semibold m-0">WATCH</h5>
                        </a-col>
                    </a-row>
                </template>
                <a-row type="flex">
                    <a-col class="col-content" :span="24" :xl="12">
                        <div class="card-content">
                            <div>
                                <a href="404.html" target="_blank">
                                    <a-icon type="home" /> Twitch</a
                                >
                            </div>
                            <div>
                                <a href="404.html" target="_blank">
                                    <a-icon type="home" /> Live Stream</a
                                >
                            </div>
                        </div>
                    </a-col>
                </a-row>
            </a-card>
        </a-col>
    </a-row>
</template>

<script>
export default {
    props: {},
    data() {
        return {
            buttonWidth: 5,
            betTypes: [
                {
                    betTypeId: 1,
                    desc: "Match Winner"
                },
                {
                    betTypeId: 4,
                    desc: "Game 1 First 10 Kills"
                },
                {
                    betTypeId: 5,
                    desc: "Game 2 First 10 Kills"
                }
            ]
        };
    }
};
</script>
<style>
#components-popover-demo-placement .ant-btn {
    width: 70px;
    text-align: center;
    padding: 0;
    margin-right: 8px;
    margin-bottom: 8px;
}
</style>

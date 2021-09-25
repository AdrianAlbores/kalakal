<template>
    <a-list item-layout="vertical" size="large" :data-source="listData">
        <a-list-item
            slot="renderItem"
            key="item.title"
            slot-scope="item, index"
            class="imgDiv"
        >
            <div>
                <a-list-item-meta>
                    <router-link slot="title" :to="`match/${item.id}`">{{
                        item.title
                    }}</router-link>

                    <a-avatar slot="avatar" :src="item.avatar" />
                </a-list-item-meta>
                <a-row>
                    <a-col :span="3">
                        <a-avatar shape="square" :size="64" :src="item.team1" />
                    </a-col>
                    <a-col :span="3">
                        <a-button type="primary">
                            <router-link :to="`match/${item.id}`">
                                {{ item.team1BetPercent }}
                            </router-link>
                        </a-button>
                    </a-col>

                    <a-col :span="2">
                        <a-tag color="#f50">
                            {{ item.bracket }}
                        </a-tag>
                    </a-col>
                    <a-col :span="3">
                        <a-button type="primary">
                            <router-link :to="`match/${item.id}`">
                                {{ item.team2BetPercent }}
                            </router-link>
                        </a-button>
                    </a-col>
                    <a-col :span="3">
                        <a-avatar shape="square" :size="64" :src="item.team2" />
                    </a-col>
                </a-row>
            </div>
        </a-list-item>
    </a-list>
</template>
<script>
const listData = [];
for (let i = 0; i < 5; i++) {
    listData.push({
        title: "Army Geniuses vs Execration BO2",
        avatar: "https://2ez.bet/images/csgoicon.png",
        content: "We supply a series of design principles.",
        team1: "https://2ez.bet/public_image/1626855859.png",
        team1BetPercent: "57.06%",
        team2: "https://2ez.bet/public_image/1626363711.png",
        team2BetPercent: "42.94%",
        bracket: "BO3",
        id: "944e5206-2dbf-482b-863e-cb0df75b1e99"
    });
}

export default {
    data() {
        return {
            listData
        };
    }
};
</script>
<style>
.imgDiv {
    background-image: url("https://2ez.bet/public_image/1630297403.jpg");
    background-size: 100% 100%;
    background-repeat: no-repeat;
    margin-bottom: 10px;
}
</style>

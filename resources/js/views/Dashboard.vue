<!-- 
	This is the dashboard page, it uses the dashboard layout in: 
	"./layouts/Dashboard.vue" .
 -->

<template>
  <div>
    <div class="d-sm-flex justify-content-between mb-4">
      <span style="font-weight: bold">
        <span :span="16">Est. Value of Entire Wallet</span>
        <span
          data-toggle="tooltip"
          data-placement="bottom"
          title="The approximate value of your wallets in BTC|USD"
          ><i class="fa fa-info-circle" aria-hidden="true"></i
        ></span>
        <a-badge
          :count="Wallet.exchange"
          :number-style="{ backgroundColor: '#6C757D' }"
        />
        <a-badge
          :count="Wallet.amount"
          :number-style="{ backgroundColor: '#6C757D' }"
        />
        |
        <span>Est. Withdrawal from site</span>
        <span
          data-toggle="tooltip"
          data-placement="bottom"
          title="The approximate value of your withdrawals in BTC|USD"
          ><i class="fa fa-info-circle" aria-hidden="true"></i
        ></span>
        <a-badge
          :count="Withdrawal.exchange"
          :number-style="{ backgroundColor: '#6C757D' }"
        />
        <a-badge
          :count="Withdrawal.amount"
          :number-style="{ backgroundColor: '#6C757D' }"
        />
      </span>
    </div>
    <br />
    <!-- Counter Widgets -->
    <a-spin :spinning="isLoading">
      <a-row :gutter="24">
        <a-col
          :span="24"
          :lg="12"
          :xl="6"
          class="mb-24"
          v-for="(stat, index) in stats"
          :key="index"
        >
          <!-- Widget 1 Card -->
          <WidgetCounter
            :title="stat.title"
            :value="stat.value"
            :prefix="stat.prefix"
            :suffix="stat.suffix"
            :icon="stat.icon"
            :status="stat.status"
          ></WidgetCounter>
          <!-- / Widget 1 Card -->
        </a-col>
      </a-row>
      <!-- / Counter Widgets -->

      <!-- Charts -->
      <a-row :gutter="24" type="flex" align="stretch">
        <a-col :span="24" :lg="10" class="mb-24">
          <!-- LEFT COMPONENT -->
        </a-col>
        <a-col :span="24" :lg="14" class="mb-24">
          <!-- RIGHT COMPONENT -->
        </a-col>
      </a-row>
      <!-- / Charts -->

      <!-- Table & Timeline -->
      <a-row :gutter="24" type="flex" align="stretch">
        <!-- Table -->
        <a-col :span="24" :lg="16" class="mb-24">
          <!-- LEFT COMPONENT 1 -->
        </a-col>
        <!-- / Table -->

        <!-- Timeline -->
        <a-col :span="24" :lg="8" class="mb-24">
          <!-- RIGHT COMPONENT 2 -->
        </a-col>
        <!-- / Timeline -->
      </a-row>
      <!-- / Table & Timeline -->

      <!-- Cards -->
      <a-row :gutter="24" type="flex" align="stretch">
        <a-col :span="24" :xl="14" class="mb-24">
          <!-- LEFT COMPONENT 3 -->
        </a-col>
        <a-col :span="24" :xl="10" class="mb-24">
          <!-- RIGHT COMPONENT 3 -->
        </a-col>
      </a-row>
      <!-- / Cards -->
    </a-spin>
  </div>
</template>

<script>
// Bar chart for "Active Users" card.

// Counter Widgets
import WidgetCounter from "../components/Widgets/WidgetCounter";

//Wallet
// const Wallet = window.wallet;
//Withdrawal
// const Withdrawal = window.Withdrawal;

// Counter Widgets stats
const stats = [
  {
    title: "BTC",
    value: 0,
    prefix: "฿ ",
    suffix: "+30%",
    icon: `storage/images/icons/btcicon.png`,
  },
  {
    title: "ETH",
    prefix: "Ξ ",
    value: 0,
    suffix: "+20%",
    icon: `storage/images/icons/ethicon.png`,
  },
  {
    title: "SLP",
    value: 0,
    prefix: "SLP ",
    status: "danger",
    suffix: "-20%",
    icon: `storage/images/icons/slpicon.png`,
  },
  {
    title: "USDT",
    value: 0,
    prefix: "₮ ",
    suffix: "+10%",
    icon: `https://cdn.worldvectorlogo.com/logos/tether-1.svg`,
  },
  {
    title: "CNS",
    value: 0,
    prefix: "₱ ",
    suffix: "+10%",
    icon: `storage/images/icons/gcashicon.png`,
  },
  {
    title: "PHP",
    value: 0,
    prefix: "₱ ",
    suffix: "+10%",
    icon: `storage/images/icons/slpicon.png`,
  },
];

// "Projects" table list of columns and their properties.
const tableColumns = [
  {
    title: "COMPANIES",
    dataIndex: "company",
    scopedSlots: { customRender: "company" },
    width: 300,
  },
  {
    title: "MEMBERS",
    dataIndex: "members",
    scopedSlots: { customRender: "members" },
  },
  {
    title: "BUDGET",
    dataIndex: "budget",
    class: "font-bold text-muted text-sm",
  },
  {
    title: "COMPLETION",
    scopedSlots: { customRender: "completion" },
    dataIndex: "completion",
  },
];

// "Projects" table list of rows and their properties.
const tableData = [
  {
    key: "1",
    company: {
      name: "Soft UI Shopify Version",
      logo: "images/logos/logo-shopify.svg",
    },
    members: [
      "images/face-1.jpg",
      "images/face-4.jpg",
      "images/face-2.jpg",
      "images/face-3.jpg",
    ],
    budget: "$14,000",
    completion: 60,
  },
  {
    key: "2",
    company: {
      name: "Progress Track",
      logo: "images/logos/logo-atlassian.svg",
    },
    members: ["images/face-4.jpg", "images/face-3.jpg"],
    budget: "$3,000",
    completion: 10,
  },
  {
    key: "3",
    company: {
      name: "Fix Platform Errors",
      logo: "images/logos/logo-slack.svg",
    },
    members: ["images/face-1.jpg", "images/face-2.jpg", "images/face-3.jpg"],
    budget: "Not Set",
    completion: {
      label: "100",
      status: "success",
      value: 100,
    },
  },
  {
    key: "4",
    company: {
      name: "Launch new Mobile App",
      logo: "images/logos/logo-spotify.svg",
    },
    members: ["images/face-1.jpg", "images/face-2.jpg"],
    budget: "$20,600",
    completion: {
      label: "100",
      status: "success",
      value: 100,
    },
  },
  {
    key: "5",
    company: {
      name: "Add the New Landing Page",
      logo: "images/logos/logo-jira.svg",
    },
    members: [
      "images/face-1.jpg",
      "images/face-4.jpg",
      "images/face-2.jpg",
      "images/face-3.jpg",
    ],
    budget: "$4,000",
    completion: 80,
  },
  {
    key: "6",
    company: {
      name: "Redesign Online Store",
      logo: "images/logos/logo-invision.svg",
    },
    members: ["images/face-1.jpg", "images/face-4.jpg", "images/face-3.jpg"],
    budget: "$2,000",
    completion: {
      label: "Cancelled",
      status: "exception",
      value: 100,
    },
  },
];

export default {
  components: {
    WidgetCounter,
  },
  data() {
    return {
      isLoading: true,
      // Associating table data with its corresponding property.
      tableData,

      // Associating table columns with its corresponding property.
      tableColumns,

      // Counter Widgets Stats
      stats : [],

      //Wallet by Adrian
      Wallet: {
          amount : "---- ---",
          exchange : "---------- ---"
      },

      //Withdrawal by Adrian
      Withdrawal: {
          amount : "---- ---",
          exchange : "---------- ---"
      },
    };
  },
  mounted() {
    this.callWidgets();
    this.UserEstimates();
  },
  methods: {
    async callWidgets() {
      // let {data} = await axios.get(`/api/cryptlist`,{withCredentials: true});
      // this.stats = data;
    //   this.isLoading = false;
    },
    async UserEstimates() {
        this.isLoading = true;
        let response = await axios.get("dashboard/items");
        this.Wallet = response.data.Wallet;
        this.Withdrawal = response.data.Withdrawal;
        this.stats = response.data.stats;
        this.isLoading = false;

    },
  },
};
</script>
<style scoped>
.spin-content {
  border: 1px solid #91d5ff;
  background-color: #e6f7ff;
  padding: 30px;
}
</style>

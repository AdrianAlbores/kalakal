<template>
	
	<a-layout-sider
		collapsible
		class="sider-primary"
		breakpoint="lg"
		collapsed-width="0"
		width="250px"
		:collapsed="sidebarCollapsed"
		@collapse="$emit('toggleSidebar', ! sidebarCollapsed)"
		:trigger="null"
		:class="['ant-layout-sider-' + sidebarColor, 'ant-layout-sider-' + sidebarTheme]"
		:style="{ backgroundColor: 'transparent', margin: '0px', height: '100%', borderRadius: '0%'}">
			<div class="brand" style="text-align: center;"> <img src="images/icons/logo.png"/></div>
			<hr>
			
			<a-menu theme="light" mode="inline">
				<a-menu-item v-for="(m,index) in menu" :key="index">
					<template v-if="m.is_default===1">
						<template v-if="m.role_access.includes(role.name)">
							<template v-if="m.dropdown===0">
								<router-link :to="m.route">
									<span class="icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10ZM12 7C12 8.10457 11.1046 9 10 9C8.89543 9 8 8.10457 8 7C8 5.89543 8.89543 5 10 5C11.1046 5 12 5.89543 12 7ZM9.99993 11C7.98239 11 6.24394 12.195 5.45374 13.9157C6.55403 15.192 8.18265 16 9.99998 16C11.8173 16 13.4459 15.1921 14.5462 13.9158C13.756 12.195 12.0175 11 9.99993 11Z" fill="#111827"/>
										</svg>
									</span>
									<span class="label">Dashboard</span>
								</router-link>
							</template>
							<template v-else>
								<span class="label">
								<a-menu mode="inline">
									<a-sub-menu key="sub1">
										<template class="label" #title><a-icon type="wallet" /><span class="label">{{m.menu_name}}</span> </template>
										<a-menu-item style="margin-left: 1rem;" v-for="(sm,idx) in m.sub_menus" :key="idx"><router-link :to="sm.route"><span class="label"> {{sm.menu_name}} </span></router-link></a-menu-item>
									</a-sub-menu>
								</a-menu>
							</span>
							</template>
						</template>
					</template>
				</a-menu-item>
			</a-menu>
	</a-layout-sider>

</template>
<script>
	export default ({
		props: {
			sidebarCollapsed: {
				type: Boolean,
				default: false,
			},
			
			sidebarColor: {
				type: String,
				default: "primary",
			},
			
			sidebarTheme: {
				type: String,
				default: "",
			},
		},
		data() {
			return {
				menu: menu,
				role:role
			}
		},
	})

</script>
<style scoped>
.layout-dashboard .ant-layout-sider.sider-primary.ant-layout-sider-dark{
	background-color: #132E1F !important;
}
.layout-dashboard .ant-layout-sider.sider-primary.ant-layout-sider-dark .ant-menu-item.ant-menu-item-selected .router-link-active, .layout-dashboard .ant-layout-sider.sider-primary.ant-layout-sider-dark .ant-menu-item .router-link-active{
	background-color: #14442a
}
.layout-dashboard .ant-layout-sider.sider-primary.ant-layout-sider-primary .ant-menu-item.ant-menu-item-selected .router-link-active .icon, .layout-dashboard .ant-layout-sider.sider-primary.ant-layout-sider-primary .ant-menu-item .router-link-active .icon{
	background: none;
}
</style>
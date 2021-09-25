<!-- 
	This is the tables page, it uses the dashboard layout in: 
	"./layouts/Dashboard.vue" .
 -->

<template>
	<div>

		
		<a-row :gutter="24" justify="center" type="flex">

			<!-- Authors Table Column -->
			<a-col :span="12" class="mb-24">

				<CardInput  :title="cardTitle">
				</CardInput>

			</a-col>
			<!-- / Authors Table Column -->

		</a-row>
		<!-- / Authors Table -->

		

	</div>
</template>

<script>

	// "Authors" table component.
	import CardInput from '../components/Cards/CardInput.vue' ;

	
	export default ({
		components: {
			CardInput
		},
		data() {
			return {
				cardTitle: "Exchange"
			}
		},
	})

</script>

<style lang="scss">
</style>
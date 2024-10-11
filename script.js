new Vue({
	el: "#app",
	data: {
		users: []
	},
	methods: {
		fetch_users() {
			fetch("http://localhost/main1_folder/index.php?action=display")
			.then(response => response.json())
			.then(response => {
				this.users = response;
			})
			
		}
	},
	mounted() {
		this.fetch_users()
	},
})
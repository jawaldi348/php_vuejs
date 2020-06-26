<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>PHP Insert Update Delete with Vue.js</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>
<body>
	<div class="container" id="crudApp">
		<br>
		<h3 align="center">Fetch Data From Mysql Database using PHP with Vue.js & Axios</h3>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-6">
						<h3 class="panel-title">Sample Data</h3>
					</div>
					<div class="col-md-6" align="right"></div>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<tr>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
						<tr v-for="row in allData">
							<td>{{ row.first_name }}</td>
							<td>{{ row.last_name }}</td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	var application = new Vue({
		el:'#crudApp',
		data:{
			allData:'',
		},
		methods:{
			fetchAllData:function(){
				axios.post('action.php',{
					action:'fetchall'
				}).then(function(response){
					application.allData=response.data;
				});
			}
		},
		created:function(){
			this.fetchAllData();
		}
	});
</script>
</html>
<meta charset="utf-8" />
<title>
  {{config('app.name', 'Dashboard')}}
</title>
<meta name="description" content="Lates Updates adn statistic charts">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSS From Admin Template -->
<link rel="stylesheet" href="{{ asset('/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admin/vendors/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admin/vendors/css/vendor.bundle.base.css') }}">
<link rel="stylesheet" href="{{ asset('/admin/vendors/css/vendor.bundle.addons.css') }}">
<link rel="stylesheet" href="{{ asset('/admin/css/style.css') }}">
<link rel="shortcut icon" href="{{ asset('/admin/images/favicon.ico') }}">

<!-- My Own CSS -->
<link rel="stylesheet" href="{{ asset('/css/myown.css') }}">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- DATA TABLE -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}path-to/">
<!-- Bootstrap DataTables CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('/datatable/dataTables/css/dataTables.bootstrap.css') }}">
<!-- Jquery -->
<script type="text/javascript" language="javascript" src="{{ asset('/jquery/jquery-1.10.2.min.js') }}"></script>
<!-- Jquery DataTables -->
<script type="text/javascript" language="javascript" src="{{ asset('/datatable/dataTables/js/jquery.dataTables.min.js') }}"></script>
<!-- Bootstrap Javascript -->
<script type="text/javascript" language="javascript" src="{{ asset('/datatable/dataTables/js/dataTables.bootstrap.js') }}"></script>
<!-- DATA TABLE -->

<!-- Panggil Fungsi -->
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$('.table-paginate').dataTable({
			"paging":   true,
        	"ordering": false,
        	"info":     false,
        	"bFilter":  false,
		});
	});
</script>
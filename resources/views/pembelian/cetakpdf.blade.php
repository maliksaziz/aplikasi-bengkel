<!DOCTYPE html>
<html>
<head>
	<title>Laporan Transaksi</title>
</head>
<style type="text/css">
	h2{
		text-align: center;
		font-size: 22px;
		margin-bottom: 50px;
	}
	h5{
		text-align: center;
	}
	body{
		background: #f2f2f2;
		background-color: white;
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td,{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
	}
</style>
<body>
	<div class="container">
		<div class="panel-heading">
			<h2>Laporan Transaksi</h2>
			<h5><?php echo date('d-m-Y'); ?></h5>
		</div>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>ID Penjualan</th>
					<th>Nama Mekanik</th>
					<th>Sparepart</th>
					<th>Qty</th>
					<th>Harga Sparepart</th>
					<th>Harga Jasa</th>
					<th>Total Pembelian</th>
					<th>Tanggal Beli</th>
				</tr>
				
			</thead>
			<tbody>
				@forelse($data as $dsn)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$dsn->id_penjualan}}</td>
					<td>{{$dsn->mekanik->mekanik}}</td>
					<td>{{$dsn->sparepart->sparepart}}</td>
					<td>{{$dsn->qty}}</td>
					<td>{{$dsn->hrg_spt}}</td>
					<td>{{$dsn->hrg_jasa}}</td>
					<td>{{$dsn->ttl_bayar}}</td>
					<td>{{$dsn->created_at}}</td>
				</tr>
				@empty
				<tr>
					<td colspan="5" style="text-align: center;">Tidak Ada Data</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</body>
</html>
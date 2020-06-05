<table border="1" cellpadding="8"><tr><th>Id Produk</th><th>Nama_Produk</th>  
	<th>Deskripsi</th><th>Harga</th><th>Gambar</th><th>Kategori</th><th>Stock Barang</th></tr><?php   
	if( ! empty($tbl_produk)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)     
		foreach($tbl_produk as $data){ // Lakukan looping pada variabel siswa dari controller       
			echo "<tr>";       
			echo "<td>".$data->id_produk."</td>";       
			echo "<td>".$data->nama_produk."</td>";       
			echo "<td>".$data->deskripsi."</td>";       
			echo "<td>".$data->harga."</td>";       
			echo "<td>".$data->gambar."</td>";       
			echo "<td>".$data->kategori."</td>";       
			echo "<td>".$data->stock_barang."</td>";       
		echo "</tr>";     
	}}else{ // Jika data tidak ada     
		echo "<tr><td colspan='4'>Data tidak ada</td></tr>";   
	} ?></table>
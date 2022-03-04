<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size : 6.4pt;
        }
        @media print
        {
            .table{
                border: 1px solid black !important;
            }
            .table-bordered td , .table-bordered th{
                border : 1px solid black !important;
            }
            body{
                padding-left: 1px !important;
                padding-right: 1px !important;
            }
            @page {size: landscape}
         }
        @media screen
        {
            .table{
                border: 1px solid black;
            }
            body{
                padding-left: 1px;
                padding-right: 1px;
            }
            @page {size: landscape}
         }
    </style>
</head>
<body>
<div class="container">
		<center>
			<h3>Laporan Kriteria Pemilihan Kopi Solok Radjo</h3>
		</center>
		<br/>
		<table class="table table-bordered"  border="1" width:"10%" height:"10%" >
			<thead>
				<tr>
                    <th>No.</th>
                    <th>Nama Pemilik</th>
                    <th>Jumlah Memiliki Air 13% - 15%</th>
                    <th>Biji Hitam</th>
                    <th>Biji Coklat</th>
                    <th>Biji Berjamur</th>
                    <th>Kulit Kering</th>
                    <th>Biji Berlubang</th>
                    <th>Biji Putih</th>
                    <th>Biji Rusak</th>
                    <th>Biji Keriput</th>
                    <th>Biji Berkuping</th>
                    <th>Biji Seragam</th>
                    <th>Caramel</th>
                    <th>Fresh Butter</th>
                    <th>Roasted Peanuts</th>
                    <th>Roasted Hazelnuts</th>
                    <th>Roasted Almonds</th>
                    <th>Walnuts</th>
                    <th>Dark Chocolate</th>
                    <th>Vanilla</th>
                    <th>Toast</th>
                    <th>Earthy</th>
                    <th>Lemon</th>
                    <th>Straw</th>
                    <th>Coffee Plup</th>
                    <th>Basmati Rice</th>
                    <th>Medicinal</th>
                    <th>Smoke</th>
                    <th>Pepper</th>
                    <th>Clove Like</th>
				</tr>
			</thead>
			<tbody>
            @foreach ($sk as $no=>$sk )
                <tr align="center">
                    <td>{{$no + 1}}</td>
                    <td>{{$sk->nama_pengguna}}</td>
                    <td>{{$sk->c1_sub_kriteria}}</td>
                    <td>{{$sk->c21_sub_kriteria}}</td>
                    <td>{{$sk->c22_sub_kriteria}}</td>
                    <td>{{$sk->c23_sub_kriteria}}</td>
                    <td>{{$sk->c24_sub_kriteria}}</td>
                    <td>{{$sk->c25_sub_kriteria}}</td>
                    <td>{{$sk->c26_sub_kriteria}}</td>
                    <td>{{$sk->c27_sub_kriteria}}</td>
                    <td>{{$sk->c28_sub_kriteria}}</td>
                    <td>{{$sk->c29_sub_kriteria}}</td>
                    <td>{{$sk->c31_sub_kriteria}}</td>
                    <td>{{$sk->c41_sub_kriteria}}</td>
                    <td>{{$sk->c42_sub_kriteria}}</td>
                    <td>{{$sk->c43_sub_kriteria}}</td>
                    <td>{{$sk->c44_sub_kriteria}}</td>
                    <td>{{$sk->c45_sub_kriteria}}</td>
                    <td>{{$sk->c46_sub_kriteria}}</td>
                    <td>{{$sk->c47_sub_kriteria}}</td>
                    <td>{{$sk->c48_sub_kriteria}}</td>
                    <td>{{$sk->c49_sub_kriteria}}</td>
                    <td>{{$sk->c51_sub_kriteria}}</td>
                    <td>{{$sk->c52_sub_kriteria}}</td>
                    <td>{{$sk->c53_sub_kriteria}}</td>
                    <td>{{$sk->c54_sub_kriteria}}</td>
                    <td>{{$sk->c55_sub_kriteria}}</td>
                    <td>{{$sk->c56_sub_kriteria}}</td>
                    <td>{{$sk->c57_sub_kriteria}}</td>
                    <td>{{$sk->c58_sub_kriteria}}</td>
                    <td>{{$sk->c59_sub_kriteria}}</td>
                </tr>
            @endforeach
			</tbody>
		</table>
 
	</div>
</body>
</html>
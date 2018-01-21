@extends('Template.master6')
@section('konten')
<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Kode Barang
						</th>
						<th>
							Nama barang
						</th>
						<th>
							Harga
						</th>
					</tr>
				</thead>
				<tbody>
					@php $no=1; @endphp
					@foreach($barang as $tab)
					<tr>
						<td>
							{{$no++}}
						</td>
						<td>
							{{$tab->kode_barang}}
						</td>
						<td>
							{{$tab->nama_barang}}
						</td>
						<td>
							{{$tab->harga}}
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table> 
			@endsection
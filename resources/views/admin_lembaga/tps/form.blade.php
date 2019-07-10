<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">
				{!! Form::mySelect('prov_id', 'Provinsi', $provinsi_untuk_select2, isset($item->prov_id) ? (int) $item->prov_id : null, ['class' => 'form-control select2', 'id' => 'provinsi_id']) !!}	
		
				{!! Form::mySelect('kab_id', 'Kabupaten', isset($kabupaten_untuk_select2) ? $kabupaten_untuk_select2 : array(), isset($item->kab_id) ? $item->kab_id : null, ['class' => 'form-control select2']) !!}

				{!! Form::mySelect('kec_id', 'Kecamatan', isset($kecamatan_untuk_select2) ? $kecamatan_untuk_select2 : array(), isset($item->kec_id) ? $item->kec_id : null, ['class' => 'form-control select2']) !!}

				{!! Form::mySelect('kel_id', 'Kelurahan', isset($kelurahan_untuk_select2) ? $kelurahan_untuk_select2 : array(), isset($item->kel_id) ? $item->kel_id : null, ['class' => 'form-control select2']) !!}

				{!! Form::myInput('total_suara', 'total_suara', 'Total Suara') !!}
		
				{!! Form::myInput('suara_tidak_sah', 'suara_tidak_sah', 'Suara Tidak Sah') !!}

				{!! Form::myInput('no_tps', 'no_tps', 'Nomor TPS') !!}

				{!! Form::mySelect('saksi', 'Saksi', $saksi_untuk_select2, isset($item->prov_id) ? $item->prov_id : null, ['class' => 'form-control select2']) !!}

				{!! Form::myInput('hidden', 'lembaga_id', '', array(), Auth::user()->lembaga_id) !!}

		
		</div>  
	</div>
</div>
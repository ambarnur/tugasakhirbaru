<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'nama', 'Nama') !!}
		
				{!! Form::myInput('email', 'email', 'Email') !!}
		
				{!! Form::myInput('password', 'password', 'Password') !!}
		
				{!! Form::myInput('password', 'password_confirmation', 'Tulis ulang password') !!}

				{!! Form::myInput('nik', 'nik', 'NIK') !!}

				{!! Form::myInput('kontak', 'kontak', 'Kontak') !!}
		
				{!! Form::myTextArea('bio', 'Biodata') !!}

				{!! Form::myFile('avatar', 'Foto') !!}

				{!! Form::myInput('hidden', 'role', '', array(), 20) !!}

				{!! Form::myInput('hidden', 'lembaga_id', '', array(), Auth::user()->lembaga_id) !!}
				
				
		</div>  
	</div>
</div>
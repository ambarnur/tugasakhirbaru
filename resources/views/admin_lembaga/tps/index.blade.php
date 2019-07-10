@extends('admin_lembaga.default')

@section('page-header')
    TPS <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')
    <div class="bgc-white bd bdrs-3 pB-50">
        <h4 class="pull-left mL-10 mT-5"> Tabel TPS </h4>
        <a href="{{ route('admin_lembaga' . '.tps.create') }}" class="btn btn-info pull-right mR-10 mT-5">
            <i class="fa fa-plus"></i> {{ trans('app.add_button') }}
        </a>
    </div>
    <div class="bgc-white bd bdrs-3 pB-50">
        <div class="row mL-10">
            <div class="col-6">
            {!! Form::open([
                'action' => ['Admin_lembaga\TpsController@generateSample'],
            ]) !!}
            {!! Form::myInput('text','threshold', 'Threshold') !!}
            <button type="submit" class="btn btn-primary"><i class="fa fa-cogs"></i> Generate</button>
            {!! Form::close() !!}
            </div>
        </div> 
    </div>
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Provinsi</th>
                    <th>Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Nomor TPS</th>
                    <th>Total Suara</th>
                    <th>Suara Tidak Sah</th>
                    <th>Apakah Sample</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td><a href="{{ route('admin_lembaga' . '.tps.edit', $item->id) }}">{{ $item->provinsi->nama }}</a></td>
                        <td>
                            @if(isset($item->kabupaten->nama))
                            {{ $item->kabupaten->nama }}
                            @endif
                        </td>
                        <td>
                            @if(isset($item->kecamatan->nama))
                            {{ $item->kecamatan->nama }}
                            @endif
                        </td>

                        <td>
                            @if(isset($item->kelurahan->nama))
                            {{ $item->kelurahan->nama }}
                            @endif
                        </td>
                        <td>{{ $item->no_tps }}</td>
                        <td>{{ $item->total_suara }}</td>
                        <td>{{ $item->suara_tidak_sah }}</td>
                        <td>
                            @if($item->is_sample == 1)
                                <p class="text-success">Ya</p>
                            @else
                                <p class="text-danger">Tidak</p>
                            @endif
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route('admin_lembaga' . '.tps.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route('admin_lembaga' . '.tps.destroy', $item->id), 
                                        'method' => 'DELETE',
                                        ]) 
                                    !!}

                                        <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>
                                        
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

@endsection
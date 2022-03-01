@extends('layouts.app')

@section('template_title')
    Carga Academica
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Carga Academica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('carga-academicas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>User Id</th>
										<th>Materia Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cargaAcademicas as $cargaAcademica)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cargaAcademica->user_id }}</td>
											<td>{{ $cargaAcademica->materia_id }}</td>

                                            <td>
                                                <form action="{{ route('carga-academicas.destroy',$cargaAcademica->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('carga-academicas.show',$cargaAcademica->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('carga-academicas.edit',$cargaAcademica->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cargaAcademicas->links() !!}
            </div>
        </div>
    </div>
@endsection

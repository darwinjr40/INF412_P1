@extends('layouts.app')

@section('template_title')
    Recipe
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recipe') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recipes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Descripcion</th>
										<th>Medicamento</th>
										<th>Presentacion</th>
										<th>Dosis</th>
										<th>Duracion</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recipes as $recipe)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $recipe->descripcion }}</td>
											<td>{{ $recipe->medicamento }}</td>
											<td>{{ $recipe->presentacion }}</td>
											<td>{{ $recipe->dosis }}</td>
											<td>{{ $recipe->duracion }}</td>
											<td>{{ $recipe->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('recipes.destroy',$recipe->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('recipes.show',$recipe->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recipes.edit',$recipe->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $recipes->links() !!}
            </div>
        </div>
    </div>
@endsection

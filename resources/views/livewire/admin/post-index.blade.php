<div class="row justify-content-center">
    <div class="col-11">
        <div class="card">
            <div class="card-header">
                <input wire:model="search" type="text" class="form-control" placeholder="Buscar...">
            </div>
            @if ($posts->count())
            <div class="card-body shadow-lg">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post -> id }}</td>
                                    <td>{{ $post -> name }}</td>
                                    <td width="10px">
                                        <a href="{{ route('admin.posts.edit', $post) }}"
                                           class="btn btn-info btn-sm">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                        
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
                <div class="card-footer">
                    {{ $posts->links() }}
                </div>
            </div>
            @else
            <div class="card-body">
                <strong>Não há nenhum registro...</strong>
            </div>
                
            @endif
           

            
            
        </div>
    </div>
    
</div>

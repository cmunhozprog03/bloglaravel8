<div>
   <div class="card shadow-lg">
       <div class="card-header">
           <input wire:model="search" type="text" class="form-control" placeholder="Buscar...">
       </div>
       @if($users->count())
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td width="10px">
                                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-info">Editar</a>
                                        </td>
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
      
        @else
          <div class="card-body">
            <strong>Nenhum registro encontrado.</strong>
          </div>
            
           
        @endif
   </div>
</div>

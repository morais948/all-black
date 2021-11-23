<div class="table-responsive" style="min-height: 200px">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">

        <tr>
            @foreach ($fields as $field)
                <th scope="col" class="sort">{{ $field }}</th>
            @endforeach
            <th scope="col"></th>
        </tr>

      </thead>
      <tbody class="list">
            @foreach ($items as $item)
                <tr>
                    @foreach ($contentFildes as $value)
                        <td>
                            {{ $item->$value }}
                        </td>
                    @endforeach
                   
                    <td class="text-right">
                        <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="{{ route("$prefixResource" . ".edit", $item->id) }}">Editar</a>                            
                            <vue-form-delete-item csrf="{{ csrf_token() }}" rota="{{ route("$prefixResource" . ".destroy", $item->id) }}" >
                            </vue-form-delete-item>  
                        </div>
                        </div>
                    </td>
                </tr>
            @endforeach
      </tbody>
    </table>
    <div class="card-footer py-4 d-flex justify-content-end">
        {{ $items->links() }}
    </div>
  </div>
<x-app-layout>
    <!-- Button trigger modal -->
    <div class=" text-center mt-20">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    +* </div>
                <div class="modal-body">
                    ..qqqqqqqqqq
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table container mt-10">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supperimer</th>
            </tr>
        </thead>



        <tbody>

            <tr>
                <th scope="row">1</th>
                <td>2</td>
                <td>3</td>
                <td>
                    {{-- @foreach ($alluser->roles as $role)
                    {{$role->name}}
                @endforeach --}}

                    4


                </td>
                <td>
                    d
                    {{-- @include('backend.comp.edit') --}}
                </td>
                <td>
                    zzz
                    {{-- <form action="{{ route('backend.destroyuser', $alluser->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" btn btn-danger text-white " onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i class="fa-solid fa-trash-can"></i></button>
                </form> --}}
                </td>

            </tr>

            {{-- @foreach ($allusers as $alluser)
        @if ($alluser->name == 'admin')
            
        @else
            
        @endif
            
        @endforeach --}}

        </tbody>

    </table>
</x-app-layout>

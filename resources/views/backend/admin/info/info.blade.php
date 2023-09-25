<x-app-layout>
    @if (Auth::user()->roles[0]->name == 'admin')
        <div class=" d-none">
            {{ $createur = 1 }}
        </div>
    @else
        <div class=" d-none">
            {{ $createur = 0 }}
        </div>
    @endif




    <table class="table container mt-10 ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Adresse</th>
                <th scope="col">Tel</th>
                <th scope="col">Email</th>
                <th scope="col">Modifier</th>
            </tr>
        </thead>



        <tbody>

            @foreach ($infos as $info)
                <tr>
                    <td>
                        {{ $info->id }}

                    </td>
                    <td>
                        {{ $info->adresse }}
                    </td>
                    <td>
                        {{ $info->tel }}

                    </td>
                    <td>
                        {{ $info->email }}
                    </td>
                    <td>
                        @include('backend.admin.info.partials.edit')
                    </td>
                </tr>
            @endforeach



        </tbody>

    </table>
</x-app-layout>

<x-app-layout>



    <table class="table container mt-10 text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Sujet</th>
                <th scope="col">Show</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr class="@if ($message->show) table-success  @else @endif   ">
                    <td>
                        {{ $message->id }}
                    </td>
                    <td>
                        {{ $message->name }}

                    </td>
                    <td>
                        {{ $message->email }}

                    </td>
                    <td>
                        {{ $message->sujet }}

                    </td>
                    <td>
                        <form action={{ route('backend.updatmessage', $message->id) }} method="POST">
                            @csrf
                            @method('PUT')

                            <button type="submit">
                                <i class="fa-solid fa-check fa-2xl mb-3" style="color: #73ff00;"></i> </button>
                        </form>

                        @include('backend.admin.message.partials.show')
                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>



</x-app-layout>

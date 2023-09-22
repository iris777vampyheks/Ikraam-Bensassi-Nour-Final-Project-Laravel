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
                <tr class="@if ($message->show) table-success  @else  @endif ">
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
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </form>
                        <button type="submit" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{ $message->sujet }}">
                        Show
                    </button>
                        <!-- Button trigger modal -->
                        

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $message->sujet }}" tabindex="-1" aria-labelledby="exampleModal{{ $message->sujet }}Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $message->message }}
                                    </div>
                                    <div class="modal-footer">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>



</x-app-layout>

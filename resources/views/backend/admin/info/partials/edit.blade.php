    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal"
    data-bs-target="#exampleModal{{ $info->id }}">
    <i class="fa-solid fa-pen-to-square"></i>
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $info->id }}" tabindex="-1"
    aria-labelledby="exampleModal{{ $info->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <form action={{ route('backend.updateinfo', $info->id) }} method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" value="{{ $info->adresse }}" name="adresse"
                            class="form-control" id="adresse" aria-describedby="adresse" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Telephone</label>
                        <input type="text" value="{{ $info->tel }}" name="tel"
                            class="form-control" id="tel" aria-describedby="tel" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Email</label>
                        <input type="email" value="{{ $info->email }}" name="email"
                            class="form-control" id="email" aria-describedby="email" required>
                    </div>
                    



                    <div class="modal-footer">
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Modifier</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

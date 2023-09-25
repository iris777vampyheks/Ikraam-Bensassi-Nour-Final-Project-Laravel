    <!-- Button trigger modal -->
    <div class=" text-center mt-20">
        <button type="button" class="btn btn-success fs-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus-minus"></i> Produit
        </button>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <form action='{{ route('backend.storproduit') }} ' method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Titre</label>
                            <input type="text" name="titre" class="form-control" id="titre"
                                aria-describedby="titre" required>
                        </div>

                        <div class="mb-3">
                            <label for="prix" class="form-label">Prix</label>
                            <input name="prix" type="number" min="0" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image"
                                aria-describedby="image" required>
                        </div>

                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input name="stock" type="number" min="0" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                        </div>

                        <label for="stock" class="form-label">Categorie</label>
                        <select name="categorie" class="form-select" aria-label="Default select example">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->name }} "> {{ $categorie->name }}</option>
                            @endforeach
                        </select>


                        <div class="modal-footer">
                            <div class="mb-3">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Ajouter</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>


    
<button type="submit" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $message->id }}">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        <!-- Button trigger modal -->


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $message->id }}" tabindex="-1"
                            aria-labelledby="exampleModal{{ $message->id }}Label" aria-hidden="true">
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
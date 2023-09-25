<section class="subscribe_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="subscribe_area_text text-center">
                    <h5>Join Our Newsletter</h5>
                    <h2>Subscribe to get Updated
                        with new offers</h2>


                        <form action="{{ route('sendmail') }} " method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="enter email address" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" required>
                                <button type="submit" class="input-group-text btn_2">
                                    subscribe now
                                </button>
                            </div>
                        </form>


                </div>
            </div>
        </div>
    </div>
</section>
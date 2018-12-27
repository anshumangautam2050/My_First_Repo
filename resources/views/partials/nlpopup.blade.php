<div class="modal fade" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="newsletterModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form role="form">
                @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Subscribe to Mailing list</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div id="subscriber_status"></div>    
                            <p>
            Enter your first name and email below to receive our updates. </p>

                            <div class="form-group"> 
                            <input type="hidden" name="uid" id="uid" value="{{ $uid }}">
                                <input type="text" class="form-control" id="firstName" placeholder="Enter our first name" required> 
                            </div>
                            <div class="form-group"> 
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" required> 
                                <span id="errorEmail" class="alert-danger"></span>
                            </div>                             
                            <div class="form-check"> 
                                <input class="form-check-input" type="checkbox" value="checked" name="agreeprivacy" id="agreeprivacy"> 
                                <label class="form-check-label" for="agreeprivacy">                        I agree with Privacy                </label>                                 
                                <span id="errorPrivacyAgree" class="alert-danger"></span>
                            </div>                             
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No Thanks</button>
                            <button type="button" class="btn btn-primary" id="subscribe">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
</div>
<div class="modal fade" id="modal_id" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Fill up the form to get pass</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id">
                <div class="form-group">
                    <label for="name" class="float-md-start mb-2">Name</label>
                    <input type="text" name="name" class="form-control mb-3" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email" class="float-md-start mb-2">Email Address</label>
                    <input type="email" name="email" class="form-control mb-3" placeholder="Enter your email address"
                        required>
                </div>
                <div class="form-group">
                    <label for="phone" class="float-md-start mb-2">Phone Number</label>
                    <input type="number" name="phone" class="form-control mb-3" placeholder="Enter your phone number"
                        required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary SubmitGetpass" onClick="store()">Get Pass</button>
            </div>
        </div>
    </div>
</div>

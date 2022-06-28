<form action="{{ $action }}" method="POST">
    @csrf
    <div class="modal fade" id="{{ $modalId }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Email input -->
                    <form action="">
                        <div class="form-outline mb-4">
                            <input type="{{ $type }}" id="{{ $id }}" name={{ $name }} class="form-control" required/>
                            <label class="form-label" for="{{ $labelId }}">{{ $label }}</label>
                        </div>
                    </form>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>

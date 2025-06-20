<div class="modal fade" id="modal-delete-{{ $product->id }}">
        <div class="modal-dialog">
            <form action="/products/{{ $product->id }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Delete Product/Item</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Delete this Product/Item?</p>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-outline-danger">Yes</button>
                  </div>
                </div>
            </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">New Category</h4>
            </div>
            <form action="{{route('post.store','test')}}" method="post">
                    {{csrf_field()}}
                <div class="modal-body">
                      @include('post.form')
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
            </div>
            <form action="{{route('post.update','test')}}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}
                <div class="modal-body">
                        <input type="hidden" name="Post_id" id="id" value="">
                      @include('post.form')
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <form action="{{route('post.destroy','test')}}" method="post">
                    {{method_field('delete')}}
                    {{csrf_field()}}
                <div class="modal-body">
                      <p class="text-center">
                          Are you sure you want to delete this?
                      </p>
                        <input type="hidden" name="Post_id" id="id" value="">
      
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                  <button type="submit" class="btn btn-warning">Yes, Delete</button>
                </div>
            </form>
          </div>
        </div>
      </div>
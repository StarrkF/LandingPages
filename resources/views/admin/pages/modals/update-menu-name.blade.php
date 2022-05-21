<form action="{{route('admin.update.menu.name',$menu->link)}}" method="POST">
    @csrf
 <div class="modal fade" id="menuName{{$menu->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document1">
      <div class="modal-content" style="background: black">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Change Menu Name</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">    
                <div class="form-group col-12 my-2">
                    <label for="name">Menu Name</label>
                    <input type="text" class="form-control" required name="name" value="{{$menu->name}}">
                </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-lg btn-light float-left">Save</button>
        </div>
      </div>
    </div>
  </div>
</form>
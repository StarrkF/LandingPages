<form action="{{route('admin.update.menu.number',$menu->id)}}" method="POST">
    @csrf
 <div class="modal fade" id="menuNumber{{$menu->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document1">
      <div class="modal-content" style="background: black">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Menü numarasını değiştir</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">    
                <div class="form-group col-12 my-2">
                    <label for="number">Menü Numarası</label>
                    <input type="number" class="form-control" required name="number" value="{{$menu->number}}">
                </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-lg btn-light float-left">Save</button>
        </div>
      </div>
    </div>
  </div>
</form>
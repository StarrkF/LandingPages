<form action="{{route('admin.store.page',$menu->link)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="menuid" value="{{$menu->id}}">
 <div class="modal fade bd-example-modal-xl" id="modalInsert" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document1">
      <div class="modal-content" style="background: black">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Proje Ekle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" required name="title">
                </div>

                <div class="form-group col-12 col-md-6">
                    <label for="number">Number</label>
                    <input type="number" class="form-control" id="number" required name="number">
                </div>

                

                <div class="form-group col-12 col-md-7">
                    <label for="content">Content</label>
                    <textarea name="content" id="content"></textarea>
                </div>

                <div class="form-group col-12 col-md-5">
                    <label for="imageUpload">Image</label>
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url();"></div>
                        </div>
                    </div>
                </div> 
                
                <div class="form-group col-12 col-md-6">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control" id="desc" name="desc">
                </div>

                <div class="form-group col-12 col-md-6">
                    <label for="key">Key</label>
                    <input type="text" class="form-control" id="key" name="key">
                </div>
                

            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-lg btn-light float-left">Add</button>
        </div>
      </div>
    </div>
  </div>
</form>
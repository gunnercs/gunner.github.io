<div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4 border-left-danger   ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">PRODUCT</h6>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4 ">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">รายการสินค้า</h6>
                
            </div>
            <div class="card-body">
                <div class="mb-2">
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addproduct">
                            <i class="fa fa-plus"></i>
                        ADD
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>สินค้า</th>
                                <th>Social</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>[SC0001] กิมจิผักกาด</td>
                                <td><span class="text-warning">SHOPEE</span></td>
                                <td>
                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#Editproduct">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>[SC0002] กิมจิต้นหอม</td>
                                <td><span class="text-warning">SHOPEE</span></td>
                                <td>
                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#Editproduct">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>[SC0001] กิมจิผักกาด</td>
                                <td><span class="text-info">LAZADA</span></td>
                                <td>
                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#Editproduct">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>[SC0002] กิมจิต้นหอม</td>
                                <td><span class="text-info">LAZADA</span></td>
                                <td>
                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#Editproduct">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="addproductLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addproductLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">รหัสสินค้า</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">ชื่อสินค้า</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">จำนวนสินค้า</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">ราคาสินค้า</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">สถานะ</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Product</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Editproduct" tabindex="-1" role="dialog" aria-labelledby="editproductLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editproductLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">รหัสสินค้า</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">ชื่อสินค้า</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">จำนวนสินค้า</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">ราคาสินค้า</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">สถานะ</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Edit Product</button>
      </div>
    </div>
  </div>
</div>

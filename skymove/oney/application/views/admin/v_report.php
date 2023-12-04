<div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4 border-left-danger   ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">REPORT</h6>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4 ">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">รายงาน</h6>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div>
                                <label for="inputState">Social</label>
                                <select id="inputState" class="form-control">
                                    <option selected>เลือก Social</option>
                                    <option value="1">Facebook</option>
                                    <option value="2">Line</option>
                                    <option value="3">Shopee</option>
                                    <option value="4">Lazada</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: end;">
                        <button class="btn btn-primary" >ค้นหา</button>
                    </div>
                </div>
                
                <div class="table-responsive" style="display:none">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>



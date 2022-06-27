<?php $this->view("page/header");?>

    <div class="jumbptron">
        <div class="card">
            <h2> Danh sách câu lạc bộ </h2>
        </div>
        <div class="card">
            <div class="card-body">
            <table id="datatableclub" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Mã câu lạc bộ</th>
                        <th>Tên câu lạc bộ</th>
                        <th>Tên viết tắt</th>
                        <th>Tên sân</th>
                        <th>Tên huấn luyện viên</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                        <th>Xem danh sách cầu thủ</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data['view'] as $row) : ?>
                    <tr>
                            <td> <?=$row->ClubID?></td>
                            <td><?=$row->ClubName?></td>
                            <td><?=$row->Shortname?></td>
                            <td><?=$row->SName?></td>
                            <td><?=$row->CFullName?></td>
                            <td> <button type="button" class="btn btn-success updatebtn" data-bs-toggle="modal" data-bs-target="#updateclubModal">
                                Sửa
                                </button> 
                            </td>
                            <td> <button type="button" class="btn btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#deleteclubModal">
                                Xóa
                                </button> 
                            </td>
                            <td> <button type="button" class="btn btn-primary" >Xem</button> </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </tfoot>
            </table>
            </div>
        </div>
    </div>   

    <!-- Button trigger modal -->

<!------Model update club--------->
<!-- Modal -->
<div class="modal fade" id="updateclubModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin câu lạc bộ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  method="POST">
            <div class="modal-body">
                
                <div class="col-lg-8 col-md-6">
                    <input type="text" name="update_clubid" id="update_clubid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Tên câu lạc bộ<span>*</span></p>
                                <input type="text" name="Clubname" id="Clubname" placeholder="Fullname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Tên viết tắt<span>*</span></p>
                                <input type="text" name="Shortname" id="Shortname" placeholder="Shortname">
                            </div>
                        </div>
                    </div>
                   <!--  <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Tên sân<span>*</span></p>
                                <input type="text" name="SName" id="SName" placeholder="Fullname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Tên huấn luyện viên<span>*</span></p>
                                <input type="text" name="CFullName" id="CFullName" placeholder="Shortname">
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Tên sân vận động<span>*</span> </p>
                                <select name="stadiumid" id="SName" class="custom-select" placeholder="Stadium ID" required>
                                    <option value="">Stadium name</option>
                                        <?php foreach ($data['stadium'] as $row) : ?>
                                            <option value="<?=$row->StadiumID?>" ><?= $row->SName ?></option>
                                        <?php endforeach; ?>
                                </select>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Tên huấn luyện viên <span>*</span></p>
                                <select name="coachid" id="CFullName" class="custom-select" placeholder="Coach ID" required>
                                    <option value="">Coach Name</option>
                                        <?php foreach ($data['coach'] as $row) : ?>
                                            <option value="<?=$row->CoachID?>"  ><?= $row->CFullName ?></option>
                                        <?php endforeach; ?>
                                </select>
                        </div>
                    </div>
                </div>
            </div>
      </form>  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" name="updateclubbtn">Lưu</button>
      </div>
    </div>
  </div>
</div>


<!-----------------Delete club Model ----------------->

<div class="modal fade" id="deleteclubModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xóa thông tin câu lạc bộ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST">
            <div class="modal-body">
                <h6>Bạn có muốn xóa thông tin câu lạc bộ này ?</h6>
                <input type="hidden" name="delete_clubid" id="delete_clubid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" name="deleteclubbtn">Xóa</button>
            </div>
     </form>                                
    </div>
  </div>
</div>

<script> src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<<script>
 $(document).ready(function(){
    $('.updatebtn').on('click', function() {
        $('#updateclubModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_clubid').val(data[0]);
            $('#Clubname').val(data[1]);        
            $('#Shortname').val(data[2]);
            $('#SName').val(data[3]);
            $('#CFullName').val(data[4]);
    });
}); 
</script>  
<!-- <<script >
    $(document).ready(function(){
        $(document).on('click', '.updatebtn', function() {
                var id=$(this).val();
                var fullname=$('#Clubname'+id).text;
                var shortname=$('#Shortname'+id).text;
                var stadiumid=$('#SName'+id).int;
                var coachid=$('#CFullName'+id).int;
            $('#updateclubModal').modal('show');
            //$('#update_clubid').val(data[0]);
            $('#Clubname').fullname;        
            $('#Shortname').shortname;
            $('#stadiumid').stadiumid;
            $('#coachid').coachid;
        });
    });
</script>  -->
<!-- 
<script>
$('#editModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var body = button.data('body');
      var id=$(this).val();
      var fullname=$('#Clubname'+id).text;
      var shortname=$('#Shortname'+id).text;
      var stadium = button.data('stadiumid');
      
      var modal = $(this);
      modal.find('#title').val(title);
      modal.find('#article-id').val(button.data('id'));
      modal.find('#category').val(category);
      modal.find('#body').val(body);
    });
     -->
<!---</script>-->
<script>
 $(document).ready(function(){
    $('.deletebtn').on('click', function() {
        $('#deleteclubModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_clubid').val(data[0]);
    });
}); 
</script> 
<script>
    $(document).ready(function () {
    $('#datatableclub').DataTable();
});</script>
<?php $this->view("page/footer");?>
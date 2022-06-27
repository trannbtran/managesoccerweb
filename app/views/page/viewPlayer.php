<?php $this->view("page/header");?>

    <div class="jumbptron">
        <div class="card">
            <h2> Danh sách cầu thủ </h2>
        </div>
        <div class="card">
            <div class="card-body">
            <table id="datatableplayer" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Mã cầu thủ</th>
                        <th>Họ tên</th>
                        <th>Tên câu lạc bộ</th>
                        <th>Ngày sinh</th>
                        <th>Vị trí</th>
                        <th>Quốc gia</th>
                        <th>Số áo</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data['player'] as $row) : ?>
                    <tr>
                            <td> <?=$row->PlayerID?></td>
                            <td><?=$row->FullName?></td>
                            <td><?=$row->ClubName?></td>
                            <td><?=$row->DOB?></td>
                            <td><?=$row->Position?></td>
                            <td><?=$row->Nationality?></td>
                            <td><?=$row->Number?></td>
                            <td> <button type="button" class="btn btn-success updatebtn" data-bs-toggle="modal" data-bs-target="#updateplayerModal">
                                Sửa
                                </button> 
                            </td>
                            <td> <button type="button" class="btn btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#deleteplayerModal">
                                Xóa
                                </button> 
                            </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </tfoot>
            </table>
            </div>
        </div>
    </div>   

<!------Model update club--------->
<!-- Modal -->
<div class="modal fade" id="updateplayerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin cầu thủ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <input type="hidden" name="update_playerid" id="update_playerid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Họ tên<span>*</span></p>
                                    <input name="Fullname" id="Fullname" type="text" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                    <p>Tên câu lạc bộ </p>
                                    <!-- id="clubid"-->
                                    <select name="clubid"  class="custom-select" placeholder="Club ID" required >
                                    <option value="">Club Name</option>
                                        <?php foreach ($data['club'] as $row) : ?>
                                            <option value="<?=$row->ClubID?>" <?php if($row->ClubName== $clubid) echo 'selected="selected"'?> ><?= $row->ClubName ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <p>Tên câu lạc bộ<span>*</span></p>
                                    <input name="clubid" id="clubid" type="text" required> -->
                            </div>                          
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Ngày sinh</p>
                                    <input type="text" name="Dob" id="Dob" placeholder="username">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Vị trí</p>
                                    <input type="text" name="position" id="position" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Quốc gia</p>
                                    <input type="text" name="nationality" id="nationality" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Số áo</p>
                                    <input type="text" name="number" id="number" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" name="updateplayerbtn">Lưu</button>
      </div>
    </div>
  </div>
</div>


<!-----------------Delete club Model ----------------->

<div class="modal fade" id="deleteplayerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xóa thông tin cầu thủ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST">
            <div class="modal-body">
                <h6>Bạn có muốn xóa thông tin cầu thủ này ?</h6>
                <input type="hidden" name="delete_playerid" id="delete_playerid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" name="deleteplayerbtn">Xóa</button>
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
        $('#updateplayerModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_playerid').val(data[0]);
            $('#Fullname').val(data[1]);        
            $('#clubid').val(data[2]);
            $('#Dob').val(data[3]);
            $('#position').val(data[4]);
            $('#nationality').val(data[5]);
            $('#number').val(data[6]);
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
        $('#deleteplayerModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_playerid').val(data[0]);
    });
}); 
</script> 
<script>
    $(document).ready(function () {
    $('#datatableplayer').DataTable();
});</script>
<?php $this->view("page/footer");?>
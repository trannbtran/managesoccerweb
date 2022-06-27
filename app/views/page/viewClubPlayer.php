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
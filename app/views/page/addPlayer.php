<?php $this->view("page/header");?>

     <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Thêm cầu thủ</h4>
               

                <form method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ tên<span>*</span></p>
                                        <input name="Fullname" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p>Tên câu lạc bộ </p>
                                        <select name="clubid" class="custom-select" placeholder="Club ID" required>
                                        <option value="">Club Name</option>
                                            <?php foreach ($data['clubs'] as $row) : ?>
                                                <option value="<?=$row->ClubID?>"><?= $row->ClubName ?></option>
                                            <?php endforeach; ?>
                                        </select>
  
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Ngày sinh</p>
                                <input type="date" name="Dob" placeholder="username">
                            </div>
                            <div class="checkout__input">
                                <p>Vị trí</p>
                                <input type="text" name="position" required>
                            </div>
                            <div class="checkout__input">
                                <p>Quốc gia</p>
                                <input type="text" name="nationality" required>
                            </div>
                            <div class="checkout__input">
                                <p>Số áo</p>
                                <input type="text" name="number"required>
                            </div>
                            <button type="submit" value="Submit" class="site-btn">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <?php $this->view("page/footer");?>
<?php $this->view("page/header");?>

     <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Thêm câu lạc bộ</h4>
                <form method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Tên câu lạc bộ<span>*</span></p>
                                        <input type="text" name="Clubname" placeholder="Fullname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Tên viết tắt<span>*</span></p>
                                        <input type="text" name="Shortname" placeholder="Shortname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Tên sân vận động<span>*</span> </p>
                                        <select name="stadiumid" class="custom-select" placeholder="Stadium ID" required>
                                            <option value="">Stadium name</option>
                                                <?php foreach ($data['stadium'] as $row) : ?>
                                                    <option value="<?=$row->StadiumID?>"><?= $row->SName ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                </div>
                                <div class="col-lg-6">
                                    <p>Tên huấn luyện viên <span>*</span></p>
                                        <select name="coachid" class="custom-select" placeholder="Coach ID" required>
                                            <option value="">Coach Name</option>
                                                <?php foreach ($data['coach'] as $row) : ?>
                                                    <option value="<?=$row->CoachID?>"><?= $row->CFullName ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                </div>
                            </div>
                            <button type="submit" class="site-btn">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <?php $this->view("page/footer");?>
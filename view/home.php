<?php
if (isset($_GET['success'])) {
    $productName = $_GET['success'];
    echo '<script language="javascript">';
    echo 'alert("Thêm vào giỏ hàng thành công ! ")';
    echo '</script>';
}
?>
<!--================Slider Area =================-->
<section class="main_slider_area">
    <div class="container body1">
        <div id="body_slideshow">
            <div id="jssor_1">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin">
                    <img src="../img/spin.svg" />
                </div>
                <div data-u="slides" class="slideshow">
                    <div class="image">
                        <img data-u="image" src="../img/banner/banner0.png" />
                        <div u="thumb" class="thumb">
                        </div>
                    </div>
                    <div class="image">
                        <img data-u="image" src="../img/banner/banner1.png" />
                        <div u="thumb" class="thumb">
                        </div>
                    </div>
                    <div class="image">
                        <img data-u="image" src="../img/banner/banner2.png" />
                        <div u="thumb" class="thumb">
                        </div>
                    </div>
                    <div class="image">
                        <img data-u="image" src="../img/banner/banner3.png" />
                        <div u="thumb" class="thumb">
                        </div>
                    </div>
                    <!-- <div>
                        <img data-u="image" src="img/048.jpg" />
                        <div u="thumb">Slide Description 005
                        </div>
                    </div>-->
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
                    </svg>
                </div>
            </div>
            <!-- #endregion Jssor Slider End -->
        </div>
    </div>
</section>
<!--================End Slider Area =================-->



<!--================Featured Product Area =================-->
<section class="feature_product_area">
    <div class="container">
        <div class="f_p_inner">
            <div class="row">
                <div class="col-lg-3">
                    <!--================top sản phẩm =================-->
                    <div class="f_product_left">
                        <div class="f_product_inner">
                            <div class="s_m_title">
                                <h2>Top sản phẩm</h2>
                            </div>
                            <?php foreach ($topsp as $hanghoa) : ?>
                                <div class="media">
                                    <div class="d-flex">
                                        <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                                            <img style="width: 80px;" src="../img/<?php $arr = explode(",", $hanghoa['anh']);
                                                                                    echo $arr[0];
                                                                                    ?>" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><?php echo $hanghoa['tenHH'] ?></h4>
                                        <h5><?php echo number_format($hanghoa['gia']) ?>đ</h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!--================kết thúc top sản phẩm =================-->

                    <!--================sản phẩm mới=================-->
                </div>
                <div class="col-lg-9">
                    <div class="fillter_slider_inner">
                        <ul class="portfolio_filter">
                            <li class="active" data-filter="*"><a style="color: black;" href="#">Sản phẩm mới</a></li>
                        </ul>
                        <div class="fillter_slider owl-carousel">
                            <?php foreach ($spmoi as $hanghoa) : ?>
                                <div class="item shoes">
                                    <div class="fillter_product_item bags">
                                        <div class="f_p_img">
                                            <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                                                <img src="../img/<?php $arr = explode(",", $hanghoa['anh']);
                                                                    echo $arr[0];
                                                                    ?>" alt=""></a>

                                            <h5 class="new">New</h5>
                                        </div>
                                        <div class="f_p_text">
                                            <h5><?php echo $hanghoa['tenHH'] ?></h5>
                                            <h4><?php echo number_format($hanghoa['gia']) ?>đ </h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!--================kt sản phẩm mới=================-->



<!--================ Iphone =================-->
<section class="our_latest_product">
    <div class="container">
        <div class="s_m_title">
            <h2>Iphone</h2>
        </div>
        <div class="l_product_slider owl-carousel">
            <?php foreach ($product as $hanghoa) : ?>
                <div class="l_product_item">
                    <div class="l_p_img">
                        <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                            <img src="../img/<?php $arr = explode(",", $hanghoa['anh']);
                                                echo $arr[0];
                                                ?>" alt=""></a>
                    </div>
                    <div class="l_p_text">
                        <ul>
                            <li><a class="add_cart_btn" href="../customer/add_cart.php?id=<?php echo $hanghoa['maHH'] ?>">Thêm Vào Giỏ Hàng</a></li>

                        </ul>
                        <h4><?php echo $hanghoa['tenHH'] ?></h4>
                        <h5><?php echo number_format($hanghoa['gia']) ?>đ </h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>
<!--================End Iphone =================-->
<!--================ Samsung =================-->
<section class="our_latest_product">
    <div class="container">
        <div class="s_m_title">
            <h2>Samsung</h2>
        </div>
        <div class="l_product_slider owl-carousel">
            <?php foreach ($product2 as $hanghoa) : ?>
                <div class="l_product_item">
                    <div class="l_p_img">
                        <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                            <img src="../img/<?php $arr = explode(",", $hanghoa['anh']);
                                                echo $arr[0];
                                                ?>" alt=""></a>
                    </div>
                    <div class="l_p_text">
                        <ul>
                            <li><a class="add_cart_btn" href="../customer/add_cart.php?id=<?php echo $hanghoa['maHH'] ?>">Thêm Vào Giỏ Hàng</a></li>

                        </ul>
                        <h4><?php echo $hanghoa['tenHH'] ?></h4>
                        <h5><?php echo number_format($hanghoa['gia']) ?>đ </h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>
<!--================End Samsung =================-->
<!--================ Xiaomi =================-->
<section class="our_latest_product">
    <div class="container">
        <div class="s_m_title">
            <h2>Xiaomi</h2>
        </div>
        <div class="l_product_slider owl-carousel">
            <?php foreach ($product3 as $hanghoa) : ?>
                <div class="l_product_item">
                    <div class="l_p_img">
                        <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                            <img src="../img/<?php $arr = explode(",", $hanghoa['anh']);
                                                echo $arr[0];
                                                ?>" alt=""></a>
                    </div>
                    <div class="l_p_text">
                        <ul>
                            <li><a class="add_cart_btn" href="../customer/add_cart.php?id=<?php echo $hanghoa['maHH'] ?>">Thêm Vào Giỏ Hàng</a></li>

                        </ul>
                        <h4><?php echo $hanghoa['tenHH'] ?></h4>
                        <h5><?php echo number_format($hanghoa['gia']) ?>đ </h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>
<!--================End Xiaomi =================-->
<!--================ Realme =================-->
<section class="our_latest_product">
    <div class="container">
        <div class="s_m_title">
            <h2>Realme</h2>
        </div>
        <div class="l_product_slider owl-carousel">
            <?php foreach ($product4 as $hanghoa) : ?>
                <div class="l_product_item">
                    <div class="l_p_img">
                        <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                            <img src="../img/<?php $arr = explode(",", $hanghoa['anh']);
                                                echo $arr[0];
                                                ?>" alt=""></a>
                    </div>
                    <div class="l_p_text">
                        <ul>
                            <li><a class="add_cart_btn" href="../customer/add_cart.php?id=<?php echo $hanghoa['maHH'] ?>">Thêm Vào Giỏ Hàng</a></li>

                        </ul>
                        <h4><?php echo $hanghoa['tenHH'] ?></h4>
                        <h5><?php echo number_format($hanghoa['gia']) ?>đ </h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>
<!--================End Realme =================-->


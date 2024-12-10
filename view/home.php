    <!-- main -->
    <main class="container">
        <!-- Catagories -->
        <div class="text-center">
            <H4 class="my-3">DANH MỤC SẢN PHẨM</H4>
            <div class="row">
                <?php foreach($dsdm as $dm): ?>
                    <div class="col-md-4 position-relative">
                        <img class="img-fluid img-thumbnail" src="img/<?=$dm['HinhAnh']?>" height="270px" alt="">
                        <p class="text-danger p-2 bg-white my-2 position-absolute top-50 start-50 fs-6 translate-middle"><?=$dm['TenDanhMuc']?> </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- sale Products -->
        <div class="text-center mt-5">
            <H4 class="my-3">SẢN PHẨM BÁN CHẠY</H4>
            <div class="row">
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                        <a href="?mod=product&act=detail&id="><img class="img-fluid mb-2 rounded-top" src="img/nam_sm_1.webp" alt=""></a>
                        <p><b>Áo sơ mi nam tay ngắn</b></p>
                        <span class="text-danger">Giá: 500.000đ </span> <span> <del> 650.000 đ</del></span>
                        <p></p>
                        <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                        <a href="?mod=product&act=detail&id="><img class="img-fluid mb-2 rounded-top" src="img/nam_sm_1.webp" alt=""></a>
                        <p><b>Áo sơ mi nam tay ngắn</b></p>
                        <span class="text-danger">Giá: 500.000đ </span> <span> <del> 650.000 đ</del></span>
                        <p></p>
                        <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                        <a href="?mod=product&act=detail&id="><img class="img-fluid mb-2 rounded-top" src="img/nam_sm_1.webp" alt=""></a>
                        <p><b>Áo sơ mi nam tay ngắn</b></p>
                        <span class="text-danger">Giá: 500.000đ </span> <span> <del> 650.000 đ</del></span>
                        <p></p>
                        <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                        <a href="?mod=product&act=detail&id="><img class="img-fluid mb-2 rounded-top" src="img/nam_sm_1.webp" alt=""></a>
                        <p><b>Áo sơ mi nam tay ngắn</b></p>
                        <span class="text-danger">Giá: 500.000đ </span> <span> <del> 650.000 đ</del></span>
                        <p></p>
                        <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- All categories -->
        <div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">Thời Trang Nữ</H4>
                <a href="?mod=page&act=category&id=" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/nu_vay_1.webp" alt="">
                    </a>
                    <p><b>Váy nữ</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/nu_vay_1.webp" alt="">
                    </a>
                    <p><b>Váy nữ</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/nu_vay_1.webp" alt="">
                    </a>
                    <p><b>Váy nữ</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/nu_vay_1.webp" alt="">
                    </a>
                    <p><b>Váy nữ</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">Thời Trang Nam</H4>
                <a href="?mod=page&act=category&id=" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/nam_sm_1.webp" alt="">
                    </a>
                    <p><b>Áo sơ mi</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/nam_sm_1.webp" alt="">
                    </a>
                    <p><b>Áo sơ mi</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/nam_sm_1.webp" alt="">
                    </a>
                    <p><b>Áo sơ mi</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/nam_sm_1.webp" alt="">
                    </a>
                    <p><b>Áo sơ mi</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">Thời Trang Trẻ Em</H4>
                <a href="?mod=page&act=category&id=" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/treem_vay_1.webp" alt="">
                    </a>
                    <p><b>Váy trẻ em</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/treem_vay_1.webp" alt="">
                    </a>
                    <p><b>Váy trẻ em</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/treem_vay_1.webp" alt="">
                    </a>
                    <p><b>Váy trẻ em</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=">
                        <img class="img-fluid mb-2 rounded-top" src="img/treem_vay_1.webp" alt="">
                    </a>
                    <p><b>Váy trẻ em</b></p>
                    <span class="text-danger">Giá: 300000 đ </span> <span> <del> 350000 đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
            </div>
        </div>

        
    </main>
<?php
   include("./products.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible"
         content="IE=edge">
   <meta name="viewport"
         content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title>KaisongOnline</title>
   <link href="./assets/plugins/bootstrap-5.0.2/css/bootstrap.min.css"
         rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;700&display=swap"
         rel="stylesheet">
   <style>
      html,
      body {
         font-family: 'Sarabun', Arial, Helvetica, sans-serif;
      }

      @media screen and (max-width: 576px) {
         .card-prod-image {
            height: auto;
         }
      }
   </style>

</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
         <a class="navbar-brand"
            href="#">KaisongOnline</a>
         <button class="navbar-toggler"
                 type="button"
                 data-bs-toggle="collapse"
                 data-bs-target="#navbarNavAltMarkup"
                 aria-controls="navbarNavAltMarkup"
                 aria-expanded="false"
                 aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse"
              id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-link active"
                  aria-current="page"
                  href="#">หน้าแรก</a>
               <a class="nav-link"
                  href="#">สินค้าของเรา</a>
               <a class="nav-link"
                  href="#">ติดต่อเรา</a>
            </div>
         </div>
      </div>
   </nav>

   <section class="my-3">
      <div class="container">
         <div class="row">
            <div class="col-md-3 text-center">
               <h2>LOGO</h2>
            </div>
            <div class="col-md-9 text-center">
               <form class="row">
                  <div class="col-md-12">
                     <div class="input-group">
                        <input type="text"
                               class="form-control"
                               placeholder="ค้นหาสินค้าตามชื่อสินค้า"
                               aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary"
                                type="button"
                                id="button-addon2">ค้นหา</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>

   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <div class="alert alert-secondary fw-bold"
                          role="alert">
                        <h5 class="mb-0">หมวดหมู่สินค้า</h5>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 mb-4">
                     <div class="list-group">
                        <a class="list-group-item list-group-item-action active"
                           aria-current="true">
                           กระท้อน
                        </a>
                        <a class="list-group-item list-group-item-action">กล้วยเฟอี</a>
                        <a class="list-group-item list-group-item-action">กะทกรก</a>
                        <a class="list-group-item list-group-item-action">กัดลิ้น</a>
                        <a class="list-group-item list-group-item-action">กีวี (พืช)</a>
                        <a class="list-group-item list-group-item-action">เกรปฟรุต</a>
                        <a class="list-group-item list-group-item-action">เกาลัดญี่ปุ่น</a>
                        <a class="list-group-item list-group-item-action">เกาลัดไทย</a>
                        <a class="list-group-item list-group-item-action">แก้วมังกร</a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 mb-4">
                     <div class="card text-dark bg-light">
                        <div class="card-body">
                           <a href="https://track.thailandpost.co.th/"
                              target="_blank">
                              <img src="./assets/images/ems.jpeg"
                                   class="img-fluid">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 mb-4">
                     <div class="card text-dark bg-light">
                        <div class="card-body">
                           <h1 class="text-center">Box 2</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 mb-4">
                     <div class="card text-dark bg-light">
                        <div class="card-body">
                           <h1 class="text-center">Box 3</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 mb-4">
                     <div class="card text-dark bg-light">
                        <div class="card-body">
                           <h1 class="text-center">Box 4</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-9">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <div class="alert alert-secondary fw-bold"
                          role="alert">
                        <h5 class="mb-0">สินค้าที่ขายดี</h5>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <?php foreach ($data as $key => $value) {?>
                  <div class="col-6 col-sm-6 col-md-4 mb-4">
                     <div class="card">
                        <img width="300"
                             height="300"
                             src="<?php echo $value['image'];?>"
                             class="card-img-top card-prod-image">
                        <div class="card-body">
                           <h5 class="card-title fw-bold"><?php echo $value['name'];?></h5>
                           <p class="card-text"><?php echo $value['description'];?></p>
                           <div class="d-md-flex justify-content-between">
                              <h3 class="text-lg text-price"><?php echo number_format($value['price']+5);?> ฿</h3>
                              <button type="button"
                                      class="btn btn-success btn-order-confirm"
                                      data-bs-toggle="modal"
                                      data-bs-target="#staticBackdrop">สั่งซื้อสินค้า</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php }?>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-end">
                     <li class="page-item disabled">
                        <a class="page-link"
                           href="#"
                           tabindex="-1"
                           aria-disabled="true">ก่อนหน้า</a>
                     </li>
                     <li class="page-item"><a class="page-link"
                           href="#">1</a></li>
                     <li class="page-item"><a class="page-link"
                           href="#">2</a></li>
                     <li class="page-item"><a class="page-link"
                           href="#">3</a></li>
                     <li class="page-item">
                        <a class="page-link"
                           href="#">ถัดไป</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </section>

   <!-- PopUp ยืนยันการสั่งซื้อสินค้า -->
   <div class="modal fade"
        id="staticBackdrop"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
      <div class="modal-dialog">
         <form method="POST"
               action="https://nakomah.com/linenotify/notify.php">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title"
                      id="staticBackdropLabel">ยืนยันการสั่งซื้อสินค้า</h5>
                  <button type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-12 text-center">
                        <img width="300"
                             height="300"
                             src="">
                        <h4 class="my-4">&nbsp;</h4>
                        <input type="hidden"
                               name="product">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-md-7">
                        <label class="form-label">ชื่อ-สกุล (ลูกค้า)</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="ระบุชื่อ-สกุล">
                     </div>
                     <div class="col-md-5">
                        <label class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text"
                               name="tel"
                               class="form-control"
                               placeholder="ระบุเบอร์โทรศัพท์">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-md-12">
                        <label class="form-label">ที่อยู่สำหรับจัดส่งสินค้า</label>
                        <input type="text"
                               name="address"
                               class="form-control"
                               placeholder="ระบุที่อยู่สำหรับจัดส่งสินค้า">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-md-12">
                        <label class="form-label">เพิ่มเติม</label>
                        <textarea class="form-control"
                                  name="remark"
                                  rows="3"
                                  placeholder="ระบุรายละเอียดเพิ่มเติม"></textarea>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button"
                          class="btn btn-secondary"
                          data-bs-dismiss="modal">ปิด</button>
                  <button type="submit"
                          class="btn btn-success">ยืนยัน</button>
               </div>
            </div>
         </form>
      </div>
   </div>

   <script src="./assets/plugins/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/plugins/jquery-3.5.1.min.js"></script>
   <script type="text/javascript">
      $(function () {
         $('.btn-order-confirm').on('click', function () {
            var elm = $(this).parent().parent();
            var images = elm.prev().attr('src');
            var title = elm.find('.card-title').text();
            var price = elm.find('.text-price').text();

            var elmModal = $('.modal-body');
            elmModal.find('img').attr('src', images).next().text(`${title} / ${price}`);
            $('input[name="product"]').val(`${title} / ${price}`);
         });
      });
   </script>
</body>

</html>
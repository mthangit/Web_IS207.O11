@include('user.layouts.template_header_logged')
<div class="page-navigation">
    <ul class="breadcrumb">
        <li><a href="">Trang chủ</a></li>
        <li>Thông tin liên hệ</li>
    </ul>
</div>

<div class="contact-main-container">
    <h1 class="section-txt-title txt-center" style="font-weight: 600; margin-top: 30px;">Thông tin liên hệ</h1>
    <div class="form-contact-container">
        <span>Nếu có thắc mắc, quý khách vui lòng liên hệ hotline qua số <a href="tel:0123456789" style="color: black; font-weight: 500" class="cyan-link">0123456789</a> hoặc gửi email đến <a href="mailto:pingping@gmail.com" style="color: black; font-weight:500" class="cyan-link">pingping@gmail.com</a>.</span><br>
        <span style="text-align: justify; text-indent: 6px;">Nếu quý khách cần được giải đáp thắc mắc hoặc hỗ trợ thêm, vui lòng điền các thông tin, nhập mô tả thắc mắc muốn gửi đến chúng tôi vào biểu mẫu sau. PING Cosmetics sẽ phản hồi trong thời gian sớm nhất.</span>
        <div class="form-contact grid-2-col" style="gap: 6px !important">
            <form id="contactForm" class="row">
                <div class=" col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="txt-bold">Tiêu đề <span class="text-danger">*</span></label>
                        <input name="title" id="contact_title" type="text" class="form-control" placeholder="Tiêu đề" required="">
                    </div>
                </div>

                <div class=" col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="txt-bold">Chi tiết <span class="text-danger">*</span></label>
                        <textarea name="detail" id="contact_detail" class="form-control" placeholder="Hãy mô tả chi tiết" required=""></textarea>
                    </div>
                </div>

                <div class=" col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="txt-bold">Tên <span class="text-danger">*</span></label>
                        <input name="fullname" id="contact_fullname" type="text" placeholder="Nhập đầy đủ họ và tên" class="form-control" required="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="form-group">
                        <label class="txt-bold">Số điện thoại <span class="text-danger">*</span></label>
                        <input name="phone" id="contact_phone" placeholder="Số điện thoại" type="tel" class="form-control" required="">
                    </div>
                </div>

                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="form-group">
                        <label class="txt-bold">Email <span class="text-danger">*</span></label>
                        <input name="email" id="contact_email" placeholder="Email liên hệ" type="email" class="form-control" required="">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 space_bottom_20">
                    <div class="form-group">
                        <button class="btn-submit-contact">Gửi yêu cầu</button>
                    </div>
                </div>

            </form>
            <img src="https://img.freepik.com/free-vector/customer-support-flat-illustration_23-2148889375.jpg" alt="" width="350px">
        </div>
    </div>
</div>
@include('user.layouts.template_footer')

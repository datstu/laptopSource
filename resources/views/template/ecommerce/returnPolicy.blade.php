@include('template.ecommerce.header') 
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{URL::to('/chinh-sach-hoan-tra')}}">Chính sách & Điều khoản</a></li>
            <li class="breadcrumb-item active">Chính sách đổi trả hàng</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->
<div class="featured-product product"  >
<div class="section-header" style="color: #000;">
        NGA Thinkoad đang cập nhật. Xin cảm ơn.
        </div>
</div>
<style>@media only screen and (max-width: 426px){
    .bottom-bar {
        padding: 0;
    margin-bottom: 30px;
}}</style>
@include('template.ecommerce.footer')
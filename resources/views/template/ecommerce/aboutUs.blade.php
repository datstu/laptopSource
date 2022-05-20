@include('template.ecommerce.header') 
<style>@media only screen and (max-width: 426px){
    .bottom-bar {
        padding: 0;
    margin-bottom: 30px;
}}</style>
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{URL::to('/ve-chung-toi')}}">Giới thiệu</a></li>
            <li class="breadcrumb-item active">Về chúng tôi</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->
<div class="featured-product product"  >
    <div class="container-fluid">
        <div class="section-header" style="color: #000;">
        <p style="    text-align: center;">Nga Thinkpad đang cập nhật. Xin cảm ơn.</p>
        </div>
        
    </div>
</div>
@include('template.ecommerce.footer')
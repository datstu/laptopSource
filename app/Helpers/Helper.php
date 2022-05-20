<?php


namespace App\Helpers;
use App\CategoryProduct;

class Helper
{
    public static function getListCategory()
    {
    	return CategoryProduct::get();
    }

    public static function getBaseUrl(){
        if(isset($_SERVER['HTTPS'])){
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }
        else{
            $protocol = 'http';
        }
        return $protocol . "://" . $_SERVER['HTTP_HOST'];
    }

    public static function renderCatalog($featureProducts, $title = 0, $categoryId=0, $route123 = ''){
   
        $resultString = '';
   
            $resultString = '<div class="featured-product product"  >
            <div class="container-fluid">
                <div class="section-header">
                    <h2 class="customer-h2 ">'.$title.'</h2><span><a href='.'"/san-pham-theo-danh-muc-'.$categoryId.'"'.'>Xem tất cả';
                      if(count($featureProducts)>3){ $resultString.=' (10+)';}
                      $resultString.= '</a></span></div>'
                // {{-- <div class="row align-items-center product-slider product-slider-4"> --}}
                    .'<div class="row align-items-center product-slider ">';
                    foreach ($featureProducts as $item)  {    
                        $resultString.='<div class="col-lg-3">
                        <div class="product-item">';
                        if($item->type == 2 && $route123 != 'home' ){
                            $resultString.= '<div class="label-sales ">Xả</div>';
                        }
                       
                               
                            if($item->price_old) {
                                $price = (int)$item->price;
                                $priceOld = (int)$item->price_old;
                                $result =  100 - $price*100 / $priceOld;
                                $resultString.='<div class="label-top ">- '.round($result).'%</div>';
                            }
                                
                                
                                
                                
                                $resultString.=' <div class="product-image">
                                <a href="'.Helper::getBaseUrl().'/chi-tiet-san-pham-'.$item->productID.'">
                                    <img class="img-lea"'
                                    .'src="'. Helper::getBaseUrl(). '/public/uploads/product/'.$item->image.'" alt="'.$item->productName.'">
                                </a>
                                <div class="product-action">
                                    <form>
                                        @csrf
                                        <input type="hidden" class="cart_product_id_'.$item->productID.'" value="{{'.$item->productID.'}}">
                                        <input type="hidden" class="cart_product_name_'.$item->productID.'}}" value="{{'.$item->productName.'}}">
                                        <input type="hidden" class="cart_product_price_{{'.$item->productID.'}}" value="{{'.$item->price.'}}">
                                        <input type="hidden" class="cart_product_image_{{'.$item->productID.'}}" value="{{'.$item->image.'}}">
                                        
                                    <a  class="add-to-cart-lea" data-id_product="{{'.$item->productID.'}}"><i class="fa fa-cart-plus"></i></a>
                                </form>
                                    <a href="'.Helper::getBaseUrl().'/chi-tiet-san-pham-'.$item->productID.'"><i class="fa fa-heart"></i></a>
                                    <a href="'.Helper::getBaseUrl().'/chi-tiet-san-pham-'.$item->productID.'"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                           
                                <!--customer product item-->
                         <a href="'.Helper::getBaseUrl().'/chi-tiet-san-pham-'.$item->productID.'"> '
                            .'<div class="dez-info p-t20 "> 
                            <div class="m-b15 price"> 
                                <strong class="item_new_price txt_20 left font">'.number_format((int)$item->price).'đ</strong>'; 
                                if($item->price_old){
                                    $resultString.='<span class="item_old_price txt_20 right font">'.number_format((int)$item->price_old).' ₫</span>';
                                }
                                
                                $resultString.=       '</div> 
                            <div class="brand_product txt_color_1 ">
                                <div class=" item_name_lea txt_18">'.$item->productName.'</div>
                            </div> 
                            <h2 class="  name_product"> 
                                <div class="item_name font">'.$item->moTaNgan.'</div> 
                            </h2> 
                            <div class=" rate font txt_16"> 
                                <div class="block_star start_small"> 
                                    <div style="width:96%;" class="number_start"> </div> 
                                    <div class="start_background"></div> 
                                </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16"><img style="width: unset;display: unset; " src="public/frontend/images/css/cart.svg" alt="" draggable="false" class="loading" data-was-processed="true"> 1.581</span>
                            </div>
                        </div>
                        </a>
                                 <!--end customer product item-->
                           
                                </div>
                            </div>';
                                    }
                                    $resultString.='  </div>';
                                    if($title == 'Tất cả sản phẩm'){
                                        $resultString.= $featureProducts->links(("pagination::bootstrap-4"));
                                        
                                    }
                                    $resultString.= '</div>
                                    
                </div>';
            
        
            return  $resultString;
    }
}
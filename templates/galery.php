
<script type="text/javascript">
    jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});

</script>

<style type="text/css">
  .galery-size{
        max-width: 83%;
  }
</style>

<div class="container">
    <div id="main_area" class="galery-size">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-16">
                            <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories16.jpg">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories01.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories02.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories03.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories04.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories05.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories06.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories07.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories08.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories09.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories10.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories11.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-12"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories12.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-13"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories13.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-14"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories14.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-15"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories15.jpg"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="16">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories16.jpg"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories01.jpg"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories02.jpg"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories03.jpg"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories04.jpg"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories05.jpg"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories06.jpg"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories07.jpg"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories08.jpg"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories09.jpg"></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories10.jpg"></div>
                                    
                                    <div class="item" data-slide-number="11">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories11.jpg"></div>
                                    
                                    <div class="item" data-slide-number="12">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories12.jpg"></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories13.jpg"></div>

                                    <div class="item" data-slide-number="14">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories14.jpg"></div>

                                    <div class="item" data-slide-number="15">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories15.jpg"></div>
                                </div>
                                <!-- Carousel nav -->
                                <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>
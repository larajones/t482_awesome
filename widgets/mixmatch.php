<script>

	jQuery(document).ready(function ($) {
		var options = {
			$AutoPlay: false,						//[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
			$AutoPlaySteps: 1,						//[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
			$Idle: 1000,							//[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
			$PauseOnHover: 1,						//[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
			$Loop: 1,								//[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
			
			$ArrowKeyNavigation: true,   			//[Optional] Allows keyboard (arrow key) navigation or not, default value is false
			$SlideDuration: 500,					//[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
			$MinDragOffsetToSlide: 20,				//[Optional] Minimum drag offset to trigger slide , default value is 20
			$SlideWidth: 500,						//[Optional] Width of every slide in pixels, default value is width of 'slides' container
			$SlideHeight: 400,						//[Optional] Height of every slide in pixels, default value is height of 'slides' container
			$SlideSpacing: 0, 						//[Optional] Space between each slide in pixels, default value is 0
			$Cols: 1,								//[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
			$ParkingPosition: 0,					//[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
			$UISearchMode: 1,						//[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
			$PlayOrientation: 1,					//[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
			$DragOrientation: 1,					//[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

			$ThumbnailNavigatorOptions: {
				$Class: $JssorThumbnailNavigator$,	//[Required] Class to create thumbnail navigator instance
				$ChanceToShow: 2,					//[Required] 0 Never, 1 Mouse Over, 2 Always
				$Loop: 2,							//[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
				$AutoCenter: 3,						//[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
				$Rows: 1,							//[Optional] Specify lanes to arrange thumbnails, default value is 1
				$SpacingX: 0,						//[Optional] Horizontal space between each thumbnail in pixel, default value is 0
				$SpacingY: 2,						//[Optional] Vertical space between each thumbnail in pixel, default value is 0
				$Cols: 6,							//[Optional] Number of pieces to display, default value is 1
				$ParkingPosition: 1,				//[Optional] The offset position to park thumbnail
				$Orientation: 2,					//[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
				$NoDrag: false						//[Optional] Disable drag or not, default value is false
		}
	};

	var jssor_slider1 = new $JssorSlider$("slider1_container", options);
	var jssor_slider2 = new $JssorSlider$("slider2_container", options);

	//responsive code begin
	function ScaleSlider() {
		var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
			if (parentWidth) {
				var sliderWidth = parentWidth;
	
				//keep the slider width no more than 810
				sliderWidth = Math.min(sliderWidth, 500);
				//sliderHeight = Math.min(sliderHeight, 300);
	
				jssor_slider1.$ScaleWidth(sliderWidth);
				//jssor_slider1.$ScaleHeight(sliderHeight);
				jssor_slider2.$ScaleWidth(sliderWidth);
				//jssor_slider2.$ScaleHeight(sliderHeight);
			}
			else
				window.setTimeout(ScaleSlider, 10);
			}
			
		ScaleSlider();
		
		$(window).bind("load", ScaleSlider);
		$(window).bind("resize", ScaleSlider);
		$(window).bind("orientationchange", ScaleSlider);//responsive code end
	});

</script>

<!--#region ThumbnailNavigator Skin Begin -->
<style>
	/* jssor slider thumbnail navigator skin 11 css */
	/*.jssort11 .p            (normal)
	.jssort11 .p:hover      (normal mouseover)
	.jssort11 .pav          (active)
	.jssort11 .pav:hover    (active mouseover)
	.jssort11 .pdn          (mousedown)*/

	.jssort11 {
		position: absolute;
		width: 200px;
		height: 500px;
		font-family: Arial, Helvetica, sans-serif;
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	
	.jssort11 .p {
		position: absolute;
		width: 200px;
		height: 75px;
		background: #181818;
	}

	.jssort11 .tp {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		border: none;
	}
	
	.jssort11 .i, .jssort11 .pav:hover .i {
		position: absolute;
		top: 3px;
		left: 3px;
		width: 60px;
		height: 30px;
		border: white 1px dashed;
	}
	
	* html .jssort11 .i {
		width /**/: 62px;
		height /**/: 32px;
	}
	
	.jssort11 .pav .i {
		border: black 1px solid;
	}
	
	.jssort11 .t, .jssort11 .pav:hover .t {
		position: absolute;
		top: 3px;
		left: 68px;
		width: 129px;
		height: 32px;
		line-height: 32px;
		text-align: center;
		color: #fc9835;
		font-size: 13px;
		font-weight: 700;
	}
	
	.jssort11 .pav .t, .jssort11 .p:hover .t {
		color: #fc9835;
	}
	
	.jssort11 .c, .jssort11 .pav:hover .c {
		position: absolute;
		top: 38px;
		left: 3px;
		width: 197px;
		height: 31px;
		line-height: 31px;
		color: #fc9835;
		font-size: 11px;
		font-weight: 400;
		overflow: hidden;
	}
	
	.jssort11 .pav .c, .jssort11 .p:hover .c {
		color: #fc9835;
	}
	
	.jssort11 .t, .jssort11 .c {
		transition: color 2s;
		-moz-transition: color 2s;
		-webkit-transition: color 2s;
		-o-transition: color 2s;
	}
	
	.jssort11 .p:hover .t, .jssort11 .pav:hover .t, .jssort11 .p:hover .c, .jssort11 .pav:hover .c {
		transition: none;
		-moz-transition: none;
		-webkit-transition: none;
		-o-transition: none;
	}
	
	.jssort11 .p:hover, .jssort11 .pav:hover {
		background: #333;
	}
	
	.jssort11 .pav, .jssort11 .p.pdn {
		background: #000;
	}
</style>


<div class="row">
	<div class="col-md-4 col-md-offset-4">

		<!-- Jssor Slider Begin -->
		<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
		<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 700px; height: 400px; background: #ffffff; overflow: hidden; ">
	
			<!-- Loading Screen -->
			<div u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
				<div style="position: absolute; display: block; background: url(../images/loading.gif) no-repeat center center;
					top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
			</div>

			<!-- Slides Container for Tops-->
			<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 400px; overflow: hidden;">

				<div>
					<img u="image" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=2956727" />
					<div u="thumb">
						<img class="i" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=2956727" /><div class="t">Banner Rotator</div>
						<div class="c">360+ touch swipe slideshow effects</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=996156" />
					<div u="thumb">
						<img class="i" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=996156" /><div class="t">Image Gallery</div>
						<div class="c">Image gallery with thumbnail navigation</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=1303402" />
					<div u="thumb">
						<img class="i" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=1303402" /><div class="t">Carousel</div>
						<div class="c">Touch swipe, mobile device optimized</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=39896702" />
					<div u="thumb">
						<img class="i" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=39896702" /><div class="t">Themes</div>
						<div class="c">30+ professional themems + growing</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=3949918" />
					<div u="thumb">
						<img class="i" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=3949918" /><div class="t">Tab Slider</div>
						<div class="c">Tab slider with auto play options</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=2956727" />
					<div u="thumb">
						<img class="i" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=2956727" /><div class="t">Banner Rotator</div>
						<div class="c">360+ touch swipe slideshow effects</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=996156" />
					<div u="thumb">
						<img class="i" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=996156" /><div class="t">Image Gallery</div>
						<div class="c">Image gallery with thumbnail navigation</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=1303402" />
					<div u="thumb">
						<img class="i" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=1303402" /><div class="t">Carousel</div>
						<div class="c">Touch swipe, mobile device optimized</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=39896702" />
					<div u="thumb">
						<img class="i" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=39896702" /><div class="t">Themes</div>
						<div class="c">30+ professional themems + growing</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=3949918" />
					<div u="thumb">
						<img class="i" src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=3949918" /><div class="t">Tab Slider</div>
						<div class="c">Tab slider with auto play options</div>
					</div>
				</div>
			</div>

			<div u="thumbnavigator" class="jssort11" style="left: 475px; top:0px;">
				<p class="text-center"><strong><h4>TOPS</h4></strong></p>
				<div u="slides" style="cursor: default;"><!-- Thumbnail Item Skin Begin -->
					<div u="prototype" class="p" style="top: 0; left: 0;">
						<div u="thumbnailtemplate" class="tp"></div>
					</div>
				</div><!-- Thumbnail Item Skin End -->
			</div><!--#endregion ThumbnailNavigator Skin End -->
	</div><!-- Jssor Slider End -->
	</div>
</div>
<!-- End of Row1 -->

<p></p>

<div class="row">
	<div class="col-md-4 col-md-offset-4">

	<!-- Jssor Slider Begin -->
	<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
		<div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 700px; height: 400px; background: #ffffff; overflow: hidden; ">

			<!-- Loading Screen -->
			<div u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
				
				<div style="position: absolute; display: block; background: url(../images/loading.gif) no-repeat center center;
					top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
			</div>

			
			<!-- Slides Container for Bottoms -->
			<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 400px; overflow: hidden;">
				<div>
					<img u="image" src="http://images.motorcycle-superstore.com/productimages/300/2010-Icon-Womens-Hella-Leather-Pants-Black.jpg" />
					<div u="thumb">
						<img class="i" src="http://images.motorcycle-superstore.com/productimages/300/2010-Icon-Womens-Hella-Leather-Pants-Black.jpg" /><div class="t">Banner Rotator</div>
						<div class="c">360+ touch swipe slideshow effects</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://pimg.tradeindia.com/00899417/b/1/Women-s-Leather-Pants.jpg" />
					<div u="thumb">
						<img class="i" src="http://pimg.tradeindia.com/00899417/b/1/Women-s-Leather-Pants.jpg" /><div class="t">Image Gallery</div>
						<div class="c">Image gallery with thumbnail navigation</div>
					</div>
				</div>

				<div>
					<img u="image" src="https://www.fontanasports.com/prodimages/26798-DEFAULT-m.jpg" />
					<div u="thumb">
						<img class="i" src="https://www.fontanasports.com/prodimages/26798-DEFAULT-m.jpg" /><div class="t">Carousel</div>
						<div class="c">Touch swipe, mobile device optimized</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.thelittlebazaar.com/m/Clothing/2942-classy-navy-blue-womens-skirt.jpg" />
					<div u="thumb">
						<img class="i" src="http://www.thelittlebazaar.com/m/Clothing/2942-classy-navy-blue-womens-skirt.jpg" /><div class="t">Themes</div>
						<div class="c">30+ professional themems + growing</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.missstrawberry.com/image/cache/catalog/Women/W-J/MWJ0002/MWJ0002C-750x750.jpg" />
					<div u="thumb">
						<img class="i" src="http://www.missstrawberry.com/image/cache/catalog/Women/W-J/MWJ0002/MWJ0002C-750x750.jpg" /><div class="t">Tab Slider</div>
						<div class="c">Tab slider with auto play options</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://images.motorcycle-superstore.com/productimages/300/2010-Icon-Womens-Hella-Leather-Pants-Black.jpg" />
					<div u="thumb">
						<img class="i" src="http://images.motorcycle-superstore.com/productimages/300/2010-Icon-Womens-Hella-Leather-Pants-Black.jpg" /><div class="t">Banner Rotator</div>
						<div class="c">360+ touch swipe slideshow effects</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://pimg.tradeindia.com/00899417/b/1/Women-s-Leather-Pants.jpg" />
					<div u="thumb">
						<img class="i" src="http://pimg.tradeindia.com/00899417/b/1/Women-s-Leather-Pants.jpg" /><div class="t">Image Gallery</div>
						<div class="c">Image gallery with thumbnail navigation</div>
					</div>
				</div>

				<div>
					<img u="image" src="https://www.fontanasports.com/prodimages/26798-DEFAULT-m.jpg" />
					<div u="thumb">
						<img class="i" src="https://www.fontanasports.com/prodimages/26798-DEFAULT-m.jpg" /><div class="t">Carousel</div>
						<div class="c">Touch swipe, mobile device optimized</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.thelittlebazaar.com/m/Clothing/2942-classy-navy-blue-womens-skirt.jpg" />
					<div u="thumb">
						<img class="i" src="http://www.thelittlebazaar.com/m/Clothing/2942-classy-navy-blue-womens-skirt.jpg" /><div class="t">Themes</div>
						<div class="c">30+ professional themems + growing</div>
					</div>
				</div>

				<div>
					<img u="image" src="http://www.missstrawberry.com/image/cache/catalog/Women/W-J/MWJ0002/MWJ0002C-750x750.jpg" />
					<div u="thumb">
						<img class="i" src="http://www.missstrawberry.com/image/cache/catalog/Women/W-J/MWJ0002/MWJ0002C-750x750.jpg" /><div class="t">Tab Slider</div>
						<div class="c">Tab slider with auto play options</div>
					</div>
				</div>
			</div>

			<div u="thumbnavigator" class="jssort11" style="left: 475px; top:0px;">
				<p class="text-center"><strong><h4>BOTTOMS</h4></strong></p>
				<div u="slides" style="cursor: default;"><!-- Thumbnail Item Skin Begin -->
					<div u="prototype" class="p" style="top: 0; left: 0;">
						<div u="thumbnailtemplate" class="tp"></div>
					</div>
				</div><!-- Thumbnail Item Skin End -->
			</div><!--#endregion ThumbnailNavigator Skin End -->
		</div><!-- Jssor Slider End -->
	</div><!-- End of Col-md-4-->
</div><!-- End of Row2 -->
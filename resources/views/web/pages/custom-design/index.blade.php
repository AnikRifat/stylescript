
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>TShirt Editor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('') }}assets/design/js/fabric.js"></script>


	<!-- Le styles -->
	<link type="text/css" rel="stylesheet" href="{{ asset('') }}assets/design/css/jquery.miniColors.css" />
	<link href="{{ asset('') }}assets/design/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('') }}assets/design/css/bootstrap-responsive.min.css" rel="stylesheet">
	<script type="text/javascript">
	</script>
	<style type="text/css">
		.footer {
			padding: 70px 0;
			margin-top: 70px;
			border-top: 1px solid #E5E5E5;
			background-color: whiteSmoke;
		}

		body {
			padding-top: 60px;
		}

		.color-preview {
			border: 1px solid #CCC;
			margin: 2px;
			zoom: 1;
			vertical-align: top;
			display: inline-block;
			cursor: pointer;
			overflow: hidden;
			width: 20px;
			height: 20px;
		}

		.rotate {
			-webkit-transform: rotate(90deg);
			-moz-transform: rotate(90deg);
			-o-transform: rotate(90deg);
			/* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
			-ms-transform: rotate(90deg);
		}

		.Arial {
			font-family: "Arial";
		}

		.Helvetica {
			font-family: "Helvetica";
		}

		.MyriadPro {
			font-family: "Myriad Pro";
		}

		.Delicious {
			font-family: "Delicious";
		}

		.Verdana {
			font-family: "Verdana";
		}

		.Georgia {
			font-family: "Georgia";
		}

		.Courier {
			font-family: "Courier";
		}

		.ComicSansMS {
			font-family: "Comic Sans MS";
		}

		.Impact {
			font-family: "Impact";
		}

		.Monaco {
			font-family: "Monaco";
		}

		.Optima {
			font-family: "Optima";
		}

		.HoeflerText {
			font-family: "Hoefler Text";
		}

		.Plaster {
			font-family: "Plaster";
		}

		.Engagement {
			font-family: "Engagement";
		}
	</style>
</head>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
    <header style="
    text-align: center;
">
        <a class="header-logo__logo" href="{{ route('index') }}"><img style="margin: 0px auto"
            src="{{ asset('') }}uploads/content/{{ $content->website_logo }}" width="296" height="64"
            alt="Logo"></a>
    </header>

	<div class="container">
		<section id="typography">
			<div class="page-header">
				<h1>Customize T-Shirt</h1>
			</div>

			<!-- Headings & Paragraph Copy -->
			<div class="row">
				<div class="span3">

					<div class="tabbable"> <!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">T-Shirt Options</a></li>
							<li><a href="#tab2" data-toggle="tab">Gravatar</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<div class="well">
									<!--					      	<h3>Tee Styles</h3>-->
									<!--						      <p>-->
									<select id="designtype">
										<option value="{{ asset('') }}assets/design/img/crew_front.png" selected="selected">Short Sleeve Shirts
										</option>
										<option value="{{ asset('') }}assets/design/img/mens_longsleeve_front.png">Long Sleeve Shirts</option>
										<option value="{{ asset('') }}assets/design/img/mens_hoodie_front.png">Hoodies</option>
										<option value="{{ asset('') }}assets/design/img/mens_tank_front.png">Tank tops</option>
									</select>
									<!--						      </p>-->
								</div>
								<div class="well">
									<ul class="nav">
										<li class="color-preview" title="White" style="background-color:#ffffff;"></li>
										<li class="color-preview" title="Dark Heather"
											style="background-color:#616161;"></li>
										<li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
										<li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;">
										</li>
										<li class="color-preview" title="Black" style="background-color:#222222;"></li>
										<li class="color-preview" title="Heather Orange"
											style="background-color:#fc8d74;"></li>
										<li class="color-preview" title="Heather Dark Chocolate"
											style="background-color:#432d26;"></li>
										<li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
										<li class="color-preview" title="Chesnut" style="background-color:#806355;">
										</li>
										<li class="color-preview" title="Dark Chocolate"
											style="background-color:#382d21;"></li>
										<li class="color-preview" title="Citrus Yellow"
											style="background-color:#faef93;"></li>
										<li class="color-preview" title="Avocado" style="background-color:#aeba5e;">
										</li>
										<li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
										<li class="color-preview" title="Irish Green" style="background-color:#1f6522;">
										</li>
										<li class="color-preview" title="Scrub Green" style="background-color:#13afa2;">
										</li>
										<li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;">
										</li>
										<li class="color-preview" title="Heather Sapphire"
											style="background-color:#15aeda;"></li>
										<li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
										<li class="color-preview" title="Antique Sapphire"
											style="background-color:#0f77c0;"></li>
										<li class="color-preview" title="Heather Navy"
											style="background-color:#3469b7;"></li>
										<li class="color-preview" title="Cherry Red" style="background-color:#c50404;">
										</li>
									</ul>
								</div>
							</div>
							<div class="tab-pane" id="tab2">
								<div class="well">
									<div class="input-append">
										<input class="span2" id="text-string" type="text"
											placeholder="add text here..."><button id="add-text" class="btn"
											title="Add text"><i class="icon-share-alt"></i></button>
										<hr>
									</div>
									<div id="avatarlist">
										<img style="cursor:pointer;" class="img-polaroid" src="{{ asset('') }}assets/design/img/invisibleman.jpg">
										</div>
									<div>
										<hr>
										<form action="" method="post" enctype="multipart/form-data">
											<input type="file" name="fileToUpload" id="fileToUpload">
											<input class="btn btn-primary" type="submit" value="Upload Custom Image"
												name="submit">
										</form>

									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="span6">
					<div align="center" style="min-height: 32px;">
						<div class="clearfix">
							<div class="btn-group inline pull-left" id="texteditor" style="display:none">
								<button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown"
									title="Font Style"><i class="icon-font"
										style="width:19px;height:19px;"></i></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
									<li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a>
									</li>
									<li><a tabindex="-1" href="#" onclick="setFont('Helvetica');"
											class="Helvetica">Helvetica</a></li>
									<li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');"
											class="MyriadPro">Myriad Pro</a></li>
									<li><a tabindex="-1" href="#" onclick="setFont('Delicious');"
											class="Delicious">Delicious</a></li>
									<li><a tabindex="-1" href="#" onclick="setFont('Verdana');"
											class="Verdana">Verdana</a></li>
									<li><a tabindex="-1" href="#" onclick="setFont('Georgia');"
											class="Georgia">Georgia</a></li>
									<li><a tabindex="-1" href="#" onclick="setFont('Courier');"
											class="Courier">Courier</a></li>
									<li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');"
											class="ComicSansMS">Comic Sans MS</a></li>
									<li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a>
									</li>
									<li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a>
									</li>
									<li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a>
									</li>
									<li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');"
											class="Hoefler Text">Hoefler Text</a></li>
									<li><a tabindex="-1" href="#" onclick="setFont('Plaster');"
											class="Plaster">Plaster</a></li>
									<li><a tabindex="-1" href="#" onclick="setFont('Engagement');"
											class="Engagement">Engagement</a></li>
								</ul>
								<button id="text-bold" class="btn" data-original-title="Bold"><img
										src="{{ asset('') }}assets/design/img/font_bold.png" height="" width=""></button>
								<button id="text-italic" class="btn" data-original-title="Italic"><img
										src="{{ asset('') }}assets/design/img/font_italic.png" height="" width=""></button>
								<button id="text-strike" class="btn" title="Strike" style=""><img
										src="{{ asset('') }}assets/design/img/font_strikethrough.png" height="" width=""></button>
								<button id="text-underline" class="btn" title="Underline" style=""><img
										src="{{ asset('') }}assets/design/img/font_underline.png"></button>
								<a class="btn" href="#" rel="tooltip" data-placement="top"
									data-original-title="Font Color"><input type="hidden" id="text-fontcolor"
										class="color-picker" size="7" value="#000000"></a>
								<a class="btn" href="#" rel="tooltip" data-placement="top"
									data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor"
										class="color-picker" size="7" value="#000000"></a>
								<!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
							</div>
							<div class="pull-right" align="" id="imageeditor" style="display:none">
								<div class="btn-group">
									<button class="btn" id="bring-to-front" title="Bring to Front"><i
											class="icon-fast-backward rotate" style="height:19px;"></i></button>
									<button class="btn" id="send-to-back" title="Send to Back"><i
											class="icon-fast-forward rotate" style="height:19px;"></i></button>
									<button id="flip" type="button" class="btn" title="Show Back View"><i
											class="icon-retweet" style="height:19px;"></i></button>
									<button id="remove-selected" class="btn" title="Delete selected item"><i
											class="icon-trash" style="height:19px;"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!--	EDITOR      -->
					<button id="flipback" type="button" class="btn" title="Rotate View"><i class="icon-retweet"
							style="height:19px;"></i></button>
					<div id="shirtDiv" class="page"
						style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255);">
						<img name="tshirtview" id="tshirtFacing" src="{{ asset('') }}assets/design/img/crew_front.png">
						<div id="drawingArea"
							style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">
							<canvas id="tcanvas" width=200 height="400" class="hover"
								style="-webkit-user-select: none;"></canvas>
						</div>
					</div>
					<!--					<div id="shirtBack" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255); display:none;">-->
					<!--						<img src="{{ asset('') }}assets/design/img/crew_back.png"></img>-->
					<!--						<div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">					-->
					<!--							<canvas id="backCanvas" width=200 height="400" class="hover" style="-webkit-user-select: none;"></canvas>-->
					<!--						</div>-->
					<!--					</div>						-->

					<!--	/EDITOR		-->
				</div>

				<div class="span3">
					<div class="well">
						<h3>Select Sizes</h3>
						<p>
						<table class="table">
							<tr>
								<td><input type="checkbox">&emsp;S</td>
								<td align="right"><input min="0" style="width: 40px;" value="1" type="number"></td>
							</tr>
							<tr>
								<td><input type="checkbox">&emsp;M</td>
								<td align="right"><input min="0" style="width: 40px;" placeholder="1" type="number">
								</td>
							</tr>
							<tr>
								<td><input type="checkbox">&emsp;L</td>
								<td align="right"><input min="0" style="width: 40px;" placeholder="1" type="number">
								</td>
							</tr>
							<tr>
								<td><input type="checkbox">&emsp;XL</td>
								<td align="right"><input min="0" style="width: 40px;" placeholder="1" type="number">
								</td>
							</tr>
							<tr>
								<td><input type="checkbox">&emsp;XXL</td>
								<td align="right"><input min="0" style="width: 40px;" placeholder="1" type="number">
								</td>
							</tr>
						</table>
						</p>
						<button type="button" class="btn btn-large btn-block btn-success" name="addToTheBag"
							id="addToTheBag">Add to bag <i class="icon-briefcase icon-white"></i></button>
					</div>
				</div>

			</div>

		</section>
	</div>

	<!-- Footer ================================================== -->
	<script>
		$(document).ready(function () {
			$("#designtype").change(function () {
				$("img[name=tshirtview]").attr("src", $(this).val());

			});

		});
	</script>
	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script>
		var valueSelect = $("#designtype").val();
		$("#designtype").change(function () {
			valueSelect = $(this).val();
		});
		$('#flipback').click(function () {
    function swapImages(frontImage, backImage) {
        if ($(this).attr("data-original-title") == "Show Back View") {
            $(this).attr('data-original-title', 'Show Front View');
            $("#tshirtFacing").attr("src", frontImage);
            a = JSON.stringify(canvas);
            canvas.clear();
            try {
                var json = JSON.parse(b);
                canvas.loadFromJSON(b);
            } catch (e) { }
        } else {
            $(this).attr('data-original-title', 'Show Back View');
            $("#tshirtFacing").attr("src", backImage);
            b = JSON.stringify(canvas);
            canvas.clear();
            try {
                var json = JSON.parse(a);
                canvas.loadFromJSON(a);
            } catch (e) { }
        }
    }

    switch (valueSelect) {
        case "{{ asset('') }}assets/design/img/crew_front.png":
            swapImages.call(this, "{{ asset('') }}assets/design/img/crew_front.png", "{{ asset('') }}assets/design/img/crew_back.png");
            break;

        case "{{ asset('') }}assets/design/img/mens_longsleeve_front.png":
            swapImages.call(this, "{{ asset('') }}assets/design/img/mens_longsleeve_front.png", "{{ asset('') }}assets/design/img/mens_longsleeve_back.png");
            break;

        case "{{ asset('') }}assets/design/img/mens_tank_front.png":
            swapImages.call(this, "{{ asset('') }}assets/design/img/mens_tank_front.png", "{{ asset('') }}assets/design/img/mens_tank_back.png");
            break;

        case "{{ asset('') }}assets/design/img/mens_hoodie_front.png":
            swapImages.call(this, "{{ asset('') }}assets/design/img/mens_hoodie_front.png", "{{ asset('') }}assets/design/img/mens_hoodie_back.png");
            break;

        default:
            // Handle other cases or provide a default behavior
            break;
    }

    canvas.renderAll();
    setTimeout(function () {
        canvas.calcOffset();
    }, 200);
});

	</script>
	<script src="{{ asset('') }}assets/design/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('') }}assets/design/js/tshirtEditor.js"></script>
	<script type="text/javascript" src="{{ asset('') }}assets/design/js/jquery.miniColors.min.js"></script>

</body>

</html>
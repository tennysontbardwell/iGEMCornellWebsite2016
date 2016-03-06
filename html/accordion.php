<!-- http://www.cssscript.com/demo/pure-css-responsive-horizontal-accordion/ -->
<style class="cp-pen-styles">
	.accordion {
		width: 100%;
		max-width: 1080px;
		height: 350px;
		overflow: hidden;
		margin: 50px auto;
	}

	.accordion ul {
		width: 100%;
		display: table;
		table-layout: fixed;
		margin: 0;
		padding: 0;
	}

	.accordion ul li {
		display: table-cell;
		vertical-align: middle;
		position: relative;
		width: 16.666%;
		height: 350px;
		background-repeat: no-repeat;
		background-position: center center;
		transition: all 500ms ease;
	}

	.accordion ul li div {
		vertical-align: middle;
		display: block;
		overflow: hidden;
		width: 100%;
		height: 100%;
		transition: all 200ms ease;
	}

	.accordion ul li div * * {
		margin: 0;
		width: 100%;
		-webkit-transform: translateX(-20px);
		transform: translateX(-20px);
		-webkit-transition: all 400ms ease;
		transition: all 400ms ease;
		opacity: 0;
	}

	.accordion ul li div a {
		display: block;
		/*height: 350px;*/
		width: 100%;
		position: relative;
		z-index: 3;
		vertical-align: middle;
		padding: 15px 20px;
		box-sizing: border-box;
		color: #fff;
		text-decoration: none;
		font-family: Open Sans, sans-serif;
	}

	.accordion ul li div a * {
		text-overflow: ellipsis;
		position: relative;
		z-index: 5;
		white-space: nowrap;
		overflow: hidden;
	}

	.accordion ul li div a h2 {
		font-family: Montserrat, sans-serif;
		text-overflow: clip;
		font-size: 24px;
		text-transform: uppercase;
		margin-bottom: 2px;
		top: 160px;
	}

	.accordion ul li div a p {
		top: 160px;
		font-size: 13.5px;
	}

	.accordion ul li:nth-child(1) { background-image: url("resources/placeholders/fishpharm-image.png") }

	.accordion ul li:nth-child(2) { background-image: url("resources/placeholders/cornell-bridge.jpg"); }

	.accordion ul li:nth-child(3) { background-image: url("resources/placeholders/Mold_contaminantssmaller.png"); }

	.accordion ul li:nth-child(4) { background-image: url("resources/placeholders/dog.jpg"); }

	.accordion ul li:nth-child(5) { background-image: url("resources/placeholders/dog.jpg"); }

	.accordion ul li:nth-child(6) { background-image: url("resources/placeholders/dog.jpg"); }

	.accordion ul:hover li { width: 8%; }

	.accordion ul:hover li:hover { width: 60%; }

	.accordion ul:hover li:hover div { background: rgba(0, 0, 0, 0.4); }

	.accordion ul:hover li:hover div * {
	opacity: 1;
	-webkit-transform: translateX(0);
	transform: translateX(0);
	}
	@media screen and (max-width: 600px) {

		body { margin: 0; }

		.accordion { height: auto; }

		.accordion ul li,
		.accordion ul li:hover,
		.accordion ul:hover li,
		.accordion ul:hover li:hover {
			position: relative;
			display: table;
			table-layout: fixed;
			width: 100%;
			-webkit-transition: none;
			transition: none;
		}
	}
</style>
<!-- <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css"> -->
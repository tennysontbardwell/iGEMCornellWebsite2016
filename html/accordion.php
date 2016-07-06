<!-- http://www.cssscript.com/demo/pure-css-responsive-horizontal-accordion/ -->
<style class="cp-pen-styles">
	.accordion {
		width: 100%;
		max-width: 1080px;
		height: 350px;
		overflow: hidden;
		margin: 50px auto;
	}

	.accordion > ul {
		width: 100%;
		display: table;
		table-layout: fixed;
		margin: 0;
		padding: 0;
	}

	.accordion > ul > li {
		display: table-cell;
		vertical-align: bottom;
		position: relative;
		width: 16.666%;
		height: 350px;
		background-repeat: no-repeat;
		background-position: center center;
		transition: all 500ms ease;
	}

	.accordion > ul > li > div {
		display: block;
		overflow: hidden;
		width: 100%;
	}

	.accordion > ul > li > div > a {
		display: block;
		height: 350px;
		width: 100%;
		position: relative;
		z-index: 3;
		vertical-align: bottom;
		padding: 15px 20px;
		box-sizing: border-box;
		color: #fff;
		text-decoration: none;
		font-family: proximanova-light;
		transition: all 200ms ease;
	}

	.accordion > ul > li > div > a > * {
		opacity: 0;
		margin: 0;
		width: 100%;
		text-overflow: ellipsis;
		position: relative;
		z-index: 5;
		/*white-space: nowrap;*/
		overflow: hidden;
		-webkit-transform: translateX(-20px);
		transform: translateX(-20px);
		-webkit-transition: all 400ms ease;
		transition: all 400ms ease;
	}

	.accordion > ul > li > div > a > h6 {
		text-overflow: clip;
		text-transform: uppercase;
		margin-bottom: 2px;
		top: 144px;
	}

	.accordion > ul > li > div > a > p, .accordion > ul > li > div > a > ul {
		top: 160px;
		font-size: 15px;
    	font-family: proximanova-regular;
	}

	.accordion > ul > li:nth-child(1) { background-image: url("resources/projects/teamphoto800x350.jpg") }

	.accordion > ul > li:nth-child(2) { background-image: url("resources/projects/grass800x350.jpg"); }

	.accordion > ul > li:nth-child(3) { background-image: url("resources/projects/organofoam350x800.jpg"); }

	.accordion > ul > li:nth-child(4) { background-image: url("resources/projects/inriver350.jpg"); }

/*	.accordion ul li:nth-child(5) { background-image: url("resources/placeholders/dog.jpg"); }

	.accordion ul li:nth-child(6) { background-image: url("resources/placeholders/dog.jpg"); }
*/


	@media screen and (min-width: 950px) {

		.accordion > ul:hover > li { width: 8%; }

		.accordion > ul:hover > li:hover { width: 60%; }

		.accordion > ul:hover > li:hover a { background: rgba(0, 0, 0, 0.4); }

		.accordion > ul:hover > li:hover a * {
			opacity: 1;
			-webkit-transform: translateX(0);
			transform: translateX(0);
		}
	}

	@media screen and (max-width: 949px) {

		body { margin: 0; }

		.accordion {
			height: auto;
			margin: 0 auto;
		}

		.accordion > ul > li {
			position: relative;
			display: table;
			table-layout: fixed;
			margin: 0 auto;
			width: 100%;
			height: 350px;
			background-size: cover;
    		background-repeat: no-repeat;
    		background-position: center;
			-webkit-transition: none;
			transition: none;
		}

		.accordion > ul > li > div > a {
			background: rgba(0, 0, 0, 0.4);
			margin: 0 auto;
			width: 100%
		}

		.accordion > ul> li > div > a > * {
			opacity: 1;
			-webkit-transform: translateX(0);
			transform: translateX(0);
			
		}

		.accordion > ul > li > div > a > h6 {
			top: 110px;
		}

		.accordion > ul > li > div > a > p, .accordion > ul > li > div > a > ul {
			top: 126px;
		}
	}
</style>
<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
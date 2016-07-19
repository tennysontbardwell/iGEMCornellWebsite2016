<!-- http://www.cssscript.com/demo/pure-css-responsive-horizontal-accordion/ -->
<style class="cp-pen-styles">
	.accordion {
		width: 100%;
		max-width: 1080px;
		height: 350px;
		overflow: hidden;
		margin: 50px auto;
		padding-top:10px;
		padding-bottom:10px; 
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
		top: 74px;
	}

	.accordion > ul > li > div > a > p {
		top: 90px;
		font-size: 16px;
    	font-family: proximanova-regular;
	}

	.accordion > ul > li > div > a > ul {
		top: 110px;
		font-size: 16px;
    	font-family: proximanova-regular;
	}

	.accordion > ul > li > div > a > b {
		top: 100px;
		font-size: 19px;
    	font-family: proximanova-bold;
	}

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
			top: 84px;
		}

		.accordion > ul > li > div > a > p {
			top: 100px;
		}

		.accordion > ul > li > div > a > ul {
			top: 120px;
		}

		.accordion > ul > li > div > a > b {
			top: 110px;
		}
	}

	@media screen and (max-width: 550px) {
		.accordion > ul > li > div > a > h6 {
			top: 34px;
			font-size: 28px;
		}

		.accordion > ul > li > div > a > p {
			top: 50px;
			font-size: 14px;
		}

		.accordion > ul > li > div > a > ul {
			top: 70px;
			font-size: 14px;
		}

		.accordion > ul > li > div > a > b {
			top: 60px;
			font-size: 17px;
		}
	}

	/* iPhone 5 */
	@media screen and (max-width: 350px) {
		.accordion > ul > li > div > a > h6 {
			top: 19px;
			font-size: 28px;
		}

		.accordion > ul > li > div > a > p {
			top: 35px;
			font-size: 13px;
		}

		.accordion > ul > li > div > a > ul {
			top: 55px;
			font-size: 13px;
		}

		.accordion > ul > li > div > a > b {
			top: 45px;
			font-size: 16px;
		}
	}

</style>
<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
<style type="text/css">
	.paradeiser {
	  position: fixed;
	  bottom: 0;
	  left: 0;
	  z-index: 999;
	  width: 100%;
	  height: 50px;
	  background: #177437;
	  -webkit-transition: top 0.4s ease;
	          transition: top 0.4s ease;
	  -webkit-backdrop-filter: blur(10px) saturate(100%);
	  backdrop-filter: blur(10px) saturate(100%);
	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -ms-flexbox;
	  display: flex;
	}
	.paradeiser.headroom--pinned {
	  top: 0;
	}
	.paradeiser.headroom--unpinned {
	  top: -50px;
	}
	.paradeiser a, .paradeiser .paradeiser_dropdown {
	  position: relative;
	  z-index: 5;
	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -ms-flexbox;
	  display: flex;
	  -webkit-box-orient: vertical;
	  -webkit-box-direction: normal;
	  -webkit-flex-direction: column;
	      -ms-flex-direction: column;
	          flex-direction: column;
	  margin: 0;
	  padding: 0;
	  color: #fff;
	  text-align: left;
	  text-decoration: none;
	  font-weight: 400;
	  font-size: 10px;
	  font-family: 'Avantg';
	  cursor: pointer;
	  -webkit-box-align: center;
	  -webkit-align-items: center;
	      -ms-flex-align: center;
	          align-items: center;
	  -webkit-box-flex: 5;
	  -webkit-flex-grow: 5;
	      -ms-flex-positive: 5;
	          flex-grow: 5;
	  -webkit-box-pack: center;
	  -webkit-justify-content: center;
	      -ms-flex-pack: center;
	          justify-content: center;
	}
	.paradeiser a.active, 
	.paradeiser a:hover, 
	.paradeiser .paradeiser_dropdown.active, 
	.paradeiser .paradeiser_dropdown:hover,
	.paradeiser .paradeiser_dropdown:hover span {
	  background: #115c2b;
	  color: #fff;
	}
	.paradeiser .paradeiser_icon_canvas {
	  display: block;
	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -ms-flexbox;
	  display: flex;
	  margin: 0 auto;
	  width: 100%;
	  height: 20px;
	  color: #000;
	  text-align: center;
	  -webkit-box-align: center;
	  -webkit-align-items: center;
	      -ms-flex-align: center;
	          align-items: center;
	  -webkit-box-pack: center;
	  -webkit-justify-content: center;
	      -ms-flex-pack: center;
	          justify-content: center;
	}
	.paradeiser .paradeiser_icon_canvas img {
	  display: block;
	  margin: 0;
	  max-width: 20px;
	  width: 100%;
	  height: auto;
	}
	.paradeiser span {
	  margin-top: 5px;
	  font-size: 11px;
	  text-transform: uppercase;
	}

	.paradeiser span.paradeiser_dropdown {
	  margin-top: 0;
	}
	.paradeiser span.paradeiser_dropdown > a {
	  width: 100%;
	}
	.paradeiser .paradeiser_logo {
	  max-width: 40px;
	  width: 100%;
	}
	.paradeiser ul {
	  position: fixed;
	  bottom: 50px;
	  left: 0;
	  z-index: 998;
	  visibility: hidden;
	  margin: 0;
	  padding: 0;
	  width: 100%;
	  height: auto;
	  text-align: center;
	  opacity: 0;
	  -webkit-transition: opacity 0.4s;
	          transition: opacity 0.4s;
	  pointer-events: none;
	}
	.paradeiser ul:target, .paradeiser ul.open {
	  visibility: visible;
	  opacity: 1;
	  -webkit-transition: opacity 0.4s;
	          transition: opacity 0.4s;
	  pointer-events: auto;
	}
	.paradeiser .paradeiser_dropdown ul.paradeiser_children.open{
	  width: 50%;
	}
	.paradeiser .paradeiser_dropdown ul.paradeiser_children.open li a span{
	  padding-left: 15px;
	  background: transparent;
	}
	.paradeiser .paradeiser_dropdown ul.paradeiser_children.open li a:hover span{
	  color: #fff;
	}
	.paradeiser ul li {
	  display: inline-block;
	  width: 100%;
	  background: #115c2b;
	}
	.paradeiser ul li a {
	  display: inline-block;
	  padding: 10px 0 10px 0;
	  width: 100%;
	  color: #333;
	  font-size: 12px;
	  text-transform: uppercase;
	}
	.paradeiser ul.paradeiser_children.open li a{
	  color: #fff;
	}
	.paradeiser ul li a:hover, .paradeiser ul li span:hover {
	  background: #1d8542;
	  color: #fff;
	}




</style>
<style type="text/css">
	/*
	Copyright: (c) 2015 TheGrue, http://thegrue.org/
*/

#gruemenu,
#gruemenu ul,
#gruemenu ul li,
#gruemenu ul li a
{margin: 0; padding: 0;border: 0;list-style: none;display: block;position: relative; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; z-index:999999;}
#gruemenu { width: auto; }
#gruemenu > ul { padding:0; margin:0 auto; width:1004px;}
#gruemenu > ul > li a {background:none}
#gruemenu > ul > li > a {padding: 14px 12px 14px 12px; border-right: 1px solid rgba(80, 80, 80, 0.12); text-decoration: none; letter-spacing: 0px;}
#gruemenu > ul > li:last-child > a{border-right: none;}
#gruemenu > ul > li:hover > a,
#gruemenu > ul > li > a:hover,
#gruemenu > ul > li.active > a { background: rgba(0, 0, 0, 0.1);}
#gruemenu > ul > li.has-sub > a {padding-right: 12px;}
#gruemenu > ul > li.has-sub > a::after {content: ""; position: absolute; width: 0; height: 0; border: 4px solid transparent;}
#gruemenu > ul > li.has-sub.active > a::after,
#gruemenu > ul > li.has-sub:hover > a {}
#gruemenu:after,
#gruemenu > ul:after {content: ".";display: block;clear: both; visibility: hidden; line-height: 0; height: 0;}
#gruemenu ul ul li a { text-decoration: none; padding: 11px 25px; width: 220px; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1), 1px 1px 1px rgba(0, 0, 0, 0.1), -1px 1px 1px rgba(0, 0, 0, 0.1);}
#gruemenu > ul > li > ul::after { position: absolute; display: block;}
#gruemenu ul ul li.has-sub > a::after { content: ""; position: absolute; width: 0; height: 0; border: 4px solid transparent;}  

/* Mobile Menu */
#navigation-toggle, .sidr, #sidr-close { display: none }
.sidr{display:none;position:fixed;top:0;height:100%;z-index:999999;width:280px;overflow-x:auto;overflow-y:auto; font-size:14px;background: url('normal_menu.jpg') repeat-y;color:#fff;}
.sidr .sidr-inner{padding:0}
.sidr .sidr-inner>p{margin-left:15px;margin-right:15px}
.sidr.right{left:auto;right:-320px}
.sidr.left{left:-320px;right:auto;}
.sidr p{font-size:16px;margin:0 0 12px}.sidr p a{color:rgba(255,255,255,0.9)}
.sidr>p{margin-left:15px;margin-right:15px}
.sidr ul{display:block;margin:0 0 15px;padding:0;}
.sidr ul li{display:block;margin:0;line-height:35px;font-family: Tahoma;}
.sidr ul li:hover,.sidr ul li.active,.sidr ul li.sidr-class-active{line-height:35px}
.sidr ul li:hover>a,.sidr ul li:hover>span,.sidr ul li.active>a,.sidr ul li.active>span,.sidr ul li.sidr-class-active>a,.sidr ul li.sidr-class-active>span{}
.sidr ul li a{padding:0 40px;display:block;text-decoration:none;color:#fff; font-weight: bold; text-transform: uppercase; background:#1d8542 url('icon-nav.png') no-repeat 15px 10px; border-bottom: 1px solid #e5e5e5;border-top: 1px solid #f7f7f7;text-align: left;}
.sidr ul li ul{border-bottom:none;margin:0}.sidr ul li ul li{line-height:35px;font-size:14px;}.sidr ul li ul li:last-child{border-bottom:none}
.sidr ul li ul li:hover,.sidr ul li ul li.active,.sidr ul li ul li.sidr-class-active{line-height:35px}
.sidr ul li ul li:hover>a,.sidr ul li ul li:hover>span,.sidr ul li ul li.active>a,.sidr ul li ul li.active>span,.sidr ul li ul li.sidr-class-active>a,.sidr ul li ul li.sidr-class-active>span{color: #ff0000;background: url('arrow_hover.png') no-repeat 22px 15px;}
.sidr ul li ul li a,.sidr ul li ul li span{color:#484444;font-size: 13px;font-weight: bold; text-transform: inherit;padding-left:50px;text-align: left;background: url('arrow.png') no-repeat 22px 15px;}.sidr form{margin:0 15px}.sidr label{font-size:13px}.sidr input[type="text"],.sidr input[type="password"],.sidr input[type="date"],.sidr input[type="datetime"],.sidr input[type="email"],.sidr input[type="number"],.sidr input[type="search"],.sidr input[type="tel"],.sidr input[type="time"],.sidr input[type="url"],.sidr textarea,.sidr select{width:100%;font-size:13px;padding:10px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0 0 10px;-webkit-border-radius:2px;-moz-border-radius:2px;-ms-border-radius:2px;-o-border-radius:2px;border-radius:2px;border:none;background:rgba(0,0,0,0.1);color:rgba(255,255,255,0.6);display:block;clear:both}.sidr input[type=checkbox]{width:auto;display:inline;clear:none}.sidr input[type=button],.sidr input[type=submit]{color:#333;background:#fff}.sidr input[type=button]:hover,.sidr input[type=submit]:hover{background:rgba(255,255,255,0.9)}
a.sidr-class-toggle-sidr-close {color:#fff; text-decoration:none; display:block; text-align:right;padding: 5px 9px 9px 9px; background: #685a3e;}
a:hover.sidr-class-toggle-sidr-close{color: #ff0000;}
a.sidr-class-toggle-sidr-close:before {font-size:18px; font-weight:bold; color: #00396d; margin: 0; text-decoration:none; content:"x"; background:#fff; padding: 0px 7px 3px 7px; }
a:hover.sidr-class-toggle-sidr-close:before {color: #ff0000;}
.sidr-class-current > a{ background:#222}
a.sidr-class-toggle-sidr-close span{float: left; text-transform: uppercase; color: #fff; font-family: Tahoma; font-size: 14px; line-height: 28px; font-weight: bold;}
#gruemenu.grue_158 ul ul li a, #navigation-toggle{background: #177437 !important;}
li.sidr-class-item-435 a img{display: none;}

#gruemenu.grue_87.gruefixed{
	box-shadow:  1px 1px 1px rgba(0, 0, 0, 0.3);
  	-webkit-box-shadow:  1px 1px 1px rgba(0, 0, 0, 0.3);
  	-moz-box-shadow:  1px 1px 1px rgba(0, 0, 0, 0.3);
  	-o-box-shadow:  1px 1px 1px rgba(0, 0, 0, 0.3);
}
</style>
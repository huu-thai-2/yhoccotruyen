<style type="text/css">
	/**
* Tabs GK5 - style 1
* @package Joomla!
* @Copyright (C) 2009-2012 Gavick.com
* @ All rights reserved
* @ Joomla! is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: GK5 1.0 $
**/

/*
 *
 ==================  Edit Tabs  ================= */
                  
.gkTabsWrap.vertical ol li,
.gkTabsWrap.horizontal ol li {
	color: #fff;
	font-family: 'Avantg';
	text-transform: uppercase;
	background: #685a3e;
}
.gkTabsWrap.vertical ol li:hover,
.gkTabsWrap.vertical ol li.active,
.gkTabsWrap.horizontal ol li:hover,
.gkTabsWrap.horizontal ol li.active {
	color: #fff!important;
	background: #1d8542;
}
.gkTabsContainer + ol {
	border-top: 3px solid #97ccee!important;
}
.gkTabsItem {
	background: #fff;
}
.gkTabsButtonNext,
.gkTabsButtonPrev {
	background: #ddd;
}
.gkTabsButtonNext:hover,
.gkTabsButtonPrev:hover {
	background: #eee;
}
.gkTabsWrap.horizontal > ol {
	background: #fff;
}
 
/* ==================  End  ===================== */


/* 
 * VERTICAL mode 
 */

.gkTabsGK5 {
	position: relative;
	overflow: hidden;
}
.gkTabsWrap {
	margin: 0;
}
.gkTabsContainer {
	-webkit-perspective: 500;
	-moz-perspective: 500;
	-ms-perspective: 500;
	perspective: 500;
	-webkit-transition: all .3s ease-out;
	-moz-transition: all .3s ease-out;
	-ms-transition: all .3s ease-out;
	-o-transition: all .3s ease-out;
	transition: all .3s ease-out;
}
.gkTabsItem {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0px 0px;
	position: absolute;
	top: 0;
	-webkit-transition: all .3s ease-out;
	-moz-transition: all .3s ease-out;
	-ms-transition: all .3s ease-out;
	-o-transition: all .3s ease-out;
	transition: all .3s ease-out;
	width: 100%;
	z-index: 1;
}
.gkTabsItem.gk-active {
	position: relative;
	top: 0;
	z-index: 1;
}
.gkTabsItem.gk-hide {
	position: absolute;
	top: 0;
	z-index: 0;
}
.gkTabsItem.gk-opacity.gk-hide {
	opacity: 0;
}
.gkTabsItem.gk-opacity.gk-active {
	opacity: 1;
}
.gkTabsItem.gk-slide_vertical.gk-hide {
	opacity: 0;
	-webkit-transform: translateY(-100%);
	-moz-transform: translateY(-100%);
	-ms-transform: translateY(-100%);
	-o-transform: translateY(-100%);
	transform: translateY(-100%);
}
.gkTabsItem.gk-slide_vertical.gk-active {
	opacity: 1;
	-webkit-transform: translateY(0%);
	-moz-transform: translateY(0%);
	-ms-transform: translateY(0%);
	-o-transform: translateY(0%);
	transform: translateY(0%);
}
.gkTabsItem.gk-slide_vertical.gk-hidden {
	opacity: 0;
	-webkit-transform: translateY(100%);
	-moz-transform: translateY(100%);
	-ms-transform: translateY(100%);
	-o-transform: translateY(100%);
	transform: translateY(100%);
}
.gkTabsItem.gk-slide_horizontal.gk-hide {
	opacity: 0;
	-webkit-transform: translateX(-100%);
	-moz-transform: translateX(-100%);
	-ms-transform: translateX(-100%);
	-o-transform: translateX(-100%);
	transform: translateX(-100%);
}
.gkTabsItem.gk-slide_horizontal.gk-active {
	opacity: 1;
	-webkit-transform: translateX(0%);
	-moz-transform: translateX(0%);
	-ms-transform: translateX(0%);
	-o-transform: translateX(0%);
	transform: translateX(0%);
}
.gkTabsItem.gk-slide_horizontal.gk-hidden {
	opacity: 0;
	-webkit-transform: translateX(100%);
	-moz-transform: translateX(100%);
	-ms-transform: translateX(100%);
	-o-transform: translateX(100%);
	transform: translateX(100%);
}
.gkTabsItem.gk-scale.gk-active {
	opacity: 1!important;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	-o-transform: scale(1);
	transform: scale(1);
}
.gkTabsItem.gk-scale.gk-hide,
.gkTabsItem.gk-scale.gk-hidden {
	opacity: 0!important;
	-webkit-transform: scale(0.5);
	-moz-transform: scale(0.5);
	-ms-transform: scale(0.5);
	-o-transform: scale(0.5);
	transform: scale(0.5);
}
.gkTabsItem.gk-rotate_x.gk-active {
	opacity: 1!important;
	-webkit-transform: rotateX(0);
	-moz-transform: rotateX(0);
	-ms-transform: rotateX(0);
	-o-transform: rotateX(0);
	transform: rotateX(0);
}
.gkTabsItem.gk-rotate_x.gk-hide,
.gkTabsItem.gk-rotate_x.gk-hidden {
	opacity: 0!important;
	-webkit-transform: rotateX(-90deg);
	-moz-transform: rotateX(-90deg);
	-ms-transform: rotateX(-90deg);
	-o-transform: rotateX(-90deg);
	transform: rotateX(-90deg);
}
.gkTabsItem.gk-rotate_y.gk-active {
	opacity: 1!important;
	-webkit-transform: rotateY(0);
	-moz-transform: rotateY(0);
	-ms-transform: rotateY(0);
	-o-transform: rotateY(0);
	transform: rotateY(0);
}
.gkTabsItem.gk-rotate_y.gk-hide,
.gkTabsItem.gk-rotate_y.gk-hidden {
	opacity: 0!important;
	-webkit-transform: rotateY(-90deg);
	-moz-transform: rotateY(-90deg);
	-ms-transform: rotateY(-90deg);
	-o-transform: rotateY(-90deg);
	transform: rotateY(-90deg);
}
.gkTabsItem.gk-rotate_z.gk-active {
	opacity: 1!important;
	-webkit-transform: rotateZ(0);
	-moz-transform: rotateZ(0);
	-ms-transform: rotateZ(0);
	-o-transform: rotateZ(0);
	transform: rotateZ(0);
}
.gkTabsItem.gk-rotate_z.gk-hide,
.gkTabsItem.gk-rotate_z.gk-hidden {
	opacity: 0!important;
	-webkit-transform: rotateZ(-90deg);
	-moz-transform: rotateZ(-90deg);
	-ms-transform: rotateZ(-90deg);
	-o-transform: rotateZ(-90deg);
	transform: rotateZ(-90deg);
}

/* tabs */
.gkTabsWrap.vertical ol {
	background: transparent!important;
	min-height: 35px;
	margin: 0!important;
	padding: 0!important;
}
.gkTabsWrap.vertical ol li,
.gkTabsWrap.horizontal ol li {
	cursor: pointer;
	float: left;
	padding: 8px 8px;
	list-style-type: none;
	position: relative;
	font-size: 11px;
	text-align: center;
	font-weight: bold;
	width: 33.33333333%;
	border-right: 2px solid #fff;
}
.gkTabsWrap.vertical ol li:last-child,
.gkTabsWrap.horizontal ol li:last-child {
	border-right: 0px solid transparent;
}
/* bottom tabs */
.gkTabsContainer + ol {
	border-bottom: none!important;
}
.gkTabsContainer + ol li {
	border-radius: 0 0 2px 2px!important;
}
/* containers */
.gkTabsContainer,
.gkTabsContainer[style] {
	clear: both;
	overflow: hidden!important;
	overflow-x: hidden!important;
	overflow-y: hidden!important;
	position: relative;
}
/* buttons prev/next */
.gkTabsButtonNext,
.gkTabsButtonPrev {
	border-radius: 50%;
	cursor: pointer;
	height: 18px;
	position: absolute;
	right: 0;
	font: 0/0px a;
	top: 43%;
	width: 18px;
	z-index: 3;
}
.gkTabsButtonPrev {
	left: 0;
	right: inherit;
}
.gkTabsButtonNext:before,
.gkTabsButtonPrev:before {
	content: "â€º";
	display: block;
	font-size: 14px;
	font-weight: bold;
	height: 18px;
	line-height: 17px;
	text-align: center;
	width: 18px;
}
.gkTabsButtonPrev:before {
	content: "â€¹";
}
/* 
 * HORIZONTAL mode 
 */
 
.gkTabsWrap.horizontal {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	display: table;
	width: 100%;
}
.gkTabsWrap.horizontal > ol,
.gkTabsWrap.horizontal > .gkTabsContainer {
	display: table-cell;
	vertical-align: top;
}
.gkTabsWrap.horizontal > ol {
	position: relative;
	z-index: 5;
}
/* tabs */

.gkTabsWrap.horizontal ol li {
	cursor: pointer;
	float: right;
	border-radius: 2px;
	margin: 0 0 3px!important;
}
.gkTabsWrap.horizontal ol li:hover,
.gkTabsWrap.horizontal ol li.active {
	/* line 45 */
}
.gkTabsWrap.horizontal .gkTabsItem {
	padding: 2px 20px
}
/* right tabs */
.gkTabsWrap.horizontal .gkTabsContainer + ol {
	border: none !important
}
.gkTabsWrap.horizontal .gkTabsContainer + ol li {
	border-radius: 2px !important;
	float: left;
}
</style>
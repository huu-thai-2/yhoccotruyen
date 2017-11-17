<?php 
if(isset($_POST["pp-submit"]))
    {   
        if($_POST["sodienthoai"] != ""){
            $qly_ql->LienHe4('');
            
        }
        else echo "<script>alert('Bạn vui lòng nhập số điện thoại ! ')</script>";   
    }
?>
<style>
    .thanglong-alo-phone{
        position: fixed;
        /*visibility: hidden;*/
        background-color: transparent;
        width: 200px;
        height: 200px;
        cursor: pointer;
        z-index: 200 !important;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        -webkit-transition: visibility .5s;
        -moz-transition: visibility .5s;
        -o-transition: visibility .5s;
        transition: visibility .5s;
        /*right: 150px;*/
        top: 30px;
        left: 0;
    }
    .thanglong-alo-ph-circle {
        width: 160px;
        height: 160px;
        top: 20px;
        left: 20px;
        position: absolute;
        background-color: transparent;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(30,30,30,0.4);
        border: 2px solid #bfebfc 9;
        opacity: .1;
        -webkit-animation: thanglong-alo-circle-anim 1.2s infinite ease-in-out;
        -moz-animation: thanglong-alo-circle-anim 1.2s infinite ease-in-out;
        -ms-animation: thanglong-alo-circle-anim 1.2s infinite ease-in-out;
        -o-animation: thanglong-alo-circle-anim 1.2s infinite ease-in-out;
        animation: thanglong-alo-circle-anim 1.2s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        border-color: #ff0000;
        opacity: .5;
    }

    @-moz-keyframes thanglong-alo-circle-anim {
        0% {
            -moz-transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1;
            -moz-opacity: .1;
            -webkit-opacity: .1;
            -o-opacity: .1
        }
        30% {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5;
            -moz-opacity: .5;
            -webkit-opacity: .5;
            -o-opacity: .5
        }
        100% {
            -moz-transform: rotate(0) scale(1) skew(1deg);
            opacity: .6;
            -moz-opacity: .6;
            -webkit-opacity: .6;
            -o-opacity: .1
        }
    }

    @-webkit-keyframes thanglong-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(.5) skew(1deg);
            -webkit-opacity: .1
        }
        30% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            -webkit-opacity: .5
        }
        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: .1
        }
    }

    @-o-keyframes thanglong-alo-circle-anim {
        0% {
            -o-transform: rotate(0) kscale(.5) skew(1deg);
            -o-opacity: .1
        }
        30% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            -o-opacity: .5
        }
        100% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            -o-opacity: .1
        }
    }


    .thanglong-alo-ph-circle-fill {
        width: 100px;
        height: 100px;
        top: 50px;
        left: 50px;
        position: absolute;
        background-color: #000;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        opacity: .1;
        -webkit-animation: thanglong-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -moz-animation: thanglong-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -ms-animation: thanglong-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -o-animation: thanglong-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: thanglong-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        background-color: rgba(255,0,0,0.5);
         opacity: .75 !important;
    }
@-moz-keyframes thanglong-alo-circle-fill-anim {
    0% {
        -moz-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
    50% {
        -moz-transform: rotate(0) -moz-scale(1) skew(1deg);
        opacity: .2
    }
    100% {
        -moz-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
}

@-webkit-keyframes thanglong-alo-circle-fill-anim {
    0% {
        -webkit-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
    50% {
        -webkit-transform: rotate(0) scale(1) skew(1deg);
        opacity: .2
    }
    100% {
        -webkit-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
}

@-o-keyframes thanglong-alo-circle-fill-anim {
    0% {
        -o-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
    50% {
        -o-transform: rotate(0) scale(1) skew(1deg);
        opacity: .2
    }
    100% {
        -o-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
}


.thanglong-alo-ph-img-circle {
    width: 60px;
    height: 60px;
    top: 70px;
    left: 70px;
    position: absolute;
    background: rgba(30,30,30,0.1) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAB/ElEQVR42uya7W3CMBCG31QM4A1aNggTlG6QbpBMkHYC1AloJ4BOABuEDcgGtBOETnD9c1ERCH/lwxeaV8oPFGP86Hy+DxMREW5Bd7gRjSDSNGn4/RiAOvm8C0ZCRD5PSkQVXSr1nK/xE3mcWimA1ZV3JYBZCIO4giQANoYxMwYS6+xKY4lT5dJPreWZY+uspqSCKPYN27GJVBDXheVSQe494ksiEWTuMXcu1dld9SARxDX1OAJ4lgjy4zDnFsC076A4adEiRwAZg4hOUSpNoCsBPDGM+HqkNGynYBCuILuWj+dgWysGsNe8nwL4GsrW0m2fxZBq9rW0rNcX5MOQ9eZD8JFahcG5g/iKT671alGAYQggpYWvpEPYWrU/HDTOfeRIX0q2SL3QN4tGhZJukVobQyXYWw7WtLDKDIuM+ZSzscyCE9PCy5IttCvnZNaeiGLNHKuz8ZVh/MXTVu/1xQKmIqLEAuJ0fNo3iG5B51oSkeKnsBi/4bG9gYB/lCytU5G9DryFW+3Gm+JLwU7ehbJrwTjq4DJU8bHcVbEV9dXXqqP6uqO5e2/QZRYJpqu2IUAA4B3tXvx8hgKp05QZW6dJqrLTNkB6vrRURLRwPHqtYgkC3cLWQAcDQGGKH13FER/NATzi786+BPDNjm1dMkfjn2pGkBHkf4D8DgBJDuDHx9BN+gAAAABJRU5ErkJggg==") no-repeat center center;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    border: 2px solid transparent;
    opacity: .7;
    -webkit-animation: thanglong-alo-circle-img-anim 1s infinite ease-in-out;
    -moz-animation: thanglong-alo-circle-img-anim 1s infinite ease-in-out;
    -ms-animation: thanglong-alo-circle-img-anim 1s infinite ease-in-out;
    -o-animation: thanglong-alo-circle-img-anim 1s infinite ease-in-out;
    animation: thanglong-alo-circle-img-anim 1s infinite ease-in-out;
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;

    background-color: #ff0000;
    
}
.thanglong-alo-phone:hover .thanglong-alo-ph-circle-fill{
	background-color: rgba(66,168,221,0.5) !important;
}
.thanglong-alo-phone:hover  .thanglong-alo-ph-circle{border-color:#42a7dd}
.thanglong-alo-phone:hover .thanglong-alo-ph-img-circle {
    background-color: #42a7dd;

}

@-moz-keyframes thanglong-alo-circle-img-anim {
    0% {
        transform: rotate(0) scale(1) skew(1deg)
    }
    10% {
        -moz-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    20% {
        -moz-transform: rotate(25deg) scale(1) skew(1deg)
    }
    30% {
        -moz-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    40% {
        -moz-transform: rotate(25deg) scale(1) skew(1deg)
    }
    50% {
        -moz-transform: rotate(0) scale(1) skew(1deg)
    }
    100% {
        -moz-transform: rotate(0) scale(1) skew(1deg)
    }
}

@-webkit-keyframes thanglong-alo-circle-img-anim {
    0% {
        -webkit-transform: rotate(0) scale(1) skew(1deg)
    }
    10% {
        -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    20% {
        -webkit-transform: rotate(25deg) scale(1) skew(1deg)
    }
    30% {
        -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    40% {
        -webkit-transform: rotate(25deg) scale(1) skew(1deg)
    }
    50% {
        -webkit-transform: rotate(0) scale(1) skew(1deg)
    }
    100% {
        -webkit-transform: rotate(0) scale(1) skew(1deg)
    }
}
@-o-keyframes thanglong-alo-circle-img-anim {
    0% {
        -o-transform: rotate(0) scale(1) skew(1deg)
    }
    10% {
        -o-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    20% {
        -o-transform: rotate(25deg) scale(1) skew(1deg)
    }
    30% {
        -o-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    40% {
        -o-transform: rotate(25deg) scale(1) skew(1deg)
    }
    50% {
        -o-transform: rotate(0) scale(1) skew(1deg)
    }
    100% {
        -o-transform: rotate(0) scale(1) skew(1deg)
    }
}



#thanglong-alo-wrapper {
    position: fixed;
    width: 100%;
    bottom: 0;
    top: 0;
    left: 0;
    z-index: 2000000;
    overflow: visible;
    display: none;
    color: #383838;
}


#thanglong-alo-wrapper .thanglong-alo-overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlOZyTXzhgAAAApJREFUCB1jYAAAAAIAAc/INeUAAAAASUVORK5CYII=");
    top: 0;
    left: 0;
    z-index: 200000
}

#thanglong-alo-wrapper .thanglong-alo-table {
    display: table;
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 999999
}

#thanglong-alo-wrapper .thanglong-alo-cell {
    display: table-cell;
    vertical-align: middle;
    text-align: center
}

#thanglong-alo-wrapper .thanglong-alo-popup-close {
    -webkit-border-radius: 2px !important;
    -moz-border-radius: 2px !important;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    position: absolute !important;
    right: -15px !important;
    top: -15px !important;
    height: 30px !important;
    width: 30px !important;
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjRGMTI2QTcxNDBFMTFFNUFENEZCRDVFQ0JDQjQyQzIiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjRGMTI2QTYxNDBFMTFFNUFENEZCRDVFQ0JDQjQyQzIiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVmYzc3OTY1LWUxNWUtNGU0Ni04ODFjLTBlOTQ3YjBmMzBmNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5iCEbHAAABl0lEQVR42sSXS07DMBCGnSKyDorEAVjACTgCIEVlXU5R9QjlCk3VAzTrLhMJ2NIVJ2DDuo9EsKUszEw0kaIQbI+bxy/9UhRP5pMcjz12pJTCQKfgO/AN+Bp8AfZo7Av8AX4Dv4CfwD/ajAhW2ANPwTtprj1946lyq6AP4I2014ZyGINPwAvZnBaUUwnGgJVsXqsqvAoOZXua/wceyfY1KngOlROWxjv4XLSrHfgKS3BALyYdQAUxJkUdu7o6jeNYZlmmnUeMwViNkOUieKiLTNNURlGkhOPYcrnMYw00RPDMJFIFZ0JRIYJfTaPr4BZQ1Fow9+EcgCAEWkLz/4zl9A1rzOUsTQCKJEny5yAIhO/73NV9GNjUhOM4tc8scae6PL3laedONYLXNtC6f85dXDNb6BHw0GgDKaCqxEz4fbFlpk1smQjnbJmCeqSuNO3jWNyDL8vHIrao4w6OxTGx/rQ+8z5an16bvd7a22pDvz0CuOU29NUrzKOuzqvlTN8orzAO89J2W7q0ndHYZ+nS9kw+6BL+CjAAEvDTBJC9qhAAAAAASUVORK5CYII=");
    background-position: center center;
    background-repeat: no-repeat;
    cursor: pointer !important;
    -webkit-transition: .3s ease-out !important;
    -moz-transition: .3s ease-out !important;
    -o-transition: .3s ease-out !important;
    transition: .3s ease-out !important;
}

#thanglong-alo-wrapper .thanglong-alo-popup-close:hover {
    opacity: .6 !important
}
.form-tuvan {
    background: #2EAAE1;
    padding: 25px;
}
#thanglong-alo-wrapper .thanglong-alo-popup {
    display: inline-block;
    position: relative;
   /* -webkit-border-radius: 16px;
    -moz-border-radius: 16px;
    border-radius: 16px; */
    -webkit-transition: .6s ease-out;
    -moz-transition: .6s ease-out;
    -o-transition: .6s ease-out;
    transition: .6s ease-out;
    margin: 0 auto;
    z-index: 200001;
    text-align: center;
	width:500px;
	background:url(modules/thanglongphone/img/bgtuvan.jpg)no-repeat;
	max-height:437px;
}

#thanglong-alo-wrapper .thanglong-alo-popup h4 {
    font-size: 24px;
    margin: 0 0 40px;
    font-family: 'Arial',sans-serif;
    font-weight: 300;
	text-align:justify;
    line-height: 1.8
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-submit-moz-focus-inner {
    border: 0
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-submitavtive,
#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-submitvisited {
    outline: none !important
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-submit {
    border: none;
    border-width: 0;
    background:url(modules/thanglongphone/img/nutsubmit.png)no-repeat;
    width:222px;height:73px;
	font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    color: #fff;
    cursor: pointer;
    outline: none !important;float:right;
	margin-right:110px;
	
}
#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-input-wrapper input[type="text"].valid-invalid {
    color: #ff496b
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-input-wrapper input[type="text"]:focus {
    border: #00bed5 solid 3px;
	padding: 6px 120px;
	margin:0 auto;
	    margin-left: 5px;
   outline:5px solid #fff; 
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-input-wrapper input[type="text"]::-webkit-input-placeholder {
    color: #d1d1d1
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-input-wrapper input[type="text"]::-moz-placeholder {
    color: #d1d1d1
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-input-wrapper input[type="text"]::-ms-input-placeholder {
    color: #d1d1d1
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-input-wrapper input[type="text"]::-moz-placeholder {
    color: #d1d1d1
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-input-wrapper .label,
#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-input-wrapper .label + .input {
    float: left;
    width: 49%
}
#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-message {
    height:25px;
  
    text-align: center;
    clear: both;
    font-size: 14px;
}
#thanglong-alo-wrapper .thanglong-alo-popup input[type=text].thanglong-alo-number {
    color: #00bed5;
    font-size: 25px;
    font-family: 'Arial', sans-serif;
    font-weight: normal;
    background-color: transparent;
    padding: 0;
    padding-bottom: 10px;
    margin: 0 auto;
    width: 195px;
	float:left;
	margin-left:5px;
}



#thanglong-alo-wrapper .thanglong-alo-popup input[type=text].thanglong-alo-number::-ms-clear {
    display: none;
    width: 0;
    height: 0
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-request-time {
    font-family: Arial, Helvetica, sans-serif;
    padding: 6px 12px;
    font-size: 18px;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
  
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-powered {
    font-size: .8em;
    position: absolute;
    bottom: 10px;
    right: 15px;
    font-family: 'Open Sans';
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-powered a {
    font-weight: bold;
    color: #383838;
    text-decoration: none;
}

#thanglong-alo-wrapper .thanglong-alo-popup .thanglong-alo-powered a:hover {
    text-decoration: underline
}

#thanglong-alo-wrapper.night-mode {
    color: #fff;
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-popup-close {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUY2REUyNDQxNDE2MTFFNThBNEJENTVFNDA2QjFFOUEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUY2REUyNDMxNDE2MTFFNThBNEJENTVFNDA2QjFFOUEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVmYzc3OTY1LWUxNWUtNGU0Ni04ODFjLTBlOTQ3YjBmMzBmNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz56uyuzAAABfUlEQVR42sSXvU7DMBDHYxCdw8IDMMCWTDwCdClznLcJr9BUfYs+ALDSqXMisTD3S4K1MBx3kS1ZVuqvNslf+kuRfL5f5OTsMwOAyEFX6DH6Ef2AvkXHYuwH/YVeod/Rr+g/a0YCGxyjC/QW3LUTc2JTbhOUo9cQrrXI4Qy+RM/hfJqLnEYwBSzg/FrocB1cQneaHQNn0L0yyWOinKg0PtE3Ubfaou+bEhRvUEB/KuRSj2x1muc51HVtzUgxnHNbGLFGBJ7YIquqgjRNjXAaS5KkiXXQhMBTl0gT3BNKKgn84RrdBg+AkpaR5z7cAAhEwEBo850JfPCdJeGBUNLhIqQYGWOtz17yXWp1edVlD1nqZQi07Zv7/lzTUOgJ8NJpA5FQU2JP+LPcMvfGIyXLnBISnGJdt8xBDom+j8Ud+k49FvtqBPix1mc2ROszaLM3WHurN/SbE4Ab34Zev8K82Opc017MMV5hmOel7Um5tF2LsW/l0vYm/GtL+C/AAAHy+OD95QLeAAAAAElFTkSuQmCC")
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-popup {
    background-color: #fff;
    margin-top: 80px;
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-popup h4 {
    margin-bottom: 10px;
    text-transform: uppercase;
    max-width: 500px;
    font-weight: bold;
    line-height: 1.5;
    color: #fff;
}
#thanglong-alo-wrapper.night-mode .thanglong-alo-popup h4.info {
    margin:5px 0;
	font-weight:normal;
	 text-transform:none;
	max-width:500px;
	color:#fff;
	font-size:15px;
	letter-spacing:0.8px;
}



#thanglong-alo-wrapper.night-mode .thanglong-alo-popup .thanglong-alo-input-wrapper label {
    color: #616161;
    font-size: 18px;
    height: 28px;
    line-height: 28px;
    padding-right: 15px
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-popup .thanglong-alo-input-wrapper input[type="text"]::-webkit-input-placeholder {
    color: #60615f
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-popup .thanglong-alo-input-wrapper input[type="text"]::-moz-placeholder {
    color: #60615f
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-popup .thanglong-alo-input-wrapper input[type="text"]::-ms-input-placeholder {
    color: #60615f
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-popup .thanglong-alo-input-wrapper input[type="text"]::-moz-placeholder {
    color: #60615f
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-popup .thanglong-alo-powered a {
    color: #fff
}

#thanglong-alo-wrapper.night-mode input[type="text"].thanglong-alo-number {
    border: #00bed5 solid 1px;
    background: #fff;
	text-align: center;
	padding: 8px 120px;
	outline:5px solid #fff !important;
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-message {
    padding-bottom: 0
}

#thanglong-alo-wrapper.night-mode h4 {
    font-size: 22px;
    text-align: center;
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-request-time {
    color: #fff;
    background-color: #515350;
    border: 1px solid #606260
}

#thanglong-alo-wrapper.night-mode .thanglong-alo-form .thanglong-alo-select-wrapper {
    margin-bottom: 35px
}


.thanglong-alo-blur {
    -webkit-filter: blur(3px);
    -ms-filter: blur(3px);
    -moz-filter: blur(3px);
    -o-filter: blur(3px);
    filter: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxmaWx0ZXIgaWQ9ImJsdXIiPjxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjMiLz48L2ZpbHRlcj48L3N2Zz4jYmx1cg==#blur")
}

#thanglong-countdown {
    padding-top: 20px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 28px;
    font-weight: 300
}

#thanglong-alo-wrapper.alo-mobile .thanglong-alo-cell {
    background-color: #fff;
    z-index: 9999999;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%
}

#thanglong-alo-wrapper.alo-mobile .thanglong-alo-header {
    padding-bottom: 30px;
    position: relative
}

#thanglong-alo-wrapper.alo-mobile .thanglong-alo-popup-close {
    width: 50px !important;
    height: 19px !important;
    position: absolute !important;
    top: -30px !important;
    left: 50% !important;
    margin-left: -15px !important;
    background-image: none !important;
}

#thanglong-alo-wrapper.alo-mobile .thanglong-alo-popup-close .arrow {
    margin-top: 7px;
    position: relative;
    text-align: center !important;
    margin-bottom: 6px !important;
    height: 4px;
    width: 100%;
}

#thanglong-alo-wrapper.alo-mobile .thanglong-alo-popup-close .arrow:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 50%;
    background: #333;
    -webkit-transform: skew(0, 30deg);
    -moz-transform: skew(0, 30deg);
    -ms-transform: skew(0, 30deg);
    -o-transform: skew(0, 30deg);
    transform: skew(0, 30deg);
    -webkit-transition: transform 1s;
    transition: transform 1s
}

#thanglong-alo-wrapper.alo-mobile .thanglong-alo-popup-close .arrow:after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 50%;
    background: #333;
    -webkit-transform: skew(0, -30deg);
    -moz-transform: skew(0, -30deg);
    -ms-transform: skew(0, -30deg);
    -o-transform: skew(0, -30deg);
    transform: skew(0, -30deg)
}

#thanglong-alo-wrapper.alo-mobile.night-mode .thanglong-alo-popup {
    background-image: none
}

#thanglong-alo-wrapper.alo-mobile.night-mode .thanglong-alo-cell {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wYZCyAMHYpuhwAAAA1JREFUCNdjMDY2/gwAAsMBjX/tf+YAAAAASUVORK5CYII=")
}

.thanglong-report{

}
.thanglong-report.error{
    color:#191d20;
	font-size:18px;
	padding:5px 10px;
}
.thanglong-report.success{
    color:#191d20;
	font-size:18px;
    padding:5px 10px;
}
input.nhap-sdt {
    width: 75%;
    padding: 15px;
    border: 2px solid #ffffff;
    background: #2EAAE1;
    margin-top: 10px;
    border-radius: 5px;
}
input.gui {
    margin-top: 15px;
    background: #f98b10;
    border-radius: 5px;
    padding: 10px;
    border: 2px solid #fff;
}
</style>
<div class="thanglong-alo-phone">
  <div class="thanglong-alo-ph-circle"></div>
  <div class="thanglong-alo-ph-circle-fill"></div>
  <div class="thanglong-alo-ph-img-circle delaiso"></div>
</div>
<div id="thanglong-alo-wrapper" class="night-mode">
  <div class="thanglong-alo-overlay"></div>
  <div class="thanglong-alo-table" style="left: 0px; top: 0px; transform: scale(1, 1); transform-origin: left top 0px;">
    <div class="thanglong-alo-cell">
      <div class="thanglong-alo-popup">
        <div class="thanglong-alo-header"><span class="thanglong-alo-popup-close"></span></div>
        <div class="thanglong-alo-form" id="thanglongong-alo-form"> <img src="img/logo-popup.png" width="70%">
          <div class="form-tuvan">
            <h4>Nhập số điện thoại của bạn,<br>
              Bác Sĩ sẽ gọi lại tư vấn cho bạn</h4>
            <h4 class="info">Mọi Thông Tin Hoàn Toàn Bảo Mật ***</h4>
            <form method="POST" id="ss-form" class="dh_box">
              <input class="nhap-sdt" value="" name="sodienthoai" type="text" placeholder="Nhập Số Điện Thoại..." id="entry.1431515636" dir="auto" aria-label="Số điện thoại  Phải là một số lớn hơn 0" aria-required="true" required="" step="any" title="Phải là số">
              <input type="hidden" name="vitri" value="right">
              <input value="Gửi Số Điện Thoại" type="submit" class="gui" name="pp-submit" id="ss-submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
jQuery(function($){
$('.delaiso').click(function(){
    $("#thanglong-alo-wrapper").show();
});
$(".thanglong-alo-popup-close").click(function(){
        $("#thanglong-alo-wrapper").hide();
    });
$("#ss-submit").click(function(){
  location.reload();
})
 });
</script>
<!--end-->
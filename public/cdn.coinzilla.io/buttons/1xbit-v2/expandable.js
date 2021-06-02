var czilla_button_ready=function(callback){if(document.readyState==="interactive"||document.readyState==="complete"){callback();}else if(document.addEventListener){document.addEventListener("DOMContentLoaded",callback);}else if(document.attachEvent){document.attachEvent("onreadystatechange",function(){if(document.readyState!="loading"){callback();}});}};czilla_button_ready(function(){var czilla_expandable=(function(){var czilla_expandable={push:function(){if(!util.isCookieEnabled())return;if(util.getCookie("_coinzilla_expandable_button_disabled_"))return;load["initialized"]=function(){return new this();};load["initialized"]();}};var fullAgent=navigator.userAgent,userAgent=navigator.userAgent.toLowerCase(),mobile={true:/iphone|ipad|android|ucbrowser|iemobile|ipod|blackberry|bada/.test(userAgent)},load=function(){this.construct()},util={getCookie:function(name){var cookieMatch=document.cookie.match(new RegExp(name+'=([^;]+)'));if(cookieMatch){return decodeURIComponent(cookieMatch[1]);}else return null;},setCookie:function(name,value,minutes,path){if(minutes===null||typeof minutes=='undefined'){minutes=null;}else{var date;if(typeof minutes=='number'){date=new Date();date.setTime(date.getTime()+minutes*60*1e3);}else{date=minutes;}
minutes='; expires='+date.toUTCString();}
document.cookie=name+'='+encodeURIComponent(value)+minutes+'; path='+(path||'/');},isCookieEnabled:function(){return navigator.cookieEnabled;},bind:function(fn,action,target){if(target.addEventListener){target.addEventListener(action,fn);}else if(target.attachEvent){target.attachEvent("on"+action,fn);}},isEmptyString:function(string){return((typeof string=='undefined')||(string==null)||(string==false)||(string.length==0)||(string=="")||(string.replace(/\s/g,"")=="")||(!/[^\s]/.test(string))||(/^\s*$/.test(string)));}};load.prototype={construct:function(){var elem=document.createElement('div');elem.id="coinzilla_expandable_widget_6j45wq4km";console.log(elem);document.body.appendChild(elem);var css="@font-face {\n"+
"            font-family: JostBold;\n"+
"            src: url(https://cdn.coinzilla.io/buttons/1xbit-v2/jost-bold.ttf);\n"+
"        }\n"+
"        @font-face {\n"+
"            font-family: JostMedium;\n"+
"            src: url(https://cdn.coinzilla.io/buttons/1xbit-v2/jost-medium.ttf);\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km, .button-expandable-section-mobile_6j45wq4km {\n"+
"            font-family: JostMedium;\n"+
"            position: fixed;\n"+
"            bottom: 50px;\n"+
"            right: 50px;\n"+
"            color: white;\n"+
"            z-index: 999999999;\n"+
"            line-height: 1;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km {\n"+
"            position: relative;\n"+
"            cursor: pointer;\n"+
"            display: block;\n"+
"            border-radius: 80px;\n"+
"            background: #242432;\n"+
"            width: 138px;\n"+
"            height: 138px;\n"+
"            -webkit-transition: width ease-in-out 0.5s;\n"+
"            -o-transition: width ease-in-out 0.5s;\n"+
"            transition: width ease-in-out 0.5s;\n"+
"            overflow: hidden;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .logo_6j45wq4km,\n"+
"        .button-expandable-section-mobile_6j45wq4km .logo_6j45wq4km{\n"+
"            width: 100px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .coins_6j45wq4km,\n"+
"        .button-expandable-section-mobile_6j45wq4km .coins_6j45wq4km{\n"+
"            width: 100px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .coins_top_6j45wq4km,\n"+
"        .button-expandable-section-mobile_6j45wq4km .coins_top_6j45wq4km{\n"+
"            width: 100px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .close_6j45wq4km img,\n"+
"        .button-expandable-section-mobile_6j45wq4km .close_6j45wq4km img{\n"+
"            width: 10px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .first-content_6j45wq4km {\n"+
"            padding-top: 22px;\n"+
"            text-align: center;\n"+
"            display: inline-block;\n"+
"            width: 138px;\n"+
"            height: 138px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .first-content_6j45wq4km .logo_6j45wq4km {\n"+
"            margin-top: 33px;\n"+
"            margin-bottom: 7px;\n"+
"            -webkit-transition: all ease-in-out 0.5s;\n"+
"            -o-transition: all ease-in-out 0.5s;\n"+
"            transition: all ease-in-out 0.5s;\n"+
"            /*transition-delay: 0.5s;*/\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .first-content_6j45wq4km span {\n"+
"            color: white;\n"+
"            opacity: 1;\n"+
"            margin-bottom: 3px;\n"+
"            display: block;\n"+
"            -webkit-transition: opacity ease-in-out 0.5s;\n"+
"            -o-transition: opacity ease-in-out 0.5s;\n"+
"            transition: opacity ease-in-out 0.5s;\n"+
"            -webkit-transition-delay: 0.5s;\n"+
"            -o-transition-delay: 0.5s;\n"+
"            transition-delay: 0.5s;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .first-content_6j45wq4km span#first_6j45wq4km {\n"+
"            font-size: 16px;\n"+
"            letter-spacing: .5px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .first-content_6j45wq4km span#second_6j45wq4km {\n"+
"            font-size: 19px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .bold_6j45wq4km {\n"+
"            font-family: JostBold;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .orange-6j45wq4km,\n"+
"        .button-expandable-section-mobile_6j45wq4km .orange-6j45wq4km{\n"+
"            color: #db5d00;\n"+
"            font-family: JostBold;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .coins_6j45wq4km {\n"+
"            position: absolute;\n"+
"            bottom: -15px;\n"+
"            left: -30px;\n"+
"            width:180px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .coins_top_6j45wq4km {\n"+
"            position: absolute;\n"+
"            top: -15px;\n"+
"            left: -30px;\n"+
"            width:180px;\n"+
"            z-index: 9999999;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .close_6j45wq4km {\n"+
"            border-radius: 50%;\n"+
"            background: #242432;\n"+
"            position: absolute;\n"+
"            top: -10px;\n"+
"            right: -20px;\n"+
"            padding: 5px;\n"+
"            line-height: 1;\n"+
"            font-size: 0;\n"+
"            opacity: 1;\n"+
"            width: 20px;\n"+
"            height: 20px;\n"+
"            box-sizing: border-box;\n"+
"            cursor: pointer;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km {\n"+
"            text-align: left;\n"+
"            display: inline-block;\n"+
"            position: absolute;\n"+
"            top: 13px;\n"+
"            right: -300px;\n"+
"            -webkit-transition: right ease-in-out 0.5s;\n"+
"            -o-transition: right ease-in-out 0.5s;\n"+
"            transition: right ease-in-out 0.5s;\n"+
"            width: 250px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km div.small-text_6j45wq4km,\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .small-text_6j45wq4km {\n"+
"            font-size: 13px;\n"+
"            line-height: 16px;\n"+
"            font-family: JostMedium;\n"+
"            color:#c4c4c4;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km div.small-text_top_6j45wq4km,\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .small-text_top_6j45wq4km {\n"+
"            font-size: 13px;\n"+
"            line-height: 16px;\n"+
"            margin-bottom: 3px;\n"+
"            font-family: JostMedium;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .title_6j45wq4km,\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .title_6j45wq4km {\n"+
"            font-size: 13px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .button_6j45wq4km,\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .button_6j45wq4km {\n"+
"            margin: 5px 0 5px 0;\n"+
"            padding: 10px 20px;\n"+
"            font-size: 15px;\n"+
"            font-family: JostBold;\n"+
"            letter-spacing: 1px;\n"+
"            border-radius: 25px;\n"+
"            background: #db5d00;\n"+
"            border: none;\n"+
"            color: white;\n"+
"            position: relative;\n"+
"            overflow: hidden;\n"+
"            text-decoration: none;\n"+
"            display: inline-block;\n"+
"            -webkit-transition: all ease-in-out 0.3s;\n"+
"            -o-transition: all ease-in-out 0.3s;\n"+
"            transition: all ease-in-out 0.3s;\n"+
"            -webkit-transition-delay: 0.3s;\n"+
"            -o-transition-delay: 0.3s;\n"+
"            transition-delay: 0.3s;\n"+
"            line-height: 10px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .title_6j45wq4km > div,\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .title_6j45wq4km > div {\n"+
"            display: inline-block;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .title_6j45wq4km > div:first-child,\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .title_6j45wq4km > div:first-child {\n"+
"            margin-right: 10px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .title_6j45wq4km > div:last-child,\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .title_6j45wq4km > div:last-child {\n"+
"            display: inline-block;\n"+
"            text-align: left;\n"+
"            font-size: 16px;\n"+
"            font-family: JostBold;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .top_6j45wq4km,\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .bottom_6j45wq4km {\n"+
"            display: block;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .top_6j45wq4km {\n"+
"            font-size: 24px;\n"+
"            font-family: JostBold;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .bottom_6j45wq4km,\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .button_6j45wq4km {\n"+
"            font-size: 10px;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .button_6j45wq4km::before,\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .button_6j45wq4km::before {\n"+
"            -webkit-animation-delay: .5s;\n"+
"            animation-delay: .5s;\n"+
"            -webkit-animation-timing-function: ease-in-out;\n"+
"            animation-timing-function: ease-in-out;\n"+
"            -webkit-animation-iteration-count: infinite;\n"+
"            animation-iteration-count: infinite;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .circle_6j45wq4km .second-content_6j45wq4km .button_6j45wq4km::after,\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .button_6j45wq4km::after {\n"+
"            -webkit-animation-delay: .05s;\n"+
"            animation-delay: .05s;\n"+
"            -webkit-animation-timing-function: ease-in-out;\n"+
"            animation-timing-function: ease-in-out;\n"+
"            -webkit-animation-iteration-count: infinite;\n"+
"            animation-iteration-count: infinite;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km:hover .circle_6j45wq4km {\n"+
"            width: 420px;\n"+
"            -webkit-transition: width ease-in-out 0.5s;\n"+
"            -o-transition: width ease-in-out 0.5s;\n"+
"            transition: width ease-in-out 0.5s;\n"+
"            -webkit-transition-delay: 0.3s;\n"+
"            -o-transition-delay: 0.3s;\n"+
"            transition-delay: 0.3s;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km:hover .circle_6j45wq4km .first-content_6j45wq4km {\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km:hover .circle_6j45wq4km .first-content_6j45wq4km .logo_6j45wq4km {\n"+
"            margin-top: 40px;\n"+
"            width: 100px;\n"+
"            -webkit-transition: all ease-in-out 0.5s;\n"+
"            -o-transition: all ease-in-out 0.5s;\n"+
"            transition: all ease-in-out 0.5s;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km:hover .circle_6j45wq4km .first-content_6j45wq4km span {\n"+
"            opacity: 0;\n"+
"            -webkit-transition-delay: 0.5s;\n"+
"            -o-transition-delay: 0.5s;\n"+
"            transition-delay: 0.5s;\n"+
"            -webkit-transition: opacity ease-in-out 0.5s;\n"+
"            -o-transition: opacity ease-in-out 0.5s;\n"+
"            transition: opacity ease-in-out 0.5s;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km:hover .circle_6j45wq4km .second-content_6j45wq4km {\n"+
"            right: 25px;\n"+
"            -webkit-transition: all ease-in-out 0.5s;\n"+
"            -o-transition: all ease-in-out 0.5s;\n"+
"            transition: all ease-in-out 0.5s;\n"+
"            -webkit-transition-delay: 0.3s;\n"+
"            -o-transition-delay: 0.3s;\n"+
"            transition-delay: 0.3s;\n"+
"        }\n"+
"        .button-expandable-section_6j45wq4km .close_6j45wq4km:hover {\n"+
"            cursor: pointer;\n"+
"        }\n"+
"        .button-expandable-section-mobile_6j45wq4km {\n"+
"            width: 100%;\n"+
"            position: fixed;\n"+
"            bottom: 0;\n"+
"            right: 0;\n"+
"        }\n"+
"        .button-expandable-section-mobile_6j45wq4km a, .button-expandable-section_6j45wq4km a {\n"+
"            text-decoration: none;\n"+
"            color: white;\n"+
"        }\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km {\n"+
"            display: -webkit-box;\n"+
"            display: -ms-flexbox;\n"+
"            display: flex;\n"+
"            -webkit-box-orient: vertical;\n"+
"            -webkit-box-direction: normal;\n"+
"            -ms-flex-direction: column;\n"+
"            flex-direction: column;\n"+
"            -ms-flex-wrap: wrap;\n"+
"            flex-wrap: wrap;\n"+
"            -webkit-box-pack: center;\n"+
"            -ms-flex-pack: center;\n"+
"            justify-content: center;\n"+
"            text-align: center;\n"+
"            position: relative;\n"+
"            cursor: pointer;\n"+
"            height: 75px;\n"+
"            background: #242432;\n"+
"            overflow: hidden;\n"+
"        }\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .button_6j45wq4km {\n"+
"            font-size: 12px;\n"+
"        }\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .left_6j45wq4km > div:first-child {\n"+
"            margin-top: 5px;\n"+
"            margin-bottom: 5px;\n"+
"        }\n"+
"        .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .center_6j45wq4km > div:first-child {\n"+
"            margin-bottom: 6px;\n"+
"        }\n"+
"        .button-expandable-section-mobile_6j45wq4km .close_6j45wq4km {\n"+
"            border-radius: 50%;\n"+
"            background: #242432;\n"+
"            position: absolute;\n"+
"            top: -34px;\n"+
"            right: 15px;\n"+
"            padding: 5px;\n"+
"            line-height: 1;\n"+
"            font-size: 0;\n"+
"            opacity: 1;\n"+
"            width: 20px;\n"+
"            height: 20px;\n"+
"            box-sizing: border-box;\n"+
"            cursor: pointer;\n"+
"        }\n"+
"        .button-expandable-section-mobile_6j45wq4km .coins_6j45wq4km {\n"+
"            width: 90px;\n"+
"        }\n"+
"        @-webkit-keyframes coinsAnimation_6j45wq4km {\n"+
"            0% {\n"+
"                left: -30px;\n"+
"            }\n"+
"            50% {\n"+
"                left: -30px;\n"+
"            }\n"+
"            100% {\n"+
"                left: -30px;\n"+
"            }\n"+
"        }\n"+
"        @keyframes coinsAnimation_6j45wq4km {\n"+
"            0% {\n"+
"                left: -30px;\n"+
"            }\n"+
"            50% {\n"+
"                left: -30px;\n"+
"            }\n"+
"            100% {\n"+
"                left: -30px;\n"+
"            }\n"+
"        }\n"+
"        @media only screen and (min-width: 992px) {\n"+
"            .button-expandable-section-mobile_6j45wq4km {\n"+
"                display: none;\n"+
"            }\n"+
"            .button-expandable-section_6j45wq4km {\n"+
"                display: block;\n"+
"            }\n"+
"        }\n"+
"        @media only screen and (max-width: 991px) {\n"+
"            .button-expandable-section-mobile_6j45wq4km {\n"+
"                display: block;\n"+
"            }\n"+
"            .button-expandable-section_6j45wq4km {\n"+
"                display: none;\n"+
"            }\n"+
"        }\n"+
"        @media only screen and (max-width: 450px) {\n"+
"            .button-expandable-section-mobile_6j45wq4km .bar_6j45wq4km .right_6j45wq4km{\n"+
"                display: none;\n"+
"            }\n"+
"        }";var style=document.createElement('style');style.type='text/css';if(style.styleSheet){style.styleSheet.cssText=css;}else{style.appendChild(document.createTextNode(css));}
document.getElementById("coinzilla_expandable_widget_6j45wq4km").appendChild(style);var e=document.createElement('div');e.innerHTML='<div class="button-expandable-section_6j45wq4km" id="button-expandable-section_6j45wq4km">\n'+
'    <div style="position:relative;">\n'+
'        <a href="https://refpazkjixes.top//L?tag=d_825547m_1732c_aprl&site=825547&ad=1732" rel="nofollow" target="_blank">\n'+
'            <img src="https://cdn.coinzilla.io/buttons/1xbit-v2/top.png" class="coins_top_6j45wq4km">\n'+
'            <div class="circle_6j45wq4km">\n'+
'                <div class="first-content_6j45wq4km">\n'+
'                    <img src="https://cdn.coinzilla.io/buttons/1xbit-v2/1xbit_com.svg" class="logo_6j45wq4km">\n'+
'                    <span class="bold_6j45wq4km" id="first_6j45wq4km">CLAIM 7 BTC</span>\n'+
'                </div>\n'+
'                <div class="second-content_6j45wq4km">\n'+
'                    <div class="title_6j45wq4km">\n'+
'                        <div>\n'+
'                            <div class="top_6j45wq4km">CLAIM 7 BTC</div>\n'+
'                        </div>\n'+
'                    </div>\n'+
'                    <span class="button_6j45wq4km">JOIN 1XBIT</span>\n'+
'                    <div class="small-text_top_6j45wq4km"> no fees, fast payouts, total anonymity </div>\n'+
'                    <div class="small-text_6j45wq4km ">\n'+
'                        Exclusive promo code <span class="orange-6j45wq4km">COINWB</span>\n'+
'                        <br>\n'+
'                        for 125% welcome bonus.\n'+
'                    </div>\n'+
'                </div>\n'+
'            </div>\n'+
'            <img src="https://cdn.coinzilla.io/buttons/1xbit-v2/bottom.png" class="coins_6j45wq4km">\n'+
'        </a>\n'+
'        <div class="close_6j45wq4km button-expandable-close_6j45wq4km">\n'+
'            <img src="https://cdn.coinzilla.io/buttons/1xbit-v2/x.png">\n'+
'        </div>\n'+
'    </div>\n'+
'</div>\n'+
'<div class="button-expandable-section-mobile_6j45wq4km" id="button-expandable-section-mobile_6j45wq4km">\n'+
'    <div style="position:relative;">\n'+
'        <a href="https://refpazkjixes.top//L?tag=d_825547m_1732c_aprl&site=825547&ad=1732">\n'+
'            <div class="bar_6j45wq4km">\n'+
'                <div class="left_6j45wq4km">\n'+
'                    <div><img src="https://cdn.coinzilla.io/buttons/1xbit-v2/1xbit_com.svg" class="logo_6j45wq4km"></div>\n'+
'                </div>\n'+
'                <div class="center_6j45wq4km">\n'+
'                    <div class="title_6j45wq4km">\n'+
'                        <div>\n'+
'                            <div class="top_6j45wq4km">CLAIM 7 BTC</div>\n'+
'                        </div>\n'+
'                    </div>\n'+
'                    <div class="small-text_6j45wq4km">\n'+
'                        Exclusive promo code <span class="orange-6j45wq4km">COINWB</span>\n'+
'                        <br>\n'+
'                        for 125% welcome bonus.\n'+
'                    </div>\n'+
'                </div>\n'+
'                <div class="right_6j45wq4km">\n'+
'                    <span class="button_6j45wq4km">JOIN 1XBIT</span>\n'+
'                </div>\n'+
'            </div>\n'+
'        </a>\n'+
'        <div class="close_6j45wq4km button-expandable-close_6j45wq4km">\n'+
'            <img src="https://cdn.coinzilla.io/buttons/1xbit-v2/x.png">\n'+
'        </div>\n'+
'    </div>\n'+
'</div>';document.getElementById("coinzilla_expandable_widget_6j45wq4km").appendChild(e);document.querySelectorAll('.button-expandable-close_6j45wq4km').forEach(item=>{util.bind(function(e){e.preventDefault();var div=document.getElementById("coinzilla_expandable_widget_6j45wq4km");div.parentNode.removeChild(div);util.setCookie("_coinzilla_expandable_button_disabled_","true",1440,"/");},"click",item);})},};if(typeof window.czilla_expandable!=="undefined"){for(var i=0;i<window.czilla_expandable.length;i++){czilla_expandable.push(window.czilla_expandable[i]);}}
return czilla_expandable;})().push();});
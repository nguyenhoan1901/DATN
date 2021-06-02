(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{391:function(e,t,n){"use strict";n.d(t,"a",(function(){return c})),n.d(t,"c",(function(){return l})),n.d(t,"b",(function(){return d}));n(11),n(29),n(40),n(26),n(7),n(62),n(27),n(53),n(6),n(443);var r=function(e,t){return t.encode?encodeURIComponent(e):e};function o(e,t){var n=Object.assign({questionMark:!1,encode:!0,strict:!0,arrayFormat:"none",sort:function(){}},t),o=function(e){switch(e.arrayFormat){case"index":return function(t,n,o){return null===n?[r(t,e),"[",o,"]"].join(""):[r(t,e),"[",r(o,e),"]=",r(n,e)].join("")};case"bracket":return function(t,n){return null===n?[r(t,e),"[]"].join(""):[r(t,e),"[]=",r(n,e)].join("")};default:return function(t,n){return null===n?r(t,e):[r(t,e),"=",r(n,e)].join("")}}}(n),c=e?Object.keys(e).sort(n.sort).map((function(t){var c=e[t];if(void 0===c)return"";if(null===c)return r(t,n);if(Array.isArray(c)){for(var l=[],d=c.slice(),i=0;i<d.length;i+=1){var f=d[i];void 0!==f&&l.push(o(t,f,l.length))}return l.join("&")}return"".concat(r(t,n),"=").concat(r(c,n))})).filter((function(e){return e.length>0})).join("&"):"";return c?n.questionMark?"?".concat(c):c:""}function c(base,e){var t=base;return void 0!==e&&1!==e&&(t="".concat(base,"?page=").concat(e)),{rel:"canonical",href:t}}function l(base,e,t){return!(e<=1)&&(2!==e&&(t.page=e-1),{rel:"prev",href:"".concat(base).concat(o(t,{questionMark:!0}))})}function d(base,e,t,n){return!(e>=t)&&(n.page=e+1,{rel:"next",href:"".concat(base).concat(o(n,{questionMark:!0}))})}},392:function(e,t,n){"use strict";n(36),n(30);var r={name:"Leaderboard",serverCacheKey:function(e){return"".concat(e.light)},props:{light:{type:Boolean,required:!1,default:!0},id:{type:String,required:!1,default:"1601626953798"},sizes:{type:Array,required:!1,default:function(){return["970x250","728x90","300x250","320x100","320x50","300x50"]}},targeting:{type:Object,required:!1,default:function(){}}},data:function(){return{loaded:!1,visible:!1}},computed:{className:function(){var e=["leaderboard"];return this.light&&e.push("leaderboard--light"),this.loaded&&e.push("leaderboard--loaded"),e},sizeMap:function(){var e=[];this.sizes.includes("728x90")&&e.push([728,90]),this.sizes.includes("970x250")&&e.push([970,250]);var t=[];return this.sizes.includes("300x250")&&t.push([300,250]),this.sizes.includes("320x100")&&t.push([320,100]),this.sizes.includes("320x50")&&t.push([320,50]),this.sizes.includes("300x50")&&t.push([300,50]),[[[1024,0],e],[[0,0],t]]},bids:function(){var e=[];return this.sizes.includes("728x90")&&e.push({bidder:"coinzilla",sizeConfig:[{minViewPort:[0,0],relevantMediaTypes:["none"]},{minViewPort:[1024,0],relevantMediaTypes:["banner"]}],params:{placementId:"73635a214656c8eb8"}}),this.sizes.includes("970x250")&&e.push({bidder:"coinzilla",sizeConfig:[{minViewPort:[0,0],relevantMediaTypes:["none"]},{minViewPort:[1024,0],relevantMediaTypes:["banner"]}],params:{placementId:"4295f59e928ae05e193"}}),this.sizes.includes("300x250")&&e.push({bidder:"coinzilla",sizeConfig:[{minViewPort:[0,0],relevantMediaTypes:["banner"]},{minViewPort:[1024,0],relevantMediaTypes:["none"]}],params:{placementId:"553335a214656c5e45"}}),this.sizes.includes("320x100")&&e.push({bidder:"coinzilla",sizeConfig:[{minViewPort:[0,0],relevantMediaTypes:["banner"]},{minViewPort:[1024,0],relevantMediaTypes:["none"]}],params:{placementId:"8725e46c081da09b345"}}),this.sizes.includes("320x50")&&e.push({bidder:"coinzilla",sizeConfig:[{minViewPort:[0,0],relevantMediaTypes:["banner"]},{minViewPort:[1024,0],relevantMediaTypes:["none"]}],params:{placementId:"8225e46c09a9d2d044"}}),e}},methods:{handleSlotRendered:function(e){var t=e.isEmpty;this.loaded=!1===t},onWaypoint:function(e){e.going!==this.$waypointMap.GOING_IN||this.loading||(this.visible=!0)}}},o=(n(454),n(8)),component=Object(o.a)(r,(function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{class:e.className},[n("div",{directives:[{name:"waypoint",rawName:"v-waypoint",value:{active:!0,callback:e.onWaypoint,options:{rootMargin:"300px"}},expression:"{\n      active: true,\n      callback: onWaypoint,\n      options: { rootMargin: '300px' },\n    }"}]}),e._v(" "),n("div",{staticClass:"leaderboard__wrapper"},[n("a",{staticClass:"leaderboard__link",attrs:{href:"https://coinranking.com/page/advertise"}},[e._v("\n      Advertise here\n    ")]),e._v(" "),n("div",{staticClass:"leaderboard__holder"},[n("client-only",[e.visible?n("Prebid",{staticClass:"leaderboard__slot",attrs:{id:e.id,"ad-unit":"02_coinzilla_970x250","size-map":e.sizeMap,bids:e.bids,targeting:e.targeting},on:{slotRendered:e.handleSlotRendered}}):e._e()],1)],1)])])}),[],!1,null,null,null);t.a=component.exports},401:function(e,t,n){"use strict";(function(e){n.d(t,"a",(function(){return r}));n(7),n(5),n(6),n(9),n(10),n(12),n(429);n(250).resolve;var r={mounted:function(){}}}).call(this,"/")},429:function(e,t){t.DEFAULT_OPTIONS={debug:!1,ghostMode:!1,prebidTimeout:3e3,failsafeTimeout:3e3,adServerCurrency:"USD",granularityMultiplier:1,priceGranularity:"auto"}},439:function(e,t,n){},443:function(e,t,n){"use strict";var r="%[a-f0-9]{2}",o=new RegExp(r,"gi"),c=new RegExp("("+r+")+","gi");function l(e,t){try{return decodeURIComponent(e.join(""))}catch(e){}if(1===e.length)return e;t=t||1;var n=e.slice(0,t),r=e.slice(t);return Array.prototype.concat.call([],l(n),l(r))}function d(input){try{return decodeURIComponent(input)}catch(t){for(var e=input.match(o),i=1;i<e.length;i++)e=(input=l(e,i).join("")).match(o);return input}}e.exports=function(e){if("string"!=typeof e)throw new TypeError("Expected `encodedURI` to be of type `string`, got `"+typeof e+"`");try{return e=e.replace(/\+/g," "),decodeURIComponent(e)}catch(t){return function(input){for(var e={"%FE%FF":"��","%FF%FE":"��"},t=c.exec(input);t;){try{e[t[0]]=decodeURIComponent(t[0])}catch(r){var n=d(t[0]);n!==t[0]&&(e[t[0]]=n)}t=c.exec(input)}e["%C2"]="�";for(var r=Object.keys(e),i=0;i<r.length;i++){var o=r[i];input=input.replace(new RegExp(o,"g"),e[o])}return input}(e)}}},454:function(e,t,n){"use strict";n(439)},472:function(e,t,n){n(7),n(5),n(6),n(9),n(10);var r=n(13),o=n(14);function c(object,e){var t=Object.keys(object);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(object);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(object,e).enumerable}))),t.push.apply(t,n)}return t}e.exports={functional:!0,render:function(e,t){var n=t._c,data=(t._v,t.data),l=t.children,d=void 0===l?[]:l,f=data.class,L=data.staticClass,style=data.style,m=data.staticStyle,h=data.attrs,v=void 0===h?{}:h,_=o(data,["class","staticClass","style","staticStyle","attrs"]);return n("svg",function(e){for(var i=1;i<arguments.length;i++){var source=null!=arguments[i]?arguments[i]:{};i%2?c(Object(source),!0).forEach((function(t){r(e,t,source[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(source)):c(Object(source)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(source,t))}))}return e}({class:[f,L],style:[style,m],attrs:Object.assign({xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 40 40",width:"20",height:"20"},v)},_),d.concat([n("path",{attrs:{stroke:"none",d:"M36 16L32 16L32 12L36 12L36 16ZM36 12L40 12L40 8L36 8L36 12ZM36 8L40 8L40 4L36 4L36 8ZM36 4L40 4L40 0L36 0L36 4ZM32 4L36 4L36 0L32 0L32 4ZM28 4L32 4L32 0L28 0L28 4ZM28 24L24 24L24 20L28 20L28 24ZM36 36L32 36L32 32L36 32L36 36ZM36 40L40 40L40 36L36 36L36 40ZM36 28L40 28L40 24L36 24L36 28ZM8 8L4 8L4 4L8 4L8 8ZM12 4L16 4L16 0L12 0L12 4ZM0 4L4 4L4 0L0 0L0 4ZM24 28L20 28L20 24L24 24L24 28ZM32 20L28 20L28 16L32 16L32 20ZM28 8L24 8L24 4L28 4L28 8ZM20 16L16 16L16 12L20 12L20 16ZM16 20L12 20L12 16L16 16L16 20ZM20 32L16 32L16 28L20 28L20 32ZM24 36L20 36L20 32L24 32L24 36ZM16 28L12 28L12 24L16 24L16 28ZM12 24L8 24L8 20L12 20L12 24ZM16 32L12 32L12 28L16 28L16 32ZM20 36L16 36L16 32L20 32L20 36ZM12 28L8 28L8 24L12 24L12 28ZM12 32L8 32L8 28L12 28L12 32ZM12 36L8 36L8 32L12 32L12 36ZM8 36L4 36L4 32L8 32L8 36ZM8 32L4 32L4 28L8 28L8 32ZM0 36L4 36L4 32L0 32L0 36ZM4 40L8 40L8 36L4 36L4 40ZM0 40L4 40L4 36L0 36L0 40ZM8 24L4 24L4 20L8 20L8 24ZM8 20L4 20L4 16L8 16L8 20ZM24 12L20 12L20 8L24 8L24 12Z"}})]))}}},475:function(e,t,n){"use strict";var r={name:"Nft",serverCacheKey:function(e){return"".concat(e.light,":").concat(JSON.stringify(e.nft))},props:{light:{type:Boolean,required:!1},nft:{type:Object,required:!0}},data:function(){return{hasError:!1}},computed:{tokenId:function(){return"Ethereum"===this.nft.registryBlockchain?"#".concat(this.nft.tokenId):String(this.nft.tokenId)}},methods:{setHasError:function(){this.hasError=!0}}},o=(n(591),n(8)),component=Object(o.a)(r,(function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{class:["nft-item",{"nft-item--light":e.light}]},[r("nuxt-link",{staticClass:"nft-item__image-holder",style:{backgroundColor:e.nft.backgroundColor?"#"+e.nft.backgroundColor:"#e5f0ff"},attrs:{to:e.localePath({name:"nft-slug",params:{slug:e.nft.slug}})}},[null===e.nft.image||e.hasError?r("img",{staticClass:"nft-item__image nft-item__image--placeholder",attrs:{src:n(487),alt:e.nft.dappName+": "+e.tokenId}}):r("img",{staticClass:"nft-item__image",attrs:{srcset:"\n        "+encodeURI(e.nft.image)+"?size=autox210&still=true 1x,\n        "+encodeURI(e.nft.image)+"?size=autox420&still=true 2x,\n        "+encodeURI(e.nft.image)+"?size=autox630&still=true 3x\n      ",loading:"lazy",src:encodeURI(e.nft.image)+"?size=autox210&still=true",alt:"Non-fungible token (NFT) "+e.nft.name+" with ID "+e.tokenId+" of "+e.nft.dappName},on:{error:e.setHasError}})]),e._v(" "),r("div",{staticClass:"nft-item__profile"},[r("nuxt-link",{staticClass:"nft-item__dapp-name",attrs:{to:e.localePath({name:"dapp-slug",params:{slug:e.nft.dappSlug}})}},[e._v("\n      "+e._s(e.nft.dappName)+"\n    ")]),e._v(" "),r("h2",{staticClass:"nft-item__name"},[r("nuxt-link",{staticClass:"nft-item__name-link",attrs:{to:e.localePath({name:"nft-slug",params:{slug:e.nft.slug}})}},[e._v("\n        "+e._s(null!==e.nft.name?e.nft.name:"...")+"\n      ")])],1),e._v(" "),r("div",{staticClass:"nft-item__token-id"},[r("p",[e._v("\n        "+e._s(e.tokenId)+"\n      ")])]),e._v(" "),null!==e.nft.priceInDollar?[r("div",{staticClass:"nft-item__label"},[e._v("\n        "+e._s(e.$t("component.nft.lastPrice"))+"\n      ")]),e._v(" "),r("div",{staticClass:"nft-item__price"},[e._v("\n        $ "+e._s(e.$humanNumber(e.nft.priceInDollar))+"\n      ")])]:r("div",{staticClass:"nft-item__label nft-item__label--not-sold"},[e._v("\n      "+e._s(e.$t("component.nft.notSoldLabel"))+"\n    ")]),e._v(" "),e.nft.auctionCreatedAt?r("div",{staticClass:"nft-item__created-at"},[e._v("\n      "+e._s(e.$timeAgo(e.nft.auctionCreatedAt))+"\n    ")]):e._e()],2)],1)}),[],!1,null,null,null);t.a=component.exports},487:function(e,t,n){e.exports=n.p+"7180f50d207862a8aa00ea14527b8890.svg"},510:function(e,t,n){},591:function(e,t,n){"use strict";n(510)}}]);
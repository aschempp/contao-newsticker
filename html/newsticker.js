﻿var Ticker=new Class({timer:null,initialize:function(d,b){this.setOptions(b);this.el=$(d);this.items=this.el.getElements("li");var a=0;var c=0;if(this.options.direction.toLowerCase()=="horizontal"){c=this.el.getSize().y;this.items.each(function(e,f){a+=e.getSize().x})}else{if(this.options.direction.toLowerCase()=="vertical"){a=this.el.getSize().x;this.items.each(function(e,f){c+=e.getSize().y})}else{a=this.el.getSize().x;c=this.el.getSize().y;this.items.setStyles({position:"absolute",top:0,opacity:0})}}this.el.setStyles({position:"absolute",top:0,left:0,width:a,height:c});if(this.options.direction.toLowerCase()=="fade"){this.fx=new Fx.Tween(this.items[0],{property:"opacity",duration:(this.options.speed/2),transition:this.options.transition}).set(1)}else{this.fx=new Fx.Morph(this.el,{duration:this.options.speed,transition:this.options.transition,onComplete:function(){var e=(this.current==0)?this.items.length:this.current;this.items[e-1].injectInside(this.el);this.el.setStyles({left:0,top:0})}.bind(this)})}this.current=0;if(this.options.delay>0){this.timer=this.next.bind(this).delay(this.options.delay+this.options.speed)}else{this.next()}},pause:function(){$clear(this.timer);this.timer=null},resume:function(){if(this.timer==null){this.next()}},next:function(){this.current++;if(this.current>=this.items.length){this.current=0}if(this.options.direction.toLowerCase()=="fade"){this.fx.start(1,0).chain((function(){this.fx=new Fx.Tween(this.items[this.current],{property:"opacity",duration:(this.options.speed/2),transition:this.options.transition}).start(0,1).chain((function(){if(this.options.delay==0){this.next()}}).bind(this))}).bind(this))}else{var a=this.items[this.current];this.fx.start({top:-a.offsetTop,left:-a.offsetLeft}).chain((function(){this.fx.element.getElements("li").each(function(e,d,c){var b=e.className;b=b.replace(/odd|even|first|last/g,"").clean();if(d==0){b+=" first"}if(d>=(c.length-1)){b+=" last"}b+=(d%2==0)?" even":" odd";e.className=b.trim()});if(this.options.delay==0){this.next()}}).bind(this))}if(this.options.delay>0){this.timer=this.next.bind(this).delay(this.options.delay+this.options.speed)}}});Ticker.implement(new Options);
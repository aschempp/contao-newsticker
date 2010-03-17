var Ticker = new Class({
	timer: null,
	initialize: function(el,options){
		this.setOptions(options);
		this.el = $(el);
		this.items = this.el.getElements('li');
		var w = 0;
		var h = 0;
		
		if(this.options.direction.toLowerCase()=='horizontal') {
			h = this.el.getSize().y;
				this.items.each(function(li,index) {
				w += li.getSize().x;
			});
		} else if(this.options.direction.toLowerCase()=='vertical') {
			w = this.el.getSize().x;
			this.items.each(function(li,index) {
				h += li.getSize().y;
			});
		}
		else {
			w = this.el.getSize().x;
			h = this.el.getSize().y;
			this.items.setStyles({
				position: 'absolute',
				top: 0,
				opacity: 0
			});
		}
		
		this.el.setStyles({
			position: 'absolute',
			top: 0,
			left: 0,
			width: w,
			height: h
		});
		
		if (this.options.direction.toLowerCase()=='fade')
		{
			this.fx = new Fx.Tween(this.items[0], {property:'opacity', duration:(this.options.speed/2), transition: this.options.transition}).set(1);
		}
		else
		{
			this.fx = new Fx.Morph(this.el, {duration:this.options.speed, transition: this.options.transition, onComplete:function() {
				var i = (this.current==0) ? this.items.length : this.current;
				this.items[i-1].injectInside(this.el);
				this.el.setStyles({
					left:0,
					top:0
				});
			}.bind(this)});
		}
		this.current = 0;
		
		if (this.options.delay > 0) {
			this.timer = this.next.bind(this).delay(this.options.delay+this.options.speed);
		} else {
			this.next();
		}
	},
	
	pause: function() {
	    $clear(this.timer);
	    this.timer = null;
	},
	resume: function() {
	    if (this.timer == null) {
	    	this.next();
	    }
	},
	next: function() {
		this.current++;
		if (this.current >= this.items.length) this.current = 0;
		
		if (this.options.direction.toLowerCase() == 'fade')
		{
			this.fx.start(1, 0).chain( (function() {
				this.fx = new Fx.Tween(this.items[this.current], {property:'opacity', duration:(this.options.speed/2), transition: this.options.transition}).start(0, 1).chain((function() {
					if (this.options.delay == 0)
						this.next();
				}).bind(this));
			}).bind(this));
		}
		else
		{
			var pos = this.items[this.current];
			this.fx.start({
				top: -pos.offsetTop,
				left: -pos.offsetLeft
			}).chain( (function() {
				// Update css classes
				this.fx.element.getElements('li').each( function(el, i, items)
				{
					var cls = el.className;
					cls = cls.replace(/odd|even|first|last/g, '').clean();
					
					// First element
					if (i == 0)
					{
						cls += ' first';
					}
		
					// Last element
					if (i >= (items.length-1))
					{
						cls += ' last';
					}
					
					// Odd/even
					cls += (i%2 == 0) ? ' even' : ' odd';
		
					// Apply css class
					el.className = cls.trim();
				});
				
				if (this.options.delay == 0)
					this.next();
			}).bind(this))
		}
		
		if (this.options.delay > 0) {
			this.timer = this.next.bind(this).delay(this.options.delay+this.options.speed);
		}
	}
});

Ticker.implement(new Options);

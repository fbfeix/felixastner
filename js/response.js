

var ResponsiveElement;

ResponsiveElement = (function() {
    
    var isOpen_ = false;
    
    function animate(opts) {

        var start = new Date   

        var id = setInterval(function() {
            var timePassed = new Date - start
            var progress = timePassed / opts.duration

            if (progress > 1) 
                progress = 1

            var delta = opts.delta(progress)
            opts.step(delta)

            if (progress == 1) {
                clearInterval(id)
            }
        }, opts.delay || 10)

    }

    
    function move(element, delta, duration) {
        var to = 80; 
        
        animate({
            delay: 10,
            duration: duration || 300, // 1 sec by default
            delta: delta,
            step: function(delta) {
                element.style.width = to*delta + "%"    
            }
        });

    }
    
    
    
    
    
    
    function circ(progress) {
        return 1 - Math.sin(Math.acos(progress))
    }

    function circO(progress) {
        return 0 + Math.sin(Math.acos(progress))
    }
    
    ResponsiveElement.prototype.matchesFilter = function () {
        if(this.mediaFilter) {
            return this.mediaFilter.matches ? true : false;
        }
        
        return true;
    };
    
    function ResponsiveElement(navNode, matchMedia) {
        this.navigationNode = navNode ? navNode : null;
        this.mediaFilter = matchMedia;        
    };

    ResponsiveElement.prototype.open = function() {
        if(this.matchesFilter() && !isOpen_) {
            isOpen_ = true;
            this.navigationNode.style.display = "Block";
            move(this.navigationNode, circ);
        }
    };
    
    ResponsiveElement.prototype.isOpen = function() {
        if(this.matchesFilter()) {
            return isOpen_;
        } else 
            return undefined;
        
    };
    
    ResponsiveElement.prototype.close = function() {
        if(this.matchesFilter() && isOpen_) {
            isOpen_ = false;
            
            var navN = this.navigationNode;
            
            setTimeout(function() {
                navN.style.display = "None";
            }, 300);
            move(this.navigationNode, circO);
            
            
        }
    };
    
    ResponsiveElement.prototype.toggle = function() {
        if(this.matchesFilter()) {
            console.log("toggle");
            
            if(isOpen_)
                this.close();
            else
                this.open();
            
        } else { /* do nothing */console.log("dont toggle"); }
    };

    return ResponsiveElement;

})();

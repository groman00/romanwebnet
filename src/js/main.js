(function(doc){
    
    [].forEach.call(doc.getElementsByClassName('animated'), function(el) {
        el.onmouseover = function() {
            this.classList.add(this.dataset.animation);
        };
        el.addEventListener("animationend", function() {
            this.classList.remove(this.dataset.animation);
        }, false);
    });

}(document));
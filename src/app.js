function addClass(el, className) {
    if (el.classList) {
        el.classList.add(className);
    } else {
        el.className += ' ' + className;
    }
}

function removeClass(el, className) {
    if (el.classList) {
        el.classList.remove(className);
    } else {
        el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
    }
}

function toggleClass(el, className) {
    if (el.classList) {
        el.classList.toggle(className);
    } else {
        var classes = el.className.split(' ');
        var existingIndex = classes.indexOf(className);
        if (existingIndex >= 0) {
            classes.splice(existingIndex, 1);
        } else {
            classes.push(className);
        }
        el.className = classes.join(' ');
    }
}

function siblings(el) {
    Array.prototype.filter.call(el.parentNode.children, function(child){
        return child !== el;
    });
}

function toggleTarget(toggleAttr, targetClasses, selfClasses) {
    var togglesArray = Array.from(document.querySelectorAll('[' + toggleAttr + ']'));
    togglesArray.forEach(function(item) {
        item.addEventListener(
            'click',
            function(event) {
                var target = document.querySelectorAll(this.getAttribute(toggleAttr))[0];
                targetClasses.forEach(function(targetclass) {
                    toggleClass(target, targetclass);
                })
                selfClasses.forEach(function(selfclass) {
                    toggleClass(item, selfclass);
                })
                event.preventDefault();
            },
            false
        );
    });
}

// toggleTarget('data-toggle-panel', ['block', 'hidden'], ['is-active']);

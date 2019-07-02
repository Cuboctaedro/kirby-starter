import 'lazysizes';

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


function toggleMenu() {
    var togglesArray = Array.from(document.querySelectorAll('[data-toggle-menu]'));
    togglesArray.forEach(function(item) {

        item.addEventListener(
            'click',
            function(event) {
                var target = document.querySelectorAll(this.getAttribute('data-toggle-menu'))[0];
                toggleClass(target, 'show');
                var state = this.getAttribute('aria-expanded');
                this.setAttribute('aria-expanded', !state);
            },
            false
        );
    });
}
toggleMenu();

function toggleSubmenu() {
    var togglesArray = Array.from(document.querySelectorAll('[data-toggle-submenu]'));

    var targets = togglesArray.map(toggle => document.querySelectorAll(toggle.getAttribute('data-toggle-submenu'))[0]);

    togglesArray.forEach(function(item) {
        item.addEventListener(
            'click',
            function(event) {
                var subtarget = document.querySelectorAll(this.getAttribute('data-toggle-submenu'))[0];
                subtarget.hidden = !subtarget.hidden;
                targets.forEach(function(el) {
                    if (el != subtarget ) {
                        el.hidden = true;
                    }
                })
                var state = this.getAttribute('aria-expanded');
                this.setAttribute('aria-expanded', !state);
            },
            false
        );
    });
}

toggleSubmenu();

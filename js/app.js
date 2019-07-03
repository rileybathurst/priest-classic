$(document).foundation();

// Initialize library to lazy load images
  var observer = lozad('.lozad', {
    threshold: 0.1,
    load: function(el) {
      el.src = el.getAttribute("data-src");
    }
  })

  // Picture observer
  // with default `load` method
  var pictureObserver = lozad('.lozad-picture', {
    threshold: 0.1,
  })

  // set observer
  // with default `load` method
  var setObserver = lozad('.lozad-set', {
    threshold: 0.1,
    load: function(el) {
      el.srcset = el.getAttribute("data-srcset");
    }
  })

  observer.observe()
  pictureObserver.observe()
  setObserver.observe()

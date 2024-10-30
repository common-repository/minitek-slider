((document, $) => {
  "use strict";

  class Mslider {
    /*
     * Constructor
     */
    constructor(options, id, path) {
      const self = this;
      this.options = options;
      this.widgetId = parseInt(id, 10);
      this.path = path;

      this.mediaSlider =
        this.options["slider-theme"][0] == "media-slider" ? true : false;
      this.hoverbox =
        this.options["slider-hover-box"][0] == "yes" ? true : false;
      this.container = document.querySelector("#mslider_" + this.widgetId);

      if (this.container == null) return;

      // Initialize slider
      this.initializeSlider();

      // Progress bar
      if (this.options["slider-progress-bar"][0] == "yes")
        this.initializeProgressBar();

      // Media slider
      if (this.mediaSlider) this.initializeMediaSlider();
    }

    initializeSlider() {
      const self = this;

      this.draggable = this.options["slider-drag"][0] == "yes" ? ">1" : false;
      this.freeScroll =
        this.options["slider-free-scroll"][0] == "yes" ? true : false;
      var wrapAround = this.options["slider-rewind"][0] == "yes" ? true : false;
      this.groupCells =
        this.options["slider-group-items"][0] == "yes" ? true : false;
      var autoplaySpeed = parseInt(this.options["slider-autoplay-speed"][0], 10)
        ? parseInt(this.options["slider-autoplay-speed"][0], 10)
        : 2500;
      var autoPlay =
        this.options["slider-autoplay"][0] == "yes" ? autoplaySpeed : false;
      var fullscreen = this.options["slider-fs"][0] == "yes" ? true : false;
      var fade = this.options["slider-fade"][0] == "yes" ? true : false;
      var adaptiveHeight =
        this.options["slider-adaptive-height"][0] == "yes" ? true : false;
      this.dragThreshold = parseInt(
        this.options["slider-drag-threshold"][0],
        10
      )
        ? parseInt(this.options["slider-drag-threshold"][0], 10)
        : 3;
      this.selectedAttraction = parseFloat(
        this.options["slider-selected-attraction"][0]
      )
        ? parseFloat(this.options["slider-selected-attraction"][0])
        : 0.025;
      this.friction = parseFloat(this.options["slider-friction"][0])
        ? parseFloat(this.options["slider-friction"][0])
        : 0.28;
      this.freeScrollFriction = parseFloat(
        this.options["slider-free-scroll-friction"][0]
      )
        ? parseFloat(this.options["slider-free-scroll-friction"][0])
        : 0.075;
      var cellAlign = this.options["slider-align"][0];
      var contain = this.options["slider-contain"][0] == "yes" ? true : false;
      this.rightToLeft = this.options["slider-rtl"][0] == "yes" ? true : false;
      var prevNextButtons =
        this.options["slider-navigation-arrows"][0] == "yes" ? true : false;
      var pageDots =
        this.options["slider-pagination-bullets"][0] == "yes" ? true : false;

      // Show slider
      this.container.style.display = "block";

      // Initialize Flickity
      this.slider = new Flickity(this.container, {
        draggable: this.draggable,
        freeScroll: this.freeScroll,
        wrapAround: wrapAround,
        groupCells: this.groupCells,
        autoPlay: autoPlay,
        pauseAutoPlayOnHover: false,
        fullscreen: fullscreen,
        fade: fade,
        adaptiveHeight: adaptiveHeight,
        hash: false,
        dragThreshold: this.dragThreshold,
        selectedAttraction: this.selectedAttraction,
        friction: this.friction,
        freeScrollFriction: this.freeScrollFriction,
        imagesLoaded: true,
        lazyLoad: false,
        cellSelector: ".mslider-item",
        initialIndex: 0,
        accessibility: true,
        setGallerySize: true,
        resize: true,
        cellAlign: cellAlign,
        contain: contain,
        rightToLeft: this.rightToLeft,
        percentPosition: true,
        prevNextButtons: prevNextButtons,
        pageDots: pageDots,
        on: {
          ready: function () {
            document
              .querySelector("#mslider_wrapper_" + self.widgetId)
              .classList.add("flickity-ready");
            self.fixHeights(false);
          },
          fullscreenChange: function (isFullscreen) {
            if (isFullscreen) self.fixHeights(true);
            else self.fixHeights(false);

            self.slider.resize();
          },
        },
      });
    }

    fixHeights(fullscreen, index = false) {
      var sliderPaddingTop = parseInt(this.options["slider-padding"][0], 10)
        ? parseInt(this.options["slider-padding"][0], 10)
        : 0;
      var sliderPaddingBottom = sliderPaddingTop;
      var sliderMarginBottom = 30;
      var mediaDbPaddingTop = 40;
      var maxMediaDb = 350;
      var bullets = this.container.querySelector(".flickity-page-dots");
      var progressbar = document.querySelector(
        "#mslider_progressbar_" + this.widgetId
      );

      if (fullscreen) {
        // Fix slider height
        var height =
          document.querySelector("#mslider_wrapper_" + this.widgetId)
            .offsetHeight - sliderPaddingTop;
        var slider_height = 0;
        var media_db_height = 0;
        var viewport_height;

        if (this.mediaSlider) {
          if (index !== false) {
            var detail_boxes = this.container.querySelectorAll(
              ".mslider-media-db .mslider-detail-box"
            );

            if (detail_boxes)
              media_db_height =
                detail_boxes[index].offsetHeight + mediaDbPaddingTop;
          } else {
            if (this.container.querySelector(".mslider-media-db"))
              media_db_height =
                this.container.querySelector(".mslider-media-db").offsetHeight +
                mediaDbPaddingTop;
          }

          media_db_height =
            media_db_height > maxMediaDb ? maxMediaDb : media_db_height;
        }

        if (!bullets && !progressbar) height = height - sliderPaddingBottom;
        else {
          if (bullets && !progressbar)
            sliderMarginBottom = 2 * sliderMarginBottom;
          else if (!bullets && progressbar) sliderMarginBottom = 10;
          else if (bullets && progressbar)
            sliderMarginBottom = 2 * sliderMarginBottom;
        }

        // Update calculations
        sliderMarginBottom = bullets || progressbar ? sliderMarginBottom : 0;

        // Container
        slider_height = height - sliderMarginBottom;
        this.container.style.height = slider_height + "px";

        // Viewport
        viewport_height = slider_height - media_db_height;
        this.container.querySelector(".flickity-viewport").style.maxHeight =
          viewport_height + "px";

        // Images
        if (this.container.querySelectorAll(".mslider-photo-link img")) {
          var max_height =
            this.container.querySelector(".flickity-viewport").offsetHeight;

          this.container
            .querySelectorAll(".mslider-photo-link img")
            .forEach(function (a) {
              a.style.maxHeight = max_height + "px";
            });
        }
      } else {
        // Main
        this.container.style.height = "auto";

        // Viewport
        this.container.querySelector(".flickity-viewport").style.maxHeight =
          "inherit";

        // Images
        if (this.container.querySelectorAll(".mslider-photo-link img")) {
          this.container
            .querySelectorAll(".mslider-photo-link img")
            .forEach(function (a) {
              a.style.maxHeight = "inherit";
            });
        }
      }
    }

    initializeProgressBar() {
      var progressBar = document.querySelector(
        "#mslider_progressbar_" + this.widgetId
      );

      this.slider.on("scroll", function (progress) {
        progress = Math.max(0, Math.min(1, progress));
        progressBar.style.width = progress * 100 + "%";
      });
    }

    initializeMediaSlider() {
      const self = this;
      var media_db = self.container.querySelector(".mslider-media-db");
      var viewport = self.container.querySelector(".flickity-viewport");
      self.insertAfter(media_db, viewport);

      media_db
        .querySelectorAll(".mslider-detail-box")
        .forEach(function (element, index) {
          element.setAttribute("data-selectedindex", index);
        });

      media_db.querySelector(
        '.mslider-detail-box[data-selectedindex="0"]'
      ).style.display = "block";

      self.slider.on("select", function (index) {
        media_db.querySelectorAll(".mslider-detail-box").forEach(function (a) {
          a.style.display = "none";
        });

        media_db.querySelector(
          '.mslider-detail-box[data-selectedindex="' + index + '"]'
        ).style.display = "block";

        // Update heights in fullscreen
        if (self.slider.isFullscreen) self.fixHeights(true, index);
      });
    }

    createSpinner(divIdentifier, color) {
      var spinner_options = {
        lines: 9,
        length: 4,
        width: 3,
        radius: 3,
        corners: 1,
        rotate: 0,
        direction: 1,
        color: color,
        speed: 1,
        trail: 52,
        shadow: false,
        hwaccel: false,
        className: "spinner",
        zIndex: 2e9,
        top: "50%",
        left: "50%",
      };

      var target = document.querySelector(divIdentifier);

      if (target) {
        var spinner = new Spinner(spinner_options).spin();
        target.innerHTML = "";
        target.appendChild(spinner.el);
      }

      return;
    }

    insertAfter(newNode, referenceNode) {
      referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
    }

    htmlToElement(htmlString) {
      var div = document.createElement("div");
      div.innerHTML = htmlString.trim();

      return div.firstChild;
    }

    htmlToElements(htmlString, selector) {
      var div = document.createElement("div");
      div.innerHTML = htmlString.trim();

      return div.querySelectorAll(selector);
    }
  }

  window.Mslider = {
    initialise: (options, id, path) => new Mslider(options, id, path),
  };
})(document, jQuery);

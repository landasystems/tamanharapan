jQuery(function ($) {

    var dropDownMenu = {
        mobileMenuContainer: '.j-menu-container',
        dropMenuVisible: false,
        init: function () {
            this.showHideMenu();
            this.resize();
        },
        showHideMenu: function () {
            var self = this;
            $('.j-top-nav-show-slide').on('click', function () {
                var $cloneNav = $('.j-menu-container .j-top-nav');
                if (!self.dropMenuVisible) {
                    $('.j-top-nav').clone().prependTo(self.mobileMenuContainer).addClass('b-top-nav-dropdown').addClass('f-top-nav-dropdown').animate({height: "toggle"}, 700);
                    self.dropMenuVisible = true;
                } else {
                    $cloneNav.animate({height: "toggle"}, 700, function () {
                        $cloneNav.remove();
                    });
                    self.dropMenuVisible = false;
                }
                self.toggleIcon();
            });
        },
        toggleIcon: function () {
            var self = this;
            $(self.mobileMenuContainer + ' .b-ico-dropdown').on('click', function () {
                var $liFirstLevel = $(this).parents('.b-top-nav__1level');
                $liFirstLevel.toggleClass('is-active-top-nav__dropdown');
                $liFirstLevel.find('.fa').toggleClass('fa-arrow-circle-down').toggleClass('fa-arrow-circle-up');
                $liFirstLevel.find('.b-top-nav__dropdomn').slideToggle('slow');
                return false;
            });
        },
        resize: function () {
            var self = this;
            $(window).on('resize', function () {
                if ($(self.mobileMenuContainer + ' .j-top-nav') && self.dropMenuVisible && $(window).width() > BREAK.MD) {
                    $('.j-top-nav-show-slide').click();
                    self.dropMenuVisible = false;
                }
            });
        }
    };
    dropDownMenu.init();

    var pageDecoration = {
        groupAnimatecontroller: true,
        groupAnimateSize: 0,
        init: function () {
            var self = this;
            self.galleryHoverInfo();
            self.animateCategoryIcons();
            self.fadeInAnimation();
            self.fadeInGroup();
            self.imagesAppearance();
            self.toHeightScreen($('.slider-carousel-roundabout'));
            self.toHeightScreen($('.slider-video-container'), 92);
            self.hoverDependence($('.b-blog-short-post__item_img a'), $('.b-blog-short-post__item_text a'), $('.b-blog-short-post__item'));
            self.togleActive();
        },
        galleryHoverInfo: function () {
            $('body').on('mouseenter', '.j-item-hover-action',function () {
                $(this).find('.b-item-hover-action, [class*="b-item-hover-action--"]').addClass('is-visible fadeIn animated');
            }).on('mouseleave', '.j-item-hover-action', function () {
                $(this).find('.b-item-hover-action, [class*="b-item-hover-action--"]').removeClass('is-visible fadeIn animated');
            });

            // Touch Events for Tablet & Mobile
            $('.view').on('touchstart', function () {
                $(this).find('.info').on('touchstart', function (event) {
                    event.stopPropagation();
                });
                $(this).toggleClass('is-active');
            })
        },
        animateCategoryIcons: function () {
            $('.b-categories-icons__item').hover(function () {
                $(this).addClass('is-active-categories-icons__item');
            }, function () {
                $(this).removeClass('is-active-categories-icons__item');
            });
        },
        fadeInAnimation: function () {
            var self = this;
            $('.fade-in-animate').on('scrollSpy:enter',function () {
                var el = $(this);
                if (!(el.attr('data-animate-group'))) {
                    el.addClass('visible');
                }
            }).scrollSpy();
            $('.j-data-element').on('scrollSpy:enter',function () {
                var animateType = $(this).data('animate');
                $(this).addClass('animated ' + animateType);
            }).scrollSpy();
        },
        fadeInGroup: function () {
            var self = this;
            $('[data-animate-group-wrap]').on('scrollSpy:enter',function () {
                var el = $('.fade-in-animate', $(this)),
                    countEl = el.length;
                var i = 0;
                var timerEl = setInterval(function () {
                    if (i === countEl - 1) {
                        clearInterval(timerEl);
                    }
                    el.eq(i).addClass('visible');
                    i++;
                }, 250)
            }).scrollSpy();
        },
        imagesAppearance: function () {
            $('.wrap-img-appearance').on('scrollSpy:enter',function () {
                var $elements = $(this).find('img');
                var index = 0;

                function eachEl() {
                    var animateType = $elements.eq(index).data('animate');
                    $elements.eq(index).addClass('animated').addClass(animateType);
                    index++;
                    if (index >= $elements.length) {
                        clearTimeout(time);
                    }
                }

                var time = setInterval(eachEl, 250);
            }).scrollSpy();
        },
        setElHeight: function (height, $el, k) {
            if (k) {
                $el.css('height', height - k);
            }
            else {
                $el.css('height', height);
            }
        },
        toHeightScreen: function ($el, k) {
            var self = this;
            if ($el.length) {
                $(window).on('resize', function () {
                    self.setElHeight($(window).outerHeight(), $el, k);
                });
                self.setElHeight($(window).outerHeight(), $el, k);
            }
        },
        hoverDependence: function (el1, el2, parent) {
            el1.hover(function () {
                    $(this).closest(parent).find(el2).addClass('is-hover');
                },
                function () {
                    $(this).closest(parent).find(el2).removeClass('is-hover');
                });
            el2.hover(function () {
                    $(this).closest(parent).find(el1).addClass('is-hover');
                },
                function () {
                    $(this).closest(parent).find(el1).removeClass('is-hover');
                });
        },
        togleActive: function () {
            $('.j-toggle-active').on('click', function (e) {
                e.preventDefault();
                $(this).toggleClass('is-active');
            });
        }
    };
    pageDecoration.init();

    var revolutionSlider = {
        islider: $('.j-fullscreenslider, .j-contentwidthslider, .j-smallslider'),
        init: function () {
            var self = this;
            self.revSliderInit();
            self.islider.on('rerenderRevSlider', function () {
                self.rerenderSlider();
            });
        },
        revSliderInit: function () {
            var revapi,
                self = this;

            this.islider.each(function () {
                var slider = $(this);
                var args = {
                    delay: 6300,
                    startwidth: 1170,
                    startheight: 500,
                    hideThumbs: 10,
                    navigationArrows: "solo"
                };
                if (slider.hasClass('j-smallslider')) {
                    args.startwidth = "560";
                    args.startheight = "330";
                    args.navigationType = "none";
                    args.navigationStyle = "square";
                }
                if (slider.hasClass('j-contentwidthslider')) {
                    args.startwidth = "1170";
                }
                if (slider.hasClass('j-contentwidthslider-innerheight')) {
                    args.startheight = "316";
                }
                if (slider.hasClass('j-arr-nexttobullets')) {
                    args.navigationArrows = "nexttobullets";
                }
                if (slider.hasClass('j-arr-hide')) {
                    args.navigationArrows = "none";
                }
                if (slider.hasClass('b-video-slider')) {
                    args.navigationVOffset = 153;
                    args.autoHeight = 'on';
                    args.startheight = 1024;
                }
                if (slider.hasClass('j-pagination-hide')) {
                    args.navigationType = "none";
                }
                if (slider.attr('data-height')) {
                    args.startheight = slider.data('height');
                }
                if (slider.attr('data-thumb-amount')) {
                    args.navigationType = "thumb";
                    args.thumbAmount = slider.data('thumb-amount');
                    args.thumbWidth = 176;
                    args.thumbHeight = 105;
                    args.hideThumbs = 0;
                    delete args.startwidth;
                    delete args.startheight;
                }
                if (slider.closest('.b-slider').hasClass('b-slider--thumb')) {
                    var mass = [];
                    var img = slider.find('img');
                    img.each(function () {
                        mass.push($(this).attr('src'));
                    });
                    revapi = slider.revolution(args);
                    self.islider.bind('revolution.slide.onloaded', function () {
                        slider.next('.tp-bullets').find('.bullet').each(function (i) {
                            $(this).css('background', 'url(' + mass[i] + ') no-repeat scroll 0px 0px / cover transparent');
                        });
                        self.islider.unbind('revolution.slide.onloaded');
                    });
                } else {
                    revapi = slider.revolution(args);
                }
            });
        },
        rerenderSlider: function () {
            var self = this;
            self.islider.revnext();
            setTimeout(function () {
                self.islider.revnext();
            }, 2000);
        }
    };
    revolutionSlider.init();


    var menu = {
        init: function () {
            var self = this;
            self.onHover();
            self.multiLvlMenu();
        },
        onHover: function () {
            $('.b-top-nav__1level').hover(function () {
                if ($(window).width() > (BREAK.MD - 1)) {
                    var dropEL = $(this).find('.b-top-nav__dropdomn');
                    if (dropEL.length !== 0) {
                        var leftPosition = dropEL.offset().left;
                        var rightPosition = dropEL.offset().left + dropEL.outerWidth();

                        if (leftPosition < 0) {
                            dropEL.addClass('nav-position-right');
                        } else {
                            dropEL.removeClass('nav-position-right');
                        }

                        if (rightPosition > $(window).width()) {
                            dropEL.addClass('nav-position-left');
                        } else {
                            dropEL.removeClass('nav-position-left');
                        }
                    }
                }
            });
        },
        multiLvlMenu: function () {
            $('body').on('click', '.b-top-nav__with-multi-lvl', function () {
                if ($(window).width() < (BREAK.MD)) {
                    if ($(this).hasClass('is-active-multi-lvl')) {
                        $(this).removeClass('is-active-multi-lvl');
                        $(this).find(' > .b-top-nav__multi-lvl-box').slideUp();
                    } else {
                        $(this).addClass('is-active-multi-lvl');
                        $(this).find(' > .b-top-nav__multi-lvl-box').slideDown();
                    }
                }
            });
            $('body').on('click', '.b-top-nav__multi-lvl', function (e) {
                e.stopPropagation();
            });
        }

    };
    menu.init();
    var carouFredSelTabs = {
        init: function () {
            var self = this;
            self.paramsInit();
            self.carouFredSelcheckElements();
            $(window).on('resize', function () {
                self.resize();
            });
        },
        carouFredSelcheckElements: function () {
            var alltabs = $('.j-tabs-check-size > li').length;
            var visibleTabs = $('.j-tabs-check-size').triggerHandler("currentVisible").length;
            if (visibleTabs < alltabs) {
                $('.tabs-wrap').addClass('btns-indent');
                $('.j-tabs-check-size').trigger("updateSizes");
            } else {
                $('.tabs-wrap').removeClass('btns-indent');
            }
        },
        resize: function () {
            this.carouFredSelcheckElements();
        }
    };
    if ($('.j-tabs-check-size').length) {
        carouFredSelTabs.init();
    }

    var headerAndTopButtonPosition = {
        $header: $('header'),
        headerBreakHeight: 0,
        $slider: $('.j-fixed-slider'),
        scrollController: true,
        headerFixed: false,
        toTopBtn: $('.j-footer__btn_up'),
        windowScrollTop: $(window).scrollTop(),
        menuTopLevel: $('.b-top-nav__1level'),
        init: function () {
            var self = this;
            self.checkHeaderWindowWidth();
            self.btnToTopInit();
            self.dropDownMenuAnimation();
            $(window).on('resize', function () {
                self.resize();
            });
        },
        checkHeaderWindowWidth: function () {
            var self = this;
            self.headerFixed = false;
            self.windowScrollTop = $(window).scrollTop();
            if (self.$header.length !== 0) {
                self.checkHeaderWindowWidthNow();
                $(window).on('scroll', function () {
                    self.checkHeaderWindowWidthNow();
                });
            }
        },
        checkHeaderWindowWidthNow: function () {
            var self = this;
            if (window.innerWidth > BREAK.LG) {
                self.windowScrollTop = $(window).scrollTop();
                self.checkHeaderPosition();
                self.btnToTop();
            } else {
                $('body').removeClass('is-fixed-header').css('padding-top', '0' + 'px');
                self.$header.removeClass('animated fadeInDown');
            }
        },
        checkHeaderPosition: function () {
            var self = this;
            if (self.windowScrollTop > self.headerBreakHeight && !self.headerFixed) {
                $('body').addClass('is-fixed-header').css('padding-top', self.$header.outerHeight() + 'px');
                self.$header.addClass('animated fadeInDown');
                self.$slider.addClass('is-active').css('top', self.$header.outerHeight() + 'px');
                self.headerFixed = true;
            }
            else if (self.windowScrollTop <= self.headerBreakHeight && self.headerFixed) {
                $('body').removeClass('is-fixed-header').css('padding-top', '0px');
                self.$header.removeClass('animated fadeInDown');
                self.$slider.removeClass('is-active');
                self.headerFixed = false;
            }
        },
        btnToTopInit: function () {
            var self = this;
            var SPEEDTOP = 500; // button to top
            self.toTopBtn.addClass('b-hidden').css('opacity', 0);
            self.toTopBtn.css('position', 'fixed');
            self.toTopBtn.on('click', function () {
                var offset = $('body').offset();
                if (offset) {
                    $('html,body').animate({scrollTop: offset.top}, SPEEDTOP);
                }
            });
        },
        btnToTop: function () {
            var self = this;
            if (self.windowScrollTop > self.headerBreakHeight && self.scrollController) {
                self.scrollController = false;
                self.toTopBtn.removeClass('b-hidden');
                self.toTopBtn.stop(true, true).animate({
                    opacity: 1
                }, 1000);
            } else if (self.windowScrollTop <= self.headerBreakHeight) {
                self.scrollController = true;
                self.toTopBtn.addClass('b-hidden').css('opacity', 0);
                self.toTopBtn.stop(true, true).animate({
                    opacity: 0
                }, 1000);
            }
        },
        dropDownMenuAnimation: function () {
            var self = this;
            if ($(window).width() > BREAK.LG) {
                self.menuTopLevel.hover(function () {
                    $(this).find('.b-top-nav__dropdomn')
                        .css('display', 'block')
                        .animate({
                            opacity: 1
                        }, 400);
                }, function () {
                    $(this).find('.b-top-nav__dropdomn')
                        .animate({
                            opacity: 0
                        }, 400, function(){
                            $(this).css('display', '');
                        });
                })
            } else {
                self.menuTopLevel.find('.b-top-nav__dropdomn').css('opacity', '');
            }

        },
        resize: function () {
            this.checkHeaderWindowWidth();
            this.dropDownMenuAnimation();
        }
    };
    headerAndTopButtonPosition.init();

    $('[data-type="background"]').each(function () {
        var $bgobj = $(this);
        $(window).on('scroll', function () {
            var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
            var coords = 'center ' + yPos + 'px';
            $bgobj.css({ backgroundPosition: coords });
        });
    });
});



/* @preserve 
 * eslint no-unused-vars: ["error", { "varsIgnorePattern": "^bc" }]

/* Functions to export to global scope */
const bcFunctions = (function bcAppJS() {
	let debug = false;
	if (debug) {
		console.log('WP Base Theme here');
		console.log('Debug is go');   
		console.log('===========');
		console.log('...'); 
	}
	function bcAJAX(url, options) {
		if (options !== undefined) {
			return fetch(url, options); 
		} else {
			return fetch(url);
		}
	}
	function bcGetJSON(url, opts) {
		let options = {
			headers: {
				'Content-Type': 'application/json'
			}
		};
		if (opts) {
			options = Object.assign(options, opts);
		}
		return bcAJAX(url, options).then(function (data) {
			return Promise.resolve(data);
		}).catch(function (err) {
			return Promise.reject(err);
		});
	}
	function bcGetOffset() {
		const $el = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : document.querySelector('body');
		if (debug) {
			console.log('bcGetOffset()');
			console.log('-------------');
			console.log('$el: '.concat($el));
		}
		const elRect = $el.getBoundingClientRect();
		const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
		const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
		return {
			top: elRect.top + scrollTop,
			left: elRect.left + scrollLeft
		};
	}
	function IOmaker($el, opts, callback) {
		console.log(opts);
		const observer = new IntersectionObserver(callback, opts);
		observer.observe($el);
		return observer;
	}
	if (debug) {
		var i = 0;
	}
	function bcLerpScroll($el, pos, target) {
		const speed = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : .1;
		pos = Math.floor(pos);
		target = Math.floor(target);
		if (debug) {
			console.log('Lerp '.concat(i));
			console.log('---------');
			console.log('$el: '.concat($el.classList, ' pos: ').concat(Math.floor(pos), ' target: ').concat(Math.floor(target), ' speed: ').concat(speed));
		}
		let scrollOpts = {};
		if (Math.floor(pos) < Math.floor(target)) {
			if (debug) {
				console.log('Scroll down');
				console.log('Target - Pos * speed: '.concat(Math.ceil((target - pos) * speed)));
			}
			pos += Math.ceil((target - pos) * speed);
			if (debug) {
				console.log('New postion: '.concat(pos, ' ').concat(target));
			}
			scrollOpts = {
				top: pos,
				left: 0,
				behavior: 'auto'
			};
			$el.scroll(scrollOpts);
			if (debug) {
				i++;
			}
			requestAnimationFrame(function () {
				bcLerpScroll($el, pos, target);
			});
		} else if (Math.floor(pos) > Math.floor(target)) {
			if (debug) {
				console.log('Scroll up');
				console.log(''.concat(pos, ' ').concat(target));
				console.log(''.concat(pos - target));
			}
			pos -= (pos - target) * speed;
			if (debug) {
				console.log(''.concat(pos, ' ').concat(target));
			}
			scrollOpts = {
				top: pos,
				left: 0,
				behavior: 'auto'
			};
			$el.scroll(scrollOpts);
			if (debug) {
				console.log(''.concat($el.scrollY));
				i++;
			}
			requestAnimationFrame(function () {
				bcLerpScroll($el, pos, target);
			});
		} else {
			if (debug) {
				console.log('Snap to target');
			}
			scrollOpts = {
				top: target,
				left: 0,
				behavior: 'auto'
			};
			$el.scroll(scrollOpts);
			if (debug) {
				console.log('Target: '.concat(target, ' Final position: ').concat($el.scrollY));
			}
			return;
		}
	}//bcLerpScroll()
	function bcAdjustHeight($el, target) {
		const speed = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : .075;
		const cb = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;
		bcLerpHeight($el, target, speed);
		function bcLerpHeight($el, target) {
			const speed = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : .075;
			if (debug) {
				console.log('$el height: '.concat($el.style.height));
			}
			let h = $el.style.height !== '' && $el.style.height !== undefined ? parseFloat($el.style.height) : $el.clientHeight;
			if (debug) {
				if (i > 500) {
					return;
				}
				console.log('Lerp '.concat(i));
				console.log('---------');
				console.log('Height: '.concat(h, ' Target: ').concat(target));
				console.log('Difference: '.concat(h - target));
			}
			if (Math.floor(target) > Math.floor(h)) {
				if (debug) {
					console.log('Target > Height');
					console.log('Raw height to add: '.concat((target - h) * speed));
				}
				h += Math.ceil((target - h) * speed);
				if (debug) {
					console.log('New height: '.concat(h, ' Target: ').concat(target));
				}
				requestAnimationFrame(function () {
					$el.style.height = h + 'px';
				});
				if (debug) {
					console.log('Element style.height: '.concat($el.style.height));
					i++;
				}
				bcLerpHeight($el, target, speed);
			} else if (Math.floor(h) > Math.floor(target)) {
				if (debug) {
					console.log('Height > Target');
					console.log('Raw height to subtract: '.concat((h - target) * speed));
				}
				h -= Math.ceil((h - target) * speed);
				if (debug) {
					console.log('New height: '.concat(h, ' Target: ').concat(target));
				}
				requestAnimationFrame(function () {
					$el.style.height = h + 'px';
				});
				if (debug) {
					console.log(''.concat($el.style.height));
					i++;
				}
				bcLerpHeight($el, target, speed);
			} else {
				return;
			}
		}
		if (typeof cb === 'function') {
			cb();
		}
		return;
	}// bcAdjustHeight()
	if (debug) {
		console.log('Scroll links');
		console.log('------------');
	}
	const scrollLinks = Array.from(document.querySelectorAll('.bc-scroll-link'));
	if (debug) {
		console.log('scrollLinks length: '.concat(scrollLinks.length));
	}
	scrollLinks.forEach(function ($link) {
		if (debug) {
			console.log($link);
		}
		if (document.getElementById($link.getAttribute('href').substr(1))) {
			$link.addEventListener('click', function (evt) {
				evt.preventDefault();
				const $scrollTargetEl = document.getElementById($link.getAttribute('href').substr(1));
				const scrollTarget = bcGetOffset($scrollTargetEl).top;
				bcLerpScroll(document.documentElement, document.documentElement.scrollTop, scrollTarget);
			});
		}
	});
	function bcShowHide($el, target, cb) {
		const _arguments = arguments;
		if (debug) {
			console.log('bcShowHide function, target height:');
			console.log(target);
		}
		target = Number.parseInt(target);
		$el.style.height = target + 'px';
		if (typeof cb === 'function') {
			$el.addEventListener('transitionend', function () {
				requestAnimationFrame(function () {
					cb();
				});
				$el.removeEventListener('transitionend', _arguments.callee);
			});
		}
	}
	const showHideComponents = Array.from(document.querySelectorAll('.bc-show-hide'));
	if (debug) {
		console.log('Show/hide accordion components');
		console.log('--------------------');
		console.log('Length: '.concat(showHideComponents.length));
	}
	showHideComponents.forEach(function ($showHideComponent, idx) {
		if (debug) {
			console.log('Accordion component #'.concat(idx + 1, ':'));
			console.log($showHideComponent.classList);
		}
		const showHideToggles = Array.from($showHideComponent.querySelectorAll('.bc-show-hide__toggle'));
		showHideToggles.forEach(function ($showHideToggle) {
			const $showHideBody = $showHideToggle.nextElementSibling;
			const $showHideBodyClose = $showHideBody.querySelector('.bc-show-hide__hide');
			$showHideBodyClose.addEventListener('click', function () {
				if ($showHideToggle.classList.contains('bc-is-active')) {
					bcShowHide($showHideBody, 0);
					$showHideToggle.classList.remove('bc-is-active');
				}
			});
			if (debug) {
				console.log('Accordion body scrollHeight: ');
				console.log($showHideBody.scrollHeight);
				console.log('Accordion toggle classlist: ');
				console.log($showHideToggle.classList);
			}
			$showHideToggle.addEventListener('click', function (evt) {
				evt.preventDefault();
				if ($showHideToggle.classList.contains('bc-is-active')) {
					if (debug) {
						console.log('This accordion body is active.');
					}
					bcShowHide($showHideBody, 0);
					$showHideToggle.classList.remove('bc-is-active');
				} else {
					if (debug) {
						console.log('This accordion body is inactive.');
					}
					bcShowHide($showHideBody, $showHideBody.scrollHeight);
					$showHideToggle.classList.add('bc-is-active');
				}
			});
		});
	});

	function mainNavigationSetup() {
		if (window.outerWidth >= 1024) {
			return true;
		}
		const $siteHeader = document.querySelector('.bc-site-header');
		const $siteHeaderMenuLink = document.querySelector('.bc-site-header__menu-link');
		const $siteHeaderMainNav = document.querySelector('.bc-site-header__main-navigation');
		if ($siteHeader && $siteHeader !== undefined && $siteHeaderMenuLink && $siteHeaderMenuLink !== undefined && $siteHeaderMainNav && $siteHeaderMainNav !== undefined) {
			if (debug) {
				console.log('Main navigation set up');
				console.log('----------------------');
				console.log('window.outerWidth is '.concat(window.outerWidth));
			}
		}
		function menuIconClickHandler(evt) {
			evt.preventDefault();
			$siteHeader.classList.toggle('bc-is-active');
			console.log('Header class list: '.concat($siteHeader.classList));
		
			$siteHeaderMenuLink.removeEventListener('click', menuIconClickHandler);
			$siteHeaderMenuLink.addEventListener('click', menuIconClickHandler);
			
		}
		$siteHeaderMenuLink.addEventListener('click', menuIconClickHandler);
	}//mainNavigationSetup()
	mainNavigationSetup();
	const $bcFlkSliders = document.querySelectorAll('.bc-flickity');
	function setUpSliders(sliders) {
		Array.from(sliders).forEach(function ($bcFlkSlider, idx) {
			if (debug) {
				console.log('Sliders foreach');
				console.log('Sliders idx: '.concat(idx));
			}
			const sliderType = $bcFlkSlider.classList.contains('bc-flickity--text-slider') ? 'text-slider' : $bcFlkSlider.classList.contains('bc-flickity--card-slider') ? 'card-slider' : 'video-slider';
			if (debug) {
				console.log('Slider type: '.concat(sliderType));
			}
			/* global Flickity */
			const flkSlider = new Flickity($bcFlkSlider, {
				adaptiveHeight: sliderType === 'text-slider' ? true : false,
				cellAlign: sliderType === 'card-slider' ? 'left' : 'center',
				groupCells: true,
				cellSelector: '.bc-flickity__slide'
			});
			flkSlider.select(0);
			flkSlider.on('change', function () {
				const videoSlides = $bcFlkSlider.querySelectorAll('.bc-flickity__slide--video');
				if (videoSlides && videoSlides.length > 0) {
					Array.from(videoSlides).forEach(function (slide) {
						slide.querySelector('iframe').stopVideo();
					});
				}	
			});
		});
	}//setUpSliders()
	if ($bcFlkSliders && $bcFlkSliders.length > 0) {
		if (debug) {
			console.log('Flickity slider set up.');
			console.log('-----------------------');
			console.log('$bcFlkSliders length is '.concat($bcFlkSliders.length));
		}	
		setUpSliders($bcFlkSliders);
		window.addEventListener('resize', function () {
			setUpSliders($bcFlkSliders);
		});
	}
	if (debug) {
		console.log('');
		console.log('Services component');
		console.log('------------------');
	}
	const $bcTwinComponents = Array.from(document.querySelectorAll('.bc-twin-component'));
	if ($bcTwinComponents.length > 0) {
		$bcTwinComponents.forEach(function ($bcTwinComponent) {
			const componentImages = Array.from($bcTwinComponent.querySelectorAll('.bc-twin-component__image'));	
			if (componentImages.legth === 0) {
				return;
			}	
			const componentTriggers = Array.from($bcTwinComponent.querySelectorAll('.bc-twin-component__trigger'));	
			if (componentTriggers.length > 0) {
				componentTriggers.forEach(function ($componentTrigger) {
					$componentTrigger.addEventListener('mouseover', function (evt) {
						evt.stopPropagation();
						const $thisTrigger = evt.currentTarget;
						const serviceID = $thisTrigger.dataset.service;	
						if ($thisTrigger.classList.contains('is-active')) {
							return;
						}	
						const $activeServiceImage = componentImages.find(function ($serviceImage) {
							return $serviceImage.classList.contains('is-active');
						});	
						if ($activeServiceImage.getAttribute('id') === serviceID) {
							return;
						}	
						$activeServiceImage.classList.remove('is-active');
						const $newServiceImage = $bcTwinComponent.querySelector('#' + serviceID);	
						if ($newServiceImage) {
							$newServiceImage.classList.add('is-active');
							$thisTrigger.classList.add('is-active');
						} else {
							return;
						}
					});
					componentTriggers.forEach(function (componentTrigger) {
						componentTrigger.addEventListener('mouseleave', function (evt) {
							evt.preventDefault();
							componentTrigger.classList.remove('is-active');
						});
					});
				});
			}
		});
	}
	const twoColSliderObserveables = Array.from(document.querySelectorAll('.bc-2-col-slider .bc-flickity'));
	twoColSliderObserveables.forEach(function ($slider) {
		function sliderCallback(entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					console.log('Is observed');
					$slider.classList.add('is-observed');
				} else {
					console.log('Is not observed');
					$slider.classList.remove('is-observed');
				}
			});
		}	
		let opts = {
			threshold: .5
		};
		IOmaker($slider, opts, sliderCallback);
	});
	/* Cookie funcitons */
	function bcSetCookie(cname, cvalue, opts) {
		let newCookie = cname + '=' + encodeURI(cvalue);
		if (typeof opts === 'object') {
			if (debug) {
				console.log('opts is an object');
			}
			let optNames = Object.getOwnPropertyNames(opts);
			optNames.forEach((key) => {
				newCookie += '; ' + key + '=' + opts[key];
			});
		}
		if (debug) {
			console.log('New cookie is: '+newCookie);
		}
		document.cookie	= newCookie; 
		if (debug) {
			console.log('setCookie() document.cookie = '+ document.cookie);
		}
		
	}
	function bcGetCookie(cname) {
		const allCookies = document.cookie.split('; ');
		const thisCookie = allCookies.find((row) => {
			return row.startsWith(cname);
		}); 
		return (thisCookie) ? thisCookie.split('=')[1] : undefined ;
	}
	
	window.addEventListener('resize', function () {});
	//Export functions
	return {
		bcGetCookie: bcGetCookie,
		bcSetCookie: bcSetCookie
	};
})(window);
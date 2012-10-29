/**
 * @author Carlos Augusto Gartner
 * Execução do banner
 */
$(document).ready(function() {
    $('#slider').cycle({ 
        fx: 'scrollLeft', 
        speed: 700, // Velocidade 
        timeout: 6000,
        pager:  '#nav' 
     });
});
/*
 * 
 * blindX
blindY
blindZ
cover
curtainX
curtainY
fade
fadeZoom
growX
growY
scrollUp
scrollDown
scrollLeft
scrollRight
scrollHorz
scrollVert
shuffle
slideX
slideY

turnUp
turnDown
turnLeft
turnRight
uncover
wipe
zoom
 * 
 * Opções:
 * 
 * 
fx	?fade?	one of: fade, shuffle, zoom, scrollLeft, etc
timeout	4000	milliseconds between slide transitions (0 to disable auto advance)
continuous	0	true to start next transition immediately after current one completes
speed	1000	speed of the transition (any valid fx speed value)
speedIn	null	speed of the ?in? transition
speedOut	null	speed of the ?out? transition
next	null	id of element to use as click trigger for next slide
prev	null	id of element to use as click trigger for previous slide
prevNextClick	null	callback fn for prev/next clicks : function(isNext, zeroBasedSlideIndex, slideElement)
pager	null	id of element to use as pager container
pagerClick	null	callback fn for pager clicks: function(zeroBasedSlideIndex, slideElement)
pagerEvent	?click?	event which drives the pager navigation
pagerAnchorBuilder	null	callback fn for building anchor links
before	null	transition callback (scope set to element to be shown)
after	null	transition callback (scope set to element that was shown)
end	null	callback invoked when the slideshow terminates (use with autostop or nowrap options)
easing	null	easing method for both in and out transitions
easeIn	null	easing for ?in? transition
easeOut	null	easing for ?out? transition
shuffle	null	coords for shuffle animation, ex: { top:15, left: 200 }
animIn	null	properties that define how the slide animates in
animOut	null	properties that define how the slide animates out
cssBefore	null	properties that define the initial state of the slide before transitioning in
cssAfter	null	properties that defined the state of the slide after transitioning out
fxFn	null	function used to control the transition
height	?auto?	container height
startingSlide	0	zero-based index of the first slide to be displayed
sync	1	true if in/out transitions should occur simultaneously
random	0	true for random, false for sequence (not applicable to shuffle fx)
fit	0	force slides to fit container
pause	0	true to enable ?pause on hover?
autostop	0	true to end slideshow after X transitions (where X == slide count)
autostopCount	0	number of transitions (optionally used with autostop to define X)
delay	0	additional delay (in ms) for first transition (hint can be negative)
slideExpr	null	expression for selecting slides (if something other than all children is required)
cleartype	0	true if clearType corrections should be applied (for IE)
nowrap	0	true to prevent slideshow from wrapping
 * 
 * 
 */
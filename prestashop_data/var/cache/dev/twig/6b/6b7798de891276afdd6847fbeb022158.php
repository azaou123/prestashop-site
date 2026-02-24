<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/ps_faviconnotificationbo/views/js/favico.js */
class __TwigTemplate_e9e0100ba18802d47fa07edf63fb83f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_faviconnotificationbo/views/js/favico.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_faviconnotificationbo/views/js/favico.js"));

        // line 1
        echo "/**
 * @license MIT or GPL-2.0
 * @fileOverview Favico animations
 * @author Miroslav Magda, http://blog.ejci.net
 * @source: https://github.com/ejci/favico.js
 * @version 0.3.10
 */

/**
 * Create new favico instance
 * @param {Object} Options
 * @return {Object} Favico object
 * @example
 * var favico = new Favico({
 *    bgColor : '#d00',
 *    textColor : '#fff',
 *    fontFamily : 'sans-serif',
 *    fontStyle : 'bold',
 *    type : 'circle',
 *    position : 'down',
 *    animation : 'slide',
 *    elementId: false,
 *    element: null,
 *    dataUrl: function(url){},
 *    win: window
 * });
 */
(function () {

\tvar Favico = (function (opt) {
\t\t'use strict';
\t\topt = (opt) ? opt : {};
\t\tvar _def = {
\t\t\tbgColor: '#d00',
\t\t\ttextColor: '#fff',
\t\t\tfontFamily: 'sans-serif', //Arial,Verdana,Times New Roman,serif,sans-serif,...
\t\t\tfontStyle: 'bold', //normal,italic,oblique,bold,bolder,lighter,100,200,300,400,500,600,700,800,900
\t\t\ttype: 'circle',
\t\t\tposition: 'down', // down, up, left, leftup (upleft)
\t\t\tanimation: 'slide',
\t\t\telementId: false,
\t\t\telement: null,
\t\t\tdataUrl: false,
\t\t\twin: window
\t\t};
\t\tvar _opt, _orig, _h, _w, _canvas, _context, _img, _ready, _lastBadge, _running, _readyCb, _stop, _browser, _animTimeout, _drawTimeout, _doc;

\t\t_browser = {};
\t\t_browser.ff = typeof InstallTrigger != 'undefined';
\t\t_browser.chrome = !!window.chrome;
\t\t_browser.opera = !!window.opera || navigator.userAgent.indexOf('Opera') >= 0;
\t\t_browser.ie = /*@cc_on!@*/false;
\t\t_browser.safari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
\t\t_browser.supported = (_browser.chrome || _browser.ff || _browser.opera);

\t\tvar _queue = [];
\t\t_readyCb = function () {
\t\t};
\t\t_ready = _stop = false;
\t\t/**
\t\t * Initialize favico
\t\t */
\t\tvar init = function () {
\t\t\t//merge initial options
\t\t\t_opt = merge(_def, opt);
\t\t\t_opt.bgColor = hexToRgb(_opt.bgColor);
\t\t\t_opt.textColor = hexToRgb(_opt.textColor);
\t\t\t_opt.position = _opt.position.toLowerCase();
\t\t\t_opt.animation = (animation.types['' + _opt.animation]) ? _opt.animation : _def.animation;

\t\t\t_doc = _opt.win.document;

\t\t\tvar isUp = _opt.position.indexOf('up') > -1;
\t\t\tvar isLeft = _opt.position.indexOf('left') > -1;

\t\t\t//transform the animations
\t\t\tif (isUp || isLeft) {
\t\t\t\tfor (var a in animation.types) {
\t\t\t\t\tfor (var i = 0; i < animation.types[a].length; i++) {
\t\t\t\t\t\tvar step = animation.types[a][i];

\t\t\t\t\t\tif (isUp) {
\t\t\t\t\t\t\tif (step.y < 0.6) {
\t\t\t\t\t\t\t\tstep.y = step.y - 0.4;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tstep.y = step.y - 2 * step.y + (1 - step.w);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tif (isLeft) {
\t\t\t\t\t\t\tif (step.x < 0.6) {
\t\t\t\t\t\t\t\tstep.x = step.x - 0.4;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tstep.x = step.x - 2 * step.x + (1 - step.h);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tanimation.types[a][i] = step;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t_opt.type = (type['' + _opt.type]) ? _opt.type : _def.type;

\t\t\t_orig = link. getIcons();
\t\t\t//create temp canvas
\t\t\t_canvas = document.createElement('canvas');
\t\t\t//create temp image
\t\t\t_img = document.createElement('img');
\t\t\tvar lastIcon = _orig[_orig.length - 1];
\t\t\tif (lastIcon.hasAttribute('href')) {
\t\t\t\t_img.setAttribute('crossOrigin', 'anonymous');
\t\t\t\t//get width/height
\t\t\t\t_img.onload = function () {
\t\t\t\t\t_h = (_img.height > 0) ? _img.height : 32;
\t\t\t\t\t_w = (_img.width > 0) ? _img.width : 32;
\t\t\t\t\t_canvas.height = _h;
\t\t\t\t\t_canvas.width = _w;
\t\t\t\t\t_context = _canvas.getContext('2d');
\t\t\t\t\ticon.ready();
\t\t\t\t};
\t\t\t\t_img.setAttribute('src', lastIcon.getAttribute('href'));
\t\t\t} else {
\t\t\t\t_h = 32;
\t\t\t\t_w = 32;
\t\t\t\t_img.height = _h;
\t\t\t\t_img.width = _w;
\t\t\t\t_canvas.height = _h;
\t\t\t\t_canvas.width = _w;
\t\t\t\t_context = _canvas.getContext('2d');
\t\t\t\ticon.ready();
\t\t\t}

\t\t};
\t\t/**
\t\t * Icon namespace
\t\t */
\t\tvar icon = {};
\t\t/**
\t\t * Icon is ready (reset icon) and start animation (if ther is any)
\t\t */
\t\ticon.ready = function () {
\t\t\t_ready = true;
\t\t\ticon.reset();
\t\t\t_readyCb();
\t\t};
\t\t/**
\t\t * Reset icon to default state
\t\t */
\t\ticon.reset = function () {
\t\t\t//reset
\t\t\tif (!_ready) {
\t\t\t\treturn;
\t\t\t}
\t\t\t_queue = [];
\t\t\t_lastBadge = false;
\t\t\t_running = false;
\t\t\t_context.clearRect(0, 0, _w, _h);
\t\t\t_context.drawImage(_img, 0, 0, _w, _h);
\t\t\t//_stop=true;
\t\t\tlink.setIcon(_canvas);
\t\t\t//webcam('stop');
\t\t\t//video('stop');
\t\t\twindow.clearTimeout(_animTimeout);
\t\t\twindow.clearTimeout(_drawTimeout);
\t\t};
\t\t/**
\t\t * Start animation
\t\t */
\t\ticon.start = function () {
\t\t\tif (!_ready || _running) {
\t\t\t\treturn;
\t\t\t}
\t\t\tvar finished = function () {
\t\t\t\t_lastBadge = _queue[0];
\t\t\t\t_running = false;
\t\t\t\tif (_queue.length > 0) {
\t\t\t\t\t_queue.shift();
\t\t\t\t\ticon.start();
\t\t\t\t} else {

\t\t\t\t}
\t\t\t};
\t\t\tif (_queue.length > 0) {
\t\t\t\t_running = true;
\t\t\t\tvar run = function () {
\t\t\t\t\t// apply options for this animation
\t\t\t\t\t['type', 'animation', 'bgColor', 'textColor', 'fontFamily', 'fontStyle'].forEach(function (a) {
\t\t\t\t\t\tif (a in _queue[0].options) {
\t\t\t\t\t\t\t_opt[a] = _queue[0].options[a];
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tanimation.run(_queue[0].options, function () {
\t\t\t\t\t\tfinished();
\t\t\t\t\t}, false);
\t\t\t\t};
\t\t\t\tif (_lastBadge) {
\t\t\t\t\tanimation.run(_lastBadge.options, function () {
\t\t\t\t\t\trun();
\t\t\t\t\t}, true);
\t\t\t\t} else {
\t\t\t\t\trun();
\t\t\t\t}
\t\t\t}
\t\t};

\t\t/**
\t\t * Badge types
\t\t */
\t\tvar type = {};
\t\tvar options = function (opt) {
\t\t\topt.n = ((typeof opt.n) === 'number') ? Math.abs(opt.n | 0) : opt.n;
\t\t\topt.x = _w * opt.x;
\t\t\topt.y = _h * opt.y;
\t\t\topt.w = _w * opt.w;
\t\t\topt.h = _h * opt.h;
\t\t\topt.len = (\"\" + opt.n).length;
\t\t\treturn opt;
\t\t};
\t\t/**
\t\t * Generate circle
\t\t * @param {Object} opt Badge options
\t\t */
\t\ttype.circle = function (opt) {
\t\t\topt = options(opt);
\t\t\tvar more = false;
\t\t\tif (opt.len === 2) {
\t\t\t\topt.x = opt.x - opt.w * 0.4;
\t\t\t\topt.w = opt.w * 1.4;
\t\t\t\tmore = true;
\t\t\t} else if (opt.len >= 3) {
\t\t\t\topt.x = opt.x - opt.w * 0.65;
\t\t\t\topt.w = opt.w * 1.65;
\t\t\t\tmore = true;
\t\t\t}
\t\t\t_context.clearRect(0, 0, _w, _h);
\t\t\t_context.drawImage(_img, 0, 0, _w, _h);
\t\t\t_context.beginPath();
\t\t\t_context.font = _opt.fontStyle + \" \" + Math.floor(opt.h * (opt.n > 99 ? 0.85 : 1)) + \"px \" + _opt.fontFamily;
\t\t\t_context.textAlign = 'center';
\t\t\tif (more) {
\t\t\t\t_context.moveTo(opt.x + opt.w / 2, opt.y);
\t\t\t\t_context.lineTo(opt.x + opt.w - opt.h / 2, opt.y);
\t\t\t\t_context.quadraticCurveTo(opt.x + opt.w, opt.y, opt.x + opt.w, opt.y + opt.h / 2);
\t\t\t\t_context.lineTo(opt.x + opt.w, opt.y + opt.h - opt.h / 2);
\t\t\t\t_context.quadraticCurveTo(opt.x + opt.w, opt.y + opt.h, opt.x + opt.w - opt.h / 2, opt.y + opt.h);
\t\t\t\t_context.lineTo(opt.x + opt.h / 2, opt.y + opt.h);
\t\t\t\t_context.quadraticCurveTo(opt.x, opt.y + opt.h, opt.x, opt.y + opt.h - opt.h / 2);
\t\t\t\t_context.lineTo(opt.x, opt.y + opt.h / 2);
\t\t\t\t_context.quadraticCurveTo(opt.x, opt.y, opt.x + opt.h / 2, opt.y);
\t\t\t} else {
\t\t\t\t_context.arc(opt.x + opt.w / 2, opt.y + opt.h / 2, opt.h / 2, 0, 2 * Math.PI);
\t\t\t}
\t\t\t_context.fillStyle = 'rgba(' + _opt.bgColor.r + ',' + _opt.bgColor.g + ',' + _opt.bgColor.b + ',' + opt.o + ')';
\t\t\t_context.fill();
\t\t\t_context.closePath();
\t\t\t_context.beginPath();
\t\t\t_context.stroke();
\t\t\t_context.fillStyle = 'rgba(' + _opt.textColor.r + ',' + _opt.textColor.g + ',' + _opt.textColor.b + ',' + opt.o + ')';
\t\t\t//_context.fillText((more) ? '9+' : opt.n, Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.15));
\t\t\tif ((typeof opt.n) === 'number' && opt.n > 999) {
\t\t\t\t_context.fillText(((opt.n > 9999) ? 9 : Math.floor(opt.n / 1000)) + 'k+', Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.2));
\t\t\t} else {
\t\t\t\t_context.fillText(opt.n, Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.15));
\t\t\t}
\t\t\t_context.closePath();
\t\t};
\t\t/**
\t\t * Generate rectangle
\t\t * @param {Object} opt Badge options
\t\t */
\t\ttype.rectangle = function (opt) {
\t\t\topt = options(opt);
\t\t\tvar more = false;
\t\t\tif (opt.len === 2) {
\t\t\t\topt.x = opt.x - opt.w * 0.4;
\t\t\t\topt.w = opt.w * 1.4;
\t\t\t\tmore = true;
\t\t\t} else if (opt.len >= 3) {
\t\t\t\topt.x = opt.x - opt.w * 0.65;
\t\t\t\topt.w = opt.w * 1.65;
\t\t\t\tmore = true;
\t\t\t}
\t\t\t_context.clearRect(0, 0, _w, _h);
\t\t\t_context.drawImage(_img, 0, 0, _w, _h);
\t\t\t_context.beginPath();
\t\t\t_context.font = _opt.fontStyle + \" \" + Math.floor(opt.h * (opt.n > 99 ? 0.9 : 1)) + \"px \" + _opt.fontFamily;
\t\t\t_context.textAlign = 'center';
\t\t\t_context.fillStyle = 'rgba(' + _opt.bgColor.r + ',' + _opt.bgColor.g + ',' + _opt.bgColor.b + ',' + opt.o + ')';
\t\t\t_context.fillRect(opt.x, opt.y, opt.w, opt.h);
\t\t\t_context.fillStyle = 'rgba(' + _opt.textColor.r + ',' + _opt.textColor.g + ',' + _opt.textColor.b + ',' + opt.o + ')';
\t\t\t//_context.fillText((more) ? '9+' : opt.n, Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.15));
\t\t\tif ((typeof opt.n) === 'number' && opt.n > 999) {
\t\t\t\t_context.fillText(((opt.n > 9999) ? 9 : Math.floor(opt.n / 1000)) + 'k+', Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.2));
\t\t\t} else {
\t\t\t\t_context.fillText(opt.n, Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.15));
\t\t\t}
\t\t\t_context.closePath();
\t\t};

\t\t/**
\t\t * Set badge
\t\t */
\t\tvar badge = function (number, opts) {
\t\t\topts = ((typeof opts) === 'string' ? {
\t\t\t\tanimation: opts
\t\t\t} : opts) || {};
\t\t\t_readyCb = function () {
\t\t\t\ttry {
\t\t\t\t\tif (typeof (number) === 'number' ? (number > 0) : (number !== '')) {
\t\t\t\t\t\tvar q = {
\t\t\t\t\t\t\ttype: 'badge',
\t\t\t\t\t\t\toptions: {
\t\t\t\t\t\t\t\tn: number
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t\tif ('animation' in opts && animation.types['' + opts.animation]) {
\t\t\t\t\t\t\tq.options.animation = '' + opts.animation;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ('type' in opts && type['' + opts.type]) {
\t\t\t\t\t\t\tq.options.type = '' + opts.type;
\t\t\t\t\t\t}
\t\t\t\t\t\t['bgColor', 'textColor'].forEach(function (o) {
\t\t\t\t\t\t\tif (o in opts) {
\t\t\t\t\t\t\t\tq.options[o] = hexToRgb(opts[o]);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\t['fontStyle', 'fontFamily'].forEach(function (o) {
\t\t\t\t\t\t\tif (o in opts) {
\t\t\t\t\t\t\t\tq.options[o] = opts[o];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\t_queue.push(q);
\t\t\t\t\t\tif (_queue.length > 100) {
\t\t\t\t\t\t\tthrow new Error('Too many badges requests in queue.');
\t\t\t\t\t\t}
\t\t\t\t\t\ticon.start();
\t\t\t\t\t} else {
\t\t\t\t\t\ticon.reset();
\t\t\t\t\t}
\t\t\t\t} catch (e) {
\t\t\t\t\tthrow new Error('Error setting badge. Message: ' + e.message);
\t\t\t\t}
\t\t\t};
\t\t\tif (_ready) {
\t\t\t\t_readyCb();
\t\t\t}
\t\t};

\t\t/**
\t\t * Set image as icon
\t\t */
\t\tvar image = function (imageElement) {
\t\t\t_readyCb = function () {
\t\t\t\ttry {
\t\t\t\t\tvar w = imageElement.width;
\t\t\t\t\tvar h = imageElement.height;
\t\t\t\t\tvar newImg = document.createElement('img');
\t\t\t\t\tvar ratio = (w / _w < h / _h) ? (w / _w) : (h / _h);
\t\t\t\t\tnewImg.setAttribute('crossOrigin', 'anonymous');
\t\t\t\t\tnewImg.onload=function(){
\t\t\t\t\t\t_context.clearRect(0, 0, _w, _h);
\t\t\t\t\t\t_context.drawImage(newImg, 0, 0, _w, _h);
\t\t\t\t\t\tlink.setIcon(_canvas);
\t\t\t\t\t};
\t\t\t\t\tnewImg.setAttribute('src', imageElement.getAttribute('src'));
\t\t\t\t\tnewImg.height = (h / ratio);
\t\t\t\t\tnewImg.width = (w / ratio);
\t\t\t\t} catch (e) {
\t\t\t\t\tthrow new Error('Error setting image. Message: ' + e.message);
\t\t\t\t}
\t\t\t};
\t\t\tif (_ready) {
\t\t\t\t_readyCb();
\t\t\t}
\t\t};
\t\t/**
\t\t * Set the icon from a source url. Won't work with badges.
\t\t */
\t\tvar rawImageSrc = function (url) {
\t\t\t_readyCb = function() {
\t\t\t\tlink.setIconSrc(url);
\t\t\t};
\t\t\tif (_ready) {
\t\t\t\t_readyCb();
\t\t\t}
\t\t};
\t\t/**
\t\t * Set video as icon
\t\t */
\t\tvar video = function (videoElement) {
\t\t\t_readyCb = function () {
\t\t\t\ttry {
\t\t\t\t\tif (videoElement === 'stop') {
\t\t\t\t\t\t_stop = true;
\t\t\t\t\t\ticon.reset();
\t\t\t\t\t\t_stop = false;
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t//var w = videoElement.width;
\t\t\t\t\t//var h = videoElement.height;
\t\t\t\t\t//var ratio = (w / _w < h / _h) ? (w / _w) : (h / _h);
\t\t\t\t\tvideoElement.addEventListener('play', function () {
\t\t\t\t\t\tdrawVideo(this);
\t\t\t\t\t}, false);

\t\t\t\t} catch (e) {
\t\t\t\t\tthrow new Error('Error setting video. Message: ' + e.message);
\t\t\t\t}
\t\t\t};
\t\t\tif (_ready) {
\t\t\t\t_readyCb();
\t\t\t}
\t\t};
\t\t/**
\t\t * Set video as icon
\t\t */
\t\tvar webcam = function (action) {
\t\t\t//UR
\t\t\tif (!window.URL || !window.URL.createObjectURL) {
\t\t\t\twindow.URL = window.URL || {};
\t\t\t\twindow.URL.createObjectURL = function (obj) {
\t\t\t\t\treturn obj;
\t\t\t\t};
\t\t\t}
\t\t\tif (_browser.supported) {
\t\t\t\tvar newVideo = false;
\t\t\t\tnavigator.getUserMedia = navigator.getUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia || navigator.mozGetUserMedia || navigator.webkitGetUserMedia;
\t\t\t\t_readyCb = function () {
\t\t\t\t\ttry {
\t\t\t\t\t\tif (action === 'stop') {
\t\t\t\t\t\t\t_stop = true;
\t\t\t\t\t\t\ticon.reset();
\t\t\t\t\t\t\t_stop = false;
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tnewVideo = document.createElement('video');
\t\t\t\t\t\tnewVideo.width = _w;
\t\t\t\t\t\tnewVideo.height = _h;
\t\t\t\t\t\tnavigator.getUserMedia({
\t\t\t\t\t\t\tvideo: true,
\t\t\t\t\t\t\taudio: false
\t\t\t\t\t\t}, function (stream) {
\t\t\t\t\t\t\tnewVideo.src = URL.createObjectURL(stream);
\t\t\t\t\t\t\tnewVideo.play();
\t\t\t\t\t\t\tdrawVideo(newVideo);
\t\t\t\t\t\t}, function () {
\t\t\t\t\t\t});
\t\t\t\t\t} catch (e) {
\t\t\t\t\t\tthrow new Error('Error setting webcam. Message: ' + e.message);
\t\t\t\t\t}
\t\t\t\t};
\t\t\t\tif (_ready) {
\t\t\t\t\t_readyCb();
\t\t\t\t}
\t\t\t}

\t\t};

\t\tvar setOpt = function (key, value) {
\t\t\tvar opts = key;
\t\t\tif (!(value == null && Object.prototype.toString.call(key) == '[object Object]')) {
\t\t\t\topts = {};
\t\t\t\topts[key] = value;
\t\t\t}

\t\t\tvar keys = Object.keys(opts);
\t\t\tfor (var i = 0; i < keys.length; i++) {
\t\t\t\tif (keys[i] == 'bgColor' || keys[i] == 'textColor') {
\t\t\t\t\t_opt[keys[i]] = hexToRgb(opts[keys[i]]);
\t\t\t\t} else {
\t\t\t\t\t_opt[keys[i]] = opts[keys[i]];
\t\t\t\t}
\t\t\t}

\t\t\t_queue.push(_lastBadge);
\t\t\ticon.start();
\t\t};

\t\t/**
\t\t * Draw video to context and repeat :)
\t\t */
\t\tfunction drawVideo(video) {
\t\t\tif (video.paused || video.ended || _stop) {
\t\t\t\treturn false;
\t\t\t}
\t\t\t//nasty hack for FF webcam (Thanks to Julian Ćwirko, kontakt@redsunmedia.pl)
\t\t\ttry {
\t\t\t\t_context.clearRect(0, 0, _w, _h);
\t\t\t\t_context.drawImage(video, 0, 0, _w, _h);
\t\t\t} catch (e) {

\t\t\t}
\t\t\t_drawTimeout = setTimeout(function () {
\t\t\t\tdrawVideo(video);
\t\t\t}, animation.duration);
\t\t\tlink.setIcon(_canvas);
\t\t}

\t\tvar link = {};
\t\t/**
\t\t * Get icons from HEAD tag or create a new <link> element
\t\t */
\t\tlink.getIcons = function () {
\t\t\tvar elms = [];
\t\t\t//get link element
\t\t\tvar getLinks = function () {
\t\t\t\tvar icons = [];
\t\t\t\tvar links = _doc.getElementsByTagName('head')[0].getElementsByTagName('link');
\t\t\t\tfor (var i = 0; i < links.length; i++) {
\t\t\t\t\tif ((/(^|\\s)icon(\\s|\$)/i).test(links[i].getAttribute('rel'))) {
\t\t\t\t\t\ticons.push(links[i]);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn icons;
\t\t\t};
\t\t\tif (_opt.element) {
\t\t\t\telms = [_opt.element];
\t\t\t} else if (_opt.elementId) {
\t\t\t\t//if img element identified by elementId
\t\t\t\telms = [_doc.getElementById(_opt.elementId)];
\t\t\t\telms[0].setAttribute('href', elms[0].getAttribute('src'));
\t\t\t} else {
\t\t\t\t//if link element
\t\t\t\telms = getLinks();
\t\t\t\tif (elms.length === 0) {
\t\t\t\t\telms = [_doc.createElement('link')];
\t\t\t\t\telms[0].setAttribute('rel', 'icon');
\t\t\t\t\t_doc.getElementsByTagName('head')[0].appendChild(elms[0]);
\t\t\t\t}
\t\t\t}
\t\t\telms.forEach(function(item) {
\t\t\t\titem.setAttribute('type', 'image/png');
\t\t\t});
\t\t\treturn elms;
\t\t};
\t\tlink.setIcon = function (canvas) {
\t\t\tvar url = canvas.toDataURL('image/png');
\t\t\tlink.setIconSrc(url);
\t\t};
\t\tlink.setIconSrc = function (url) {
\t\t\tif (_opt.dataUrl) {
\t\t\t\t//if using custom exporter
\t\t\t\t_opt.dataUrl(url);
\t\t\t}
\t\t\tif (_opt.element) {
\t\t\t\t_opt.element.setAttribute('href', url);
\t\t\t\t_opt.element.setAttribute('src', url);
\t\t\t} else if (_opt.elementId) {
\t\t\t\t//if is attached to element (image)
\t\t\t\tvar elm = _doc.getElementById(_opt.elementId);
\t\t\t\telm.setAttribute('href', url);
\t\t\t\telm.setAttribute('src', url);
\t\t\t} else {
\t\t\t\t//if is attached to fav icon
\t\t\t\tif (_browser.ff || _browser.opera) {
\t\t\t\t\t//for FF we need to \"recreate\" element, atach to dom and remove old <link>
\t\t\t\t\t//var originalType = _orig.getAttribute('rel');
\t\t\t\t\tvar old = _orig[_orig.length - 1];
\t\t\t\t\tvar newIcon = _doc.createElement('link');
\t\t\t\t\t_orig = [newIcon];
\t\t\t\t\t//_orig.setAttribute('rel', originalType);
\t\t\t\t\tif (_browser.opera) {
\t\t\t\t\t\tnewIcon.setAttribute('rel', 'icon');
\t\t\t\t\t}
\t\t\t\t\tnewIcon.setAttribute('rel', 'icon');
\t\t\t\t\tnewIcon.setAttribute('type', 'image/png');
\t\t\t\t\t_doc.getElementsByTagName('head')[0].appendChild(newIcon);
\t\t\t\t\tnewIcon.setAttribute('href', url);
\t\t\t\t\tif (old.parentNode) {
\t\t\t\t\t\told.parentNode.removeChild(old);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t_orig.forEach(function(icon) {
\t\t\t\t\t\ticon.setAttribute('href', url);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t};

\t\t//http://stackoverflow.com/questions/5623838/rgb-to-hex-and-hex-to-rgb#answer-5624139
\t\t//HEX to RGB convertor
\t\tfunction hexToRgb(hex) {
\t\t\tvar shorthandRegex = /^#?([a-f\\d])([a-f\\d])([a-f\\d])\$/i;
\t\t\thex = hex.replace(shorthandRegex, function (m, r, g, b) {
\t\t\t\treturn r + r + g + g + b + b;
\t\t\t});
\t\t\tvar result = /^#?([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})\$/i.exec(hex);
\t\t\treturn result ? {
\t\t\t\tr: parseInt(result[1], 16),
\t\t\t\tg: parseInt(result[2], 16),
\t\t\t\tb: parseInt(result[3], 16)
\t\t\t} : false;
\t\t}

\t\t/**
\t\t * Merge options
\t\t */
\t\tfunction merge(def, opt) {
\t\t\tvar mergedOpt = {};
\t\t\tvar attrname;
\t\t\tfor (attrname in def) {
\t\t\t\tmergedOpt[attrname] = def[attrname];
\t\t\t}
\t\t\tfor (attrname in opt) {
\t\t\t\tmergedOpt[attrname] = opt[attrname];
\t\t\t}
\t\t\treturn mergedOpt;
\t\t}

\t\t/**
\t\t * Cross-browser page visibility shim
\t\t * http://stackoverflow.com/questions/12536562/detect-whether-a-window-is-visible
\t\t */
\t\tfunction isPageHidden() {
\t\t\treturn _doc.hidden || _doc.msHidden || _doc.webkitHidden || _doc.mozHidden;
\t\t}

\t\t/**
\t\t * @namespace animation
\t\t */
\t\tvar animation = {};
\t\t/**
\t\t * Animation \"frame\" duration
\t\t */
\t\tanimation.duration = 40;
\t\t/**
\t\t * Animation types (none,fade,pop,slide)
\t\t */
\t\tanimation.types = {};
\t\tanimation.types.fade = [{
\t\t\tx: 0.4,
\t\t\ty: 0.4,
\t\t\tw: 0.6,
\t\t\th: 0.6,
\t\t\to: 0.0
\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.2
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.3
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.4
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.5
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.6
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.7
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.8
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.9
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1.0
\t\t\t}];
\t\tanimation.types.none = [{
\t\t\tx: 0.4,
\t\t\ty: 0.4,
\t\t\tw: 0.6,
\t\t\th: 0.6,
\t\t\to: 1
\t\t}];
\t\tanimation.types.pop = [{
\t\t\tx: 1,
\t\t\ty: 1,
\t\t\tw: 0,
\t\t\th: 0,
\t\t\to: 1
\t\t}, {
\t\t\t\tx: 0.9,
\t\t\t\ty: 0.9,
\t\t\t\tw: 0.1,
\t\t\t\th: 0.1,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.8,
\t\t\t\ty: 0.8,
\t\t\t\tw: 0.2,
\t\t\t\th: 0.2,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.7,
\t\t\t\ty: 0.7,
\t\t\t\tw: 0.3,
\t\t\t\th: 0.3,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.6,
\t\t\t\ty: 0.6,
\t\t\t\tw: 0.4,
\t\t\t\th: 0.4,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.5,
\t\t\t\ty: 0.5,
\t\t\t\tw: 0.5,
\t\t\t\th: 0.5,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}];
\t\tanimation.types.popFade = [{
\t\t\tx: 0.75,
\t\t\ty: 0.75,
\t\t\tw: 0,
\t\t\th: 0,
\t\t\to: 0
\t\t}, {
\t\t\t\tx: 0.65,
\t\t\t\ty: 0.65,
\t\t\t\tw: 0.1,
\t\t\t\th: 0.1,
\t\t\t\to: 0.2
\t\t\t}, {
\t\t\t\tx: 0.6,
\t\t\t\ty: 0.6,
\t\t\t\tw: 0.2,
\t\t\t\th: 0.2,
\t\t\t\to: 0.4
\t\t\t}, {
\t\t\t\tx: 0.55,
\t\t\t\ty: 0.55,
\t\t\t\tw: 0.3,
\t\t\t\th: 0.3,
\t\t\t\to: 0.6
\t\t\t}, {
\t\t\t\tx: 0.50,
\t\t\t\ty: 0.50,
\t\t\t\tw: 0.4,
\t\t\t\th: 0.4,
\t\t\t\to: 0.8
\t\t\t}, {
\t\t\t\tx: 0.45,
\t\t\t\ty: 0.45,
\t\t\t\tw: 0.5,
\t\t\t\th: 0.5,
\t\t\t\to: 0.9
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}];
\t\tanimation.types.slide = [{
\t\t\tx: 0.4,
\t\t\ty: 1,
\t\t\tw: 0.6,
\t\t\th: 0.6,
\t\t\to: 1
\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.9,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.9,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.8,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.7,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.6,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.5,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}];
\t\t/**
\t\t * Run animation
\t\t * @param {Object} opt Animation options
\t\t * @param {Object} cb Callabak after all steps are done
\t\t * @param {Object} revert Reverse order? true|false
\t\t * @param {Object} step Optional step number (frame bumber)
\t\t */
\t\tanimation.run = function (opt, cb, revert, step) {
\t\t\tvar animationType = animation.types[isPageHidden() ? 'none' : _opt.animation];
\t\t\tif (revert === true) {
\t\t\t\tstep = (typeof step !== 'undefined') ? step : animationType.length - 1;
\t\t\t} else {
\t\t\t\tstep = (typeof step !== 'undefined') ? step : 0;
\t\t\t}
\t\t\tcb = (cb) ? cb : function () {
\t\t\t};
\t\t\tif ((step < animationType.length) && (step >= 0)) {
\t\t\t\ttype[_opt.type](merge(opt, animationType[step]));
\t\t\t\t_animTimeout = setTimeout(function () {
\t\t\t\t\tif (revert) {
\t\t\t\t\t\tstep = step - 1;
\t\t\t\t\t} else {
\t\t\t\t\t\tstep = step + 1;
\t\t\t\t\t}
\t\t\t\t\tanimation.run(opt, cb, revert, step);
\t\t\t\t}, animation.duration);

\t\t\t\tlink.setIcon(_canvas);
\t\t\t} else {
\t\t\t\tcb();
\t\t\t\treturn;
\t\t\t}
\t\t};
\t\t//auto init
\t\tinit();
\t\treturn {
\t\t\tbadge: badge,
\t\t\tvideo: video,
\t\t\timage: image,
\t\t\trawImageSrc: rawImageSrc,
\t\t\twebcam: webcam,
\t\t\tsetOpt: setOpt,
\t\t\treset: icon.reset,
\t\t\tbrowser: {
\t\t\t\tsupported: _browser.supported
\t\t\t}
\t\t};
\t});

\t// AMD / RequireJS
\tif (typeof define !== 'undefined' && define.amd) {
\t\tdefine([], function () {
\t\t\treturn Favico;
\t\t});
\t}
\t// CommonJS
\telse if (typeof module !== 'undefined' && module.exports) {
\t\tmodule.exports = Favico;
\t}
\t// included directly via <script> tag
\telse {
\t\tthis.Favico = Favico;
\t}

})();
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_faviconnotificationbo/views/js/favico.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * @license MIT or GPL-2.0
 * @fileOverview Favico animations
 * @author Miroslav Magda, http://blog.ejci.net
 * @source: https://github.com/ejci/favico.js
 * @version 0.3.10
 */

/**
 * Create new favico instance
 * @param {Object} Options
 * @return {Object} Favico object
 * @example
 * var favico = new Favico({
 *    bgColor : '#d00',
 *    textColor : '#fff',
 *    fontFamily : 'sans-serif',
 *    fontStyle : 'bold',
 *    type : 'circle',
 *    position : 'down',
 *    animation : 'slide',
 *    elementId: false,
 *    element: null,
 *    dataUrl: function(url){},
 *    win: window
 * });
 */
(function () {

\tvar Favico = (function (opt) {
\t\t'use strict';
\t\topt = (opt) ? opt : {};
\t\tvar _def = {
\t\t\tbgColor: '#d00',
\t\t\ttextColor: '#fff',
\t\t\tfontFamily: 'sans-serif', //Arial,Verdana,Times New Roman,serif,sans-serif,...
\t\t\tfontStyle: 'bold', //normal,italic,oblique,bold,bolder,lighter,100,200,300,400,500,600,700,800,900
\t\t\ttype: 'circle',
\t\t\tposition: 'down', // down, up, left, leftup (upleft)
\t\t\tanimation: 'slide',
\t\t\telementId: false,
\t\t\telement: null,
\t\t\tdataUrl: false,
\t\t\twin: window
\t\t};
\t\tvar _opt, _orig, _h, _w, _canvas, _context, _img, _ready, _lastBadge, _running, _readyCb, _stop, _browser, _animTimeout, _drawTimeout, _doc;

\t\t_browser = {};
\t\t_browser.ff = typeof InstallTrigger != 'undefined';
\t\t_browser.chrome = !!window.chrome;
\t\t_browser.opera = !!window.opera || navigator.userAgent.indexOf('Opera') >= 0;
\t\t_browser.ie = /*@cc_on!@*/false;
\t\t_browser.safari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
\t\t_browser.supported = (_browser.chrome || _browser.ff || _browser.opera);

\t\tvar _queue = [];
\t\t_readyCb = function () {
\t\t};
\t\t_ready = _stop = false;
\t\t/**
\t\t * Initialize favico
\t\t */
\t\tvar init = function () {
\t\t\t//merge initial options
\t\t\t_opt = merge(_def, opt);
\t\t\t_opt.bgColor = hexToRgb(_opt.bgColor);
\t\t\t_opt.textColor = hexToRgb(_opt.textColor);
\t\t\t_opt.position = _opt.position.toLowerCase();
\t\t\t_opt.animation = (animation.types['' + _opt.animation]) ? _opt.animation : _def.animation;

\t\t\t_doc = _opt.win.document;

\t\t\tvar isUp = _opt.position.indexOf('up') > -1;
\t\t\tvar isLeft = _opt.position.indexOf('left') > -1;

\t\t\t//transform the animations
\t\t\tif (isUp || isLeft) {
\t\t\t\tfor (var a in animation.types) {
\t\t\t\t\tfor (var i = 0; i < animation.types[a].length; i++) {
\t\t\t\t\t\tvar step = animation.types[a][i];

\t\t\t\t\t\tif (isUp) {
\t\t\t\t\t\t\tif (step.y < 0.6) {
\t\t\t\t\t\t\t\tstep.y = step.y - 0.4;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tstep.y = step.y - 2 * step.y + (1 - step.w);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tif (isLeft) {
\t\t\t\t\t\t\tif (step.x < 0.6) {
\t\t\t\t\t\t\t\tstep.x = step.x - 0.4;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tstep.x = step.x - 2 * step.x + (1 - step.h);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tanimation.types[a][i] = step;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t_opt.type = (type['' + _opt.type]) ? _opt.type : _def.type;

\t\t\t_orig = link. getIcons();
\t\t\t//create temp canvas
\t\t\t_canvas = document.createElement('canvas');
\t\t\t//create temp image
\t\t\t_img = document.createElement('img');
\t\t\tvar lastIcon = _orig[_orig.length - 1];
\t\t\tif (lastIcon.hasAttribute('href')) {
\t\t\t\t_img.setAttribute('crossOrigin', 'anonymous');
\t\t\t\t//get width/height
\t\t\t\t_img.onload = function () {
\t\t\t\t\t_h = (_img.height > 0) ? _img.height : 32;
\t\t\t\t\t_w = (_img.width > 0) ? _img.width : 32;
\t\t\t\t\t_canvas.height = _h;
\t\t\t\t\t_canvas.width = _w;
\t\t\t\t\t_context = _canvas.getContext('2d');
\t\t\t\t\ticon.ready();
\t\t\t\t};
\t\t\t\t_img.setAttribute('src', lastIcon.getAttribute('href'));
\t\t\t} else {
\t\t\t\t_h = 32;
\t\t\t\t_w = 32;
\t\t\t\t_img.height = _h;
\t\t\t\t_img.width = _w;
\t\t\t\t_canvas.height = _h;
\t\t\t\t_canvas.width = _w;
\t\t\t\t_context = _canvas.getContext('2d');
\t\t\t\ticon.ready();
\t\t\t}

\t\t};
\t\t/**
\t\t * Icon namespace
\t\t */
\t\tvar icon = {};
\t\t/**
\t\t * Icon is ready (reset icon) and start animation (if ther is any)
\t\t */
\t\ticon.ready = function () {
\t\t\t_ready = true;
\t\t\ticon.reset();
\t\t\t_readyCb();
\t\t};
\t\t/**
\t\t * Reset icon to default state
\t\t */
\t\ticon.reset = function () {
\t\t\t//reset
\t\t\tif (!_ready) {
\t\t\t\treturn;
\t\t\t}
\t\t\t_queue = [];
\t\t\t_lastBadge = false;
\t\t\t_running = false;
\t\t\t_context.clearRect(0, 0, _w, _h);
\t\t\t_context.drawImage(_img, 0, 0, _w, _h);
\t\t\t//_stop=true;
\t\t\tlink.setIcon(_canvas);
\t\t\t//webcam('stop');
\t\t\t//video('stop');
\t\t\twindow.clearTimeout(_animTimeout);
\t\t\twindow.clearTimeout(_drawTimeout);
\t\t};
\t\t/**
\t\t * Start animation
\t\t */
\t\ticon.start = function () {
\t\t\tif (!_ready || _running) {
\t\t\t\treturn;
\t\t\t}
\t\t\tvar finished = function () {
\t\t\t\t_lastBadge = _queue[0];
\t\t\t\t_running = false;
\t\t\t\tif (_queue.length > 0) {
\t\t\t\t\t_queue.shift();
\t\t\t\t\ticon.start();
\t\t\t\t} else {

\t\t\t\t}
\t\t\t};
\t\t\tif (_queue.length > 0) {
\t\t\t\t_running = true;
\t\t\t\tvar run = function () {
\t\t\t\t\t// apply options for this animation
\t\t\t\t\t['type', 'animation', 'bgColor', 'textColor', 'fontFamily', 'fontStyle'].forEach(function (a) {
\t\t\t\t\t\tif (a in _queue[0].options) {
\t\t\t\t\t\t\t_opt[a] = _queue[0].options[a];
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tanimation.run(_queue[0].options, function () {
\t\t\t\t\t\tfinished();
\t\t\t\t\t}, false);
\t\t\t\t};
\t\t\t\tif (_lastBadge) {
\t\t\t\t\tanimation.run(_lastBadge.options, function () {
\t\t\t\t\t\trun();
\t\t\t\t\t}, true);
\t\t\t\t} else {
\t\t\t\t\trun();
\t\t\t\t}
\t\t\t}
\t\t};

\t\t/**
\t\t * Badge types
\t\t */
\t\tvar type = {};
\t\tvar options = function (opt) {
\t\t\topt.n = ((typeof opt.n) === 'number') ? Math.abs(opt.n | 0) : opt.n;
\t\t\topt.x = _w * opt.x;
\t\t\topt.y = _h * opt.y;
\t\t\topt.w = _w * opt.w;
\t\t\topt.h = _h * opt.h;
\t\t\topt.len = (\"\" + opt.n).length;
\t\t\treturn opt;
\t\t};
\t\t/**
\t\t * Generate circle
\t\t * @param {Object} opt Badge options
\t\t */
\t\ttype.circle = function (opt) {
\t\t\topt = options(opt);
\t\t\tvar more = false;
\t\t\tif (opt.len === 2) {
\t\t\t\topt.x = opt.x - opt.w * 0.4;
\t\t\t\topt.w = opt.w * 1.4;
\t\t\t\tmore = true;
\t\t\t} else if (opt.len >= 3) {
\t\t\t\topt.x = opt.x - opt.w * 0.65;
\t\t\t\topt.w = opt.w * 1.65;
\t\t\t\tmore = true;
\t\t\t}
\t\t\t_context.clearRect(0, 0, _w, _h);
\t\t\t_context.drawImage(_img, 0, 0, _w, _h);
\t\t\t_context.beginPath();
\t\t\t_context.font = _opt.fontStyle + \" \" + Math.floor(opt.h * (opt.n > 99 ? 0.85 : 1)) + \"px \" + _opt.fontFamily;
\t\t\t_context.textAlign = 'center';
\t\t\tif (more) {
\t\t\t\t_context.moveTo(opt.x + opt.w / 2, opt.y);
\t\t\t\t_context.lineTo(opt.x + opt.w - opt.h / 2, opt.y);
\t\t\t\t_context.quadraticCurveTo(opt.x + opt.w, opt.y, opt.x + opt.w, opt.y + opt.h / 2);
\t\t\t\t_context.lineTo(opt.x + opt.w, opt.y + opt.h - opt.h / 2);
\t\t\t\t_context.quadraticCurveTo(opt.x + opt.w, opt.y + opt.h, opt.x + opt.w - opt.h / 2, opt.y + opt.h);
\t\t\t\t_context.lineTo(opt.x + opt.h / 2, opt.y + opt.h);
\t\t\t\t_context.quadraticCurveTo(opt.x, opt.y + opt.h, opt.x, opt.y + opt.h - opt.h / 2);
\t\t\t\t_context.lineTo(opt.x, opt.y + opt.h / 2);
\t\t\t\t_context.quadraticCurveTo(opt.x, opt.y, opt.x + opt.h / 2, opt.y);
\t\t\t} else {
\t\t\t\t_context.arc(opt.x + opt.w / 2, opt.y + opt.h / 2, opt.h / 2, 0, 2 * Math.PI);
\t\t\t}
\t\t\t_context.fillStyle = 'rgba(' + _opt.bgColor.r + ',' + _opt.bgColor.g + ',' + _opt.bgColor.b + ',' + opt.o + ')';
\t\t\t_context.fill();
\t\t\t_context.closePath();
\t\t\t_context.beginPath();
\t\t\t_context.stroke();
\t\t\t_context.fillStyle = 'rgba(' + _opt.textColor.r + ',' + _opt.textColor.g + ',' + _opt.textColor.b + ',' + opt.o + ')';
\t\t\t//_context.fillText((more) ? '9+' : opt.n, Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.15));
\t\t\tif ((typeof opt.n) === 'number' && opt.n > 999) {
\t\t\t\t_context.fillText(((opt.n > 9999) ? 9 : Math.floor(opt.n / 1000)) + 'k+', Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.2));
\t\t\t} else {
\t\t\t\t_context.fillText(opt.n, Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.15));
\t\t\t}
\t\t\t_context.closePath();
\t\t};
\t\t/**
\t\t * Generate rectangle
\t\t * @param {Object} opt Badge options
\t\t */
\t\ttype.rectangle = function (opt) {
\t\t\topt = options(opt);
\t\t\tvar more = false;
\t\t\tif (opt.len === 2) {
\t\t\t\topt.x = opt.x - opt.w * 0.4;
\t\t\t\topt.w = opt.w * 1.4;
\t\t\t\tmore = true;
\t\t\t} else if (opt.len >= 3) {
\t\t\t\topt.x = opt.x - opt.w * 0.65;
\t\t\t\topt.w = opt.w * 1.65;
\t\t\t\tmore = true;
\t\t\t}
\t\t\t_context.clearRect(0, 0, _w, _h);
\t\t\t_context.drawImage(_img, 0, 0, _w, _h);
\t\t\t_context.beginPath();
\t\t\t_context.font = _opt.fontStyle + \" \" + Math.floor(opt.h * (opt.n > 99 ? 0.9 : 1)) + \"px \" + _opt.fontFamily;
\t\t\t_context.textAlign = 'center';
\t\t\t_context.fillStyle = 'rgba(' + _opt.bgColor.r + ',' + _opt.bgColor.g + ',' + _opt.bgColor.b + ',' + opt.o + ')';
\t\t\t_context.fillRect(opt.x, opt.y, opt.w, opt.h);
\t\t\t_context.fillStyle = 'rgba(' + _opt.textColor.r + ',' + _opt.textColor.g + ',' + _opt.textColor.b + ',' + opt.o + ')';
\t\t\t//_context.fillText((more) ? '9+' : opt.n, Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.15));
\t\t\tif ((typeof opt.n) === 'number' && opt.n > 999) {
\t\t\t\t_context.fillText(((opt.n > 9999) ? 9 : Math.floor(opt.n / 1000)) + 'k+', Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.2));
\t\t\t} else {
\t\t\t\t_context.fillText(opt.n, Math.floor(opt.x + opt.w / 2), Math.floor(opt.y + opt.h - opt.h * 0.15));
\t\t\t}
\t\t\t_context.closePath();
\t\t};

\t\t/**
\t\t * Set badge
\t\t */
\t\tvar badge = function (number, opts) {
\t\t\topts = ((typeof opts) === 'string' ? {
\t\t\t\tanimation: opts
\t\t\t} : opts) || {};
\t\t\t_readyCb = function () {
\t\t\t\ttry {
\t\t\t\t\tif (typeof (number) === 'number' ? (number > 0) : (number !== '')) {
\t\t\t\t\t\tvar q = {
\t\t\t\t\t\t\ttype: 'badge',
\t\t\t\t\t\t\toptions: {
\t\t\t\t\t\t\t\tn: number
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t\tif ('animation' in opts && animation.types['' + opts.animation]) {
\t\t\t\t\t\t\tq.options.animation = '' + opts.animation;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ('type' in opts && type['' + opts.type]) {
\t\t\t\t\t\t\tq.options.type = '' + opts.type;
\t\t\t\t\t\t}
\t\t\t\t\t\t['bgColor', 'textColor'].forEach(function (o) {
\t\t\t\t\t\t\tif (o in opts) {
\t\t\t\t\t\t\t\tq.options[o] = hexToRgb(opts[o]);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\t['fontStyle', 'fontFamily'].forEach(function (o) {
\t\t\t\t\t\t\tif (o in opts) {
\t\t\t\t\t\t\t\tq.options[o] = opts[o];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\t_queue.push(q);
\t\t\t\t\t\tif (_queue.length > 100) {
\t\t\t\t\t\t\tthrow new Error('Too many badges requests in queue.');
\t\t\t\t\t\t}
\t\t\t\t\t\ticon.start();
\t\t\t\t\t} else {
\t\t\t\t\t\ticon.reset();
\t\t\t\t\t}
\t\t\t\t} catch (e) {
\t\t\t\t\tthrow new Error('Error setting badge. Message: ' + e.message);
\t\t\t\t}
\t\t\t};
\t\t\tif (_ready) {
\t\t\t\t_readyCb();
\t\t\t}
\t\t};

\t\t/**
\t\t * Set image as icon
\t\t */
\t\tvar image = function (imageElement) {
\t\t\t_readyCb = function () {
\t\t\t\ttry {
\t\t\t\t\tvar w = imageElement.width;
\t\t\t\t\tvar h = imageElement.height;
\t\t\t\t\tvar newImg = document.createElement('img');
\t\t\t\t\tvar ratio = (w / _w < h / _h) ? (w / _w) : (h / _h);
\t\t\t\t\tnewImg.setAttribute('crossOrigin', 'anonymous');
\t\t\t\t\tnewImg.onload=function(){
\t\t\t\t\t\t_context.clearRect(0, 0, _w, _h);
\t\t\t\t\t\t_context.drawImage(newImg, 0, 0, _w, _h);
\t\t\t\t\t\tlink.setIcon(_canvas);
\t\t\t\t\t};
\t\t\t\t\tnewImg.setAttribute('src', imageElement.getAttribute('src'));
\t\t\t\t\tnewImg.height = (h / ratio);
\t\t\t\t\tnewImg.width = (w / ratio);
\t\t\t\t} catch (e) {
\t\t\t\t\tthrow new Error('Error setting image. Message: ' + e.message);
\t\t\t\t}
\t\t\t};
\t\t\tif (_ready) {
\t\t\t\t_readyCb();
\t\t\t}
\t\t};
\t\t/**
\t\t * Set the icon from a source url. Won't work with badges.
\t\t */
\t\tvar rawImageSrc = function (url) {
\t\t\t_readyCb = function() {
\t\t\t\tlink.setIconSrc(url);
\t\t\t};
\t\t\tif (_ready) {
\t\t\t\t_readyCb();
\t\t\t}
\t\t};
\t\t/**
\t\t * Set video as icon
\t\t */
\t\tvar video = function (videoElement) {
\t\t\t_readyCb = function () {
\t\t\t\ttry {
\t\t\t\t\tif (videoElement === 'stop') {
\t\t\t\t\t\t_stop = true;
\t\t\t\t\t\ticon.reset();
\t\t\t\t\t\t_stop = false;
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t//var w = videoElement.width;
\t\t\t\t\t//var h = videoElement.height;
\t\t\t\t\t//var ratio = (w / _w < h / _h) ? (w / _w) : (h / _h);
\t\t\t\t\tvideoElement.addEventListener('play', function () {
\t\t\t\t\t\tdrawVideo(this);
\t\t\t\t\t}, false);

\t\t\t\t} catch (e) {
\t\t\t\t\tthrow new Error('Error setting video. Message: ' + e.message);
\t\t\t\t}
\t\t\t};
\t\t\tif (_ready) {
\t\t\t\t_readyCb();
\t\t\t}
\t\t};
\t\t/**
\t\t * Set video as icon
\t\t */
\t\tvar webcam = function (action) {
\t\t\t//UR
\t\t\tif (!window.URL || !window.URL.createObjectURL) {
\t\t\t\twindow.URL = window.URL || {};
\t\t\t\twindow.URL.createObjectURL = function (obj) {
\t\t\t\t\treturn obj;
\t\t\t\t};
\t\t\t}
\t\t\tif (_browser.supported) {
\t\t\t\tvar newVideo = false;
\t\t\t\tnavigator.getUserMedia = navigator.getUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia || navigator.mozGetUserMedia || navigator.webkitGetUserMedia;
\t\t\t\t_readyCb = function () {
\t\t\t\t\ttry {
\t\t\t\t\t\tif (action === 'stop') {
\t\t\t\t\t\t\t_stop = true;
\t\t\t\t\t\t\ticon.reset();
\t\t\t\t\t\t\t_stop = false;
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tnewVideo = document.createElement('video');
\t\t\t\t\t\tnewVideo.width = _w;
\t\t\t\t\t\tnewVideo.height = _h;
\t\t\t\t\t\tnavigator.getUserMedia({
\t\t\t\t\t\t\tvideo: true,
\t\t\t\t\t\t\taudio: false
\t\t\t\t\t\t}, function (stream) {
\t\t\t\t\t\t\tnewVideo.src = URL.createObjectURL(stream);
\t\t\t\t\t\t\tnewVideo.play();
\t\t\t\t\t\t\tdrawVideo(newVideo);
\t\t\t\t\t\t}, function () {
\t\t\t\t\t\t});
\t\t\t\t\t} catch (e) {
\t\t\t\t\t\tthrow new Error('Error setting webcam. Message: ' + e.message);
\t\t\t\t\t}
\t\t\t\t};
\t\t\t\tif (_ready) {
\t\t\t\t\t_readyCb();
\t\t\t\t}
\t\t\t}

\t\t};

\t\tvar setOpt = function (key, value) {
\t\t\tvar opts = key;
\t\t\tif (!(value == null && Object.prototype.toString.call(key) == '[object Object]')) {
\t\t\t\topts = {};
\t\t\t\topts[key] = value;
\t\t\t}

\t\t\tvar keys = Object.keys(opts);
\t\t\tfor (var i = 0; i < keys.length; i++) {
\t\t\t\tif (keys[i] == 'bgColor' || keys[i] == 'textColor') {
\t\t\t\t\t_opt[keys[i]] = hexToRgb(opts[keys[i]]);
\t\t\t\t} else {
\t\t\t\t\t_opt[keys[i]] = opts[keys[i]];
\t\t\t\t}
\t\t\t}

\t\t\t_queue.push(_lastBadge);
\t\t\ticon.start();
\t\t};

\t\t/**
\t\t * Draw video to context and repeat :)
\t\t */
\t\tfunction drawVideo(video) {
\t\t\tif (video.paused || video.ended || _stop) {
\t\t\t\treturn false;
\t\t\t}
\t\t\t//nasty hack for FF webcam (Thanks to Julian Ćwirko, kontakt@redsunmedia.pl)
\t\t\ttry {
\t\t\t\t_context.clearRect(0, 0, _w, _h);
\t\t\t\t_context.drawImage(video, 0, 0, _w, _h);
\t\t\t} catch (e) {

\t\t\t}
\t\t\t_drawTimeout = setTimeout(function () {
\t\t\t\tdrawVideo(video);
\t\t\t}, animation.duration);
\t\t\tlink.setIcon(_canvas);
\t\t}

\t\tvar link = {};
\t\t/**
\t\t * Get icons from HEAD tag or create a new <link> element
\t\t */
\t\tlink.getIcons = function () {
\t\t\tvar elms = [];
\t\t\t//get link element
\t\t\tvar getLinks = function () {
\t\t\t\tvar icons = [];
\t\t\t\tvar links = _doc.getElementsByTagName('head')[0].getElementsByTagName('link');
\t\t\t\tfor (var i = 0; i < links.length; i++) {
\t\t\t\t\tif ((/(^|\\s)icon(\\s|\$)/i).test(links[i].getAttribute('rel'))) {
\t\t\t\t\t\ticons.push(links[i]);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn icons;
\t\t\t};
\t\t\tif (_opt.element) {
\t\t\t\telms = [_opt.element];
\t\t\t} else if (_opt.elementId) {
\t\t\t\t//if img element identified by elementId
\t\t\t\telms = [_doc.getElementById(_opt.elementId)];
\t\t\t\telms[0].setAttribute('href', elms[0].getAttribute('src'));
\t\t\t} else {
\t\t\t\t//if link element
\t\t\t\telms = getLinks();
\t\t\t\tif (elms.length === 0) {
\t\t\t\t\telms = [_doc.createElement('link')];
\t\t\t\t\telms[0].setAttribute('rel', 'icon');
\t\t\t\t\t_doc.getElementsByTagName('head')[0].appendChild(elms[0]);
\t\t\t\t}
\t\t\t}
\t\t\telms.forEach(function(item) {
\t\t\t\titem.setAttribute('type', 'image/png');
\t\t\t});
\t\t\treturn elms;
\t\t};
\t\tlink.setIcon = function (canvas) {
\t\t\tvar url = canvas.toDataURL('image/png');
\t\t\tlink.setIconSrc(url);
\t\t};
\t\tlink.setIconSrc = function (url) {
\t\t\tif (_opt.dataUrl) {
\t\t\t\t//if using custom exporter
\t\t\t\t_opt.dataUrl(url);
\t\t\t}
\t\t\tif (_opt.element) {
\t\t\t\t_opt.element.setAttribute('href', url);
\t\t\t\t_opt.element.setAttribute('src', url);
\t\t\t} else if (_opt.elementId) {
\t\t\t\t//if is attached to element (image)
\t\t\t\tvar elm = _doc.getElementById(_opt.elementId);
\t\t\t\telm.setAttribute('href', url);
\t\t\t\telm.setAttribute('src', url);
\t\t\t} else {
\t\t\t\t//if is attached to fav icon
\t\t\t\tif (_browser.ff || _browser.opera) {
\t\t\t\t\t//for FF we need to \"recreate\" element, atach to dom and remove old <link>
\t\t\t\t\t//var originalType = _orig.getAttribute('rel');
\t\t\t\t\tvar old = _orig[_orig.length - 1];
\t\t\t\t\tvar newIcon = _doc.createElement('link');
\t\t\t\t\t_orig = [newIcon];
\t\t\t\t\t//_orig.setAttribute('rel', originalType);
\t\t\t\t\tif (_browser.opera) {
\t\t\t\t\t\tnewIcon.setAttribute('rel', 'icon');
\t\t\t\t\t}
\t\t\t\t\tnewIcon.setAttribute('rel', 'icon');
\t\t\t\t\tnewIcon.setAttribute('type', 'image/png');
\t\t\t\t\t_doc.getElementsByTagName('head')[0].appendChild(newIcon);
\t\t\t\t\tnewIcon.setAttribute('href', url);
\t\t\t\t\tif (old.parentNode) {
\t\t\t\t\t\told.parentNode.removeChild(old);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t_orig.forEach(function(icon) {
\t\t\t\t\t\ticon.setAttribute('href', url);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t};

\t\t//http://stackoverflow.com/questions/5623838/rgb-to-hex-and-hex-to-rgb#answer-5624139
\t\t//HEX to RGB convertor
\t\tfunction hexToRgb(hex) {
\t\t\tvar shorthandRegex = /^#?([a-f\\d])([a-f\\d])([a-f\\d])\$/i;
\t\t\thex = hex.replace(shorthandRegex, function (m, r, g, b) {
\t\t\t\treturn r + r + g + g + b + b;
\t\t\t});
\t\t\tvar result = /^#?([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})\$/i.exec(hex);
\t\t\treturn result ? {
\t\t\t\tr: parseInt(result[1], 16),
\t\t\t\tg: parseInt(result[2], 16),
\t\t\t\tb: parseInt(result[3], 16)
\t\t\t} : false;
\t\t}

\t\t/**
\t\t * Merge options
\t\t */
\t\tfunction merge(def, opt) {
\t\t\tvar mergedOpt = {};
\t\t\tvar attrname;
\t\t\tfor (attrname in def) {
\t\t\t\tmergedOpt[attrname] = def[attrname];
\t\t\t}
\t\t\tfor (attrname in opt) {
\t\t\t\tmergedOpt[attrname] = opt[attrname];
\t\t\t}
\t\t\treturn mergedOpt;
\t\t}

\t\t/**
\t\t * Cross-browser page visibility shim
\t\t * http://stackoverflow.com/questions/12536562/detect-whether-a-window-is-visible
\t\t */
\t\tfunction isPageHidden() {
\t\t\treturn _doc.hidden || _doc.msHidden || _doc.webkitHidden || _doc.mozHidden;
\t\t}

\t\t/**
\t\t * @namespace animation
\t\t */
\t\tvar animation = {};
\t\t/**
\t\t * Animation \"frame\" duration
\t\t */
\t\tanimation.duration = 40;
\t\t/**
\t\t * Animation types (none,fade,pop,slide)
\t\t */
\t\tanimation.types = {};
\t\tanimation.types.fade = [{
\t\t\tx: 0.4,
\t\t\ty: 0.4,
\t\t\tw: 0.6,
\t\t\th: 0.6,
\t\t\to: 0.0
\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.2
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.3
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.4
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.5
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.6
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.7
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.8
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 0.9
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1.0
\t\t\t}];
\t\tanimation.types.none = [{
\t\t\tx: 0.4,
\t\t\ty: 0.4,
\t\t\tw: 0.6,
\t\t\th: 0.6,
\t\t\to: 1
\t\t}];
\t\tanimation.types.pop = [{
\t\t\tx: 1,
\t\t\ty: 1,
\t\t\tw: 0,
\t\t\th: 0,
\t\t\to: 1
\t\t}, {
\t\t\t\tx: 0.9,
\t\t\t\ty: 0.9,
\t\t\t\tw: 0.1,
\t\t\t\th: 0.1,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.8,
\t\t\t\ty: 0.8,
\t\t\t\tw: 0.2,
\t\t\t\th: 0.2,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.7,
\t\t\t\ty: 0.7,
\t\t\t\tw: 0.3,
\t\t\t\th: 0.3,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.6,
\t\t\t\ty: 0.6,
\t\t\t\tw: 0.4,
\t\t\t\th: 0.4,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.5,
\t\t\t\ty: 0.5,
\t\t\t\tw: 0.5,
\t\t\t\th: 0.5,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}];
\t\tanimation.types.popFade = [{
\t\t\tx: 0.75,
\t\t\ty: 0.75,
\t\t\tw: 0,
\t\t\th: 0,
\t\t\to: 0
\t\t}, {
\t\t\t\tx: 0.65,
\t\t\t\ty: 0.65,
\t\t\t\tw: 0.1,
\t\t\t\th: 0.1,
\t\t\t\to: 0.2
\t\t\t}, {
\t\t\t\tx: 0.6,
\t\t\t\ty: 0.6,
\t\t\t\tw: 0.2,
\t\t\t\th: 0.2,
\t\t\t\to: 0.4
\t\t\t}, {
\t\t\t\tx: 0.55,
\t\t\t\ty: 0.55,
\t\t\t\tw: 0.3,
\t\t\t\th: 0.3,
\t\t\t\to: 0.6
\t\t\t}, {
\t\t\t\tx: 0.50,
\t\t\t\ty: 0.50,
\t\t\t\tw: 0.4,
\t\t\t\th: 0.4,
\t\t\t\to: 0.8
\t\t\t}, {
\t\t\t\tx: 0.45,
\t\t\t\ty: 0.45,
\t\t\t\tw: 0.5,
\t\t\t\th: 0.5,
\t\t\t\to: 0.9
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}];
\t\tanimation.types.slide = [{
\t\t\tx: 0.4,
\t\t\ty: 1,
\t\t\tw: 0.6,
\t\t\th: 0.6,
\t\t\to: 1
\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.9,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.9,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.8,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.7,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.6,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.5,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}, {
\t\t\t\tx: 0.4,
\t\t\t\ty: 0.4,
\t\t\t\tw: 0.6,
\t\t\t\th: 0.6,
\t\t\t\to: 1
\t\t\t}];
\t\t/**
\t\t * Run animation
\t\t * @param {Object} opt Animation options
\t\t * @param {Object} cb Callabak after all steps are done
\t\t * @param {Object} revert Reverse order? true|false
\t\t * @param {Object} step Optional step number (frame bumber)
\t\t */
\t\tanimation.run = function (opt, cb, revert, step) {
\t\t\tvar animationType = animation.types[isPageHidden() ? 'none' : _opt.animation];
\t\t\tif (revert === true) {
\t\t\t\tstep = (typeof step !== 'undefined') ? step : animationType.length - 1;
\t\t\t} else {
\t\t\t\tstep = (typeof step !== 'undefined') ? step : 0;
\t\t\t}
\t\t\tcb = (cb) ? cb : function () {
\t\t\t};
\t\t\tif ((step < animationType.length) && (step >= 0)) {
\t\t\t\ttype[_opt.type](merge(opt, animationType[step]));
\t\t\t\t_animTimeout = setTimeout(function () {
\t\t\t\t\tif (revert) {
\t\t\t\t\t\tstep = step - 1;
\t\t\t\t\t} else {
\t\t\t\t\t\tstep = step + 1;
\t\t\t\t\t}
\t\t\t\t\tanimation.run(opt, cb, revert, step);
\t\t\t\t}, animation.duration);

\t\t\t\tlink.setIcon(_canvas);
\t\t\t} else {
\t\t\t\tcb();
\t\t\t\treturn;
\t\t\t}
\t\t};
\t\t//auto init
\t\tinit();
\t\treturn {
\t\t\tbadge: badge,
\t\t\tvideo: video,
\t\t\timage: image,
\t\t\trawImageSrc: rawImageSrc,
\t\t\twebcam: webcam,
\t\t\tsetOpt: setOpt,
\t\t\treset: icon.reset,
\t\t\tbrowser: {
\t\t\t\tsupported: _browser.supported
\t\t\t}
\t\t};
\t});

\t// AMD / RequireJS
\tif (typeof define !== 'undefined' && define.amd) {
\t\tdefine([], function () {
\t\t\treturn Favico;
\t\t});
\t}
\t// CommonJS
\telse if (typeof module !== 'undefined' && module.exports) {
\t\tmodule.exports = Favico;
\t}
\t// included directly via <script> tag
\telse {
\t\tthis.Favico = Favico;
\t}

})();
", "@Modules/ps_faviconnotificationbo/views/js/favico.js", "/var/www/html/modules/ps_faviconnotificationbo/views/js/favico.js");
    }
}

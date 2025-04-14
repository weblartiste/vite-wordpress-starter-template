import $ from "jquery";
import "@assets/scss/app.scss";
import initTest from "@assets/js/layouts/test.js";

$(document).ready(function ($) {
	console.log('ready');
	$('#year').html(new Date().getFullYear());
    initTest();
	// gsap.to("body", { opacity: 1, duration: .4 });
});
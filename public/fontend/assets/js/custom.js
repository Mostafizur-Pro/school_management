var timer = !1;
		_Ticker = $("#T1").newsTicker();
		_Ticker.on("mouseenter",function(){
			var __self = this;
			timer = setTimeout(function(){
				__self.pauseTicker();
			},200);
		});
		_Ticker.on("mouseleave",function(){
			clearTimeout(timer);
			if(!timer) return !1;
			this.startTicker();
		});
$(document).ready(function(){ 

	/*********** Nav menu ***************/
	$('.nav-icon').click(function(){
		$('.mobile-menubar').toggleClass('canvas-menu');
		return false;
	});	
	$('.nav-icon').click(function(){
		$('.menubar-area1').slideToggle();
		return false;
	});
	$(' ul li').click(function(){
		$('.menubar ul .click-drop').slideToggle();
		// return false;
	});
	$('.crossbar').on('click',function(){
		$('.mobile-menubar').removeClass('canvas-menu');
		$('.mobile-menubar').addClass('canvas-menu');
		return false;
	});
	  var tickerLength = $('.demo1 ul li').length;
var tickerHeight = $('.demo1 ul li').outerHeight();
$('.demo1 ul li:last-child').prependTo('.demo1 ul');
$('.demo1 ul').css('marginTop',-tickerHeight);
function moveTop(){
$('.demo1 ul').animate({
  top : -tickerHeight
},600, function(){
 $('.demo1 ul li:first-child').appendTo('.demo1 ul');
  $('.demo1 ul').css('top','');
});
}
setInterval( function(){
moveTop();
}, 3000);
	
	$('.slider-area').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		loop:true,
		nav:true,
		dots:false,
		autoplay:true,
		autoplayTimeout:4000,
		items:1,
	});
	$('.timeline-single-area').owlCarousel({
		loop:true,
		nav:false,
		margin:10,
		autoplay:true,
		autoplayTimeout:4000,
		dots:false,
		responsive:{
			0:{
				items:1,
			},
			450:{
				items:2,
			},
			768:{
				items:3
			},
			992:{
				items:4
			},
			1200:{
				items:5
			}
		}
	});
		
	$('.popup').magnificPopup({
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		},
		gallery: {
			enabled: true,
		},
});
var Cal = function(divId) {

//Store div id
this.divId = divId;

// Days of week, starting on Sunday
this.DaysOfWeek = [
'Sun',
'Mon',
'Tue',
'Wed',
'Thu',
'Fri',
'Sat'
];

// Months, stating on January
this.Months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ];

// Set the current month, year
var d = new Date();

this.currMonth = d.getMonth();
this.currYear = d.getFullYear();
this.currDay = d.getDate();

};

// Goes to next month
Cal.prototype.nextMonth = function() {
if ( this.currMonth == 11 ) {
this.currMonth = 0;
this.currYear = this.currYear + 1;
}
else {
this.currMonth = this.currMonth + 1;
}
this.showcurr();
};

// Goes to previous month
Cal.prototype.previousMonth = function() {
if ( this.currMonth == 0 ) {
this.currMonth = 11;
this.currYear = this.currYear - 1;
}
else {
this.currMonth = this.currMonth - 1;
}
this.showcurr();
};

// Show current month
Cal.prototype.showcurr = function() {
this.showMonth(this.currYear, this.currMonth);
};

// Show month (year, month)
Cal.prototype.showMonth = function(y, m) {

var d = new Date()
// First day of the week in the selected month
, firstDayOfMonth = new Date(y, m, 1).getDay()
// Last day of the selected month
, lastDateOfMonth =  new Date(y, m+1, 0).getDate()
// Last day of the previous month
, lastDayOfLastMonth = m == 0 ? new Date(y-1, 11, 0).getDate() : new Date(y, m, 0).getDate();


var html = '<table>';

// Write selected month and year
html += '<thead><tr>';
html += '<td colspan="7">' + this.Months[m] + ' ' + y + '</td>';
html += '</tr></thead>';


// Write the header of the days of the week
html += '<tr class="days">';
for(var i=0; i < this.DaysOfWeek.length;i++) {
html += '<td>' + this.DaysOfWeek[i] + '</td>';
}
html += '</tr>';

// Write the days
var i=1;
do {

var dow = new Date(y, m, i).getDay();

// If Sunday, start new row
if ( dow == 0 ) {
  html += '<tr>';
}
// If not Sunday but first day of the month
// it will write the last days from the previous month
else if ( i == 1 ) {
  html += '<tr>';
  var k = lastDayOfLastMonth - firstDayOfMonth+1;
  for(var j=0; j < firstDayOfMonth; j++) {
	html += '<td class="not-current">' + k + '</td>';
	k++;
  }
}

// Write the current day in the loop
var chk = new Date();
var chkY = chk.getFullYear();
var chkM = chk.getMonth();
if (chkY == this.currYear && chkM == this.currMonth && i == this.currDay) {
  html += '<td class="today">' + i + '</td>';
} else {
  html += '<td class="normal">' + i + '</td>';
}
// If Saturday, closes the row
if ( dow == 6 ) {
  html += '</tr>';
}
// If not Saturday, but last day of the selected month
// it will write the next few days from the next month
else if ( i == lastDateOfMonth ) {
  var k=1;
  for(dow; dow < 6; dow++) {
	html += '<td class="not-current">' + k + '</td>';
	k++;
  }
}

i++;
}while(i <= lastDateOfMonth);

// Closes table
html += '</table>';

// Write HTML to the div
document.getElementById(this.divId).innerHTML = html;
};

// On Load of the window
window.onload = function() {

// Start calendar
var c = new Cal("divCal");			
c.showcurr();

// Bind next and previous button clicks
getId('btnNext').onclick = function() {
c.nextMonth();
};
getId('btnPrev').onclick = function() {
c.previousMonth();
};
}

// Get element by id
function getId(id) {
return document.getElementById(id);
}	

});
$(function(){function c(){p();var e=h();var r=0;var u=false;l.empty();while(!u){if(s[r]==e[0].weekday){u=true}else{l.append('<div class="blank"></div>');r++}}for(var c=0;c<42-r;c++){if(c>=e.length){l.append('<div class="blank"></div>')}else{var v=e[c].day;var m=g(new Date(t,n-1,v))?'<div class="today">':"<div>";l.append(m+""+v+"</div>")}}var y=o[n-1];a.css("background-color",y).find("h1").text(i[n-1]+" "+t);f.find("div").css("color",y);l.find(".today").css("background-color",y);d()}function h(){var e=[];for(var r=1;r<v(t,n)+1;r++){e.push({day:r,weekday:s[m(t,n,r)]})}return e}function p(){f.empty();for(var e=0;e<7;e++){f.append("<div>"+s[e].substring(0,3)+"</div>")}}function d(){var t;var n=$("#calendar").css("width",e+"px");n.find(t="#calendar_weekdays, #calendar_content").css("width",e+"px").find("div").css({width:e/7+"px",height:e/7+"px","line-height":e/7+"px"});n.find("#calendar_header").css({height:e*(1/7)+"px"}).find('i[class^="icon-chevron"]').css("line-height",e*(1/7)+"px")}function v(e,t){return(new Date(e,t,0)).getDate()}function m(e,t,n){return(new Date(e,t-1,n)).getDay()}function g(e){return y(new Date)==y(e)}function y(e){return e.getFullYear()+"/"+(e.getMonth()+1)+"/"+e.getDate()}function b(){var e=new Date;t=e.getFullYear();n=e.getMonth()+1}var e=480;var t=2013;var n=9;var r=[];var i=["JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"];var s=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];var o=["#16a085","#1abc9c","#c0392b","#27ae60","#FF6860","#f39c12","#f1c40f","#e67e22","#2ecc71","#e74c3c","#d35400","#2c3e50"];var u=$("#calendar");var a=u.find("#calendar_header");var f=u.find("#calendar_weekdays");var l=u.find("#calendar_content");b();c();a.find('i[class^="icon-chevron"]').on("click",function(){var e=$(this);var r=function(e){n=e=="next"?n+1:n-1;if(n<1){n=12;t--}else if(n>12){n=1;t++}c()};if(e.attr("class").indexOf("left")!=-1){r("previous")}else{r("next")}})})

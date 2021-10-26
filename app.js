var lang_arr=[];
lang_arr['en']=[];
lang_arr['en']['expand']='Expand';
lang_arr['en']['collapse']='Collapse';
lang_arr['en']['prev_slide']='Previous slide';
lang_arr['en']['next_slide']='Next slide';

lang_arr['ru']=[];
lang_arr['ru']['expand']='Развернуть';
lang_arr['ru']['collapse']='Свернуть';
lang_arr['ru']['prev_slide']='Предыдущий слайд';
lang_arr['ru']['next_slide']='Следующий слайд';


function escape_html(text) {
	var map = {
		'&': '&amp;',
		'<': '&lt;',
		'>': '&gt;',
		'"': '&quot;',
		"'": '&#039;'
	};
	return text.replace(/[&<>"']/g,function(m){return map[m];});
}
function unescape_html(text) {
	var map = {
		'&amp;': '&',
		'&lt;': '<',
		'&gt;': '>',
		'&quot;': '"',
		'&#039;': "'"
	};
	return text.replace(/&(amp|quot|lt|gt|#039);/g,function(m){console.log('find',m);return map[m];});
}
function app_mouse(e){
	if(!e)e=window.event;
	var target=e.target || e.srcElement;
	if($(target).hasClass('toggle-action')){
		let toggle=$('.toggle-item.'+$(target).data('toggle'));
		if('none'==toggle.css('display')){
			toggle.css('display','block');
		}
		else{
			toggle.css('display','none');
		}
		e.preventDefault();
	}
	if($(target).hasClass('close-presentation-action')){
		if($('.presentation').hasClass('fullscreen')){
			$('.presentation').removeClass('fullscreen');
			$('.toggle-fullscreen-action').html(lang_arr[selected_lang]['expand']);
		}
	}
	if($(target).hasClass('toggle-fullscreen-action')){
		if($('.presentation').hasClass('fullscreen')){
			$('.presentation').removeClass('fullscreen');
			$(target).html(lang_arr[selected_lang]['expand']);
		}
		else{
			$('.presentation').addClass('fullscreen');
			$(target).html(lang_arr[selected_lang]['collapse']);
		}
		e.preventDefault();
	}
	if($(target).hasClass('next-action')){
		let presentation=$(target).closest('.presentation');
		let slide_count=presentation.find('.slide').length;
		let current_slide=presentation.find('.slide.current');
		let current_slide_num=current_slide.data('num');
		let next_slide;
		if(slide_count>=(1+current_slide_num)){
			next_slide=presentation.find('.slide[data-num="'+(1+current_slide_num)+'"]');
			next_slide.addClass('current');
			current_slide.removeClass('current');
		}
		else{
			next_slide=presentation.find('.slide[data-num="'+1+'"]');
			next_slide.addClass('current');
			current_slide.removeClass('current');
		}
		current_slide_num=next_slide.data('num');
		presentation.find('.slide-counter').html(current_slide_num+' / '+slide_count);

		let progress=Math.floor(100*current_slide_num/slide_count);
		progress=Math.min(progress,100);
		progress=Math.max(progress,0);
		presentation.find('.progress .fill-level').css('width',progress+'%');

		start_presentation_slider_time=0;
	}
	if($(target).hasClass('prev-action')){
		let presentation=$(target).closest('.presentation');
		let slide_count=presentation.find('.slide').length;
		let current_slide=presentation.find('.slide.current');
		let current_slide_num=current_slide.data('num');
		let next_slide;
		if(1<=(current_slide_num-1)){
			next_slide=presentation.find('.slide[data-num="'+(current_slide_num-1)+'"]');
			next_slide.addClass('current');
			current_slide.removeClass('current');
		}
		else{
			next_slide=presentation.find('.slide[data-num="'+slide_count+'"]');
			next_slide.addClass('current');
			current_slide.removeClass('current');
		}
		current_slide_num=next_slide.data('num');
		presentation.find('.slide-counter').html(current_slide_num+' / '+slide_count);

		let progress=Math.floor(100*current_slide_num/slide_count);
		progress=Math.min(progress,100);
		progress=Math.max(progress,0);
		presentation.find('.progress .fill-level').css('width',progress+'%');

		start_presentation_slider_time=0;
	}
}
function app_keyboard(e){
	if(!e)e=window.event;
	var key=(e.charCode)?e.charCode:((e.keyCode)?e.keyCode:((e.which)?e.which:0));
	if($(document.activeElement).closest('.presentation')){
		if(key==37){//left arrow
			e.preventDefault();
			$('.presentation').find('.prev-action')[0].click();
		}
		if(key==39){//right arrow
			e.preventDefault();
			$('.presentation').find('.next-action')[0].click();
		}
	}
	if(key==27){//esc
		$('.presentation').removeClass('fullscreen');
		$('.presentation .toggle-fullscreen-action').html(lang_arr[selected_lang]['expand']);
		e.preventDefault();
	}
}

var start_presentation_slider=false;
var presentation_timeout=5000;
var start_presentation_slider_timeout=10;
var start_presentation_slider_timer=0;
var start_presentation_slider_time=0;
function start_presentation_slider(){
	if(!document.hasFocus()){
		clearTimeout(start_presentation_slider_timer);
		start_presentation_slider_timer=setTimeout(function(){start_presentation_slider()},start_presentation_slider_timeout*10);
		return;
	}
	start_presentation_slider_time+=start_presentation_slider_timeout;

	let presentation=$('.presentation');
	let progress=Math.floor(1.1*1000*(start_presentation_slider_time)/presentation_timeout);//+10% end lag
	progress=Math.min(progress,1100);
	progress=Math.max(progress,0);
	if(progress<=50.){
		presentation.find('.slider .fill-level').css('display','none');
	}
	else{
		presentation.find('.slider .fill-level').css('display','block');
	}
	presentation.find('.slider .fill-level').css('width',progress/10+'%');

	console.log(progress);
	if(progress==1100){
		let slide_count=presentation.find('.slide').length;
		let current_slide=presentation.find('.slide.current');
		let end=false;
		if(typeof current_slide.data('end') !== 'undefined'){
			if(current_slide.data('end')){
				end=true;
			}
		}
		if(!end){
			$('.presentation').find('.next-action')[0].click();
			clearTimeout(start_presentation_slider_timer);
			start_presentation_slider_timer=setTimeout(function(){start_presentation_slider()},start_presentation_slider_timeout);
		}
		else{
			start_presentation_slider=false;
			clearTimeout(start_presentation_slider_timer);
		}
	}
	else{
		clearTimeout(start_presentation_slider_timer);
		start_presentation_slider_timer=setTimeout(function(){start_presentation_slider()},start_presentation_slider_timeout);
	}
}

var hide_player_timeout=2000;
var hide_player_timer=0;
function hide_player(){
	let presentation=$('.presentation');
	presentation.find('.player').removeClass('hover');
	if(start_presentation_slider){
		clearTimeout(start_presentation_slider_timer);
		start_presentation_slider_timer=setTimeout(function(){start_presentation_slider()},start_presentation_slider_timeout);
	}
}

$(document).ready(function(){
	document.addEventListener('click', app_mouse, false);
	document.addEventListener('tap', app_mouse, false);

	document.addEventListener('keyup',app_keyboard,false);

	let presentation=$('.presentation');
	presentation.find('.toggle-fullscreen-action').html(lang_arr[selected_lang]['expand']);
	presentation.find('.next-action').prop('title',lang_arr[selected_lang]['next_slide']);
	presentation.find('.prev-action').prop('title',lang_arr[selected_lang]['prev_slide']);

	let slide_count=presentation.find('.slide').length;
	let current_slide=presentation.find('.slide.current');
	let current_slide_num=current_slide.data('num');
	presentation.find('.slide-counter').html(current_slide_num+' / '+slide_count);

	let progress=Math.floor(100*current_slide_num/slide_count);
	progress=Math.min(progress,100);
	progress=Math.max(progress,0);
	presentation.find('.progress .fill-level').css('width',progress+'%');
	presentation.on('mouseover',function(){
		$(this).find('.player').addClass('hover');
		clearTimeout(hide_player_timer);
		hide_player_timer=setTimeout(function(){hide_player()},hide_player_timeout);
		if(start_presentation_slider){
			clearTimeout(start_presentation_slider_timer);
		}
	});
	presentation.on('mouseout',function(){
		clearTimeout(hide_player_timer);
		$(this).find('.player').removeClass('hover');
		if(start_presentation_slider){
			clearTimeout(start_presentation_slider_timer);
			start_presentation_slider_timer=setTimeout(function(){start_presentation_slider()},start_presentation_slider_timeout);
		}
	});
	//presentation[0].dispatchEvent(new MouseEvent('mouseover',{'view': window,'bubbles': true,'cancelable':true}));

	if(current_slide.data('start')){
		start_presentation_slider=true;
		if(typeof current_slide.data('timeout') !== 'undefined'){
			if(!isNaN(current_slide.data('timeout'))){
				presentation_timeout=parseInt(current_slide.data('timeout'));
			}
		}
		start_presentation_slider_time=0;
		start_presentation_slider();
	}

	$(window).on('scroll',function(){
	});
	$(window).on('resize',function(){
	});
});
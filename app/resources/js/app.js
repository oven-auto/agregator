/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./maskedinput');
// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });




$(document).ready(function(){
	$(document).on('click','.navbar-collapse .nav-link',function(){
		$('.navbar-collapse').removeClass('show')
	})

	$(document).scroll(function(){
		var currenTop = $(this).scrollTop()
		var nav = $('.navbar')

		if(currenTop > nav.offset().top)
		{
			if($(document).find('.navbar-clone').length == 0)
			{
				var clone = nav.clone().addClass('navbar-clone')
				$('body').append(clone)
			}
		}
		else{
			$('.navbar-clone').remove()
		}
	})

	$(document).on('click','.email-bt',function(){
		var modal = $('.modal')
		var url = $(this).attr('data-url')
		axios(url).then(function(response){
			modal.html(response.data.view)
			modal.modal('show')
			$("#userphone").mask("8(999) 999-9999")
		}).catch(function(error){
			console.log(error)
			modal.html('<div class="h5">Ошибка, попробуйте позже</div>')
		})
	})

	$(document).on('click','.checkbox-span',function(){
		var me = $(this)
		var checkbox = me.find('input')
		var send = me.closest('.modal').find('.send')
		if(checkbox.prop('checked')==true)
		{
			checkbox.prop('checked',false)
			me.removeClass('check-on')
			send.addClass('disabled')
		}
		else
		{
			checkbox.prop('checked',true)
			me.addClass('check-on')
			send.removeClass('disabled')
		}
	})

	$(document).on('input','.modal .data-control',function(){
		$(this).closest('.input-parent').find('.message').html('')
	})

	$(document).on('click','.send',function(){
		
		var me = $(this)
		var modal = me.closest('.modal')
		var checkbox = me.closest('.modal').find('.soglasie-block').find('input')
		var errorCount = 0
		var url = me.attr('data-url')
		var parameters = new Map()
		if(!me.hasClass('disabled') || checkbox.prop('checked') == true)
		{
			modal.find('input, textarea').each(function(){
				var val = $(this).val()

				if(val == '')
					errorCount++
				if($(this).attr('name')=='username' && val == '')
				{
					$(this).closest('.input-parent').find('.message').html('Укажите имя пользователя')
					
				}
				if($(this).attr('name')=='userphone' && val == '')
				{
					$(this).closest('.input-parent').find('.message').html('Укажите телефон')
					
				}
				if($(this).attr('name')=='userquestion' && val == '')
				{
					$(this).closest('.input-parent').find('.message').html('Укажите вопрос')
					
				}
				if($(this).attr('name')=='userphone')
					val = val.replace(/[^+\d]/g, '')

				parameters[$(this).attr('name')] = val
				console.log(parameters)
			})
			
			if(errorCount == 0)
			{
				axios.post(url,parameters).then(function(response){
					modal.html(response.data.view)
				}).catch(function(errors){
					
					if(errors.response.data)
					{
						for(var key in errors.response.data.errors)
							for(var i in errors.response.data.errors[key])
							{
								console.log(key)
								$('[name="'+key+'"]')
									.closest('.input-parent')
									.find('.message')
									.append('<div>'+errors.response.data.errors[key][i]+'</div>')
							}
					}
				})
			}
		}
	})


  



})



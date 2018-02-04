
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

$('#toggleLogin').on('click', function() {
   $('.js-login-form').hide();
   $('.js-join-form').show();
});
$('#toggleJoin').on('click', function() {
   $('.js-login-form').show();
   $('.js-join-form').hide();
});

$('.js-show-newsletter').on('click', function() {
    $('.js-subscribe-newsletter').toggleClass('hidden');
});

function gaJoinNewsletter(){
    // ga('send', 'event', 'uudiskiri', 'liitumine');
}

function subsribeSuccess(form){
    form.addClass('success');
    gaJoinNewsletter();
}
function contactSuccess(form){
    form.addClass('success');
}

function newsletterNotice() {
    var sentForm = $('.js-subscribe-newsletter').find('.form_submit').closest('form');
    $(sentForm).find('.form_field').addClass('hidden');
    $(sentForm).find('.form_submit').addClass('hidden');
    $(sentForm).append('<div class="form-thank-you"><span>Subscription confirmed!</span> You will now be able to receive special offers, news and more!</div>');
}
function contactNotice() {
    var sentForm = $('.js-contact').find('.form_submit').closest('form');
    $(sentForm).find('.form_field').addClass('hidden');
    $(sentForm).find('.control-label').addClass('hidden');
    $(sentForm).find('.form_submit').addClass('hidden');
    $(sentForm).append('<div class="form-success"><span>Thank you, you will hear from us soon!</div>');
}

$('body').on('submit', '.js-subscribe-newsletter', function(e){
    e.preventDefault();
    var form = $(this);
    var email = form.find('.js-field-email').val();
    $.ajax({
        method: 'post',
        url: 'https://docs.google.com/forms/d/e/1FAIpQLSdKDjvKB8olGiHFK9NO--lnarbtOsxQuaKisIAS2Cn1jRAccA/formResponse',
        data: {
            'entry.386050462': email,
        },
        success : newsletterNotice(),
        statusCode: {
            0: function() {
                subsribeSuccess(form);
            },
            200: function() {
                subsribeSuccess(form);
            }
        }
    });
});

$('body').on('submit', '.js-contact', function(e){
    e.preventDefault();
    var form = $(this);
    var name = form.find('.js-field-name').val();
    var email = form.find('.js-field-email').val();
    var message = form.find('.js-field-message').val();
    $.ajax({
        method: 'post',
        url: 'https://docs.google.com/forms/d/e/1FAIpQLSeGt4if58ToDccaKJf7cTSZPqDSR-gs45E2Dl73GYyvyMRFWw/formResponse',
        data: {
            'entry.845342077': name,
            'entry.412871066': email,
            'entry.463145500': message,
        },
        success : contactNotice(),
        statusCode: {
            0: function() {
                contactSuccess(form);
            },
            200: function() {
                contactSuccess(form);
            }
        }
    });
});

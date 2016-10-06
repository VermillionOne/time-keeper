
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

var app = new Vue({
    el: 'body',
    data: {
        message: 'Something',
        times: [
            { startTime: '' },
            { endTime: ''}
        ]
    },
    methods: {
        addTime: function () {
            var startTime = this.startTime,
                endTime = this.endTime;
            if (text) {
                this.times.push(
                    { startTime : startTime },
                    { endTime   : endTime }
                );
                this.newTime = '';
            }
        },
        addToList: function (index) {
            this.listItem.splice(index, 1);
        }
    }
});

$('document').ready(function () {
    console.log('Ready for action!');
});

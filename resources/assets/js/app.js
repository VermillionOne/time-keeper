
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
        projectTitle: '',
        startTime: '',
        endTime: '',
        times: [],
    },
    methods: {
        addTime: function () {
            console.log(this.times);
            var start         = this.startTime.split(':'),
                end           = this.endTime.split(':'),
                startHours    = parseInt(start[0]),
                startMins     = parseInt(start[1]),
                endHours      = parseInt(end[0]),
                endMins       = parseInt(end[1]),
                startTotal    = startHours*60 + startMins,
                endTotal      = endHours*60 + endMins,
                timeDiff      = getTimeDifference(),
                minsWorked    = getMinutesWorked(),
                hoursWorked   = getHoursWorked(),
                actualElapsed = getActualTimeElapsed();

            function getTimeDifference() {
                var diff = endTotal - startTotal;
                console.log(diff);
                if ( diff < 0) {
                    diff = (24*60) + diff;
                }
                return diff;
            }
            function getMinutesWorked() {
                var mins = timeDiff % 60;
                return mins;
            }
            function getHoursWorked() {
                var hours = (timeDiff - minsWorked) / 60;
                return hours;
            }
            function getActualTimeElapsed() {
                var time = hoursWorked + ":" + minsWorked;
                return time;
            }

            var elapsed = actualElapsed.trim();
            this.times.push({workedTime: elapsed});
            console.log(this.times);
        },
        addProjectName: function () {
            this.projectTitle.splice();
        }
    }
});
console.log(app);
$('document').ready(function () {
    console.log('Ready for action!');
});

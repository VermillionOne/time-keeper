
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
        projectTitle    : '',
        assignmentTitle : '',
        startTime       : '',
        endTime         : '',
        editIndex       : '',
        editable        : false,
        assignments     : [],
        projects        : [],
        projArr         : []
    },
    computed: {
        start : function () {
            result = this.startTime.split(':');
            return result;
        },
        end : function () {
            result = this.endTime.split(':');
            return result;
        },
        startHours : function () {
            result = parseInt(this.start[0]);
            return result;
        },
        startMins : function () {
            result = parseInt(this.start[1]);
            return result;
        },
        endHours : function () {
            result = parseInt(this.end[0]);
            return result;
        },
        endMins : function () {
            result = parseInt(this.end[1]);
            return result;
        },
        startTotal : function () {
            result = this.startHours*60 + this.startMins;
            return result;
        },
        endTotal : function () {
            result = this.endHours*60 + this.endMins;
            return result;
        },
        timeDiff : function () {
            result = this.getTimeDifference();
            return result;
        },
        minsWorked : function () {
            result = this.getMinutesWorked();
            return result;
        },
        hoursWorked : function () {
            result = this.getHoursWorked();
            return result;
        },
        elapsedTime : function () {
            result = this.getActualTimeElapsed();
            return result;
        }
    },
    methods: {
        addAssignment: function () {
            var title = this.assignmentTitle.trim();
            if (title) {
                console.log(title);
                console.log(this.assignments);
                this.assignments.push({title: title});
                this.projects.push(this.assignments);
                console.log(this.projects);
                this.assignmentTitle = '';

            }
        },
        addProject: function () {
            var projectTitle = this.projectTitle.trim();
            if (projectTitle) {
                console.log(projectTitle);
                this.projects.push({project: {title: projectTitle}})
                this.projectTitle = '';
            }
        },
        addtime: function () {

            console.log(this.times);

            /**
             * Adding time instances to the times array
             */

            // var times = getElapsedTime();

            // this.times.push();
            // this.assignments.title = assignmentTitle;
            // this.assignments.times = this.times;
            // this.project.title = projectTitle;
            // this.project.assignments = this.assignments;

            // this.projArr.push(this.project);

            // console.log(this.times);
            // this.startTime = '';
            // this.endTime = '';
            // this.editable = false;

        },
        addProjectTitle: function () {
            var title = projectTitle.trim();
            if (title) {
                this.projects.push({title: title});
                this.projectTitle = '';
            }
        },
        updateTime: function () {

            var index = this.editIndex;

            this.times.$set( index,
                {
                    start: this.startTime,
                    end: this.endTime,
                    workedTime: elapsed
                }
            );
        },
        removeTime: function (index) {
            console.log(index);
            var i = this.times[index];
            this.times.$remove(i);
        },
        editTime: function (index) {
            console.log(index);
            this.startTime = this.times[index].start;
            this.endTime = this.times[index].end;
            this.editIndex = index;
            this.editable = true;
        },
        getElapsedTime: function () {
            var elapsed = actualElapsed.trim();
            return elapsed;
        },
        getTimeDifference: function () {
            var diff = endTotal - startTotal;
            console.log(diff);
            if ( diff < 0) {
                diff = (24*60) + diff;
            }
            return diff;
        },
        getMinutesWorked: function () {
            var mins = timeDiff % 60;
            return mins;
        },
        getHoursWorked: function () {
            var hours = (timeDiff - minsWorked) / 60;
            return hours;
        },
        getActualTimeElapsed: function () {
            var time = hoursWorked + ":" + minsWorked;
            return time;
        }
    }
});
console.log(app);
$('document').ready(function () {
    console.log('Ready for action!');
});

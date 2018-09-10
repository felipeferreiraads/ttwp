import moment from 'moment'

var eventTime = moment('2018-09-22 14:00:00', 'YYYY-MM-DD HH:mm:ss').unix()
var currentTime = moment().unix()
var diffTime = eventTime - currentTime
var duration = moment.duration(diffTime * 1000, 'milliseconds')
var interval = 1000

var event = moment('2018-09-22 14:00:00', 'YYYY-MM-DD HH:mm:ss')

if (diffTime > 0) {
    setInterval(function () {
        duration = moment.duration(duration.asMilliseconds() - interval, 'milliseconds')
        var now = moment()
        var d = event.diff(now, 'days'),
            h = moment.duration(duration).hours(),
            m = moment.duration(duration).minutes(),
            s = moment.duration(duration).seconds()

        d = $.trim(d).length === 1 ? '0' + d : d
        h = $.trim(h).length === 1 ? '0' + h : h
        m = $.trim(m).length === 1 ? '0' + m : m
        s = $.trim(s).length === 1 ? '0' + s : s

        $('#days').text(d)
        $('#hours').text(h)
        $('#minutes').text(m)
        $('#seconds').text(s)
    }, interval)
}
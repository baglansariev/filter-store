var customAlert = {
    show: function (element, message, status) {
        $(element).find('p').text(message);
        $(element).addClass(status);
        $(element).animate({
            right: 10 + 'px',
        });
        let thisAlert = this;
        setTimeout(function () {
            thisAlert.hide(element);
        }, 2000);
    },
    hide: function (element) {
        $(element).animate({
            right: -100 + '%',
        });
        $(element).find('p').text('');
        $(element).removeClass('danger');
        $(element).removeClass('success');
    }
};
var message = "";

		$("#sendMessage").on("click", function() {
    		message = $("#contactform").serialize();
    		$.ajax({
        		url: "//formspree.io/f/xeqvvvoo",
        		method: "POST",
        		data: {message: message},
        		dataType: "json"
  		});
    		return false;
		});

function pushNotify() {
  new Notify({
    status: 'success',
    title: 'Notify Title',
    text: 'Notify text lorem ipsum',
    effect: 'fade',
    speed: 300,
    customClass: null,
    customIcon: null,
    showIcon: true,
    showCloseButton: true,
    autoclose: false,
    autotimeout: 3000,
    gap: 20,
    distance: 20,
    type: 1,
    position: 'right top'
  })
}

let myNotify

function pushNotify() {
  myNotify = new Notify({
    status: 'success',
    title: 'Notify Title',
    text: 'notify text',
    effect: 'slide',
    type: 3
  })
}

function close() {
  myNotify.close()
}

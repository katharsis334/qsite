$('form#reg').on('submit', function(e) {
    e.preventDefault();

let info = $(this).serializeArray();
console.log(info);
if(info[4].value == info[5].value) {
    $.ajax({
        url: $(this).attr('action'),
        type:$(this).attr('method'),
        data:$(this).serialize(),
        success:function(res) {
            console.log(res);
        }, error: function(res) {
            console.log(res);
        }

    });
 } else {
     $('Input#pass1').addClass('is-invalid');
     $('Input#pass2').addClass('is-invalid');
     $('div#errorPass').text('не совпадают');
 }
});
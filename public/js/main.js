$('form#regForm').on('submit', function(e) {
    e.preventDefault();

let info = $(this).serialize();

    $.ajax({
        url: $(this).attr('action'),
        type:$(this).attr('method'),
        data: info,
        success:function(res) {
            console.log(res);
        }, error: function(res) {
            $('form#regForm input').removeClass('is-invalid');
            console.log(res);
            $.each(res.responseJSON['errors'], function(index, value){
                $('form#regForm input[name="'+ index +'"]').addClass('is-invalid');
                $('#div'+ index + 'error').text(value);
            })
        }
    });
});

$("form#authForm").submit(function(e) {
    e.preventDefault();

    let info = $(this).serialize();
    $('div#formError').slideUp(300);
    $.ajax({
        url: $('form#authForm').attr('action'),
        type:$('form#authForm').attr('method'),
        data:$('form#authForm').serialize(),
        success:function(res) {
            window.location.href ='/public/profile';
        }, error: function(res) {
            $('div#formError').slideUp(300);
             $('form#authForm input').removeClass('is-invalid');
             $('div#formError').text(res.responseJSON.errors['form']).removeAttr('display','');
            $.each(res.responseJSON['errors'], function(index, value){
                $('form#authForm input[name="' + index + '"]').addClass('is-invalid');
                $('div#' + index + 'Error').text(value);
                
            console.log(res);
            console.log(res.responseJSON['errors']);
            });
            $('div#formError').text(res.responseJSON.errors['form']).slideDown(300);
        }
    });
});

// $("form#addOrder").submit(function(e) {
//     e.preventDefault();

//     let info = $(this).serialize();
//     $.ajax({
//         url: $('form#addOrder').attr('action'),
//         type:$('form#addOrder').attr('method'),
//         data:$('form#addOrder').serialize(),
//         success:function(res) {
//             console.log(res, 'ewq');
//         }, error: function(res) {
//             console.log(res, 'qwe');
//         }
//     });
// });


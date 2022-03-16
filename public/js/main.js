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
            window.location.href ='/';
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

$("form#addComment").submit(function(e) {
    e.preventDefault();

    let info = $(this).serialize();
    $.ajax({
        url: $('form#addComment').attr('action'),
        type: $('form#addComment').attr('method'),
        data: info,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(res) {
            $('input#ChangeStatusWork').text('Принято в работу');
            console.log(res);
        }, error: function(res) {     
            console.log(res);
        }
    });
});

$("form#addCat").submit(function(e) {
    e.preventDefault();

    let info = $(this).serialize();
    $.ajax({
        url: $('form#addCat').attr('action'),
        type: $('form#addCat').attr('method'),
        data: info,
        success:function(res) {
            // $('input#ChangeStatusWork').text('Принято в работу');
            console.log(res);
        }, error: function(res) {     
            console.log(res);
        }
    });
});







$("form#addImg").submit(function(e) {
    e.preventDefault();


    // var data = new FormData(document.getElementById('addImg'));
    // $.each( addImg, function( key, value ){
	// 	data.append( key, value );
	// });
    // data.append('addImg', 1);
    var formData = new FormData($('form#addImg')[0]);
    // let info = $(this).serialize();
    $.ajax({
        url: $('form#addImg').attr('action'),
        type: $('form#addImg').attr('method'),
        data: formData,
        contentType: false,
        processData: false, 
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(res) {
            console.log(res); 
            console.log(formData);
        }, error: function(res) {    
            console.log(res); 
            console.log(formData);
        }
    });
});

$('select#sort').change(function () {
    let status = $(this).val();

    $.ajax({
        url: '/profile/sort',
        type: 'GET',
        data: {status, status},
        success: function(res){
            $('div#OrderCard').html(res);
        },
        error: function(res){
            console.log(res);
        },
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


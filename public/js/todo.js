function deleteTodo(id) {
    $.get('deletetodoitem/'+id,
        function (response) {
            $('.task[data-id="' + id + '"]').css('background-color', '#fbd0d0');
            setTimeout(function () {
                $('.task[data-id="' + id + '"]').remove();
            }, 423);
        })
        .fail(function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError: " + err);
        });
}

function checkToDo(id){
    $.get('checktodoitem/'+id,
        function (response) {
            // $('.task[data-id="' + id + '"]').css('background-color', '#fbd0d0');
            // setTimeout(function () {
            //     $('.task[data-id="' + id + '"]').remove();
            // }, 423);
           console.log('id'+id + ' has been checked')
        })
        .fail(function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError: " + err);
        });
}

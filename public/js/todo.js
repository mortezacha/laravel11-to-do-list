function deleteTodo(id) {
    $.get('deletetodoitem/'+id,
        function (response) {
            $('div[task-id="' + id + '"]').addClass('shadow  shadow-red-500');
            setTimeout(function () {
                $('div[task-id="' + id + '"]').siblings().remove();
                $('div[task-id="' + id + '"]').remove();
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
            $('div[task-id="' + id + '"]').addClass('line-through  bg-green-200');
           console.log('id'+id + ' has been checked')
        })
        .fail(function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError: " + err);
        });
}

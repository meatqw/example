var submit = document.getElementById("submit");
submit.addEventListener("click", function (e) {
    var name = document.getElementById("nameInput").value;
    var address = document.getElementById("addressInput").value;
    
    // post main.php
    var FormData = { name: name, address: address};
    $.ajax({
        url: '/main.php',
        method: 'post',
        dataType: 'html',
        data: FormData,
        success: function(data){
        alert(`Data: \n${name}\n${data}\n`);
        }
    });
    console.log(FormData);
});



function logout() {
    //event.preventDefault();
    document.getElementById('logout-form').submit();
}

$(document).on('click', '#logout', function (e) {
    e.preventDefault();
    logout(); 
});

//   var firstTabEl = document.querySelector('#myTab li:last-child a');
//   var firstTab = new bootstrap.Tab(firstTabEl);

//   firstTab.show();
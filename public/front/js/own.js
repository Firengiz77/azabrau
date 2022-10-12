
function filter(url) {
    // const form = document.getElementById('newform24');
    var value = document.getElementsByClassName('filter_category_id').value;
    const formData = new FormData();
  //  formData.append('key', key);

    fetch(url, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'accept': 'application/json'
        },
        body: formData,
    })
        .then(response => response.text())
        .then(function (response) {
            // console.log(response);
             console.log(response);
             $('#products_12').html(response.html);
           

          
            // alertify.set('notifier','position', 'bottom-right');
            // alertify.success('Filtered Successfully','custom', 2);

        });
}









const login = document.querySelector('#login')
login.addEventListener('submit', function (e) {
    e.preventDefault()
    const base_url = 'controller/login.php'
    const data = $('#login').serializeArray()

    data.push({
        name: 'opcn',
        value: 'login'
    })
    console.log(data);

    $.ajax({
        type: "POST",
        url: base_url,
        data: data,
        dataType: "json",
        success: function (response) {
            if (response) {
                const { msg, error } = response
                if (msg == 'Acceso al sistema') {
                    window.location.href = "view/index.php"
                } else {
                    $('#error').html(`
               <div class="alert alert-danger alert-icon alert-close alert-dismissible fade in" role="alert">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">×</span>
				    </button>
					<i class="font-icon font-icon-warning"></i>
					${msg}
				</div>
               `)
                }
            }
        }
    });
})
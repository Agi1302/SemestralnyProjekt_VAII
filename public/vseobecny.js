document.addEventListener('DOMContentLoaded', function() {

    document.getElementById('heslo').onkeyup = function () {
        var heslo = document.getElementById('heslo');
        var heslo2 = document.getElementById('heslo2');

        if (heslo.value !== heslo2.value) {

            heslo.setCustomValidity("Heslá sa musia zhodovať !!!");
            return;
        } else {
            heslo.setCustomValidity("");
        }

        if (heslo.value.length < 10  || !/[A-Z]/.test(heslo.value)) {

            heslo.setCustomValidity("Heslo musí mať dĺžku aspoň 10 znakov a obsahovať veľké písmeno !!!");
            return;
        } else {
            heslo.setCustomValidity("");
        }
    };

    document.getElementById('heslo2').onkeyup = function () {
        var heslo = document.getElementById('heslo');
        var heslo2 = document.getElementById('heslo2');

        if (heslo.value !== heslo2.value) {

            heslo.setCustomValidity("Heslá sa musia zhodovať !!!");
            return;
        } else {
            heslo.setCustomValidity("");
        }

        if (heslo.value.length < 10  || !/[A-Z]/.test(heslo.value)) {

            heslo.setCustomValidity("Heslo musí mať dĺžku aspoň 10 znakov a musí obsahovať veĺké písmeno !!!");
            return;
        } else {
            heslo.setCustomValidity("");
        }
    };

});


document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.srdiecko').forEach( item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();

            let button = $(e.target).closest('.srdiecko');
            let heartIcon = button.find('i');
            if (heartIcon.hasClass('bi-suit-heart')) {
                heartIcon.removeClass('bi-suit-heart').addClass('bi-suit-heart-fill').css('color', 'red');

            } else {
                heartIcon.removeClass('bi-suit-heart-fill').addClass('bi-suit-heart').css('color', '');
            }


            $.ajax({
                url: item.getAttribute('data-url'),
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
        });
    });
});



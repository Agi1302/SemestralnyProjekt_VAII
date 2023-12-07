


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

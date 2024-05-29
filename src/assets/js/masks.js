document.addEventListener('DOMContentLoaded', function() {
    var inputTelefone = document.getElementById('txtPhone');

    inputTelefone.addEventListener('input', function(e) {
        var inputValue = e.target.value.replace(/\D/g, ''); // Remove all non-numeric characters
        var formattedValue = formatarTelefone(inputValue); // format the phone number

        // update the input value
        inputTelefone.value = formattedValue;
    });

    // format the phone number
    function formatarTelefone(inputValue) {
        var formattedValue = '';

        // if the input value is empty, return an empty string
        if (inputValue === '') {
            return '';
        }
        
        // Include mask in the input (XX) XXXX-XXXX ou (XX) XXXXX-XXXX, depending on the length of the input value
        if (inputValue.length <= 2) {
            formattedValue = '(' + inputValue;
        } else if (inputValue.length <= 6) {
            formattedValue = '(' + inputValue.substring(0, 2) + ') ' + inputValue.substring(2);
        } else if (inputValue.length <= 10) {
            formattedValue = '(' + inputValue.substring(0, 2) + ') ' + inputValue.substring(2, 6) + '-' + inputValue.substring(6);
        } else {
            formattedValue = '(' + inputValue.substring(0, 2) + ') ' + inputValue.substring(2, 7) + '-' + inputValue.substring(7, 11);
        }

        return formattedValue;
    }

});
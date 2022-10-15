document.addEventListener('DOMContentLoaded', () => {
    const appointmentForm = document.getElementById('appointment-form');

    appointmentForm.addEventListener('submit', (evt) => {
        evt.preventDefault();

        fetch('ajax.php', {
            'method': 'post',
            'body': new FormData(appointmentForm),
        }).then((response) => {
            return response.json();
        }).then((data) => {
            alert(data.result);
        }).catch((error) => {
            alert(error);
        });
    });
});

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var filmNameInput = document.querySelector('[name="film_name"]');
        var filmIdInput = document.querySelector('[name="film_id"]');

        filmNameInput.addEventListener('change', function () {
            axios.get('/admin/get-film-id', {
                params: {
                    film_name: filmNameInput.value,
                },
            })
            .then(function (response) {
                filmIdInput.value = response.data.film_id;
            })
            .catch(function (error) {
                console.error('Error fetching film ID:', error);
            });
        });
    });
</script>
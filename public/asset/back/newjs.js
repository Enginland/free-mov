document.addEventListener('DOMContentLoaded', function() {
    const dropArea = document.getElementById('drop-area');
    const inputElement = document.getElementById('imageUpload');
    const previewImage = document.getElementById('previewImage');

    // Prevent default behaviors on drag and drop
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // Highlight the drop area when item is dragged over it
    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => dropArea.classList.add('dragover'), false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => dropArea.classList.remove('dragover'), false);
    });

    // Handle dropped files
    dropArea.addEventListener('drop', handleDrop, false);
    dropArea.addEventListener('click', () => inputElement.click());

    function handleDrop(e) {
        const files = e.dataTransfer.files;
        if (files.length) {
            handleFiles(files);
        }
    }

    inputElement.addEventListener('change', () => handleFiles(inputElement.files));

    function handleFiles(files) {
        if (files.length) {
            const file = files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
            }

            reader.readAsDataURL(file);
        }
    }
});


// movies update

    $(document).ready(function() {
        // Handle the edit button click
        $('.btn-edit').on('click', function() {
            var movieId = $(this).data('id');

            // Perform AJAX request to fetch movie data
            $.ajax({
                url: '/movies/' + movieId + '/edit', // Adjust the URL if necessary
                method: 'GET',
                success: function(response) {
                    // Populate modal fields with movie data
                    $('#mov_video').val(response.movie.mov_video);
                    $('#mov_title').val(response.movie.mov_title);
                    $('#mov_dec').val(response.movie.mov_dec);
                    $('#mov_cat').val(response.movie.mov_cat);
                    $('#mov_type').val(response.movie.mov_type);

                    // Set the action URL of the form
                    $('#updateMovieForm').attr('action', '/movies/' + response.movie.mov_id);

                    // Show the current image
                    if (response.movie.image) {
                        $('#currentImage').attr('src', '/storage/' + response.movie.image);
                    } else {
                        $('#currentImage').attr('src', '');
                    }

                    // Show the modal
                    $('#myModal').modal('show');
                },
                error: function(xhr) {
                    // Handle error
                    alert('An error occurred while fetching movie data.');
                }
            });
        });
    });


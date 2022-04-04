<?php if (isUser() && getUserData()['user_status'] == 1) : ?>
    <div class="jumbotron jumbotron-fluid bg-danger text-white w-100 p-2 rounded-2 mb-3">
        <div class="container d-flex align-items-center justify-content-between">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <strong> Warning, Uncompleted Account Information !</strong> Please edit youre Account Information
                <a href="<?= base_url() . 'profile'; ?>" class="p-0 btn btn-link  text-white"> Here </a>.
            </div>
        </div>
    </div>
<?php endif; ?>
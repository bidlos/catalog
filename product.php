
<div class="container">
    <div class="row">
        <?php
        foreach ($itemsTblQuery as $key) { ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                        <title>Placeholder</title>
                        <rect fill="#55595c" width="100%" height="100%"></rect><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                    </svg>
                    <div class="card-body">
                        <p class="card-text">
                            <h3><?php echo $key['title']; ?></h3>
                        </p>
                        <p><h6><?php echo $key['category']; ?></h6></p>
                        <p class="card-text"><?php echo mb_strimwidth($key['description'], 0, 100, '...'); ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="?product=edit" type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </div>
                            <small class="text-muted"><?php echo $key['date']; ?></small>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
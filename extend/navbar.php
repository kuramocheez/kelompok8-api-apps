<nav class="navbar navbar-light mb-3" style="background-image: linear-gradient(to right, #fa4454, #dc3d4b);">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img width="60px" style="margin-top: -15px; margin-bottom: -15px" src="img/valorant-logo.svg" alt="Valorant"></a>
        <div class="d-flex">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#logout">Logout</a>
                </li>
        </div>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="border-color: #fa4454;">
        <div class="modal-content">
            <div class="modal-header" style="background-image:linear-gradient(to right, #fa4454, #dc3d4b);">
                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: rgb(29, 29, 29);">
                Are You Sure You Want To Logout?
            </div>
            <div class="modal-footer" style="background-color: rgb(29, 29, 29);">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="logout.php" class="btn btn-primary">Yes</a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">NetClient</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline" action="<?php echo constant('URL') ?>login/signout" method="POST">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Cerrar sesión</button>
        </form>
    </div>
</nav>
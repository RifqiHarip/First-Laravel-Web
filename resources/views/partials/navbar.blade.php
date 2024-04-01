<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ URL::to('/posts') }}">My Laravel Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ URL::to('/home') }}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="{{ URL::to('/') }}">Welcome</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/posts') }}">Blog Posts</a>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/about') }}">About</a>
            </li>

        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="/login" class="nav-link">Sign in</a>
            </li>

        </ul>
        </div>
    </div>
</nav>
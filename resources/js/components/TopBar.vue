<template>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-transparent">
        <a class="navbar-brand font-weight-bold" href="#">Wall Art</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home  <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <router-link class="btn m-2 btn-light" :to="{name: 'login'}">Login</router-link>
                <router-link class="btn m-2 btn-outline-light" :to="{name: 'register'}">Register</router-link>
            </div>
        </div>
    </nav>
</template>

<nav class="h-10v bg-nav flex flex-row justify-center items-center
space-x-3 p-1">

    <a href="#" class="btn btn-sm  btn-neutral">Home</a>
    <a href="#" class="btn  btn-sm  btn-primary">About</a>
    <a href="#" class="btn  btn-sm  btn-info">Contacta</a>
    <a href="{{route("proyectos")}}" class="btn  btn-sm  btn-neutral">Proyectos</a>
    @auth

        <a href="{{route("alumnos.index")}}" class="btn  btn-sm  btn-primary">Alumnos</a>
        <a href="{{route("profesores.index")}}" class="btn  btn-sm  btn-info">Profesores</a>
    @endauth


</nav>

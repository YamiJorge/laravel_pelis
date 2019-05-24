@extends('layouts.principal')
@section('content')
    <div class="review-content">
        <div class="top-header span_top">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
                <p>Movie Theater</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="reviews-section">
            <h3 class="head">Movie Reviews</h3>
            <div class="col-md-9 reviews-grids">
                @foreach($peliculas as $pelicula) {{--Acá mostraremos las películas almacenadas
                en la base de datos.--}}
                    <div class="review">
                        <div class="movie-pic">
                            <img src="peliculas/{{$pelicula->path}}" alt="" />
                        </div>
                        <div class="review-info">
                            <a class="span" href="single.html">
                                <i>{{$pelicula->nombre}}</i></a>
                            <p class="info">CAST:&nbsp;&nbsp;{{$pelicula->reparto}}</p>
                            <p class="info">DIRECTION:&nbsp;&nbsp;{{$pelicula->direccion}}</p>
                            <p class="info">GENRE:&nbsp;&nbsp;{{$pelicula->genero}}</p>
                            <p class="info">DURATION:&nbsp;&nbsp;{{$pelicula->duracion}}</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @endforeach




            </div>


            <div class="clearfix"></div>
        </div>
    </div>
    <div class="review-slider">
        <ul id="flexiselDemo1">
            <li><img src="images/r1.jpg" alt=""/></li>
            <li><img src="images/r2.jpg" alt=""/></li>
            <li><img src="images/r3.jpg" alt=""/></li>
            <li><img src="images/r4.jpg" alt=""/></li>
            <li><img src="images/r5.jpg" alt=""/></li>
            <li><img src="images/r6.jpg" alt=""/></li>
        </ul>
    </div>
@endsection
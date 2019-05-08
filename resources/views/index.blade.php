@extends('layouts.principal') {{-- En cada una de nuestras plantillas individuales en lugar de incluir el header o
footer le indicamos a Laravel que la vista debe extender de layouts.principal.php. No es necesario colocar la extensión
del archivo. Tampoco es necesario colocar la ruta completa, ya que Laravel por defecto buscará el archivo dentro
del directorio resources/views. Para esto usamos @extends --}}
@section('content') {{-- Hecho lo anterior, debemos definir las secciones. Para ello utilizamos la directiva @section,
pasando como argumento el nombre de la sección. --}}
    <div class="header">
        <div class="top-header">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
                <p>Movie Theater</p>
            </div>
            <div class="search">
                <form>
                    <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
                    <input type="submit" value="">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="header-info">
            <h1>BIG HERO 6</h1>
            <p class="age"><a href="#">All Age</a> Don Hall, Chris Williams</p>
            <p class="review">Rating	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;  8,5/10</p>
            <p class="review reviewgo">Genre	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; Animation, Action, Comedy</p>
            <p class="review">Release &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 7 November 2014</p>
            <p class="special">The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.</p>
            <a class="video" href="#"><i class="video1"></i>WATCH TRAILER</a>
            <a class="book" href="#"><i class="book1"></i>BOOK TICKET</a>
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
    <div class="carousel slide" id="hostelCarousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#hostelCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#hostelCarousel" data-slide-to="1"></li>
        <li data-target="#hostelCarousel" data-slide-to="2"></li>
        <li data-target="#hostelCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox" style="max-height: 400px !important;">
        <div class="item active">
            <img src="{{url('photos/'.$hostel->pics)}}", class="caro">
            <div class="carousel-caption">
                <h2>Egerton Main Graduation Square</h2>
            </div>
        </div>
{{--
        <div class="item">
            <img src="{{url('photos/pool.jpg')}}", class="caro">
            <div class="carousel-caption">
                <h2>Egerton Main Gate</h2>
            </div>
        </div>

        <div class="item">
            <img src="{{url('photos/(3).jpg')}}", class="caro">
            <div class="carousel-caption">
                <h2>Egerton Castle</h2>
            </div>
        </div>

        <div class="item">
            <img src="{{url('photos/(8).jpg')}}", class="caro">
            <div class="carousel-caption">
                <h2>Egerton Castle</h2>
            </div>
        </div>--}}

        <a href="#hostelCarousel" class="left carousel-control" data-slide="prev" role="button">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: #f6bf01;"></span>
        </a>

        <a href="#hostelCarousel" class="right carousel-control" data-slide="next" role="button">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color: #f6bf01;"></span>
        </a>
    </div>
    </div>
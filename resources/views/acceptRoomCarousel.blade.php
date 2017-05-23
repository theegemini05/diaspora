<div class="carousel slide" id="hostelRoomCarousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#hostelRoomCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#hostelRoomCarousel" data-slide-to="2"></li>
        <li data-target="#hostelRoomCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox" style="max-height: 400px !important;">
        <div class="item active">
                <img src="{{url('photos/'.$roomdetails->pics)}}" class="caro">
                <div class="carousel-caption">
                    <h2>Egerton Main Graduation Square</h2>
                </div>
        </div>

        <a href="#hostelRoomCarousel" class="left carousel-control" data-slide="prev" role="button">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: #f6bf01;"></span>
        </a>

        <a href="#hostelRoomCarousel" class="right carousel-control" data-slide="next" role="button">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color: #f6bf01;"></span>
        </a>
    </div>
</div>
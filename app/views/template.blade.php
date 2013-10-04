<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $config->title }}</title>
    <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">

    <style>

    .colorful, .btn-special {
        background-color: {{ $config->color }};
    }

    #jumbo {
        border-top: 5px solid {{ $config->color }};
    }

    a, a:hover, .carousel-control:hover {
        color: {{ $config->color }};
    }

    </style>
</head>
<body>

    <div id="jumbo" class="carousel slide">

        <ol class="carousel-indicators">
        @foreach ($images as $i => $image)
            @if ($i == 0)
                <li data-target="#jumbo" data-slide-to="{{ $i }}" class="active"></li>
            @else
                <li data-target="#jumbo" data-slide-to="{{ $i }}"></li>
            @endif
        @endforeach
        </ol>

        <div class="carousel-inner">
            @foreach ($images as $i => $image)
                @if ($i == 0)
                    <div class="item active" style="background-image: url('{{ $image }}')">
                        <div class="carousel-caption"></div>
                    </div>
                @else
                    <div class="item" style="background-image: url('{{ $image }}')">
                        <div class="carousel-caption"></div>
                    </div>
                @endif
            @endforeach
        </div>

        <a class="left carousel-control" href="#jumbo" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#jumbo" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

    <section id="content">
    @foreach ($blocks as $block)

    <div class="row">
        <div id="{{ $block->id }}" class="container">
            {{ $block->html }}
        </div>
    </div>

    @endforeach
    </section>

    <section id="contact" class="row colorful">
        <div class="container">
            <h1>Newsletter</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mauris tellus, sollicitudin id libero vitae, pellentesque fringilla nisl.</p>

            <form class="form-inline" role="form">
                <div id="mailbox">
                    <div class="input-group">
                        <input type="email" class="form-control">
                        <span class="input-group-addon">
                            <button type="submit" class="btn btn-special">Sign Up</button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="map">
    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ro/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $config->latitude }},{{ $config->longitude }}&amp;z={{ $config->zoom }}&amp;iwloc=A&amp;output=embed&amp;iwloc=nea"></iframe>
    </section>

    <script src="{{ URL::asset('javascript/jquery.js') }}"></script>
    <script src="{{ URL::asset('javascript/carousel.js') }}"></script>

</body>
</html>

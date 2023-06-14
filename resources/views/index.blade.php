@extends('layouts.app-home')

@section('content')


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pic/1.jpg" class="bd-placeholder-img" width="100%" height="100%" alt="">
                <!--                <div class="container">-->
                <!--                    <div class="carousel-caption text-left">-->
                <!--                        <h1>Example headline.</h1>-->
                <!--                        <p>Some representative placeholder content for the first slide of the carousel.</p>-->
                <!--                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
            <div class="carousel-item">
                <img src="pic/2.jpg" class="bd-placeholder-img" width="100%" height="100%" alt="">
                <!--                <div class="container">-->
                <!--                    <div class="carousel-caption text-left">-->
                <!--                        <h1>Another example headline.</h1>-->
                <!--                        <p>Some representative placeholder content for the second slide of the carousel.</p>-->
                <!--                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-chevron-left"
                                                                           aria-hidden="true"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-chevron-right"
                                                                           aria-hidden="true"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section class="about">
        <div class="container">
            <h3 class="title">О Нас</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="wrapper-info__about">
                        <p><strong>Pharmaceutical - </strong> имеет качество улучшения жизни для каждого человека,
                            посредством чего мы постоянно стремимся вводить новшества, улучшать и увеличивать
                            доступность экономичных непатентованных лекарств на мировом рынке.<br/>
                        </p>
                        <p>
                            Мы считаем, что
                            лекарства должны быть доступны для всех людей, независимо от их местонахождения, и быть
                            доступными для них с любым уровнем дохода, чтобы стоимость лечения не вызывала беспокойства
                            ни у какой части населения.</p>
                        <p>Благодаря нашей приверженности мы решили сосредоточить наши ресурсы на непатентованных
                            лекарствах, в этой области мы стремимся повысить доступность наших качественных лекарств и
                            повысить глобальную осведомленность об огромных финансовых сбережениях, предлагаемых
                            обществу, делая генерические лекарства доступными для населения в целом.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="pic/3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="advantage">
        <h3 class="title">Преимущества</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="advantage_item">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <strong>Качество продукции</strong>
                        <p>Наша продукция сертифицированна и высшего качества</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advantage_item ">
                        <i class="fa fa-taxi" aria-hidden="true"></i>
                        <strong>Быстрая доставка</strong>
                        <p>Доставим ваш заказ в тот же день</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advantage_item">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <strong>Оптовые продажи</strong>
                        <p>В нашем магазине вы можете приобрести препараты по оптовой цене!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="catalog">
        <h3 class="title">Популярные товары</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="catalog_item">
                        <div class="catalog_img">
                            <img src="pic/product/1.jpeg" alt="">
                        </div>
                        <div class="catalog_info">
                            <h4 class="catalog_title"><a href="#">GENOTROPIN PFIZER (ГЕНОТРОПИН)</a></h4>
                            <span class="catalog_category">Категория: Гормон роста</span>
                            <div class="catalog_bottom">
                                <hr>
                                <div class="catalog_price"><span>Цена:</span><span>70000тг.</span></div>
                                <a class="btn-order" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="catalog_item">
                        <div class="catalog_img">
                            <img src="pic/product/3.jpg" alt="">
                        </div>
                        <div class="catalog_info">
                            <h4 class="catalog_title"><a href="#">TESTOSTERONE E (ТЕСТОСТЕРОН ЭНАНТАТ ) 200</a></h4>
                            <span class="catalog_category">Категория: Инъекционные препараты</span>
                            <div class="catalog_bottom">
                                <hr>
                                <div class="catalog_price"><span>Цена:</span><span>10200тг.</span></div>
                                <a class="btn-order" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="catalog_item">
                        <div class="catalog_img">
                            <img src="pic/product/4.png" alt="">
                        </div>
                        <div class="catalog_info">
                            <h4 class="catalog_title"><a href="#">STANOZOLOL (СТАНОЗОЛОЛ) 100X10MG</a></h4>
                            <span class="catalog_category">Категория: Таблетированные препараты</span>
                            <div class="catalog_bottom">
                                <hr>
                                <div class="catalog_price"><span>Цена:</span><span>5200тг.</span></div>
                                <a class="btn-order" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact">
        <h3 class="title">Контакты</h3>
        <div class="maps">
            <iframe id="map_873289293" frameborder="0" width="100%" height="600px"
                    sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe>
            <script type="text/javascript">(function (e, t) {
                    var r = document.getElementById(e);
                    r.contentWindow.document.open(), r.contentWindow.document.write(atob(t)), r.contentWindow.document.close()
                })("map_873289293", "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUpe3ZhciB0PUpTT04ucGFyc2UoZSkscj10Lm9yZGVyZWRHZW9tZXRyaWVzLG49dC5tYXBQb3NpdGlvbixhPXQuaXNXaGVlbFpvb21FbmFibGVkO2Z1bmN0aW9uIG8oZSl7cmV0dXJuIGRlY29kZVVSSUNvbXBvbmVudChhdG9iKGUpLnNwbGl0KCIiKS5tYXAoZnVuY3Rpb24oZSl7cmV0dXJuIiUiKygiMDAiK2UuY2hhckNvZGVBdCgwKS50b1N0cmluZygxNikpLnNsaWNlKC0yKX0pLmpvaW4oIiIpKX1ERy50aGVuKGZ1bmN0aW9uKCl7dmFyIGU9REcubWFwKCJtYXAiLHtjZW50ZXI6W24ubGF0LG4ubG9uXSx6b29tOm4uem9vbSxzY3JvbGxXaGVlbFpvb206YSx6b29tQ29udHJvbDohYX0pO0RHLmdlb0pTT04ocix7c3R5bGU6ZnVuY3Rpb24oZSl7dmFyIHQscixuLGEsbztyZXR1cm57ZmlsbENvbG9yOm51bGw9PT0odD1lKXx8dm9pZCAwPT09dD92b2lkIDA6dC5wcm9wZXJ0aWVzLmZpbGxDb2xvcixmaWxsT3BhY2l0eTpudWxsPT09KHI9ZSl8fHZvaWQgMD09PXI/dm9pZCAwOnIucHJvcGVydGllcy5maWxsT3BhY2l0eSxjb2xvcjpudWxsPT09KG49ZSl8fHZvaWQgMD09PW4/dm9pZCAwOm4ucHJvcGVydGllcy5zdHJva2VDb2xvcix3ZWlnaHQ6bnVsbD09PShhPWUpfHx2b2lkIDA9PT1hP3ZvaWQgMDphLnByb3BlcnRpZXMuc3Ryb2tlV2lkdGgsb3BhY2l0eTpudWxsPT09KG89ZSl8fHZvaWQgMD09PW8/dm9pZCAwOm8ucHJvcGVydGllcy5zdHJva2VPcGFjaXR5fX0scG9pbnRUb0xheWVyOmZ1bmN0aW9uKGUsdCl7cmV0dXJuInJhZGl1cyJpbiBlLnByb3BlcnRpZXM/REcuY2lyY2xlKHQsZS5wcm9wZXJ0aWVzLnJhZGl1cyk6REcubWFya2VyKHQse2ljb246ZnVuY3Rpb24oZSl7cmV0dXJuIERHLmRpdkljb24oe2h0bWw6IjxkaXYgY2xhc3M9J2J1bGxldC1tYXJrZXInIHN0eWxlPSdib3JkZXItY29sb3I6ICIrZSsiOyc+PC9kaXY+IixjbGFzc05hbWU6Im92ZXJyaWRlLWRlZmF1bHQiLGljb25TaXplOlsyMCwyMF0saWNvbkFuY2hvcjpbMTAsMTBdfSl9KGUucHJvcGVydGllcy5jb2xvcil9KX0sb25FYWNoRmVhdHVyZTpmdW5jdGlvbihlLHQpe2UucHJvcGVydGllcy5kZXNjcmlwdGlvbiYmdC5iaW5kUG9wdXAobyhlLnByb3BlcnRpZXMuZGVzY3JpcHRpb24pLHtjbG9zZUJ1dHRvbjohMCxjbG9zZU9uRXNjYXBlS2V5OiEwfSksZS5wcm9wZXJ0aWVzLnRpdGxlJiZ0LmJpbmRUb29sdGlwKG8oZS5wcm9wZXJ0aWVzLnRpdGxlKSx7cGVybWFuZW50OiEwLG9wYWNpdHk6MSxjbGFzc05hbWU6InBlcm1hbmVudC10b29sdGlwIn0pfX0pLmFkZFRvKGUpfSl9KSgneyJvcmRlcmVkR2VvbWV0cmllcyI6W3sidHlwZSI6IkZlYXR1cmUiLCJwcm9wZXJ0aWVzIjp7ImNvbG9yIjoiIzMyM2U1NiIsInRpdGxlIjoiUjNKdmQzUm9JRkJvWVhKdFlXTmxkWFJwWTJGcyIsImRlc2NyaXB0aW9uIjoiIiwiekluZGV4IjoxMDAwMDAwMDAwfSwiZ2VvbWV0cnkiOnsidHlwZSI6IlBvaW50IiwiY29vcmRpbmF0ZXMiOls3Ni44ODA4OTEsNDMuMTY1OTczXX0sImlkIjo2ODV9XSwibWFwUG9zaXRpb24iOnsibGF0Ijo0My4xNjU5MzY0NzMzOTQ2MiwibG9uIjo3Ni44ODExOTc2MDQyODc2NCwiem9vbSI6MTZ9LCJpc1doZWVsWm9vbUVuYWJsZWQiOmZhbHNlfScpPC9zY3JpcHQ+PHNjcmlwdCBhc3luYz0iIiB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly93d3cuZ29vZ2xldGFnbWFuYWdlci5jb20vZ3RhZy9qcz9pZD1VQS0xNTg4NjYxNjgtMSI+PC9zY3JpcHQ+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPihmdW5jdGlvbihlKXtmdW5jdGlvbiB0KCl7ZGF0YUxheWVyLnB1c2goYXJndW1lbnRzKX13aW5kb3cuZGF0YUxheWVyPXdpbmRvdy5kYXRhTGF5ZXJ8fFtdLHQoImpzIixuZXcgRGF0ZSksdCgiY29uZmlnIixlKSx3aW5kb3cuZ3RhZz10fSkoJ1VBLTE1ODg2NjE2OC0xJyk8L3NjcmlwdD48L2JvZHk+")</script>
        </div>
        <div class="container">
            <div class="head">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Ул. Кенесары Хана 18\3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item text-center">
                            <div class="icon">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <a href="mailto:pharmaceutical@gmail.com">pharmaceutical@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item text-right">
                            <div class="icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <a href="tel:+77000751111">+7 700 075 1111</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="feedback" class="feedback">
                <h3 class="title">Связаться с нами</h3>
                <form  action="{{route('send-email')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif(session('danger'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('danger') }}
                        </div>
                    @endif
                    <div class="form-group form-user">
                        <input placeholder="Введите ваше имя" type="text" name="name" class="form-control">
                        <input placeholder="Введите ваш номер" type="number" name="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Введите ваше сообщение" class="form-control" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-feedback">Отправить</button>
                </form>
            </div>
        </div>
    </section>



@endsection

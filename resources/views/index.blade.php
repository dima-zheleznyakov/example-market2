@extends('layouts.app-home')

@section('content')

    <section class="about">
        <div class="container-fluid">
            <div class="about-wrapper">
                <div class="about-text">
                    <h3 class="title">О нас</h3>
                    <div class="descr">
                        Мы прямые поставщики спортивной фармакологии в Казахстане. Для вас мы осуществляем прямые поставки от производителей, сертифицированный товар и доставка по всему Казахстану.
                        Нашу продукции можно приобрести как оптом так и в розницу.
                    </div>
                    <div class="btn-whatsapp-wrapper">
                        <a target="_blank" href="https://wa.me/+77000751111" class="btn-whatsapp"><i class="fa fa-whatsapp"></i> Связаться с нами !</a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="about-img">

                </div>
            </div>
            <div class="advantages">
                <h3 class="title">
                    Наши приемущества
                </h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="advantages_item">
                            <img src="/img/pallet.png" alt="" class="advantages-img">
                            <div class="title">Оптом</div>
                            <div class="advantages-text">
                                <p>В нашем магазине вы можете
                                    приобрести препараты
                                    по оптовой цене!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="advantages_item">
                            <img src="/img/muscle.png" alt="" class="advantages-img">
                            <div class="title">Качество продукции</div>
                            <div class="advantages-text">
                                <p>Наша продукция сертифицированна
                                    и высшего качества</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="advantages_item">
                            <img src="/img/package-box.png" alt="" class="advantages-img">
                            <div class="title">Доставка</div>
                            <div class="advantages-text">
                                <p>Доставим ваш заказ в тот же день</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product">
        <div class="container-fluid">
            <h3 class="title">Популярные товары</h3>
            <div class="descr descr-product-conteiner">Спортсмены рекомендуют</div>
            <div class="row">
                <div class="col-md-4">
                    <div class="product_item">
                        <a href="/products/46">
                            <div class="product_img" style="background-image: url(/files/20210108-1632_5ff834aa5b5bd.jpeg);"></div>
                        </a>
                        <div class="product_text">
                            <h1 class="title"><a href="/products/46">GENOTROPIN PFIZER (ГЕНОТРОПИН)</a></h1>
                            <p class="descr">Гормон роста</p>
                            <div class="product_btn">
{{--                                <form class="form-btn">--}}
{{--                                    <button>В корзину</button>--}}
{{--                                </form>--}}
                                <div class="form-btn">
                                    <a target="_blank" href="https://wa.me/+77000751111?text=Здравствуйте, Я хочу приобрести товар - GENOTROPIN PFIZER (ГЕНОТРОПИН)">WhatsApp</a>
                                </div>
                                <span>70000ТГ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product_item">
                        <a href="/products/152">
                            <div class="product_img" style="background-image: url(/files/WhatsApp2.jpeg"></div>
                        </a>
                        <div class="product_text">
                            <h1 class="title"><a href="/products/152">BOLDENONE MIX 400MG/ML</a></h1>
                            <p class="descr">Инъекционные препараты</p>
                            <div class="product_btn">
{{--                                <form class="form-btn">--}}
{{--                                    <button>В корзину</button>--}}
{{--                                </form>--}}
                                <div class="form-btn">
                                    <a target="_blank" href="https://wa.me/+77000751111?text=Здравствуйте, Я хочу приобрести товар BOLDENONE MIX 400MG/ML">WhatsApp</a>
                                </div>
                                <span>28950ТГ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product_item">
                        <a href="/products/160">
                            <div class="product_img" style="background-image: url(/files/WhatsApp1.jpeg);"></div>
                        </a>
                        <div class="product_text">
                            <h1 class="title"><a href="/products/160">TESTOSTERONE ENANTHATE (250MG/1ML)</a></h1>
                            <p class="descr">Инъекционные препараты</p>
                            <div class="product_btn">
{{--                                <form class="form-btn">--}}
{{--                                    <button>В корзину</button>--}}
{{--                                </form>--}}
                                <div class="form-btn">
                                    <a target="_blank" href="https://wa.me/+77000751111?text=Здравствуйте, Я хочу приобрести товар - TESTOSTERONE ENANTHATE (250MG/1ML)">WhatsApp</a>
                                </div>
                                <span>39200ТГ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="maps">
        <div class="maps-wrapper">

            <div class="maps-address">
                <h3 class="title">Наш адрес</h3>
                <p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i><span> Алматы, ул.Кенесары Хана 18/3</span></p>
            </div>


            <iframe id="map_873289293" frameborder="0" width="100%" height="600px"
                    sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe>
            <script type="text/javascript">(function (e, t) {
                    var r = document.getElementById(e);
                    r.contentWindow.document.open(), r.contentWindow.document.write(atob(t)), r.contentWindow.document.close()
                })("map_873289293",
                    "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUpe3ZhciB0PUpTT04ucGFyc2UoZSkscj10Lm9yZGVyZWRHZW9tZXRyaWVzLG49dC5tYXBQb3NpdGlvbixhPXQuaXNXaGVlbFpvb21FbmFibGVkO2Z1bmN0aW9uIG8oZSl7cmV0dXJuIGRlY29kZVVSSUNvbXBvbmVudChhdG9iKGUpLnNwbGl0KCIiKS5tYXAoZnVuY3Rpb24oZSl7cmV0dXJuIiUiKygiMDAiK2UuY2hhckNvZGVBdCgwKS50b1N0cmluZygxNikpLnNsaWNlKC0yKX0pLmpvaW4oIiIpKX1ERy50aGVuKGZ1bmN0aW9uKCl7dmFyIGU9REcubWFwKCJtYXAiLHtjZW50ZXI6W24ubGF0LG4ubG9uXSx6b29tOm4uem9vbSxzY3JvbGxXaGVlbFpvb206YSx6b29tQ29udHJvbDohYX0pO0RHLmdlb0pTT04ocix7c3R5bGU6ZnVuY3Rpb24oZSl7dmFyIHQscixuLGEsbztyZXR1cm57ZmlsbENvbG9yOm51bGw9PT0odD1lKXx8dm9pZCAwPT09dD92b2lkIDA6dC5wcm9wZXJ0aWVzLmZpbGxDb2xvcixmaWxsT3BhY2l0eTpudWxsPT09KHI9ZSl8fHZvaWQgMD09PXI/dm9pZCAwOnIucHJvcGVydGllcy5maWxsT3BhY2l0eSxjb2xvcjpudWxsPT09KG49ZSl8fHZvaWQgMD09PW4/dm9pZCAwOm4ucHJvcGVydGllcy5zdHJva2VDb2xvcix3ZWlnaHQ6bnVsbD09PShhPWUpfHx2b2lkIDA9PT1hP3ZvaWQgMDphLnByb3BlcnRpZXMuc3Ryb2tlV2lkdGgsb3BhY2l0eTpudWxsPT09KG89ZSl8fHZvaWQgMD09PW8/dm9pZCAwOm8ucHJvcGVydGllcy5zdHJva2VPcGFjaXR5fX0scG9pbnRUb0xheWVyOmZ1bmN0aW9uKGUsdCl7cmV0dXJuInJhZGl1cyJpbiBlLnByb3BlcnRpZXM/REcuY2lyY2xlKHQsZS5wcm9wZXJ0aWVzLnJhZGl1cyk6REcubWFya2VyKHQse2ljb246ZnVuY3Rpb24oZSl7cmV0dXJuIERHLmRpdkljb24oe2h0bWw6IjxkaXYgY2xhc3M9J2J1bGxldC1tYXJrZXInIHN0eWxlPSdib3JkZXItY29sb3I6ICIrZSsiOyc+PC9kaXY+IixjbGFzc05hbWU6Im92ZXJyaWRlLWRlZmF1bHQiLGljb25TaXplOlsyMCwyMF0saWNvbkFuY2hvcjpbMTAsMTBdfSl9KGUucHJvcGVydGllcy5jb2xvcil9KX0sb25FYWNoRmVhdHVyZTpmdW5jdGlvbihlLHQpe2UucHJvcGVydGllcy5kZXNjcmlwdGlvbiYmdC5iaW5kUG9wdXAobyhlLnByb3BlcnRpZXMuZGVzY3JpcHRpb24pLHtjbG9zZUJ1dHRvbjohMCxjbG9zZU9uRXNjYXBlS2V5OiEwfSksZS5wcm9wZXJ0aWVzLnRpdGxlJiZ0LmJpbmRUb29sdGlwKG8oZS5wcm9wZXJ0aWVzLnRpdGxlKSx7cGVybWFuZW50OiEwLG9wYWNpdHk6MSxjbGFzc05hbWU6InBlcm1hbmVudC10b29sdGlwIn0pfX0pLmFkZFRvKGUpfSl9KSgneyJvcmRlcmVkR2VvbWV0cmllcyI6W3sidHlwZSI6IkZlYXR1cmUiLCJwcm9wZXJ0aWVzIjp7ImNvbG9yIjoiIzMyM2U1NiIsInRpdGxlIjoiUjNKdmQzUm9JRkJvWVhKdFlXTmxkWFJwWTJGcyIsImRlc2NyaXB0aW9uIjoiIiwiekluZGV4IjoxMDAwMDAwMDAwfSwiZ2VvbWV0cnkiOnsidHlwZSI6IlBvaW50IiwiY29vcmRpbmF0ZXMiOls3Ni44ODA4OTEsNDMuMTY1OTczXX0sImlkIjo2ODV9XSwibWFwUG9zaXRpb24iOnsibGF0Ijo0My4xNjU5MzY0NzMzOTQ2MiwibG9uIjo3Ni44ODExOTc2MDQyODc2NCwiem9vbSI6MTZ9LCJpc1doZWVsWm9vbUVuYWJsZWQiOmZhbHNlfScpPC9zY3JpcHQ+PHNjcmlwdCBhc3luYz0iIiB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly93d3cuZ29vZ2xldGFnbWFuYWdlci5jb20vZ3RhZy9qcz9pZD1VQS0xNTg4NjYxNjgtMSI+PC9zY3JpcHQ+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPihmdW5jdGlvbihlKXtmdW5jdGlvbiB0KCl7ZGF0YUxheWVyLnB1c2goYXJndW1lbnRzKX13aW5kb3cuZGF0YUxheWVyPXdpbmRvdy5kYXRhTGF5ZXJ8fFtdLHQoImpzIixuZXcgRGF0ZSksdCgiY29uZmlnIixlKSx3aW5kb3cuZ3RhZz10fSkoJ1VBLTE1ODg2NjE2OC0xJyk8L3NjcmlwdD48L2JvZHk+")</script>
        </div>
    </section>


@endsection

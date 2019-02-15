
<footer>
    <div class="footerInfo">
        <div class="container footerContent">
            <div class="logodiv footerLogo">
                <div class="logo">
                    <a href="">
                        <img src="{{ asset('images/Varpet.png')}}" alt="Varpet">
                    </a>
                </div>
            </div>
            <div class="foot">
                <div class="inf row">
                    <div class="aboutUs col-md-3 col-xs-3">
                        <h5>ՄԵՐ ՄԱՍԻՆ</h5>
                        <div class="footerOrangeLine"></div>
                        <p>Կան Lorem Ipsum-ի շատ տարբերակներ,սակայն շատերը աղավաղվել են տարաբնույփ, երբեմն նույնիկ լատիներենից շատ հեռու և անհավանական
                            բառերի և հումորի ավելացման արդյունքում։
                        </p>
                    </div>
                    <div class="serv col-md-3">
                        <h5>ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</h5>
                        <div class="footerOrangeLine"></div>
                        {{ menu('footer_first', 'partials.menus.footer_first') }}
                    </div>
                    <div class="prov col-md-3 col-xs-3">
                        <h5>ՄԱՏԱԿԱՐԱՐՆԵՐ</h5>
                        <div class="footerOrangeLine"></div>
                        {{ menu('footer_last', 'partials.menus.footer_last') }}
                    </div>
                    <div class="conn col-md-3">
                        <h5>ԿԱՊ ՄԵԶ ՀԵՏ</h5>
                        <div class="footerOrangeLine"></div>
                        <p><i class="fas fa-phone"></i> <span>+374</span> <span>123</span><span> 456</span> <span>88</span></p>
                        <addres><i class="fas fa-map-marker-alt"></i><span>ՀՀ,</span><span>0006,</span><span>Երևան</span></addres>
                        <p class="gmail"><i class="far fa-envelope"></i> <span>varpet@gmail.com</span></p>
                    </div>

                </div>
            </div>
            <div class="icons">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div  class="copyRight">
        <div class="container">
            <div class="rights">
                <i class="far fa-copyright"></i><span>2018 ԲՈԼՈՐ ԻՐԱՎՈՒՆՔՆԵՐԸ ՊԱՇՏՊԱՆՎԱԾ ԵՆ</span><a href=""><img src="images/Layer%20184.png" alt="ArmBit" class="Armbit"></a>
            </div>
        </div>

    </div>
</footer>
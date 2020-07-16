$(window).on('load', function () {
        $(".loading").remove();
    });
    $(document).ready(function () {
            $('.carousel').carousel({
                    interval:4500,
                    pause: "false"
            });
            var boyut=($(window).height()/2)-2;
            $(".galeris").css("height",boyut);
            $(".galeris2").css("height", $(window).height());
            if ($(window).width()>768){
                $(".homeslider").css("height", $(window).height() - $(".header-menu").height());
                $(".hotel-about-size").css("height", $(window).height() - $(".header-menu").height());
                $(".contact-size-bring").css("height", ($(window).height() - $(".header-menu").height()) - $("#footer").height());
                $(".mobilebox").css("right", ($(".col-md-3.text-center.text-md-right > i").width() + $(".col-md-3.text-center.text-md-right > a").width() + 90 + $(".header-private-button").width()));
            }
            var now = new Date();
            var hourNow = now.getHours();
            var minuteNow = now.getMinutes();
            var day = ("0" + now.getDate()).slice(-2);
            var month = ("0" + (now.getMonth() + 1)).slice(-2);
            var today = (day)+"."+(month)+"."+now.getFullYear() ;
            $("#this-date").html(today);
            $("#this-time").html(" "+hourNow+":"+minuteNow);
            //var pdleft=$(".header-logo").width();
            //alert(pdleft);
            //$(".mainmenu .nav-item:first-child").css("padding-left",pdleft);
    })
    function sektore(hedef) {
        var otele = $(".header-menu").height();
        if (hedef!='home' && hedef!='our-hotel'){
            otele = 0;
        }
        $('html, body').animate({ scrollTop: $('#' + hedef).offset().top - otele }, 1000);
    }
    function hover(element) {
            element.setAttribute('src', 'images/mescomedia2.png');
    }
    function unhover(element) {
            element.setAttribute('src', 'images/mescomedia1.png');
    }
    $(window).resize(function () {
        if ($(window).width() > 768) {
            var boyut = ($(window).height() / 2) - 2;
            $(".galeris").css("height", boyut);
            $(".galeris2").css("height", $(window).height());
            $(".homeslider").css("height", $(window).height() - $(".header-menu").height());
            $(".hotel-about-size").css("height", $(window).height() - $(".header-menu").height());
        }
    });
    $('body').css('padding-top',($('header').height()+"px"));
    
     if ($('#derece').length > 0) {
            var durumkod = '2343732';
            var d = new Date();
            var datestring = d.getDate() + "" + (d.getMonth() + 1) + "" + d.getFullYear() + "" + d.getHours();
            var callbackFunction = function (data) {
                var sonuc = data.query.results
                if (sonuc === null) {
                } else {
                    var wind = data.query.results.channel.item.condition;
                    var derece = wind.temp;
                    var resim = wind.code;
                    document.getElementById("resim").innerHTML = "<img src=../weather-icon/" + resim + ".png width=40>";
                    document.getElementById("derece").innerHTML = derece + "&deg;C ";
                }
            };
            document.write('<scr' + 'ipt type=\"text/javascript\" src=\"https:\/\/query.yahooapis.com\/v1\/public\/yql?q=select item.condition from weather.forecast where woeid = ' + durumkod + ' AND u=\'c\'&format=json&callback=callbackFunction\" ><\/scr' + 'ipt>');
        }
        var checkinDayVal = 0;var checkoutDayVal = 0;
        function customRangeCalc(dates) { if (this.id == 'fromDateCalc') { $('#toDateCalc').Zebra_DatePicker('option', 'minDate', dates[0] || null); } else { $('#fromDateCalc').Zebra_DatePicker('option', 'maxDate', dates[0] || null); } checkinDayVal = $('#fromDateCalc').val(); checkoutDayVal = $('#toDateCalc').val(); }
        function CtoF(C) { var i = parseInt(C) * (9 / 5) + 32; return parseInt(i) }
    
    
        $(document).ready(function(){
            $('#sendcoomment_button2').click(function (e) {
            var tarihler = $("#daterangex").val().split(" - ");
            var giristarihi = formatDate(tarihler[0]);
            var cikistarihi = formatDate(tarihler[1]);
            var yetiskin = $("#adults").val();
            var cocuk = $("#childs").val();
            var dil = $("html").attr("lang");
            //if (dil == "tr") {
            //    giristarihi = tarihler[0];
            //    cikistarihi = tarihler[1];
            //}
            var url="https://www.wyndhamhotels.com/tr-tr/tryp/ankara-turkey/tryp-ankara-oran/rooms-rates?hotel_id=52449&checkin_date=" + giristarihi + "&checkout_date=" + cikistarihi + "&children=" + cocuk + "&adults=" + yetiskin;
    //console.log(url);
            window.open(url, '_blank');
    
            $('#homepage_mod').modal('hide');
            });
            function formatDate(date) {
                date = date.split("/");
                return date[1] + '/' + date[0] + '/' + date[2];
            }
        });
    
    
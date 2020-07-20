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

            if ($('#degree').length > 0) {
                var statecode = '2343732';
                var d = new Date();
                var datestring = d.getDate() + "" + (d.getMonth() + 1) + "" + d.getFullYear() + "" + d.getHours();
                var callbackFunction = function (data) {
            var result = data.query.results
            if (result === null) {
            } else {
                    var wind = data.query.results.channel.item.condition;
                    var degree = wind.temp;
                    var photo = wind.code;
                    document.getElementById("photo").innerHTML = "<img src=../weather-icon/" + photo + ".png width=40>";
                    document.getElementById("degree").innerHTML = degree + "&deg;C ";
            }
                };
                document.write('<scr' + 'ipt type=\"text/javascript\" src=\"https:\/\/query.yahooapis.com\/v1\/public\/yql?q=select item.condition from weather.forecast where woeid = ' + state + ' AND u=\'c\'&format=json&callback=callbackFunction\" ><\/scr' + 'ipt>');
            }
            
            var checkinDayVal = 0;var checkoutDayVal = 0;
            function customRangeCalc(dates) { if (this.id == 'fromDateCalc') { $('#toDateCalc').Zebra_DatePicker('option', 'minDate', dates[0] || null); } else { $('#fromDateCalc').Zebra_DatePicker('option', 'maxDate', dates[0] || null); } checkinDayVal = $('#fromDateCalc').val(); checkoutDayVal = $('#toDateCalc').val(); }
            function CtoF(C) { var i = parseInt(C) * (9 / 5) + 32; return parseInt(i) }
    
    })
    function sektore(targetwho) {
        var otele = $(".header-menu").height();
        if (targetwho!='home' && targetwho!='our-hotel'){
            otele = 0;
        }
        $('html, body').animate({ scrollTop: $('#' + targetwho).offset().top - otele }, 1000);
    }
    function hover(element) {
            element.setAttribute('src');
    }
    function unhover(element) {
            element.setAttribute('src');
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
    
     

        $('#btn-make-reservation').click(function (e) {
                

        var dates = $("#daterangex").val().split(" - ");
        var logindate = formatDate(dates[0]);
        var exitdate = formatDate(dates[1]);
        var adult = $("#adults").val();
        var child = $("#childs").val();
        var language = $("html").attr("lang");
        var url="https://www.wyndhamhotels.com/tr-tr/tryp/istanbul-turkey/tryp-by-wyndham-istanbul-topkapi/overview?brand_id=ALL&checkInDate=" + logindate + "&checkout_date=" + exitdate + "&children=" + child + "&adults=" + adult;
        window.open(url, '_blank');
        console.log(url);
        $('#homepage_mod').modal('hide');
        });
        function formatDate(date) {
        date = date.split("/");
        return date[1] + '/' + date[0] + '/' + date[2];
        }

    
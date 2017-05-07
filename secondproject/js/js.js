// 头部导航固定
// console.log($(".bbbb").offset().top)
$(window).scroll(function(){
    var a = $(window).scrollTop();
    if(a>800){
        $("#head-fix").css({
            "position":"fixed",
            "display":"block"
        })
    }else{
        $("#head-fix").css({
            "position":"",
            "display":""
        })
    }
})
//头部点击事件
$(".dispear").click(function(){
    $("#header").fadeOut();
})
//点击更换地点事件
$(".where ul li:first-child a").css({
        "background-color":"#f10215",
        "color":"white"
    })
$(".where ul li a").click(function(){
    $(".change-text").html($(this).html());
    $(this).css({
        "background-color":"#f10215",
        "color":"white"
    }).parent("li").siblings("li").find("a")
    .css({
        "background-color":"",
        "color":""
    })
})
//购物车弹框
$(".shop-car").mouseenter(function(){
    $(".bt-car").show();
    $(".car-text").css("border-bottom","transparent")
}).mouseleave(function(){
    $(".bt-car").hide();
    $(".car-text").css("border-bottom","")
})
//侧边栏hover事件
$("#pic-run .aside ul li").mouseenter(function(){
	$("#pic-run .aside .main .box1").css("display","none");
	$("#pic-run .aside ul li").css("background-color","");
	$("#pic-run .aside .main .box1").eq($(this).index()).css("display","block");
	$(this).css("background-color","#999395")
})
$("#pic-run .aside").mouseleave(function(){
	$("#pic-run .aside .main .box1").css("display","none");
	$("#pic-run .aside ul li").css("background-color","");
})
//轮播图
var timer = setInterval(run,2000);
var num = -1;
	run();
    function run(){
    	num++;
    	if(num>6){
    		num = 0;
    	}
    	$("#pic-run .middle .container .imgs a").eq(num).fadeIn().siblings().fadeOut();
    	$("#pic-run .middle .container .sp span").eq(num).css("background-color","#db192a")
    	.siblings().css("background-color","")
    }
    //鼠标划上轮播时停止
    $("#pic-run .middle .container").mouseenter(function(){
    	clearTimeout(timer);
    	$("#pic-run .middle .container .md-bt").css("display","block");
    }).mouseleave(function(){
    	timer = setInterval(run,1000);
    	$("#pic-run .middle .container .md-bt").css("display","");
    })
    //鼠标划上span的时样式
    $("#pic-run .middle .container .sp span").mouseenter(function(){
        num = $(this).index()
        console.log(num)
    	$(this).css("background-color","#db192a").siblings().css("background-color","");
    	$("#pic-run .middle .container .imgs a").eq($(this).index()).fadeIn().siblings().fadeOut();
    })
    //给左按钮绑定事件
    $("#pic-run .middle .container .lf").mousedown(function(){
        console.log(num)
    	num--;
    	if(num<0){
    		num = 6;
    	}
    	console.log(num)
    	$("#pic-run .middle .container .imgs a").eq(num).fadeIn().siblings().fadeOut();
    	$("#pic-run .middle .container .sp span").eq(num).css("background-color","#db192a")
    	.siblings().css("background-color","");
    })
    //给右按钮绑定事件
    $("#pic-run .middle .container .rt").mousedown(function(){
    	num++;
    	if(num>6){
    		num = 0;
    	}
    	$("#pic-run .middle .container .imgs a").eq(num).fadeIn().siblings().fadeOut();
    	$("#pic-run .middle .container .sp span").eq(num).css("background-color","#db192a")
    	.siblings().css("background-color","");
    })
    //促销公告选项卡
    $("#pic-run .chose .news .news-head .tits").mouseenter(function(){
        
        if($(this).index()==0){
            
            $("#pic-run .chose .news .news-head span").stop().animate({
                "left":"-2px",
            },500)
        }else{
             $("#pic-run .chose .news .news-head span").stop().animate({
                "left":"50px",
            },500)
        }
    //设置内容的出现与隐藏
        $("#pic-run .chose .news .news-line .cell-line").eq($(this).index())
        .addClass("active").siblings(".cell-line").removeClass("active")
    })
    //选项卡
    $("#pic-run .chose .sevice .sevice-log .turn").mouseenter(function(){
       $(".sevice-log li").not(".turn").css("display","none").end()
       .find("i").css("display","none")
       .parent("a").css({"padding":"0"})
       .parent("li").css({height:"25px"})
       //清除其他span的上边框颜色
       $(".sevice-log li").find("span").css("border-color","")
       $(this).find("span").css("border-color","red");
       $("#pic-run .chose .sevice .tel-box").eq($(this).index()).show()
       .siblings(".tel-box").hide();
    })
    //点击叉叉，还原到最初的状态
    $(".btn-false").mousedown(function(){
        $(".tel-box").hide();
        $(".sevice-log li").css("display","block").find("i").css("display","block")
        .parent("a").css("padding-top","20px").parent("li").css("height","69px")
        $(".sevice-log li").find("span").css("border-color","")
        $("#pic-run .chose .sevice .sevice-log .turn").eq(3).off()
    })
    // 设置充话费处颜色变化
    $("#pic-run .chose .sevice .tel-box ul li").mouseenter(function(){
        $(this).addClass("active").siblings("li").removeClass("active");
        //设置滑动在li上时下面方框的变化
         $("#pic-run .chose .sevice .tel-box .text-deltail").eq($(this).index())
          .addClass("act").siblings(".text-deltail").removeClass("act")  
    })
    //设置机票滑动时的样式
    $(".tel-box .phone li").mouseenter(function(){
        var move_left = $(this).index()*190;
        $(".plane-big").stop().animate({"left":-move_left},500)
    })
    //倒计时
    var span = document.querySelectorAll(".js_tm");
    var th = span[0].innerHTML;
    var tm = span[1].innerHTML;
    var ts = span[2].innerHTML;
    console.log(th)
    var t_timer = setInterval(running,1000);
    function running(){
        ts--;
        if(ts<0){
            ts=59;
            tm--;
           if(tm==0){
            th--;
            tm=59;
            if(th==0){
                ts=0;
                tm=0;
                clearInterval(t_timer)
            }
           }
        }
        ts<10?span[2].innerHTML = "0"+ts:span[2].innerHTML = ts;
        tm<10?span[1].innerHTML = "0"+tm:span[1].innerHTML = tm;
        th<10?span[0].innerHTML = "0"+th:span[0].innerHTML = th;
    }
//商品整体轮播
var run_n = 1;
    $(".list-run .right").click(function(){
        if(run_n<=3){
            run_n++;
        }else{
            $(".list-run .cont").css("left","0px");
            run_n=1;
        }
        $(".list-run .cont").stop().animate({"left":-1000*run_n},500)
    })
    $(".list-run .left").click(function(){
        if(run_n<=3&&run_n>=1){
            run_n--;
        }else{
            $(".list-run .cont").css("left","-4000px");
            run_n=3;
        }
        $(".list-run .cont").stop().animate({"left":-1000*run_n},500)
    })
//排行榜的鼠标滑过事件
    $(".tab .tab-head a").mouseenter(function(){
        $(".tab-head .tab-line").stop().animate({
            "left":($(this).index())*78,
        },300)
        $(".tab-content .tab-items ul").eq($(this).index()).show().siblings("ul").hide();
    })
// logo轮播
$(".pt-ft .right").click(function(){
        if(run_n<=1){
            run_n++;
        }else{
            $(this).siblings(".pt-log").css("left","0px");
            run_n=1;
        }
        $(this).siblings(".pt-log").stop().animate({"left":-570*run_n},500)
    })
    $(".pt-ft .left").click(function(){
        if(run_n==1){
            run_n--;
        }else{
            $(this).siblings(".pt-log").css("left","-1140px");
            run_n=1;
        }
        $(this).siblings(".pt-log").stop().animate({"left":-570*run_n},500)
    })
//左按钮滑动
    $(".left5").click(function(){
        run_n--;
           if(run_n==0){
            run_n=1;
            $(this).siblings(".pt-log5").css("left","-2220px");
        }
        $(this).siblings(".pt-log5").stop().animate({"left":-1110*run_n},500)
    })
//右按钮滑动
$(".right5").click(function(){
    run_n++;
    if(run_n==2){
        run_n=1;
        $(this).siblings(".pt-log5").css("left","0");
    }
    $(this).siblings(".pt-log5").stop().animate({"left":-1110*run_n},500)
    // console.log(run_n)
})
//边框颜色改变
$(".tags a").mouseenter(function(){
    $(this).css("border-color","white")
}).mouseleave(function(){
    $(this).css("border-color","")
})
// 右侧边栏样式改变
$("#toolbar .tab div").hover(
    function(){
    $(this).find("i").css("background-color","#c81623")
    $(this).find("em").css("background-color","#c81623").stop().animate({
        left:"-58px",
        },500)
   },
    function(){
      $(this).find("i").css("background-color","") 
       $(this).find("em").css("background-color","").stop().animate({
        left:"",
        },500)
    }
)
$("#toolbar .tab-foot div").hover(
    function(){
    $(this).find("i").css("background-color","#c81623")
    $(this).find("em").css("background-color","#c81623").stop().animate({
        left:"-58px",
        },500)
   },
    function(){
      $(this).find("i").css("background-color","") 
       $(this).find("em").css("background-color","").stop().animate({
        left:"",
        },500)
    }
)
//右边返回顶部
$(".return-top").click(function(){
    $('body,html').animate({  
                scrollTop: 0  
            },  
            0);
})
// 左边返回顶部
$("#aside li.back").click(function(){
    $("html,body").animate({
        scrollTop:0,
    },1000) 
})
//左边楼层跳转
$("#aside li").hover(function(){
    $(this).addClass("active")
},function(){
    $(this).removeClass("active")
}).click(function(){
    console.log($(this).index())
    show($(this).index());
    $("html,body").animate({
        "scrollTop":getScroll($(this).index())
    },500)
})
// 给文档绑定滚动事件
$(window).scroll(function(){
    var num = $(document).scrollTop();
    console.log(num)
    if(num>=7059){
        show(9);
    }else if(num>=6506){
        show(8);
    }else if(num>=5953){
        show(7);
    }else if(num>=5400){
        show(6);
    }else if(num>=4847){
        show(5);
    }else if(num>=4154){
        show(4);
    }else if(num>=3601){
        show(3);
    }else if(num>=3048){
        show(2);
    }else if(num>=2495){
        show(1);
    }else if(num>=1837){
        $("#aside").css("display","block");
        show(0);
    }else{
        $("#aside").css("display","none")
    }
})
function getScroll(n){
    switch(n){
        case 0:return 1837; break;
        case 1:return 2495; break;
        case 2:return 3048; break;
        case 3:return 3601; break;
        case 4:return 4154; break;
        case 5:return 4847; break;
        case 6:return 5400; break;
        case 7:return 5953; break;
        case 8:return 6506; break;
        case 9:return 7059; break;
    }
}
function show(n){
    $("#aside li").eq(n).css("background-color","#c81623").siblings("li").css("background-color","");
    $("#aside").css("display","block");
}

if (typeof jQuery === 'undefined') { throw new Error('JavaScript requires jQuery') }

/*
$(function () {
    //head 弹出菜单部分
    var cateMenu = function () {
        var cateLiNum = $(".cateMenu li").length;
        $(".cateMenu li").each(function (index, element) {
            if (index < cateLiNum - 1) {
                $(this).mouseenter(function () {
                    var ty = $(this).offset().top - 168;
                    var obj = $(this).find(".list-item");
                    var sh = document.documentElement.scrollTop || document.body.scrollTop;
                    var oy = ty + (obj.height() - 60) + 158 - sh;
                    var dest = oy - $(window).height()
                    if (oy > $(window).height()) {
                        ty = ty - dest - 10;
                    }
                    if (ty < 0) ty = 0;
                    $(this).addClass("on");
                    obj.show();
                    $(".cateMenu li").find(".list-item").stop().animate({ "top": ty });
                    obj.stop().animate({ "top": ty });
                })
                $(this).mouseleave(function () {
                    $(this).removeClass("on");
                    $(this).find(".list-item").hide();
                })
            }
        });

        $(".navCon_on").hover(function () {
            $(".cateMenu").show();
        },
  function () {
      $(".cateMenu").hide();
  })

    } ();
})
*/

// Download by http://sc.xueit.com人气排行

$.fn.extend({     
  AdAdvance:function(){
  var listobj=this;
        var objs =$('dt',this);
  var view =objs.length-8;//parseInt( Math.random()*objs.length);
  objs.each(function(i){
  $(this).hover(function(){ $('dd',listobj).hide();$('.dropList-hover',listobj).attr("class",""); $(this).children("p").attr("class","dropList-hover");$(this).next().show()})
  if(i!=view)
  {
    $(this).next().hide();
  }
  else
  {
    $(this).next().show();
    $(this).children("p").attr("class","dropList-hover");
  }
  });

  objs.eq(0).trigger('mouseenter');
  }
}); 

/** 
* extend 人气排行
* 
* @package jquery
  */
+(function($){
  'use strict';
  $(document).ready(function() {
     $('#dropbk0').AdAdvance();
     $('#dropbk1').AdAdvance();
  })
  
})(jQuery);


/*-- 滑动门 --*/
+function ($) {
  'use strict';
   function scrollDoor(){
    }
    scrollDoor.prototype = {
     sd : function(menus,divs,openClass,closeClass){
      var _this = this;
      if(menus.length != divs.length)
      {
       alert("菜单层数量和内容层数量不一样!");
       return false;
      }    
      for(var i = 0 ; i < menus.length ; i++)
      { 
        try {
           _this.$(menus[i]).value = i;    
           _this.$(menus[i]).onmousemove = function(){
         
        for(var j = 0 ; j < menus.length ; j++)
        {      
         _this.$(menus[j]).className = closeClass;
         _this.$(divs[j]).style.display = "none";
        }
        _this.$(menus[this.value]).className = openClass; 
        _this.$(divs[this.value]).style.display = "block";    
       }
        }
        catch (e) {
          
        }
      
       
      }
      },
     $ : function(oid){
      if(typeof(oid) == "string")
      return document.getElementById(oid);
      return oid;
     }

    }
    
    
    window.onload = function () {
        
        var SDmodel = new scrollDoor();
        //人气排行
        SDmodel.sd(["a01", "a02"], ["aa01", "aa02"], "on", " ");
        //找服务员
        SDmodel.sd(["b01", "b02", "b03", "b04", "b05", "b06"], ["bb01", "bb02", "bb03", "bb04", "bb05", "bb06"], "on", " ");
        //SDmodel.sd(["c01", "c02", "c03", "c04", "c05", "c06"], ["cc01", "cc02", "cc03", "cc04", "cc05", "cc06"], "on", " ");

        //相似推荐
        var SDmodelpos = new scrollDoor();
        SDmodelpos.sd(["d01", "d02"], ["dd01", "dd02"], "on", " ");
        SDmodelpos.sd(["e01", "e02", "e03"], ["ee01", "ee02", "ee03"], "on", " ");
    }


}(jQuery);
 

+function ($) {

  
          var currentindex = 1;
          $('#flash').css('background-color', $('#flash1').attr('name'));
           
          function changeflash(i) {
              currentindex = i;
              for (j = 1; j <= 3; j++) {
                  if (j == i) {
                      $('#flash' + j).fadeIn('normal');
                      $('#flash' + j).css('display', 'block');
                      $('#f' + j).removeClass();
                      $('#f' + j).addClass('dq');
                      $('#flash').css('background-color', $('#flash' + j).attr('name'));
                  } else {
                      $('#flash' + j).css('display', 'none');
                      $('#f' + j).removeClass();
                      $('#f' + j).addClass('no');
                  }
              }
          }
          function startAm() {
              timerID = setInterval(function  () {
                timer_tick();
              }, 4000);
          }
          function stopAm() {
              clearInterval(timerID);
          }
          function timer_tick() {
              currentindex = currentindex >= 3 ? 1 : currentindex + 1;
              changeflash(currentindex);
          }
          $(document).ready(function () {
              $('.flash_bar div').mouseover(function () {
                  stopAm();
              }).mouseout(function () {
                  startAm();
              });
              startAm();

              $(".flash_bar div").on('click',function  () {
                var ind = $(this).index();
                changeflash(ind+1);
              })
          }); 

}(jQuery);
 


+function ($) {
  'use strict';
  /*可控制左右无缝循环*/
  function srcoll_left_right_Control(control_enabel,direction,left_div,right_div,scroll_body,scroll_content,total_width,total_height,scroll_width,scroll_speed)
  { 
      var MarqueeDivControl=new Marquee([scroll_body,scroll_content],direction,0.2,total_width,total_height,scroll_speed,3000,3000,scroll_width);
      if(control_enabel==true)
      {
          $("#"+left_div).click(function(){MarqueeDivControl.Run(3);});	
          $("#"+right_div).click(function(){MarqueeDivControl.Run(2);});	
      }
  }

  $(document).ready(function() {
    if ($("#MarqueeDiv1").length > 0) {
      srcoll_left_right_Control(true, 2, "LeftButton1", "RightButton1", "MarqueeDiv1", "MarqueeDiv3Boxent1", 727, 355, 184, 20);        
    }
  })
}(jQuery);


//图片延迟加载
+function ($) {
  'use strict';
  $(document).ready(function() {
     $("img.lazy").lazyload();  
  })
}(jQuery);
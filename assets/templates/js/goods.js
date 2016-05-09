$(document).ready(function() {
    $("select.goods-select").on("change", function() {
        if($(this).hasClass('goods-cat')) {
            $(".goods-goal").prop("disabled","disabled").addClass('goods-disabled');
            $(".goods-brand").prop('disabled', false).removeClass('goods-disabled');
            $(".goods-brand").val($(".goods-brand option:first").val());
            $.ajax({
                type: "POST",
                url: "/ajax/goods_cat_ajax.php",
                data: "id=" + $(this).val() ,
                success: function(data){
                    dat_a = JSON.parse(data);//разбираем json
                    $('.goods-filter-link').attr('href',dat_a.link);
                    $(".goods-brand").empty().html(dat_a.result);
                    //console.log(dat_a.result);
                }
            });
        }
        if($(this).hasClass('goods-brand')) {
            $(".goods-goal").prop("disabled",false).removeClass('goods-disabled');
            $(".goods-goal").val($(".goods-goal option:first").val());
            $.ajax({
                type: "POST",
                url: "/ajax/goods_brand_ajax.php",
                data: "id=" + $(".goods-cat").val()+"&brand="+$(this).val() ,
                success: function(data){
                    dat_a = JSON.parse(data);//разбираем json
                    $('.goods-filter-link').attr('href',dat_a.link);
                    $(".goods-goal").empty().html(dat_a.result);
                }
            });
        }
        if($(this).hasClass('goods-goal')) {
            $.ajax({
                type: "POST",
                url: "/ajax/goods_goal_ajax.php",
                data: "id=" + $(".goods-cat").val()+"&brand="+$('.goods-brand').val()+"&goal="+$(this).val(),
                success: function(data){
                    dat_a = JSON.parse(data);//разбираем json
                    $('.goods-filter-link').attr('href',dat_a.link);
                }
            });
        }
    });
    
    //var id = $(".buy-btn-container input[name='id']").val();
    
    /*$("#my_select").attr("disabled","disabled");
    $("#my_select").attr("disabled","");*/
    
    /*$.ajax({
        type: "POST",
        url: "/ajax/composition.php",
        data: "id=" + id ,
        success: function(msg){
            $(".product-composition-content").append(msg);
            $(".product-composition *").width("auto");
        }
    });*/
});
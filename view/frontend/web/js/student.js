/**
 * student
 *
 * @copyright Copyright © 2020 Landofcoder. All rights reserved.
 * @author    landofcoder@gmail.com
 */



define(['jquery'], function ($) {
    $.ajax({
        url:"studentmanage/index/index",
        type: 'get',
        dataType: 'json',
        data:{

        },
        success:function (result) {
            console.log(result);
            // let arr = [];
            // result.map((item) => {
            //    arr.push(item.name);
            // });
            // var covertJson = arr;
            var ab = $.parseJSON(result)
            $('#call-ajax').text(ab.name);
        }
    })
});






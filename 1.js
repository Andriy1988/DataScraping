jQuery(document).ready(function() {
alert("TEST");
    $( ".container" ).after(function(){
        var palette = {};
        var ranking = [];

        function getColorData() {
            var color = $(this).css('color');
            if ( typeof palette[color] === "undefined" )
                palette[color] = 1
            else 
                palette[color] ++;

            var bg_color = $(this).css('background-color');
            if ( typeof palette[bg_color] === "undefined" )
                palette[bg_color] = 1
            else 
                palette[bg_color] ++;

            var border_color = $(this).css('border-left-color');
            if ( typeof palette[border_color] === "undefined" )
                palette[border_color] = 1
            else 
                palette[border_color] ++;
        }

        $('*').each(getColorData);
        Object.entries(palette).forEach( 
            function (element) { 
                ranking.push(element); 
        });

        ranking.sort( function (a, b) { 
            return b[1] - a[1]; 
        });

        ranking.forEach(function (element, idx) {
            $('#colorText' + (idx + 1)).html(element.toString());
            $('#topColor' + (idx + 1)).css('color', element[0]);
        });
    });
});
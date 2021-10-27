<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#searchinput").keyup(function() {

        /*------------------------------------
                Loading Data
        -------------------------------------*/
        $('#tdata').empty();
        var recordloader =
            '<tr><td></td><td colspan="2"><div class="lds-facebook"><div></div><div></div><div></div></div></td><td></td></tr>'
        $('#tdata').append(recordloader);

        var name = this.value;
        /*----------------------------------------
            after 3 character sendign ajax request
        -----------------------------------------*/
        if ($(this).val().length > 2) {
            $.ajax({
                url: "/searchproduct",
                type: "POST",
                data: {
                    name: name,
                },
                success: function(response) {
                    $('#tdata').empty();
                    /*------------------------------------
                        Appending Record Not found
                    -------------------------------------*/
                    if (response.length == 0) {
                        var data = '<tr><td><h3>No Record Found</h3></td></tr>';
                        $('#tdata').append(data);
                    } else {
                        $.each(response, function(key, value) {

                            /*------------------------------------
                                Appending Response Data
                            -------------------------------------*/
                            var data =
                                '<tr><td><a href="#"><img width="35" height="35" alt="" src="' +
                                value.node.images.edges[0].node.originalSrc +
                                '"></a></td><td><a href="#">' + value.node.title +
                                '</a></td><td>' + value.node.status +
                                '</td><td><button class="secondary icon-trash"></button></td></tr>';

                            $('#tdata').append(data);
                        });
                    }
                }
            });
        }

        else if($(this).val().length > 0 ) {
            /*------------------------------------
            if Character less than 3 appending data
            -------------------------------------*/
            $('#tdata').empty();
            var data = '<tr><td><h3>Enter Minimum 3 character</h3></td></tr>';
            $('#tdata').append(data);
        }
        else if($(this).val().length < 1) {
            $('#tdata').empty();
            var data = '<tr><td><h3>No Record </h3></td></tr>';
            $('#tdata').append(data);
        }


    });
</script>

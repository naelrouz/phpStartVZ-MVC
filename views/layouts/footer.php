<footer id="footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2015</p>
                <p class="pull-right">Курс PHP Start</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.scrollUp.min.js"></script>
<script src="/js/price-range.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/main.js"></script>
<script>



    $(document).ready(function(){

        $('#ajax').on({
            'click': function(e){
                e.style.font('red');
                    $.ajax({
                        url: '/ajax',
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                           var result = '';
                            for(var i = 0, length = data.length; i < length; i++){
                                result += '<tr>';
                                result += '<td>' + data[i].name + '</td>';
                                result += '<td style="text-align: center;">' + data[i].email + '</td>';
                                result += '</tr>';
                            }
                            $('.inner').append(result);
                        }
                    });
            }
        });
    });

</script>
</body>
</html>
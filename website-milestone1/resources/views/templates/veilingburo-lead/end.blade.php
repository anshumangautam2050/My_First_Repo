        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $('input[name=seller]').click(function(){
                var val = $(this).val();
                if(val==1)
                {
                    $('#form-company').hide();
                }
                else
                {
                    $('#form-company').show();
                }
            });

            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }

            $('input[name=email]').on('blur keyup keydown paste change input', function(){
                if($(this).val()!="")
                {
                    if(!isEmail($(this).val())){
                        $(this).addClass('is-invalid');
                    }
                    else
                    {
                        $(this).removeClass('is-invalid');
                    }
                }
                else
                {
                    $(this).removeClass('is-invalid');
                }
            });
        </script>
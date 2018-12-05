<script type="text/javascript" src="{{ asset('Backend/icheck/icheck.min.js') }}"></script>

<script>
        $(window).load(function(){
            $('#postTable').removeAttr('style');
        })
    </script>

<script>
        $(document).ready(function(){
            $('.published').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                     
                    },
                });
            });
            $('.published').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $('.published2').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published2').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus2') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                     
                    },
                });
            });
            $('.published2').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $('.published3').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published3').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus3') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                     
                    },
                });
            });
            $('.published3').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $('.published4').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published4').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus4') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                     
                    },
                });
            });
            $('.published4').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $('.published5').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published5').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus5') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                     
                    },
                });
            });
            $('.published5').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $('.published6').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published6').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus6') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                     
                    },
                });
            });
            $('.published6').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $('.published7').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published7').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus7') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                     
                    },
                });
            });
            $('.published7').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $('.published8').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published8').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus8') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                     
                    },
                });
            });
            $('.published8').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $('.published9').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published9').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus9') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                     
                    },
                });
            });
            $('.published9').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $('.published10').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published10').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus10') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                     
                    },
                });
            });
            $('.published10').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });

    </script>
<script>
       

  
        $('#edit').on('show.bs.modal', function (event) {
      
            var button = $(event.relatedTarget) 
            var title = button.data('mytitle') 
            var content = button.data('mycontent') 
            var id = button.data('myid') 
            var modal = $(this)
      
            modal.find('.modal-body #title').val(title);
            modal.find('.modal-body #content').val(content);
            modal.find('.modal-body #id').val(id);
      })
      
      
        $('#delete').on('show.bs.modal', function (event) {
      
            var button = $(event.relatedTarget) 
      
            var id = button.data('myid') 
            var modal = $(this)
      
            modal.find('.modal-body #id').val(id);
      })
      
      
 </script>
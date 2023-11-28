<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('jquery/jquery-3.6.4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jquery.validate/jquery.validate.min.js') }}"></script>
      
        @if (isset($script))
            @foreach ($script as $js)
                <script type="text/javascript" src="{{ URL::asset($js)}}"></script>      
            @endforeach
        @endif
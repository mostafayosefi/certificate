
      @if(session()->has('success_index'))
      <script src="{{asset('alert/firealert/components.js.download')}}"></script>
      <script>
          $(document).ready(function () {
                          Swal.fire({
                  text:  '{{Session::get('success_index')}}' ,
                  type: 'success',
                  confirmButtonText: 'Close'

              });

          });
      </script>
      @endif

      @if(session()->has('danger_index'))
      <script src="{{asset('alert/firealert/components.js.download')}}"></script>
      <script>
          $(document).ready(function () {
                          Swal.fire({
                  text:  '{{Session::get('danger_index')}}' ,
                  type: 'error',
                  confirmButtonText: 'Close'

              });

          });
      </script>
      @endif

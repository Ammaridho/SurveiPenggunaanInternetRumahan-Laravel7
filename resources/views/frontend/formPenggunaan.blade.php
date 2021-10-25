
    <div id="parentPengguna">
      @for ($i = 1; $i <= $jmlpenghuni; $i++)

        <div class="form-row">
          <div class="form-group col-md-7">
            <label for="nama{{$i}}">Nama</label>
            <input type="text" class="nama form-control" id="nama{{$i}}" placeholder="Nama Penghuni" name="nama{{$i}}" pattern="[A-Za-z ]+">
          </div>
          <div class="form-group col-md-5">
            <label for="banyakGadget{{$i}}">Banyak Gadget</label>
            <input id="banyakgadget{{$i}}" type="number" name="banyakGadget{{$i}}" class="banyakgadget form-control" placeholder="" min="0" max="50">
          </div>
        </div>

        @endfor
    </div>

    <script>
      var ke = {{$jmlpenghuni}};
      
      var bg = []; //array untuk mengambil berapa banyak gadget yang dimiliki perorang

      var nama = [];

      $("#parentPengguna").find('.banyakgadget').on("change keyup",function () {
        for (var i = 1; i <= ke; i++) {  
          bg[i-1] = $(`#banyakgadget${i}`).val();
          nama[i-1] = $(`#nama${i}`).val();
        }
        // console.log(bg);

        $.get("{{route('gadget')}}",{ke:ke,bg:bg,nama:nama}, function(data){
          $("#formgadget").html(data);
        });
      });


    //masuk ke form gadget
    // $('#jumlahpenghuni').on("keyup change",function() {
    //   var jumlahpenghuni = $('#jumlahpenghuni').val();
      
    //   $.get("{{route('penghuni')}}",{ke:ke}, function(data) {
    //     $("#penghuni").html(data);
    //   });
    // });

    </script>


      



    


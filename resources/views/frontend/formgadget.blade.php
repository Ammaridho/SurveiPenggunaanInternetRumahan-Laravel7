<html>
{{-- banyak penghuni --}}
@for ($i = 0; $i < $jmlpenghuni; $i++)

    <div class="form-row">
      <h3>{{$i+1}}. Nama : {{$nama[$i]}}</h3>
    </div>

    {{-- banyak gadget --}}
    @for ($j = 0; $j < $jmlgadget[$i]; $j++)
      

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="namaGadget">Nama Gadget</label>
        <input type="text" class="form-control" id="namaGadget" name="namaGadget{{$i.$j}}" placeholder="Hp/Laptop/Tv..">
      </div>
      <div class="form-group col-md-6">
        <label for="penggunaan">Penggunaan</label>

        <div id="penggunaan" class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-secondary">
            <input type="radio" name="range{{$i.$j}}" id="range" value="ringan"> Ringan
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="range{{$i.$j}}" id="range" value="sedang"> Sedang
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="range{{$i.$j}}" id="range" value="berat"> Berat
          </label>
        </div>
        
      </div>
    </div>

    @endfor 
@endfor    

</html>
  
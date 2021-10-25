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
        <input type="text" class="form-control" id="namaGadget" placeholder="Hp/Laptop/Tv..">
      </div>
      <div class="form-group col-md-6">
        <label for="penggunaan">Penggunaan</label>
        {{-- <input type="text" class="form-control" id="penggunaan" placeholder="Ringan/Sedang/Berat"> --}}

        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-secondary active">
            <input type="radio" name="ringan" id="ringan" checked> Ringan
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="sedang" id="sedang"> Sedang
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="berat" id="berat"> Berat
          </label>
        </div>
        
      </div>
    </div>

    @endfor 
@endfor    

</html>
  
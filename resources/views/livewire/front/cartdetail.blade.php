@foreach($ProductVariant as $row)
  @foreach($varianttag as $locrow)
      @if($row->id == $cart['varientid'])

      @if($row->varient1 == $locrow->id && $row->attribute1 != "")
      <p>{{$locrow->name}}: {{$row->attribute1}}</p>
      @endif

      @if($row->varient2 == $locrow->id && $row->attribute2 != "")
      <p>{{$locrow->name}}: {{$row->attribute2}}</p>
      @endif

      @if($row->varient3 == $locrow->id && $row->attribute3 != "")
      <p>{{$locrow->name}}: {{$row->attribute3}}</p>
      @endif

      @if($row->varient4 == $locrow->id && $row->attribute4 != "")
      <p>{{$locrow->name}}: {{$row->attribute4}}</p>
      @endif

      @if($row->varient5 == $locrow->id && $row->attribute5 != "")
      <p>{{$locrow->name}}: {{$row->attribute1}}</p>
      @endif

      @if($row->varient6 == $locrow->id && $row->attribute5 != "")
      <p>{{$locrow->name}}: {{$row->attribute5}}</p>
      @endif

      @if($row->varient7 == $locrow->id && $row->attribute6 != "")
      <p>{{$locrow->name}}: {{$row->attribute6}}</p>
      @endif

      @if($row->varient8 == $locrow->id && $row->attribute7 != "")
      <p>{{$locrow->name}}: {{$row->attribute7}}</p>
      @endif

      @if($row->varient9 == $locrow->id && $row->attribute8 != "")
      <p>{{$locrow->name}}: {{$row->attribute9}}</p>
      @endif

      @if($row->varient10 == $locrow->id && $row->attribute10 != "")
      <p>{{$locrow->name}}: {{$row->attribute10}}</p>
      @endif

      @endif
  @endforeach
@endforeach
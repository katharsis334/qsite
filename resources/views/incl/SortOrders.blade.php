<section id="orders" style="padding-top: 60px;">
    <div class="container">
      @foreach ($qwe as $q)
        <div class="card mt-3">
        <div class="row">
            <div class="col-4">
                @if ($q->status == 'Выполнено')
                    <img src="storage/{{$q->img2}}" width="400" alt="123" style="height: 100%; object-fit: cover;">
                @else
                    <img src="storage/{{$q->img}}" width="400" alt="123" style="height: 100%; object-fit: cover;">
                @endif

                
            </div>
            <div class="col-8 my-4">
                <h5 class="card-title">Категория: <b>{{$q->cat}} </b></h5>
            <p class="card-text">Описание: <b>{{$q->desc}}</b></p>
            @switch($q->status)
                @case('Новая')
                <p class="card-text">Статус: {{$q->status}}</p>
                <div>
                    <button class="btn btn-outline-danger my-4" type="submit">Удалить</button>
                </div>
                    @break
 
                @case('Принято в работу')
                <p class="card-text" style="color: green">Статус: {{$q->status}}</p>
                    @break
                        
                    @case('Выполнено')
                    <p class="card-text">Статус: {{$q->status}}</p>
                    @break
                    
                @default
                    
            @endswitch
            {{-- ================== *AdminPanel* =================== --}}



            <small class="text-muted">Дата: 03.03.2022</small>
            @if (Auth::user()->is_admin == 1)
                @if ($q->status == 'Новая')
                <form action="{{route('addComment')}}" method="post" id="addComment">
                    <input type="text" value="{{$q->id}}" name="id" style="display: none">
                    <input type="text" placeholder="comment" class="form-control mt-4" name="comment" id="ChangeStatusWork">
                    <button class="btn btn-success mt-4" type="submit">submit</button>
                </form>
                @elseif($q->status == 'Принято в работу')
                <form action="{{route('addImg')}}" method="post" enctype="multipart/form-data" id="addImg">
                    <input type="text" value="{{$q->id}}" name="id" style="display: none">
                    <input type="file" class="form-control mt-4" name="addImg" id="ChangeStatusEnd">
                    <button class="btn btn-success mt-4" type="submit">submit</button>
                </form>
                @endif
            @else
                
            @endif
            </div>
        </div>
        </div>
        @endforeach
    </div>
</section>
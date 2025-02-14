<!DOCTYPE html>
<html>
<head>
    <title>Импорт файлов</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Внимание только CSV!
        </div>
        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif



            <form action="{{ route('product.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
                @error('file')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <br>
                <button class="btn btn-success">Запустить задачку!</button>
                @if(session()->has('batch'))
                <div class="progress my-2" id="batch" data-batch="{{ session()->get('batch') }}">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%" ></div>
                </div>
                @endif
            </form>
<br>
                <div class="alert alert-info" role="alert">
                    <h3>Внимание! запуск задачи происходит раз в минуту!</h3>
                    
                    <p>Названия заголовков таблицы не должны меняться иначе загрузка просто не произойдет! </p>
                    <p>
                        Название; Цена; Количество; Сумма; Валюта; ID; SRC
                    </p>
                    <p>
                        Обновление происходит по ID товара, если такой товар не найден, то он будет добавлен!
                    </p>
                    <p>
                        В поле SRC - можно добавить полный путь до картинки тогда она привяжется к товару и будет выведена на детальной карточке товара.
                    </p>
                    <p>
                        Если мы не перезагружаем страничку, то видим прогресс загрузки, даже если закрыть или перезагрузить импорт продолжиться, но без отображения прогресса!
                        <b>По завершению упадет уведомление на почту!</b>
                    </p>
                </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
@if(session()->has('batch'))
<script>

    function Batch(pool){
        let id = $('#batch').data('batch')
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '{{route('import.batch')}}',
            data: {
                'id':id
            },
            success: function (data) {
                let progress = $('.progress-bar')
                if(data.failedJobs > 0){
                    $('.progress-bar').removeClass('bg-success')
                    $('.progress-bar').addClass('bg-danger')
                    $('.progress-bar').css('width','100%')
                    $('.progress-bar').text('ошибка! не верный формат')
                    clearInterval(pool)
                }
                if(data.progress === 100){
                    window.location.reload();
                    clearInterval(pool)
                }
                
                if(data.progress !== 'undefined'){
                    progress.css('width',data.progress+'%')
                    progress.text(data.progress+'%')
                }else{
                    progress.css('width','0%')
                    progress.text('0%')
                }
                console.log(data.failedJobs)

            },
            error: function (jqXhr) {
                console.error(jqXhr);
                clearInterval(pool)
            }
        });
    }
    let pool = setInterval(function() {
        Batch(pool)
    }, 1000)
</script>
    @endif
</body>
</html>

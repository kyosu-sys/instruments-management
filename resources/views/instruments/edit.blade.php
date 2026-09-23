<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>instrument edit</title>
</head>
<body>
    <h1 class="max-w-lg mx-auto font-bold text-3xl rouded">計測器編集</h1>

    <div class="max-w-lg mx-auto p-6 bg-white rounded shadow">
        <form action="{{ route('instruments.update', $instrument->id ) }}" method="POST">
            @csrf
            
            <div class="mb-2">
                <label class="font-bold" for="management_number">管理番号</label>
                <input class="w-full border border-gray-300 rounded p-2 hover:bg-blue-100" 
                type="text" id="management_number" name="management_number" value="{{ $instrument->management_number }}">
            </div>

            <div class="mb-2">
                <label class="font-bold" for="name">計測器名</label>
                <input class="w-full border border-gray-300 rounded p-2 hover:bg-blue-100" 
                type="text" id="name" name="name" value="{{ $instrument->name}} ">
            </div>

            <div class="mb-2">
                <label class="font-bold" for="location">配置場所</label>
                <input class="w-full border border-gray-300 rounded p-2 hover:bg-blue-100" 
                type="text" id="location" name="location" value="{{ $instrument->location}} ">
            </div>

            <div class="mb-2">
                <label class="font-bold" for="cycle">校正頻度</label>
                <input class="w-full border border-gray-300 rounded p-2 hover:bg-blue-100" 
                type="number" id="cycle" name="calibration_cycle" value="{{ $instrument->calibration_cycle }}">
            </div>

            <div class="mb-2">
                <label class="font-bold" for="next">次回校正日</label>
                <input class="w-full border border-gray-300 rounded p-2 hover:bg-blue-100" 
                type="date" id="next" name="next_calibration_date" value="{{ $instrument->next_calibration_date }}">
            </div>

            <div class="mb-2">
                <label class="font-bold" for="maker">メーカー</label>
                <input class="w-full border border-gray-300 rounded p-2 hover:bg-blue-100" 
                type="text" id="maker" name="maker" value="{{ $instrument->maker }}">
            </div>

            <div class="mb-8">
                <label class="font-bold" for="register">計測器登録日</label>
                <input class="w-full border border-gray-300 rounded p-2 hover:bg-blue-100" 
                type="date" id="register" name="registered_at" value="{{ $instrument->registered_at }}">
            </div>

            <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600" type="submit">登録する</button>
        </form>
    </div>
    

</body>
</html>
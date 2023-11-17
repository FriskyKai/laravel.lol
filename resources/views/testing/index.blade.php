<x-bububu>

    <x-slot:title>
        Это бубубу страница
    </x-slot:title>
    <p style="font-size: {{ $fontSize }}px;">{{ $name }}</p>
    <p>Текущее время: {{ time() }}</p>
    <p>Текущее время: {{ date('d-m-Y-H-i-s') }}</p>
    <p>Сумма: {{ 1+2+3 }}</p>
    <p>Кол-во элементов в массиве: {{ count($arr) }}</p>
    <p>{{ $arr[1] }}</p>
    <p>{{ ($arr[1] == 'Дмитрий') ? 'Диман' : 'Димас'}}</p>
    {{-- Комментарий Blade --}}
    <!-- Комментарий html -->

    {{-- Условие --}}
    @if ($arr[0] == 'Василий')
        {{ $arr[0] = 'Великий Василий' }}
        {{ $arr[1] = 'Всемогущий Дмитрий' }}
    @else
        {{ $arr[2] = 'Всевидящий Никита' }}
    @endif

    {{-- Пока не --}}
    @unless ($isAuth)
        <p>Вы не авторизированы</p>
    @endunless

    {{-- Цикл foreach --}}
    <ol>
        @foreach($arr as $el)
            @if($loop->first)
                Начало списка
            @endif

            <li>
                {{ $el }} -
            @if($loop->odd)
                нечётный
            @endif
            @if($loop->even)
                чётный
            @endif
            {{ $loop->iteration }}
            {{ $loop->index }}
            {{ $loop->remaining }}
            {{ $loop->count }}
            </li>
            @if($loop->last)
                Окончание списка
            @endif
        @endforeach
    </ol>

    <ol>
        @foreach($arr as $key => $el)
            @if($key == 3)
                @continue
            @endif
            @if($key == 4)
                @break
            @endif
            <li>{{ $key }} - {{ $el  }}</li>
        @endforeach
    </ol>

    <ol>
        @foreach($arr as $key => $el)
            @if($key % 3 == 1)
                <li>{{ $el }}</li>
            @endif
        @endforeach
    </ol>

    <ol>
        @foreach($students as $student)
            <li>{{ $student['surname'] }} {{ $student['name'] }}</li>
        @endforeach
    </ol>

    <ol>
        @forelse($empty as $el)
            <li>{{ $el }}</li>
        @empty
            <p>В массиве нет элементов</p>
        @endforelse
    </ol>

    @for($i = 1; $i < 10; $i++)
        Денис лох
    @endfor

    @php
        echo 'Привет';
    @endphp


    <table border="1">
        <caption>Таблица пользователей</caption>
        @foreach($users as $user)
            <tr>
                <td>
                    {{ $user['surname'] }}
                    {{ $user['name'] }}
                    @if($user['banned'] == true)
                        <span style="color: green">Активен</span>
                    @endif
                    @if($user['banned'] == false)
                        <span style="color: red">Забанен</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    @foreach($mas as $el)
        <label>
            <input value="{{ $el }}">
        </label>
    @endforeach

    <select size="3" multiple name="">
        @foreach($mas as $el)
            <option>{{ $el }}</option>
        @endforeach
    </select>
</x-bububu>



<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
<h1>У вас новый заказ</h1>
<p>Имя: {{htmlspecialchars((string) $name) }}</p>
<p>Телефон: {{htmlspecialchars((string) $number) }}</p>
<p>Комментарий к заказу: {{htmlspecialchars((string) $comment) }}</p>
<br>
<table class="table-order-mail">
    <h3>Заказ:</h3>
    <tbody>
    <tr>
        <td><h3>Название</h3></td>
        <td><h3>Количество</h3></td>
        <td><h3>Цена</h3></td>
    </tr>
    <? $total = 0; ?>
    @foreach($orders as $order)
        @foreach($order as $item)
            <tr>
                <td style="border: 1px solid #000; padding:10px"><p>{{$item->title}}</p></td>
                <td style="border: 1px solid #000; padding:10px"><p>{{$item->quantity}}</p></td>
                <td style="border: 1px solid #000; padding:10px">{{$item->price}}тг.</td>
            </tr>
            <? $total = $total + $item->price * $item->quantity; ?>
        @endforeach
    @endforeach
    </tbody>
    <h3>Общая цена: {{$total}}</h3>
</table>
</body>
</html>

@component('mail::message')
# Новый заказ с сайта

Поступил заказ с сайта СеверСтрой.

@component('mail::table')
| Поле | Значение |
|------|----------|
| Товар | {{ $details['product'] }} |
| Количество | {{ $details['quantity'] }} {{ $details['unit'] === 'ton' ? 'тонн' : 'м³' }} |
| Стоимость материалов | {{ $details['total_price'] }} |
| ФИО | {{ $details['name'] }} |
| Телефон | {{ $details['phone'] }} |
| Email | {{ $details['email'] }} |
| Адрес доставки | {{ $details['address'] ?? 'Не указан' }} |
| Комментарий | {{ $details['comment'] ?? 'Нет' }} |
| Время заявки | {{ $details['time'] }} |
@endcomponent

@endcomponent

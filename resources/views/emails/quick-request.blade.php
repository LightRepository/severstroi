@component('mail::message')
# Новая быстрая заявка

Поступила заявка с сайта СеверСтрой.

@component('mail::table')
| Поле | Значение |
|------|----------|
| Имя | {{ $details['name'] }} |
| Телефон | {{ $details['phone'] }} |
| Материал | {{ $details['material'] ?? 'Не указан' }} |
| Количество (тонн) | {{ $details['tons'] ?? 'Не указано' }} |
| Адрес доставки | {{ $details['address'] ?? 'Не указан' }} |
| Время заявки | {{ $details['time'] }} |
@endcomponent

@endcomponent
